 <?php

session_start();
require_once'dbconfig.php';


if (isset($_POST['sub'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert=$conn->prepare("SELECT email,password,firstName,lastName,address FROM users WHERE email=? AND password=? ");
    $insert->bindValue(1,$email);
    $insert->bindValue(2,$password);
    $insert->execute();
$users=$insert->fetchAll(PDO::FETCH_ASSOC);
foreach($users as $user);
    if ($insert->rowCount()>=1) {
        $_SESSION['Login']=TRUE;
        $_SESSION['email']=$email;
        $_SESSION["firstName"] = $user["firstName"];
        $_SESSION["lastName"] = $user["lastName"];
        $_SESSION["address"] = $user["address"];
        print_r($_SESSION["address"]);
        $_SESSION["password"] = $user["password"];
    header('location:Profile.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Index.css">
    <style type="text/css">

    </style>
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
              <a href="">Shop</a>
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
                <h3 class="p-4" style="text-align: center;">Login To Your Account</h3>
                <hr />
            </div>
        </div>
        <form method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" >
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" >
            </div>
           <input type="submit" class="btn btn-success" value="Submit" name="sub" style="text-shadow:2px 2px 3px rgb(216, 67, 67); background-color: rgb(255, 2, 99);">
          </form>
          
    </div>
</body>
</html>


