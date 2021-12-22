<h2 class="title text-center">Sản phẩm liên quan</h2>

<?php $u_moi_DESC = $product->u_moi_type_DESC($type);?>

    <?php foreach ($u_moi_DESC as $value) { ?>
        <div class="col-md-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><img src="public/images/<?php echo $value['pro_image'] ?>" alt="" /></a>
                        <p><a href="detail.php?id=<?php echo $value['id'] ?>&manu=<?php echo $value['manu_id'] ?>"><?php echo $value['name'] ?></a></p>
                        <h2><?php echo number_format($value['price']) . " " . "VND" ?></h2>
                        <a href="cart.php?id=<?php echo $id ?>&manu=<?php echo $_GET['manu'] ?>&url=detail" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to
                            cart</a>
                    </div>
                </div>
            </div>
        </div>
<?php }