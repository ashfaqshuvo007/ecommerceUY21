<?php 
session_start();

if(empty($_SESSION) || empty($_SESSION['id'] || empty($_SESSION['username']))){
    header('Location: index.php');
}



?>



<?php include_once 'partials/header.php'; ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-md-8 offset-md-2 mb-4">
            
            <div class="alert alert-success">
                <p>You are logged in </p>
                
            </div>
            <a href="logout.php" class="btn btn-block btn-danger">Logout</a>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /content container -->

<?php include_once 'partials/footer.php'; ?>