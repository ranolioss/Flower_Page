<?php
require_once'dbconfig.php';


if(isset($_REQUEST['email'])){

  $userId = $_REQUEST['email'];
  $sql = "DELETE from users WHERE email='". $userId . "'";
  $query = $conn->prepare($sql);
  $query->execute();
  header('location:Exit.php');
}

?>