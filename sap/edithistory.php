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
                History
                <small>Update</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li>Shipments</li>
                <li class="active">Update</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">History - Update</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <?php
                    include_once "database/Connection.php";
                    $conn = new Connection();
                    $conn = $conn->getConnection();
                    $q = "SELECT * FROM history WHERE Id = ".$_REQUEST['id'];
                    $stmt = $conn->prepare($q);
                    $stmt->execute();
                    $his = $stmt->fetch(1);
                    ?>


                    <form action="database/edithistory.php?sid=<?php echo $_REQUEST['sid'] ?>&id=<?php echo $_REQUEST['id'] ?>" method="post">
                        <div class="col-md-6">
                            <label for="">Date</label>
                            <input type="date" value="<?php echo $his['Date'] ?>" name="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Time</label>
                            <input type="time" value="<?php echo $his['Time'] ?>" name="time" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Location</label>
                            <input type="text" value="<?php echo $his['Location'] ?>" name="location" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="text" value="<?php echo $his['Status'] ?>" name="status" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Remarks</label>
                            <textarea name="remarks" class="form-control"><?php echo $his['Remarks'] ?></textarea>
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
