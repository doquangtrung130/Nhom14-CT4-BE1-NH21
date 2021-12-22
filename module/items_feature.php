<h2 class="title text-center">Sản phẩm nổi bật</h2>

<?php
$url = $_SERVER['PHP_SELF'];
if (strpos($url, "index") != false) {
    $url = "index";
} else {
    $url = "cate";
}

if (isset($_GET['type']) || isset($_GET['manu'])) {
    if (isset($_GET['type'])) {
        $number = $_GET['type'];
        $u_noibat_DESC = $product->u_noibat_type_DESC($_GET['type']);
    } else {
        $number = $_GET['manu'];
        $u_noibat_DESC = $product->u_noibat_manu_DESC($_GET['manu']);
    }
    foreach ($u_noibat_DESC as $value) { ?>
        <div class="col-md-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><img src="public/images/<?php echo $value['pro_image'] ?>" alt="" /></a>
                        <p><a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><?php echo $value['name'] ?></a></p>
                        <h2><?php echo number_format($value['price']) . " " . "VND" ?></h2>
                        <a href="cart.php?id=<?php echo $value['id'] ?>&url=<?php echo $url ?>&
                        <?php if (isset($_GET['type'])) {
                            echo "type=" . $number;
                        } else {
                            echo "manu=" . $number;
                        } ?>
                        " class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }
} else {
    $u_noibat_DESC = $product->u_noibat_type_DESC($type);

    foreach ($u_noibat_DESC as $value) { ?>
        <div class="col-md-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><img src="public/images/<?php echo $value['pro_image'] ?>" alt="" /></a>
                        <p><a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><?php echo $value['name'] ?></a></p>
                        <h2><?php echo number_format($value['price']) . " " . "VND" ?></h2>
                        <a href="cart.php?id=<?php echo $value['id'] ?>&url=<?php echo $url ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
<?php }
} ?>