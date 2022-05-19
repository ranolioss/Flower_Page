<?php
require_once'dbconfig.php';
session_start();
        
      
if(isset($_POST['submit'])){


    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $userId = $_REQUEST['email'];
    $sql = "UPDATE users SET firstName='" .$fname. "', lastName='" .$lname. "', address='".$address."' , password='".$password."' where email='". $userId . "'";
    $query = $conn->prepare($sql);
    $query->execute();
    
   $_SESSION["firstName"] = $_POST['firstName'];
    $_SESSION["lastName"] = $_POST['lastName'];
    $_SESSION["address"] = $_POST['address'];
    $_SESSION["password"] = $_POST['password'];
    #header("Refresh:0");
    //print_r($_SESSION);
    header('location:Profile.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body style="background-image: url(bb.jpeg);  background-size: cover;">
    <div class="container border p-4 mt-4"style="background-color: rgb(194, 154, 169);">
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
                <a href="#">About</a>
              </li>
              <li>
              <a class="logo">Ranolios Flowers</a>
            </li>
              <li>
                <a href="Contact.php">Contact</a>
              </li>
              <?php if(!isset($_SESSION['Login'])){ ?>
            <li>
              <a href="Login.php">Login/<a href="Register.php">Register</a></a>
            </li>
            <?php }else{?>
              <li>
              <a href="Profile.php">MyProfile</a>
            </li>
            <li>
              <a href="Exit.php">Logout</a>
            </li>
            <?php }?>
          </ul>
        </div>
      </div>
        <div class="row">
            <div class="col-md-12">
                <h3 class="p-4" style="text-align: center;">Edit Your Information</h3>
                <hr />
            </div>
        </div>

        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>First Name</label>
                    <input name="firstName" type="text" class="form-control" value=" <?php echo $_SESSION["firstName"] ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Last Name</label>
                    <input name="lastName" type="text" class="form-control" value="<?php echo $_SESSION["lastName"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input name="email"  type="email" class="form-control" value="<?php echo $_SESSION["email"] ?>" readonly>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" value="<?php echo $_SESSION["password"] ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Address</label>
                    <textarea  name="address" class="form-control"><?php echo $_SESSION["address"] ?></textarea>
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="Submit" name="submit" style="text-shadow:2px 2px 3px rgb(216, 67, 67); background-color: rgb(255, 2, 99);">

        </form>


    </div>
</body>
</html>