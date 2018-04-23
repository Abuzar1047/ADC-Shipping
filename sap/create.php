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
                <small>Create</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li>Shipments</li>
                <li class="active">Create</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Shipment - Create</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="database/create.php" method="post">
                        <div class="col-md-offset-4 col-md-4">
                            <label for="">Tracking No</label>
                            <input name="tno" required type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Shipper Address</label>
                            <textarea name="saddress" class="form-control"></textarea>

                        </div>
                        <div class="col-md-6">
                            <label for="">Receiver Address</label>
                            <textarea name="raddress" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Origin</label>
                            <input type="text" name="origin" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Package</label>
                            <input type="text" name="package" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Destination</label>
                            <input type="text" name="destination" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Carrier</label>
                            <input type="text" name="carrier" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Type of Shipment</label>
                            <input type="text" name="type" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Weight</label>
                            <input type="text" name="weight" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Shipment Mode</label>
                            <input type="text" name="mode" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Carrier Reference No</label>
                            <input type="text" name="cref" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Product</label>
                            <input type="text" name="product" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Quantity</label>
                            <input type="text" name="quantity" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Payment Mode</label>
                            <input type="text" name="pmode" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Total Freight</label>
                            <input type="text" name="freight" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Expected Delivery Date</label>
                            <input type="date" name="ed" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Departure Time</label>
                            <input type="time" name="dt" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Pick up date</label>
                            <input type="date" name="pd" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Pick up Time</label>
                            <input type="time" name="pt" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Comments</label>
                            <textarea name="comments" class="form-control"></textarea>
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
