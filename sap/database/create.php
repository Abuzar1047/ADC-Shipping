<?php
require "config.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include_once "Connection.php";
    $conn = new Connection();
    $conn = $conn->getConnection();
    $q = "INSERT INTO record (Tno,Saddress,Raddress,Origin,Package,Status,Destination,Carrier,Type,Weight,Mode,Cref,Product,Quantity,Pmode,TFreight,Eddate,Dtime,Pdate,Ptime,Comments)".
        " VALUES('".$_REQUEST['tno']."','".$_REQUEST['saddress']."','".$_REQUEST['raddress']."','".$_REQUEST['origin']."','".$_REQUEST['package']."','".$_REQUEST['status']."','".$_REQUEST['destination']."',".
        "'".$_REQUEST['carrier']."','".$_REQUEST['type']."','".$_REQUEST['weight']."','".$_REQUEST['mode']."','".$_REQUEST['cref']."','".$_REQUEST['product']."','".$_REQUEST['quantity']."','".$_REQUEST['pmode']."','".$_REQUEST['freight']."',".
                                                    "'".$_REQUEST['ed']."','".$_REQUEST['dt']."','".$_REQUEST['pd']."','".$_REQUEST['pt']."','".$_REQUEST['comments']."')";
    $stmt = $conn->prepare($q);
    $stmt->execute();
    header("Location:../index.php");
}