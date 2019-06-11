<?php
 //we always needs to start session on each pages
 session_start();
  unset($_SESSION['username']); 
  header('location:startPage.php');

