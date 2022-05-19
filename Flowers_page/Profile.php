<?php
require_once'dbconfig.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Index.css" type="text/css">
    <style>
table, th,td {
  border: 1px solid black;
  text-align: center;
  font-size:30px;
  color:rgb(66, 11, 32);
}
p{
  text-align: center;
  font-size:40px;
  color:rgb(66, 11, 32);
}
table {
  border-collapse: collapse;
  width: 50%;
  height: 100px;
  
}
.center {
  margin-right: auto;
}
</style>
</head>
<body >
  <?php include 'header.php' ?>

  <div class="image2" style="background-image: url(bb.jpeg);  background-size: cover;">
  <p>Your Information</p>
  <table class="center">
  <tr>
                            <th>firstName:</th>
                            <td>
                                    <?php echo $_SESSION["firstName"] ?>
                                </td>
                                </tr>
                                <tr>
                            <th>lastName:</th>
                            <td>
                                <?php echo $_SESSION["lastName"] ?>
                                </td>
                                </tr>
                                <tr>
                            <th>Email:</th>
                            <td>
                                <?php echo $_SESSION["email"] ?>
                                </td>
                                </tr>
                                <tr>
                            <th>Address:</th>
                            <td>
                                <?php echo $_SESSION["address"] ?>
                                </td>
     
                        </tr>
                    </table>
                    <P style=" text-align: left;  font-size:30px;">If you want Delete your account please click here <a href="update.php?email=<?php echo $_SESSION["email"] ?>">update</a></P>
              <P style=" text-align: left;  font-size:30px;">If you want Delete your account please click here <a href="Delete.php?email=<?php echo $_SESSION["email"] ?>">Delete</a></P>
          
      </div>
                  
</body>