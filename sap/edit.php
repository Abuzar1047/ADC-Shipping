<?php require "database/config.php" ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shipping - Dashboard</title>
    <?php include "parts/styles.html" ?>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <?php include "parts/header.html" ?>
    <?php include "parts/menu.html" ?>


    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Shipments
                <small>Update</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li>Shipments</li>
                <li class="active">Edit</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php
                include_once "database/Connection.php";
                $conn = new Connection();
                $conn = $conn->getConnection();
                $q = "SELECT * FROM record WHERE Id = ".$_REQUEST['id'];
                $stmt = $conn->prepare($q);
                $stmt->execute();
                $rec = $stmt->fetch(1);
            ?>
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Shipment - Update</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="database/edit.php?id=<?php echo $_REQUEST['id'] ?>" method="post">
                        <div class="col-md-offset-4 col-md-4">
                            <label for="">Tracking No</label>
                            <input value="<?php echo $rec['Tno'] ?>" name="tno" required type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Shipper Address</label>
                            <textarea name="saddress" class="form-control"><?php echo $rec['Saddress'] ?></textarea>

                        </div>
                        <div class="col-md-6">
                            <label for="">Receiver Address</label>
                            <textarea name="raddress" class="form-control"><?php echo $rec['Raddress'] ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Origin</label>
                            <input type="text" value="<?php echo $rec['Origin'] ?>" name="origin" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Package</label>
                            <input type="text" name="package" value="<?php echo $rec['Package'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="text" name="status" value="<?php echo $rec['Status'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Destination</label>
                            <input type="text" name="destination" value="<?php echo $rec['Destination'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Carrier</label>
                            <input type="text" name="carrier" value="<?php echo $rec['Carrier'] ?>"  class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Type of Shipment</label>
                            <input type="text" name="type" value="<?php echo $rec['Type'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Weight</label>
                            <input type="text" name="weight" value="<?php echo $rec['Weight'] ?>"  class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Shipment Mode</label>
                            <input type="text" name="mode" value="<?php echo $rec['Mode'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Carrier Reference No</label>
                            <input type="text" name="cref" value="<?php echo $rec['Cref'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Product</label>
                            <input type="text" name="product" value="<?php echo $rec['Product'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Quantity</label>
                            <input type="text" name="quantity" value="<?php echo $rec['Quantity'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Payment Mode</label>
                            <input type="text" name="pmode" value="<?php echo $rec['Pmode'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Total Freight</label>
                            <input type="text" name="freight" value="<?php echo $rec['TFreight'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Expected Delivery Date</label>
                            <input type="date" name="ed" value="<?php echo $rec['Eddate'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Departure Time</label>
                            <input type="time" name="dt" value="<?php echo $rec['Dtime'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Pick up date</label>
                            <input type="date" name="pd" value="<?php echo $rec['Pdate'] ?>" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Pick up Time</label>
                            <input type="time" name="pt" value="<?php echo $rec['Ptime'] ?>" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Comments</label>
                            <textarea name="comments" class="form-control"> <?php echo $rec['Comments'] ?></textarea>
                            <input type="submit" class="btn btn-primary pull-right" style="margin-top: 10px">
                        </div>

                    </form>
                </div>
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>


    <?php include "parts/footer.html" ?>


</div>
<?php include "parts/scripts.html" ?>

</body>
</html>
