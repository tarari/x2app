<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <link href="public/css/cover.css" rel="stylesheet">
    <title><?=$title; ?></title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="text-center">  
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Cover</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <?php 
                if (isset($_SESSION['user']['email'])){
                   echo '<a class="nav-link" href="logout">Logout</a></li>';
                   echo '<a class="nav-link" href="profile">'.$_SESSION['user']['uname'].'</a></li>';
                }
                else{
                    echo '<a class="nav-link" href="user/login">Login</a></li>';
                    echo '<a class="nav-link" href="user/register">Register</a></li>';
                }
        ?>
        <a class="nav-link" href="index/contact">Contact</a>
      </nav>
    
  </header>