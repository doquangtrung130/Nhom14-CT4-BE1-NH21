<div class="features_items">
    <!--features_items-->
    <h2 class="title text-center">Tìm kiếm (<?php echo $total ?>)</h2>
    <?php
    foreach ($getByName as $value) { ?>
        <div class="col-md-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><img src="public/images/<?php echo $value['pro_image'] ?>" alt="" /></a>
                        <p><a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><?php echo $value['name'] ?></a></p>
                        <h2><?php echo number_format($value['price']) . " " . "VND" ?></h2>
                        <a href="cart.php?id=<?php echo $value['id'] ?>&url=result&key=<?php echo $_GET['key'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                            cart</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <ul class="pagination col-sm-12">
        <?php
        echo $product->paginate($key, $url, $total, $perPage);
        ?>
</div>