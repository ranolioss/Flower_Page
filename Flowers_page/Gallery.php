<?php

require_once'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Index.css" />
    <title>RanaTajiki</title>
    <style>
          .main{
    display: inline-block;
     position: relative; 
    width: 400px;
    cursor: pointer;
}
.img{
    padding-top: 15px; 
    width: 400px;
    height: 300px;
}
.text {
    position: absolute;
     bottom: 0; 
    background-color: rgba(255, 255, 255, 0.5);
    color: #3f0303;
    opacity: 0; 
    font-size: 25px;
 
}

.main:hover .text {
    opacity: 2;
}
    </style>
  </head>
  <body style="background-image: url(bb.jpeg);  background-size: cover;">
    <?php include 'header.php' ?>

    <div class="main">
        <img src="ross.jpg"  class="img"/>
        <div class="text">bunch rosepink</div>
         
    </div>
    <div class="main">
        <img src="sunn.jpg"  class="img"/>
        <div class="text">bunch sunflowers</div>
    </div>
    <div class="main">
        <img src="tulip.jpg"  class="img"/>
        <div class="text">bunch tulips</div>
    </div>

</body>
</html>