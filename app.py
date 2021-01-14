import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle
import tensorflow
import keras
from keras.models import Sequential
from keras.layers import Dense, Dropout, Conv2D, MaxPool2D
from keras.utils import np_utils
from keras.layers import MaxPooling2D
from keras.layers import Flatten
from keras.layers import Dense
from keras.models import load_model
import librosa
import matplotlib.pyplot as plt
import numpy as np
from keras.preprocessing import image
classifier = load_model('my_model.h5')
app = Flask(__name__)
#model = pickle.load(open('model.pkl', 'rb'))

#@app.route('/')
#def index():
#    return render_template('index.php')

@app.route('/')
def login():
    return render_template('login.php')

@app.route('/testpage')
def testpage():
    return render_template('testpage.php')

@app.route('/hpqtp')
def hpqtp():
    return render_template('hpqtp.php')

@app.route('/phqform')
def phqform():
    return render_template('phqform.php')

@app.route('/hpqform')
def hpqform():
    return render_template('hpqform.php')

@app.route('/analyse')
def analyse():
    
    import pickle
    from sklearn import datasets
    from sklearn.model_selection import train_test_split, cross_val_score
    import numpy 
    import librosa
    import pandas as pd
    import matplotlib.pyplot as plt
    from sklearn.linear_model import LinearRegression,LogisticRegression
    from sklearn.preprocessing import StandardScaler,MaxAbsScaler
    from sklearn.pipeline import make_pipeline
    from sklearn.ensemble import RandomForestClassifier,RandomForestRegressor,GradientBoostingClassifier,GradientBoostingRegressor
    output=[
        ['Date', 'Depression Score'],
	    ['',  4.0],
        ['24 Oct',  4.2],
        ['25 Oct',  4.0],
        ['26 Oct',  3.7],
        ['27 Oct',  4.0],
        ['28 Oct',  4.4],
        ['29 Oct',  3.7],
        ['30 Oct',  4.1],
        ]
    #print("everything present")
    f=[]
    fig, ax = plt.subplots()
    x, sr = librosa.load(r".\output.wav")
    plt.specgram(x,Fs=sr)
    fig.savefig(r'.\56.png')
    test_image = image.load_img(r'.\56.png', target_size=(64, 64))
    test_image = image.img_to_array(test_image)
    test_image = np.expand_dims(test_image, axis = 0)
    result = classifier.predict(test_image)
    #training_set.class_indices
    if result[0][0] == 1: 
        prediction = 'no'
    else:
        prediction = 'yes'
    #print(prediction)
    if (prediction=='yes'):
        print("Test case seems has signs of depression.")
        output=output.append([['31 Oct', 4.0]])
        test=4.0
    else:
        print("Test case has no signs of depression")
        output=output.append([['31 Oct', 0]])
        test=0
    return render_template('analyse.php',prediction_graph=test)

@app.route('/twitter')
def twitter():
    return render_template('twitter.php')

