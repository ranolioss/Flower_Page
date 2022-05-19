<?php

require_once'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>RegisterPage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Index.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .fa {
      padding: 10px;
    font-size:48px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;

  }
  .fa-phone {
    background:rgb(146, 92, 113);;
    color: white;
  }
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  
  .fa-twitter {
    background: #55ACEE;
    color: white;
    
  }
  .fa-instagram {
    background: #125688;
    color: white;
  }
  .fa-google {
    background: #dd4b39;
    color: white;
    
  }
  
</style>
</head>
  <body >
  <?php include 'header.php' ?>
    

      <div class="image"style="background-image: url(bb.jpeg);">
      <p style="font-size:40px">Contact us:</p>
      <i class="fa fa-phone" >245654666</i>
<br>
<a href="#" class="fa fa-google">Ranolios&gmail.com</a>
<br>
<a href="#" class="fa fa-facebook" >@RanoliosFlowers</a>
<br>
<a href="#" class="fa fa-twitter" >@RanoliosFlowers</a>
<br>
<a href="#" class="fa fa-instagram">@RanoliosFlowers</a>
      </div>
    </body>
    </html>