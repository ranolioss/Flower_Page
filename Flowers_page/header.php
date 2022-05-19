<?php session_start() ?>
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