"""def twitter():
    from tweepy import API 
    from tweepy import Cursor
    from tweepy.streaming import StreamListener
    from tweepy import OAuthHandler
    from tweepy import Stream

    from textblob import TextBlob

    #import twitter_credentials

    import matplotlib.pyplot as plt
    import numpy as np
    import pandas as pd
    import re


    # # # # TWITTER CLIENT # # # #
    class TwitterClient():
        def __init__(self, twitter_user=None):
            self.auth = TwitterAuthenticator().authenticate_twitter_app()
            self.twitter_client = API(self.auth)

            self.twitter_user = twitter_user

        def get_twitter_client_api(self):
            return self.twitter_client

        def get_user_timeline_tweets(self, num_tweets):
            tweets = []
            for tweet in Cursor(self.twitter_client.user_timeline, id=self.twitter_user).items(num_tweets):
                tweets.append(tweet)
            return tweets

        def get_friend_list(self, num_friends):
            friend_list = []
            for friend in Cursor(self.twitter_client.friends, id=self.twitter_user).items(num_friends):
                friend_list.append(friend)
            return friend_list

        def get_home_timeline_tweets(self, num_tweets):
            home_timeline_tweets = []
            for tweet in Cursor(self.twitter_client.home_timeline, id=self.twitter_user).items(num_tweets):
                home_timeline_tweets.append(tweet)
            return home_timeline_tweets


    # # # # TWITTER AUTHENTICATER # # # #
    class TwitterAuthenticator():

        def authenticate_twitter_app(self):
            auth = OAuthHandler('WqN6GHEKBySyPU2GNejqAotOa', 'CAM03aNnXPl2k39GeIhSRXM7tFBZFys7AK3DtPj6glMHcP19hF')
            auth.set_access_token('1225109511637065728-zhzSKb1t5Dy3dD7pOlSn2amwGqTqrP', '6qbrhWhcS4Fhbmpvjs8ljZ74EB3SXbeoVbcVsZU2X33jm')
            return auth

    # # # # TWITTER STREAMER # # # #
    class TwitterStreamer():
        def __init__(self):
            self.twitter_autenticator = TwitterAuthenticator()    

        def stream_tweets(self, fetched_tweets_filename, hash_tag_list):
            # This handles Twitter authetification and the connection to Twitter Streaming API
            listener = TwitterListener(fetched_tweets_filename)
            auth = self.twitter_autenticator.authenticate_twitter_app() 
            stream = Stream(auth, listener)

            # This line filter Twitter Streams to capture data by the keywords: 
            stream.filter(track=hash_tag_list)


    # # # # TWITTER STREAM LISTENER # # # #
    class TwitterListener(StreamListener):
        def __init__(self, fetched_tweets_filename):
            self.fetched_tweets_filename = fetched_tweets_filename

        def on_data(self, data):
            try:
                print(data)
                with open(self.fetched_tweets_filename, 'a') as tf:
                    tf.write(data)
                return True
            except BaseException as e:
                print("Error on_data %s" % str(e))
            return True
                
        def on_error(self, status):
            if status == 420:
                # Returning False on_data method in case rate limit occurs.
                return False
            print(status)


    class TweetAnalyzer():

        def clean_tweet(self, tweet):
            return ' '.join(re.sub("(@[A-Za-z0-9]+)|([^0-9A-Za-z \t])|(\w+:\/\/\S+)", " ", tweet).split())

        def analyze_sentiment(self, tweet):
            analysis = TextBlob(self.clean_tweet(tweet))

            if analysis.sentiment.polarity > 0:
                return 1
            elif analysis.sentiment.polarity == 0:
                return 0
            else:
                return -1

        def tweets_to_data_frame(self, tweets):
            df = pd.DataFrame(data=[tweet.text for tweet in tweets], columns=['tweets'])

            df['id'] = np.array([tweet.id for tweet in tweets])
            df['len'] = np.array([len(tweet.text) for tweet in tweets])
            df['date'] = np.array([tweet.created_at for tweet in tweets])
            df['source'] = np.array([tweet.source for tweet in tweets])
            df['likes'] = np.array([tweet.favorite_count for tweet in tweets])
            df['retweets'] = np.array([tweet.retweet_count for tweet in tweets])

            return df
        
    if __name__ == '__main__':

        twitter_client = TwitterClient()
        tweet_analyzer = TweetAnalyzer()

        api = twitter_client.get_twitter_client_api()

        tweets = api.user_timeline(screen_name="hate", count=10)

        df = tweet_analyzer.tweets_to_data_frame(tweets)
        df['sentiment'] = np.array([tweet_analyzer.analyze_sentiment(tweet) for tweet in df['tweets']])
        test=['']
        print(df.head(10))    
        return render_template('twitter.php',prediction_graph=test)
"""

@app.route('/records/')
def records():

    import sounddevice as sd
    from scipy.io.wavfile import write
    import os
 
 
    fs = 44100  # this is the frequency sampling; also: 4999, 64000
    seconds = 1.5  # Duration of recording
 
    myrecording = sd.rec(int(seconds * fs), samplerate=fs, channels=2)
    print("Starting: Speak now!")
    sd.wait()  # Wait until recording is finished
    print("finished")
    write('output.wav', fs, myrecording)  # Save as WAV file
    #os.startfile("output.wav")
    return render_template('testpage.php')

if __name__ == "__main__":
    app.run(debug=True)
