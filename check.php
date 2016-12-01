<?php


session_start();

if(isset($_SESSION['username'])){
  
   //do nothing
  
}else{
  
  header("Location: form.php");
  exit();
}
// for every page
