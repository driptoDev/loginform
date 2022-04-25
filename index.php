<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
        header("location:login.php");
        exit;
}
?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Redirect after login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h1>Redirect page</h1>

<div class="content">
  <p>Thanks for logging in ! <a href="logout.php">Click here</a> to logo out</p> <!--Logout button (using href), you can use also a button-->
</div>

</body>
</html>