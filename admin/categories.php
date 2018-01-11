<?php session_start();$page = 'categories';?>

<?php include_once 'partials/header.php';?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <?php include 'partials/sidebar.php'?>
        <div class="col-md-8 mt-4">
            <div class="alert alert-success">
                <a href="add_category.php" class="btn btn-success">Add Categories</a>
            </div>
            
            
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /content container -->

<?php include_once 'partials/footer.php'; ?>


