
<?php $page = 'home';include_once 'partials/header.php'; ?>

<?php

$query = $connection->prepare("SELECT * FROM `products`");
$query->execute();
$pro_data = $query->fetchAll();



?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <?php include_once 'partials/sidebar.php';?>
        <!-- /.col-lg-3 -->

        <div class="col-md-9">

            <?php include_once 'partials/carousel.php';?>

            <div class="row">
                <?php foreach($pro_data as $v_pro) {?>
                <div class="col-md-4 col-lg-4 mb-4">                   
                    <div class="card">
                        <a href="single-product.php?id=<?php echo $v_pro['product_id'];?>"><img class="card-img-top" src="uploads/pro_images/<?php echo $v_pro['product_photo'];?>" alt="proImage"></a>
                        <div class="card-body">
                            <p class="h3">
                                <a href="single-product.php?id=<?php echo $v_pro['product_id'];?>"><?php echo $v_pro['product_name'];?></a>
                                <h5 class="pull-right"> Tk. <?php echo $v_pro['product_price'];?></h5>
                            </p>
                            
                            <p class="card-text"><?php echo $v_pro['product_details'];?></p>
                            <a href="cart.php" class="btn btn-success">Add to Cart</a>
                        </div>
                       
                    </div>
                    
                </div>
                <?php }?>
                

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /content container -->

<?php include_once 'partials/footer.php';?>