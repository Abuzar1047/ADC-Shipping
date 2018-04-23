<?php
require "config.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include_once "Connection.php";
    $conn = new Connection();
    $conn = $conn->getConnection();
    $q= "UPDATE history SET Date='".$_REQUEST['date']."',Time='".$_REQUEST['time']."',Location='".$_REQUEST['location']."',Status='".$_REQUEST['status']."',Remarks= '".$_REQUEST['remarks']."' WHERE Id = ".$_REQUEST['id'];
    $stmt = $conn->prepare($q);
    $stmt->execute();
    header("Location:../history.php?sid=".$_REQUEST['sid']);
}