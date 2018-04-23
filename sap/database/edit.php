<?php
require "config.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include_once "Connection.php";
    $conn = new Connection();
    $conn = $conn->getConnection();
    $q = "UPDATE record SET Tno='".$_REQUEST['tno']."',Saddress='".$_REQUEST['saddress']."',Raddress='".$_REQUEST['raddress']."',Origin='".$_REQUEST['origin']."',Package='".$_REQUEST['package']."',Status='".$_REQUEST['status']."',Destination='".$_REQUEST['destination']."',Carrier='".$_REQUEST['carrier']."',Type='".$_REQUEST['type']."',Weight='".$_REQUEST['weight']."',Mode='".$_REQUEST['mode']."',Cref='".$_REQUEST['cref']."',Product='".$_REQUEST['product']."',Quantity='".$_REQUEST['quantity']."',Pmode='".$_REQUEST['pmode']."',TFreight='".$_REQUEST['freight']."',Eddate='".$_REQUEST['ed']."',Dtime='".$_REQUEST['dt']."',Pdate='".$_REQUEST['pd']."',Ptime='".$_REQUEST['pt']."',Comments='".$_REQUEST['comments']."' WHERE Id = ".$_REQUEST['id'];
    $stmt = $conn->prepare($q);
    $stmt->execute();
    header("Location:../index.php");
}