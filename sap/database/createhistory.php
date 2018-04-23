<?php
require "config.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include_once "Connection.php";
    $conn = new Connection();
    $conn = $conn->getConnection();
    $q = "INSERT INTO history (Date,Time,Location,Status,Remarks,Record)".
        "VALUES ('".$_REQUEST['date']."','".$_REQUEST['time']."','".$_REQUEST['location']."','".$_REQUEST['status']."','".$_REQUEST['remarks']."',".$_REQUEST['sid'].")";
    $stmt = $conn->prepare($q);
    $stmt->execute();
    header("Location:../history.php?sid=".$_REQUEST['sid']);
}