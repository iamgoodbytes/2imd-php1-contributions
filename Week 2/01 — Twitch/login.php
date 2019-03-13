<?php
//make function to validate user
  function canLogIn($username, $password){
    if( $username != "Rossi" || $password != "letsgo"){
      //wrong
      return false;
    }else{
      //true
      return true;
    }
  }
//get input of form
  if( !empty( $_POST ) ){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if( canLogIn($username, $password) ){
      //succes

      session_start();
      $_SESSION['User'] = true;
      $_SESSION['Username'] = $username;
      header("Location: index.php");

    }else{
      //failed
      $error = true;
    }
  }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Log in - Twitch</title>
</head>
<body>
<header class="hidden">
  <nav class="nav">
    <a href="#">Browse</a>
    <a href="#">Get desktop</a>
    <a href="#">Try prime</a>
    <a href="#" class="loggedIn">
      <div class="user--avatar"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387" alt=""></div>
      <h3 class="user--name">Username here</h3>
      <span class="user--status">Watching dakotaz</span>
    </a>
    <a href="logout">Log out?</a>
  </nav>    
</header>

<div id="app">
    <h1>Log in to Twitch</h1>
    <nav class="nav--login">
        <a href="#" id="tabLogin">Log in</a>
        <a href="#" id="tabSignIn">Sign up</a>
    </nav>

  <?php if( isset($error) ) : //show error on incorrect validation ?>
    <div class="alert">That password was incorrect. Please try again</div>
  <?php endif; ?>

  <div class="form form--login">
    <form action="" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="username">
    
      <label for="password">Password</label>
      <input type="password" id="password" name="password">

      <input type="submit" class="btn" id="btnSubmit" value="Log In">
    </form>
  </div>
  <!--
  <div class="form form--signup hidden">
    <label for="username2">Username</label>
    <input type="text" id="username2">
  
    <label for="password2">Password</label>
    <input type="password" id="password2">
    
    <label for="email">Email</label>
    <input type="text" id="email">
  </div>
  -->
  
</div>
</body>
</html>