import numpy as np
from flask import Flask, request, jsonify, render_template
import pickle

app = Flask(__name__)
#model = pickle.load(open('model.pkl', 'rb'))

@app.route('/')
def index():
    return render_template('index.php')

@app.route('/login')
def login():
    return render_template('login.php')

@app.route('/testpage')
def testpage():
    return render_template('testpage.php')

@app.route('/analyse')
def analyse():
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
	    ['10 Aug',  4.0],
        ['7 Aug',  4.2],
        ['8 Aug',  4.0],
        ['9 Aug',  3.7],
        ['10 Aug',  4.0],
        ['11 Aug',  4.4],
        ['12 Aug',  3.7],
        ['13 Aug',  4.1],
        ['14 Aug',  4.3]
        
        ]
    #print("everything present")
    f=[]
    '''
    train = pd.read_csv(".//csv files//training_dataset1.csv", engine='python')
    y=train['iscase'].values
    X=train.drop(labels=['iscase'],axis =1)
    X_train,X_test,y_train,y_test = train_test_split(X,y,random_state=42)
    #models = [('LR',make_pipeline(StandardScaler(),LogisticRegression())),
    #    ('RF',make_pipeline(StandardScaler(),RandomForestClassifier()))
    #]
    models = [('RF',make_pipeline(StandardScaler(),RandomForestRegressor()))]
    for name,model in models:
        print(name)
        model.fit(X_train,y_train)
        print("training score",model.score(X_train,y_train))
        print("test score",model.score(X_test,y_test))
        print()
    '''    
    x, fs = librosa.load(".//audio.wav")
    #print(x)
    mfc=librosa.feature.mfcc(x,fs,n_mfcc=13)
    #print(mfcc.shape)
    zcr=librosa.feature.zero_crossing_rate(x)
    #print(zcr.shape)
    chrom=librosa.feature.chroma_stft(x,fs)
    #print(chrom.shape)
    #mean=numpy.mean(mfc[0])
    #print(mean)
    f.append(max(mfc[0]))
    f.append(min(mfc[0]))
    f.append(numpy.std(mfc[0]))
    f.append(numpy.mean(mfc[0]))

    f.append(max(mfc[1]))
    f.append(min(mfc[1]))
    f.append(numpy.std(mfc[1]))
    f.append(numpy.mean(mfc[1]))

    f.append(max(mfc[2]))
    f.append(min(mfc[2]))
    f.append(numpy.std(mfc[2]))
    f.append(numpy.mean(mfc[2]))

    f.append(max(mfc[3]))
    f.append(min(mfc[3]))
    f.append(numpy.std(mfc[3]))
    f.append(numpy.mean(mfc[3]))

    f.append(max(mfc[4]))
    f.append(min(mfc[4]))
    f.append(numpy.std(mfc[4]))
    f.append(numpy.mean(mfc[4]))

    f.append(max(mfc[5]))
    f.append(min(mfc[5]))
    f.append(numpy.std(mfc[5]))
    f.append(numpy.mean(mfc[5]))

    f.append(max(mfc[6]))
    f.append(min(mfc[6]))
    f.append(numpy.std(mfc[6]))
    f.append(numpy.mean(mfc[6]))

    f.append(max(mfc[7]))
    f.append(min(mfc[7]))
    f.append(numpy.std(mfc[7]))
    f.append(numpy.mean(mfc[7]))

    f.append(max(mfc[8]))
    f.append(min(mfc[8]))
    f.append(numpy.std(mfc[8]))
    f.append(numpy.mean(mfc[8]))

    f.append(max(mfc[9]))
    f.append(min(mfc[9]))
    f.append(numpy.std(mfc[9]))
    f.append(numpy.mean(mfc[9]))

    f.append(max(mfc[10]))
    f.append(min(mfc[10]))
    f.append(numpy.std(mfc[10]))
    f.append(numpy.mean(mfc[10]))

    f.append(max(mfc[11]))
    f.append(min(mfc[11]))
    f.append(numpy.std(mfc[11]))
    f.append(numpy.mean(mfc[11]))

    f.append(max(mfc[12]))
    f.append(min(mfc[12]))
    f.append(numpy.std(mfc[12]))
    f.append(numpy.mean(mfc[12]))

    f.append(numpy.std(zcr))
    f.append(numpy.mean(zcr))

    f.append(max(chrom[0]))
    f.append(min(chrom[0]))
    f.append(numpy.std(chrom[0]))
    f.append(numpy.mean(chrom[0]))

    f.append(max(chrom[1]))
    f.append(min(chrom[1]))
    f.append(numpy.std(chrom[1]))
    f.append(numpy.mean(chrom[1]))

    f.append(max(chrom[2]))
    f.append(min(chrom[2]))
    f.append(numpy.std(chrom[2]))
    f.append(numpy.mean(chrom[2]))

    f.append(max(chrom[3]))
    f.append(min(chrom[3]))
    f.append(numpy.std(chrom[3]))
    f.append(numpy.mean(chrom[3]))

    f.append(max(chrom[4]))
    f.append(min(chrom[4]))
    f.append(numpy.std(chrom[4]))
    f.append(numpy.mean(chrom[4]))

    f.append(max(chrom[5]))
    f.append(min(chrom[5]))
    f.append(numpy.std(chrom[5]))
    f.append(numpy.mean(chrom[5]))

    f.append(max(chrom[6]))
    f.append(min(chrom[6]))
    f.append(numpy.std(chrom[6]))
    f.append(numpy.mean(chrom[6]))

    f.append(max(chrom[7]))
    f.append(min(chrom[7]))
    f.append(numpy.std(chrom[7]))
    f.append(numpy.mean(chrom[7]))

    f.append(max(chrom[8]))
    f.append(min(chrom[8]))
    f.append(numpy.std(chrom[8]))

    f.append(max(chrom[11]))
    f.append(min(chrom[11]))
    f.append(numpy.std(chrom[11]))
    f.append(numpy.mean(chrom[11]))

    #print(len(f))
    g=numpy.array(f)
    #print(type(g))
    g=g.reshape(1, -1)
    model = pickle.load(open('model.pkl','rb'))
    pred=float(model.predict(g))
    print(pred)
    if (pred>0.5):
        print("Test case seems has signs of depression.")
        test=pred*10
    else:
        print("Test case has no signs of depression")
        test=pred*10
    return render_template('analyse.php',prediction_graph=test)

@app.route('/records/')
def records():

    import sounddevice as sd
    from scipy.io.wavfile import write
    import os
 
 
    fs = 44100  # this is the frequency sampling; also: 4999, 64000
    seconds = 5  # Duration of recording
 
    myrecording = sd.rec(int(seconds * fs), samplerate=fs, channels=2)
    print("Starting: Speak now!")
    sd.wait()  # Wait until recording is finished
    print("finished")
    write('audio.wav', fs, myrecording)  # Save as WAV file
    #os.startfile("output.wav")
    return render_template('testpage.php')

    




if __name__ == "__main__":
    app.run(debug=True)
