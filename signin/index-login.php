<?php 
session_start();
if(isset($_SESSION['status'])){
   if($_SESSION['status']=="success"){
      header("location:../");
   }
}
if(isset($_GET['m'])){
if($_GET['m']=="reg"){
$pesan = "<p class='mb-3 text-info'>Sign up success, please Sign in</p>"; 
}else if($_GET['m']=="er-pass"){
$pesan = "<p class='mb-3 text-danger'>Sign up failed, try again</p>"; 
}else if($_GET['m']=="er-mail"){
$pesan = "<p class='mb-3 text-danger'>Sign up failed, e-mail already used</p>"; 
}if($_GET['m']=="signout"){
$pesan = "<p class='mb-3 text-info'>Sign out complete, see u again :)</p>"; 
}
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Template for the new android layout">
      <meta name="author" content="Andrew Henry">
      <link rel="icon" href="#">
      <title>Tackon</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   </head>
   <body class="text-center">
      <form class="form-signin" action="auth/" method="POST">
         <img class="mb-4" src="../css/Tackon.svg" alt="" width="72" height="72" >
         <h1 class="h4 mb-3 font-weight-normal">Sign in</h1>
         <?php if(isset($pesan)){echo $pesan;} ?>
         <label for="inputEmail" class="sr-only">Email address</label>
         <input type="email" id="inputEmail" name="e-mail" class="form-control" placeholder="Email address" required >
         <label for="inputPassword" class="sr-only">Password</label>
         <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
         
         <button class="btn btn-lg btn-info btn-block mt-3" type="submit">Sign in</button>
         <p class="mt-2 mb-1">Don’t have an account? <a href="../signup/" class="ext-decoration-none text-info">Sign up</a>
         <p class="mt-5 mb-3 text-muted">&copy; 2021</p>

      </form>
   </body>
</html>
<style type="text/css">
html,
body {
height: 100%;
}
body {
display: -ms-flexbox;
display: -webkit-box;
display: flex;
-ms-flex-align: center;
-ms-flex-pack: center;
-webkit-box-align: center;
align-items: center;
-webkit-box-pack: center;
justify-content: center;
padding-top: 40px;
padding-bottom: 40px;
}
.btn{
   border-radius: 20px;
}
.form-signin {
width: 100%;
max-width: 330px;
padding: 15px;
margin: 0 auto;
}
.form-signin .checkbox {
font-weight: 400;
}
.form-signin .form-control {
position: relative;
box-sizing: border-box;
height: auto;
padding: 10px;
font-size: 16px;
}
.form-signin .form-control:focus {
z-index: 2;
}
.form-signin input[type="email"] {
margin-bottom: -1px;
border-bottom-right-radius: 0;
border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
margin-bottom: 10px;
border-top-left-radius: 0;
border-top-right-radius: 0;
}
</style>