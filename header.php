<?php
//starting the session
session_start();
//including the database connection file
include_once("classes/Crud.php");

?>
<!DOCTYPE html>
<!-- saved from url=(0027)https://arawa-sys.com/login -->
<html lang="en"><head ><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" style="background:#36597d;">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="Cg0eT2Rn69FgaziqCs1Y9X2XMjAlFF7aA62jR4Ap">

    <title>
        WIDEMA
    </title>
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="./public/app.css" rel="stylesheet">
    <link href="./public/sweetalert.css" rel="stylesheet">
    <script src="./public/jquery.min.js"></script>
    <script src="./public/jquery.datetimepicker.js"></script>
  <!--  <link rel="stylesheet" type="text/css" href="style.css">  -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="">

</head>
<body style="background:orange;">
<div id="app">
  <nav class="navbar navbar-default navbar-static-top" id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top"style="height:100%;">
   <div class="container-fluid"> 
        <div class=" navbar-header page-scroll">

             <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>Menu <i class="fa fa-bars"></i>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand page-scroll"  href="index.php">Home</a>

         
        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background:#36597d;">
                <ul class="nav navbar-nav navbar-right" >
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                        <li>
                          <a class="page-scroll" href="login.php">login</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
       
        <!-- /.container-fluid -->
    </nav>

        </div>   
        <?php if(isset($_SESSION['user']) || isset($_SESSION['admin']) || isset($_SESSION['author'])) : ?>
                   
                    <?php endif; ?>
                </nav>
            </div>
        </body>
        </html>


           
        
  


