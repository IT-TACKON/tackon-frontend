<?php
session_start();
if(isset($_SESSION['status'])){
   if($_SESSION['status']!="success"){
      header("location:login");
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
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/all.css">
      <link rel="stylesheet" href="css/avatar.css">
      <!-- Google Icons -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
   </head>
   <body>
      <!-- Nav -->
      <div class="container  ">
         <nav class="navbar fixed-top navbar-light text-left  bg-info" style="padding: 0px;">
            
            <div class="text-light h4" style="margin: 0px;">
               <button type="button" class="btn btn-lg btn-light text-info " style="border-radius: 0px 12px 12px 0px;" >
               <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="38px" height="38px" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                  viewBox="0 0 279.24 279.24"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                  <defs>
                  <style type="text/css">
                  <![CDATA[
                  .fil0 {fill:#17a2b8}
                  ]]>
                  </style>
                  </defs>
                  <g id="Layer_x0020_1">
                     <metadata id="CorelCorpID_0Corel-Layer"/>
                     <rect class="fil0" y="61.95" width="279.25" height="31.45" rx="9.48" ry="6.29"/>
                     <rect class="fil0" transform="matrix(1.7895E-14 -1.01835 0.675677 2.69705E-14 70.1253 279.245)" width="274.21" height="46.54" rx="9.31" ry="9.31"/>
                     <rect class="fil0" transform="matrix(2.45702E-14 -0.447176 0.927718 1.18433E-14 120.755 236.477)" width="274.21" height="46.54" rx="13.56" ry="13.56"/>
                     <rect class="fil0" x="120.75" y="113.86" width="136.87" height="43.18" rx="6.77" ry="12.58"/>
                     <rect class="fil0" transform="matrix(2.45702E-14 -0.447176 0.927718 1.18433E-14 214.448 236.477)" width="274.21" height="46.54" rx="13.56" ry="13.56"/>
                  </g>
               </svg>
               </button>
               Tackon
            </div>
         </nav></div>
         <!-- Begin page content -->
         <div class="container-fluid py-2">
            <!-- Home page -->
            <div id="page-home" class="active">
               <div class="card my-1">
                  <div class="card-header bg-info text-white text-nowrap" >
                     <b> @habz_tack</b> <span class="text-nowrap text-opacity-50 "> · 7-12-2021 12:12</span>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Special title treatment</h5>
                     <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                     <a href="#" class="btn btn-info">12 <i class="fas fa-sort-amount-up"></i></a>
                     <a href="#" class="btn btn-info">5 <i class="fas fa-comment-dots"></i></a>
                  </div>
               </div>
               
            </div>
            <!-- Feed page -->
            <div id="page-feed" class="inactive mt-5">
               <h2 class="mt-5">Search</h2>
               <div class="block mt-3">
                  <div class="input-group mb-3">
                     <input type="text" class="form-control form-control-lg" placeholder="Search post here..." aria-label="Example text with button addon" aria-describedby="button-addon1">
                     <button class="btn searchs text-white" type="button" id="button-addon1">ㅤ<i class="fas fa-search fa-lg"></i>ㅤ</button>
                  </div>
               </div>
               
            </div>
            
            <!-- Account page -->
            <div id="page-account" class="inactive">
               <div class="block mt-4">
                  <div class="col text-center">
                     <div class="avatar avatar-xl">
                        <span class="avatar-text  avatar-text-info rounded-circle">
                           <span class="initial-wrap">
                              <span>UU</span>
                           </span>
                        </span>
                     </div>
                     <h3>Uvuvuevve</h3>
                     <table class="table mt-4">
                        <tbody>
                           <tr>
                              <th scope="row">Username</th>
                              <td>Uvuvuevve Unyetuevve</td>
                           </tr>
                           <tr>
                              <th scope="row">E-mail</th>
                              <td>uvuvuevve@vueve.mail.com</td>
                           </tr>
                        </tbody>
                     </table>
                     <p><a class="btn btn-info mt-2" href="#"><i class="fas fa-edit fa-lg"></i> Edit</a></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Bottom Nav Bar -->
         <footer class="footer pb-1">
            <div class="container mt-1">
               <div class="row  pl-3 pr-3">
                  <div class="col " id="buttonGroup">
                     <button id="home" type="button" class="btn btn-lg btn-block btn-info py-2 button-active" >
                     <i class="fas fa-home fa-lg"></i>
                     </button>
                  </div>
                  <div class="col">
                     <button id="feed" type="button" class="btn btn-lg btn-block btn-info py-2 button-inactive" >
                     <i class="fas fa-search fa-lg"></i>
                     </button>
                  </div>
                  <div class="col">
                     <button id="account" type="button" class="btn btn-lg btn-block btn-info py-2 button-inactive" >
                     <i class="fas fa-user fa-lg"></i>
                     </button>
                  </div>
               </div>
            </div>
         </footer>
         <!-- Bootstrap core JavaScript -->
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
         <!-- JS needed for this page -->
         <script src="js/main.js"></script>
         <script defer src="js/all.js"></script>
      </body>
   </html>
   <style type="text/css">
   .btn-info, .form-control-lg{
   border-radius: 10px;
   }
   .searchs {
   border-radius: 0px 10px 10px 0px !important;
   background-color: #17a2b8!important;
   }
   .col{
   padding-right: 4px;
   padding-left: 4px;
   }
   .footer {
   box-shadow: 0 0px 0px rgb(0 0 0 / 20%);
   background-color: #fFF;
   }
   .navbar {
   border-top: 1px solid transparent;
   box-shadow: 0 1px 5px rgb(0 0 0 / 20%);
   }
   .card-header {
   border-radius: 10px 10px 0px 0px !important;
   padding: .30rem .70rem;
   margin-bottom: 0;
   background-color: rgba(0,0,0,.03);
   border-bottom: 1px solid rgba(0,0,0,.125);
   }
   .card{
   border-radius: 12px !important;
   border: 2px solid #17a2b8!important;
   }
   .card-body {
   padding:  1rem;
   }
   </style>