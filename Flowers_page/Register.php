<?php
session_start();
require_once'dbconfig.php';
if (isset($_POST['insert'])) {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
   

    $sql = "INSERT INTO users(firstName,lastName,email,address,password) VALUES(:firstname,:lastname,:email,:address,:password)";

    $query = $conn->prepare($sql);
    $query->bindParam(':firstname', $fname, PDO::PARAM_STR);
    $query->bindParam(':lastname', $lname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
 
    $query->execute();

    $lastInsertId = $conn->lastInsertId();

    if ($lastInsertId) {
        echo "<script>window.location.href='Login.php'</script>";
    } else {
        echo "<script>alert('Error');</script>";
        echo "<script>window.location.href='Register.php'</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Index.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(bb.jpeg);  background-size: cover;">
<div class="container border p-4 mt-4" style="background-color: rgb(194, 154, 169);">
    <div class="top-menu">
        <div class="nav">
          <ul>
            <li>
              <a href="Index.php">Home</a>
            </li>
            <li>
            <a href="Gallery.php">Gallery</a>
            </li>
            <li>
              <a href="#">Shop</a>
            </li>
            <li>
                <a href="Aboutus.php">About</a>
              </li>
              <li>
              <a class="logo">Ranolios Flowers</a>
            </li>
              <li>
                <a href="Contact.php">Contact</a>
              </li>
            <li>
              <a href="Login.php">Login/<a href="Register.php">Register</a></a>
            </li>

          </ul>
        </div>
      </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="p-4" style="text-align: center;">Please Enter Your Information</h3>
                <hr />
            </div>
        </div>
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>First name</label>
                    <input type="text" class="form-control" name="firstName" >
                </div>
                <div class="form-group col-md-6">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="lastName" >
                </div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" >
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" >
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Address</label><textarea class="form-control" name="address" ></textarea>
                    </div>
            </div>
           <input type="submit" class="btn btn-success" value="Submit" name="insert" style="text-shadow:2px 2px 3px rgb(216, 67, 67); background-color: rgb(255, 2, 99);">
        </form>
    </div>
</body>

</html>