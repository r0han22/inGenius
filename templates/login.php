<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('greyback.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Mind and Self by Horus</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="{{ url_for('static',filename='css/login.css') }}">
</head>
<body>
  <nav class="#82b1ff blue accent-1" role="navigation">
    <div class="left"><a id="logo-container" href="#" class="brand-logo">Team Iris</a>    
    </div>
  </nav>
  <div class="row center">
  
    <!--div class="loginbox"-->
    <br>
    <br>
        <div class="container">
        <form action="login.php" method ="POST" >
        <h1>Login: </h1>
            <p>Email</p>
            <input type="text" id="user_id" name="user_id" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" id="user_pass" name="user_pass" placeholder="Enter Password">
            <span class="psw">Forgot <a href="#">password?</a></span>
            <!--<form action="welcome_page.html" method="get" target="_blank">-->
        </form>
        <div class="row center">
          <br>
        <a href="{{ url_for('hpqform') }}" id="download-button" class="btn-large waves-effect waves-light #1976d2 blue darken-2">Login</a>
      </div>
  </div>
</div>
</body>
</html>




























  <!--  Scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  	<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
  	<script src="js/app.js"></script>

  </body>
</html>
