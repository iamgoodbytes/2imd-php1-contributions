<?php

//start a session at the beginning of your file 
session_start();

$showError = false;
$showSuccess = false;
$message = "";

// function that checkes that  username and password are right
function canLogin($username, $password)
{
    if ($username === "Luna_Olbrechts" && $password === "IdidIt") {
        return true;
    }
    return false;
}

//check if post is not empty
if (!empty($_POST)) {
    //check if required fields are not empty
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        //check if username + pass match 
        if (canLogin($username, $password)) {
            $_SESSION["username"] = $username;
            $_SESSION["logged_in"] = true;
        } else {
            $showError = true;
            $message = "we can't log you in";
        }
    } else {
        $showError = true;
        $message = "You need to fill in username and password";
    }
}

// check if session 'logged in' exists and state is true

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
    $showSuccess = true;
    $message = "Welcome, " . $_SESSION["username"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) : ?>
            <nav class="nav">
                <a href="#">Browse</a>
                <a href="#">Get desktop</a>
                <a href="#">Try prime</a>
                <a href="#" class="loggedIn">
                    <div class="user--avatar"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=ddcb7ec744fc63472f2d9e19362aa387" alt=""></div>
                    <h3 class="user--name"><?php echo $_SESSION["username"] ?></h3>
                    <span class="user--status">Watching dakotaz</span>
                </a>
                <a href="logout.php">Log out?</a>
            </nav>
        <?php endif ?>
    </header>

    <div id="app">
        <?php if (!isset($_SESSION["logged_in"])) : ?>
            <h1>Login at twitch</h1>
            <nav class="nav--login">
                <a href="#" id="tabLogin">Login</a>
                <a href="#" id="tabSignIn">Sign up</a>
            </nav>

            <?php if (isset($showError) && $showError) : ?><div class="alert"><?php echo $message; ?></div><?php endif ?>

            <div class="form form--login">
                <form action="" method="POST">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">

                    <label for="password">Password</label>
                    <input type="password" id="Password" name="password">

            </div>

            <div class="form form--signup hidden">
                <label for="username2">Username</label>
                <input type="text" id="username2">

                <label for="password2">Password</label>
                <input type="password" id="password2">

                <label for="email">Email</label>
                <input type="text" id="email">
            </div>

            <input type="submit" value="Sign in" class="btn" id="btnSubmit">
            </form>
        <?php else : ?>
            <?php if (isset($showSuccess) && $showSuccess) : ?><div class="message"><?php echo $message; ?></div><?php endif ?>
        <?php endif ?>
    </div>

</body>

</html>