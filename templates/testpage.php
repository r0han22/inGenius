<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: "{{ url_for('static',filename='css/fafafa.png') }}";
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Cheer Up by Iris</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ url_for('static',filename='css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ url_for('static',filename='css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="#82b1ff blue accent-1" role="navigation">
    <div class="left"><a id="logo-container" href="#" class="brand-logo">Team Iris</a>    
    </div>
  </nav>




  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h3 class="header center grey-text">Let's test ourself!</h3>
      <div class="row center">
        <h4 class="header col s12 light">Step 1: A recording?</h4>
        <p> Our system will need your voice sample to analyse your mental health status.<br>
        So, we will need you to say the sentence <h6><strong><em>"Hey, I had a good day today."</em></strong></h6></p>
      </div>
      <div class="row center">
        <h4 class="header col s12 light">Step 2: Recording!</h4>
        <p> Allow microphone permission and record the sentence! </p>
      </div>
      <form action="{{ url_for('records')}}" class="row center">
        <button type="submit" class="btn-large waves-effect waves-light #1976d2 blue darken-2">Record</button>
      </form>
	    <a <ol id="recordingsList"></ol></a>
	</div>
      <div class="row center">
        <h4 class="header col s12 light">Step 3: Let us Analyse the recording.</h4>
      </div>
      <div class="row center">
        <a href="{{ url_for('analyse') }}" id="download-button" class="btn-large waves-effect waves-light #1976d2 blue darken-2">Analyse</a>
      </div>
      <br><br>
    </div>
  </div>




  <div class="container">
    <div class="section">

      <!--   Icon Section   -->


    </div>
    <br><br>
  </div>

  <footer class="page-footer #82b1ff blue accent-1">
    <div class="footer-copyright">
  
    </div>
 <button id="pauseButton" disabled>.</button>
 <div id="formats">.</div>
  </footer>


  <!--  Scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ url_for('static',filename='js/materialize.js') }}"></script>
  <script src="{{ url_for('static',filename='js/init.js') }}"></script>
  	<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
  	<script src="{{ url_for('static',filename='js/app.js') }}"></script>

  </body>
</html>
