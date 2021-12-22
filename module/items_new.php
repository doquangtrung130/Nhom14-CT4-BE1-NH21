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
        $u_moi_DESC = $product->u_phantrang_moi_type_DESC($page, $perPage, $_GET['type']);
        $total = count($product->u_getAll_type_DESC($_GET['type'])); //số lượng SP
    } else {
        $number = $_GET['manu'];
        $u_moi_DESC = $product->u_phantrang_moi_manu_DESC($page, $perPage, $_GET['manu']);
        $total = count($product->u_getAll_manu_DESC($_GET['manu'])); //số lượng SP
    }
?>

    <h2 class="title text-center">Sản phẩm mới (<?php echo $total ?>)</h2>

    <?php foreach ($u_moi_DESC as $value) { ?>
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
                        " class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                            cart</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="col-md-12">
        <?php if (isset($_GET['type'])) {
            echo $product->u_link_phantrang_moi_type_DESC($_GET['type'], $url, $total, $perPage);
        } else {
            echo $product->u_link_phantrang_moi_manu_DESC($_GET['manu'], $url, $total, $perPage);
        } ?>
    </div>
<?php } else {
    $u_moi_DESC = $product->u_moi_type_DESC($type);?>

    <h2 class="title text-center">Sản phẩm mới</h2>

    <?php foreach ($u_moi_DESC as $value) { ?>
        <div class="col-md-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><img src="public/images/<?php echo $value['pro_image'] ?>" alt="" /></a>
                        <p><a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><?php echo $value['name'] ?></a></p>
                        <h2><?php echo number_format($value['price']) . " " . "VND" ?></h2>
                        <a href="cart.php?id=<?php echo $value['id'] ?>&url=<?php echo $url ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                            cart</a>
                    </div>
                </div>
            </div>
        </div>
<?php }
} ?>