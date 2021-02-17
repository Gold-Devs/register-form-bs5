<?php
/* This file contains defined variables
It is not to be opened directly
in a browser
*/
$rt= 'Signup';
$h = <<< Eopagea
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | OpenSrc Forum</title>
        <link rel="stylesheet" type="text/css" href="style.css" />

<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo"></a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
Eopagea;

$rghd = <<< Eopageb

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register | OpenSrc Forum</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="stylesheet" type="text/css" href="" /> 
    </head>
Eopageb;

$bl = <<< Eopagec
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.79.0">
        <title>Signin · OpenSrc Forum</title>



        <!-- Bootstrap core CSS -->
        <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        </style>


        <!-- Custom styles for this template -->
        <link href="assets/dist/css/signin.css" rel="stylesheet">
    </head>

    <body class="text-center" background="assets/img/bg.jpg">

        <main class="form-signin">
            <form action="login.php" method="post">
                <img class="mb-4" src="assets/brand/logo.svg" alt="" width="200" height="200">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <!--<label for="inputEmail" class="visually-hidden">Email address</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
                    required autofocus>-->
                <!-- <label for="inputEmail" class="visually-hidden">Email address</label>
      <input type="username" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus> -->
                <label for="username" class="visually-hidden">Username</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="username" class="form-control" id="username" name="username" placeholder="Username" required>
                    <div class="invalid-feedback">
                        Your username is required.
                    </div>
                </div>
                <label for="inputPassword" class="visually-hidden">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                    required autofocus>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2020-2021 <a href="//opensc.cf">OpenSrc</a></p>
            </form>
        </main>



    </body>

</html>

Eopagec;

$err = <<< Eopaged
<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
    opacity: 1;
    transition: opacity 0.6s;
    margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>

<div class="alert">
  <span class="closebtn">&times;</span>  
  <strong>Error:</strong> Loading
</div>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>
Eopaged;

$nav = <<< Eopagee
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | OpenSrc Forum</title>
        <link rel="stylesheet" type="text/css" href="style.css" />

<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo"><img class="mb-4" src="assets/brand/logo.svg" alt="" width="72" height="57"></a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>
Eopagee;

$styles = <<< Eopagef
<!--<link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
   <!-- <link rel="stylesheet" href="assets/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dist/css/bootstrap-utilities.min.css">-->
    <!--<link rel="stylesheet" href="assets/dist/css/signin.css">-->
Eopagef;
?>
