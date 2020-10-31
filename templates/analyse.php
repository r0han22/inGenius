<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('fafafa.png');
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
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="#82b1ff blue accent-1" role="navigation">
    <div class="left"><a id="logo-container" href="#" class="brand-logo">Team Iris</a>    
    </div>
  </nav>




  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
        <h5 class="header col s12 light"></h5>
      </div>
	
    </div>
  </div>

  <html>
  <head>
<div class="container">
 <div class="row center">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', 'Score over days'],
	        ['18 Aug',  4.0],
          ['19 Aug',  4.2],
          ['20 Aug',  4.0],
          ['21 Aug',  3.7],
	        ['22 Aug',  4.0],
          ['23 Aug',  4.4],
          ['24 Aug',  3.7],
          ['25 Aug',  4.1],
          ['26 Aug',  {{prediction_graph}}]
	
        ]);

        var options = {
          title: 'Your Mental Health History ',
  
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
 
    </script>
</div>

  </head>
  <body>
    <div class="col s12 m6"><p>Health Status over the week:<p></div>   
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
    <div class="col s12 m6">
                <div class="card light-blue lighten-4">
                    <div class="card-content black-text">
                     <span class="card-title">Here's what you can do!</span>
                     <div class="collection">
                        <a href="https://open.spotify.com/playlist/37i9dQZF1DWTwnEm1IYyoj" class="collection-item">Listen to soft music</a>
                        <a href="https://www.skype.com/en/features/group-video-chat/" class="collection-item">Phone a friend!</a>
                        <a href="https://www.nhs.uk/conditions/stress-anxiety-depression/moodzone-mental-wellbeing-audio-guides/" class="collection-item">Listen to a doctor about different moods.</a>
                     </div>
                    </div>
                </div>
  </div>
  <div class="row center">
        <a href="{{ url_for('login') }}"  class="btn-large waves-effect waves-light #1976d2 blue darken-2">Logout</a>
  </div>
  </body>
</html>
  <div class="container">
    <div class="section">
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
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  	<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
  	<script src="js/app.js"></script>

  </body>
</html>
