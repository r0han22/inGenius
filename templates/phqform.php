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
  <title>Mind and Self by Horus</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ url_for('static',filename='css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ url_for('static',filename='css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="#82b1ff blue accent-1" role="navigation">
    <div class="left"><a id="logo-container" href="#" class="brand-logo">Team Horus</a>    
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h5 class="header center grey-text">Trouble falling or staying asleep, or sleeping too much</h5>
      <div class="input-field col s12">
      <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Not at all</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Several days</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>More than half the days</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" disabled="disabled" />
        <span>Nearly every day</span>
      </label>
    </p>
  </form>
        </div>
     
        
  
        <div class="section no-pad-bot" id="index-banner">
    
      <br><br>
      <h5 class="header center grey-text">Poor appetite or overeating</h5>
      <div class="input-field col s12">
      <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Not at all</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Several days</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>More than half the days</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" disabled="disabled" />
        <span>Nearly every day</span>
      </label>
    </p>
  </form>
        
        
        
   
  <div class="section no-pad-bot" id="index-banner">
    
      <br><br>
      <h5 class="header center grey-text">Trouble concentrating on things, such as reading the newspaper or watching television</h5>
      <div class="input-field col s12">
      <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Not at all</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Several days</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>More than half the days</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" disabled="disabled" />
        <span>Nearly every day</span>
      </label>
    </p>
  </form>
       
        
   
  <div class="section no-pad-bot" id="index-banner">
    
      <br><br>
      <h5 class="header center grey-text">Feeling tired or having little energy</h5>
      <div class="input-field col s12">
      <form action="#">
    <p>
      <label>
        <input name="group1" type="radio" checked />
        <span>Not at all</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" />
        <span>Several days</span>
      </label>
    </p>
    <p>
      <label>
        <input class="with-gap" name="group1" type="radio"  />
        <span>More than half the days</span>
      </label>
    </p>
    <p>
      <label>
        <input name="group1" type="radio" disabled="disabled" />
        <span>Nearly every day</span>
      </label>
    </p>
  </form>
          
     
	<div id="controls">
      <div class="row center">

      </div>

	</div>
      <br><br>
      <br><br>
      <br><br>
      <br><br>


      <div class="row center">
        <a href="{{ url_for('testpage') }}"  class="btn-large waves-effect waves-light #1976d2 blue darken-2">Next</a>
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
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio:</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>

       
      </div>
    </div>
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