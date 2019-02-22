<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            /* For Firefox */
            input[type='number'] {
                -moz-appearance:textfield;
            }
            /* Webkit browsers like Safari and Chrome */
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            body {
              margin: 0;
              font-family: "Lato", sans-serif;
            }

            .sidebar {
              margin: 0;
              padding: 0;
              width: 200px;
              background-color: #f1f1f1;
              position: fixed;
              height: 100%;
              overflow: auto;
            }

            .sidebar a {
              display: block;
              color: black;
              padding: 16px;
              text-decoration: none;
            }
             
            .sidebar a.active {
              background-color: #4CAF50;
              color: white;
            }

            .sidebar a:hover:not(.active) {
              background-color: #555;
              color: white;
            }

            div.content {
              margin-top: 15px;
              margin-left: 200px;
              margin-right: 20px;
              padding: 1px 16px;
              height: 1000px;
            }

            @media screen and (max-width: 700px) {
              .sidebar {
                width: 100%;
                height: auto;
                position: relative;
              }
              .sidebar a {float: left;}
              div.content {margin-left: 0;}
            }

            @media screen and (max-width: 400px) {
              .sidebar a {
                text-align: center;
                float: none;
              }
            }
        </style>
        <title>Pinget Day Care Center</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    </head>
    <body background="img/clouds.png">

<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~ navbar ~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Pinget Day Care Center</a> 
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item"><a class="nav-link active" href="index.php""><i class="fas fa-home"></i> Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">        
        <li>
            <a href="Logout.php"><button style="color: white; border-color:  white;" type="button" class="btn btn-outline-secondary btn-md m-2">
              <i class="fas fa-sign-out-alt"></i> Logout</button>
            </a>
        </li>                 
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button style="color: white; border-color: white; " class="btn btn-outline-success my-2 my-sm-0" type="submit">
        <i class="fas fa-search"></i> Search
      </button>
    </form>
  </div>
</nav>


<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
<!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

<!--     	<div class="container-fluid p-2"> -->