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
<div class="wrapper">

    <?php include "parts/header.html" ?>
    <?php include "parts/menu.html" ?>


    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Shipment History
                <small>History</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">History</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">History <a href="addhistory.php?sid=<?php echo $_REQUEST['sid'] ?>"> <span class="fa fa-plus"></span></a></h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th></th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php
                        include_once "database/Connection.php";
                        $conn= new Connection();
                        $conn = $conn->getConnection();
                        $q = "SELECT * FROM history WHERE Record =".$_REQUEST['sid'];
                        $stmt = $conn->prepare($q);
                        $stmt->execute();
                        $record = $stmt->fetchAll();
                        $record = array_reverse($record);
                        $count = 1;
                        foreach($record as $item){
                            ?>
                            <tr>
                                <td><?php echo $count ?></td>
                                <td><?php echo $item['Date'] ?></td>
                                <td><?php echo $item['Time'] ?></td>
                                <td><?php echo $item['Location'] ?></td>
                                <td><?php echo $item['Status'] ?></td>
                                <td>
                                    <a href="edithistory.php?id=<?php echo $item['Id'] ?>&sid=<?php echo $_REQUEST['sid'] ?>"><span class="fa fa-edit"></span></a>
                                    <a href="database/deletehistory.php?id=<?php echo $item['Id'] ?>&sid=<?php echo $_REQUEST['sid'] ?>"><span class="fa fa-cut"></span></a>
                                </td>
                            </tr>
                            <?php
                            $count++;
                        }
                        ?>

                        </tbody>
                    </table>
                </div>

                <!-- /.box-footer-->
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
