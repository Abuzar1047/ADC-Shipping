<?php
require "config.php";
if($_SERVER['REQUEST_METHOD'] == "GET"){
    include_once "Connection.php";
    $conn = new Connection();
    $conn = $conn->getConnection();
    $q = "DELETE FROM record WHERE Id = ".$_REQUEST['id'];
    $stmt = $conn->prepare($q);
    $stmt->execute();
    header("Location:../index.php");
}