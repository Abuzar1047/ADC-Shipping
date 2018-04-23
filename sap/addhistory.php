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
                <small>Create</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li>History</li>
                <li class="active">Create</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">History - Create</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <form action="database/createhistory.php?sid=<?php echo $_REQUEST['sid'] ?>" method="post">
                        <div class="col-md-6">
                            <label for="">Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Time</label>
                            <input type="time" name="time" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Location</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="">Remarks</label>
                            <textarea name="remarks" class="form-control"></textarea>
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
