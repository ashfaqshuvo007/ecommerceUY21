
<?php session_start(); ?>
<?php include 'partials/header.php'; ?>
<?php
if (isset($_POST['add_category'])) {

    //user input
   $cat_name = $_POST['cat_name'];
   $errors = [];
   $msgs = [];
    //validate
    if(strlen($_POST['cat_name']) < 3){
        
    }
    //no errors,DB upload
    //messages
    
    
}
?>

<!-- Page Content -->
<div class="container">
    <div class="row">
<?php include 'partials/sidebar.php' ?>
        <div class="col-md-8 mt-4">
            <p class="h2">Add Category</p>
            <form action="add_category.php" method="post" enctype="multipart/form-data">
<?php if (!empty($errors)) { ?>
                    <div class="alert alert-danger">
    <?php foreach($errors as $error) { ?>
                            <p><?php echo $error ?></p>  
            <?php } ?>
                    </div>   
<?php } ?>
                <?php if (!empty($msgs)) { ?>
                    <div class="alert alert-success">
                        <?php foreach($msgs as $msg) { ?>
                            <p><?php echo $msg ?></p>  
                        <?php } ?>
                    </div>   
                <?php } ?>
                <div class="form-group">
                    <label for="cat_name">Category Name</label>
                    <input type="text" name="cat_name" id="cat_name" class="form-control" required="1">
                </div>

                <div class="form-group">
                    <label for="cat_photo">Category Photo</label>
                    <input type="file" name="cat_photo" id="cat_photo" class="form-control">
                </div>
                <div class="form-group">
                    <button name="add_category" class="btn btn-success">Add Category</button>

                </div>
            </form>


        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /content container -->

<?php include_once 'partials/footer.php'; ?>




