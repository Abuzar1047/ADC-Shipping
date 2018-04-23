<?php
session_start();
if(!isset($_SESSION['u'])){
   echo "<script>window.location = './login.php'</script>";
}