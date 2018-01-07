
<?php include_once 'partials/header.php'; ?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="offset-md-4 col-md-4 offset-md-4 mb-4">
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                <button name="login" class="btn btn-xs btn-success">Login</button>
                <a href="register.php" class="btn btn-info" >Register</a>
                </div>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /content container -->

<?php include_once 'partials/footer.php'; ?>