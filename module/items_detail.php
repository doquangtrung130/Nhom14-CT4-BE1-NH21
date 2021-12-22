<h2 class="title text-center">Chi tiết sản phẩm</h2>

<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
            <img src="public/images/<?php echo $u_chitiet_id[0]['pro_image'] ?>" alt="" />
        </div>
    </div>
    <div class="col-sm-7">
        <!-- Start product-information -->
        <div class="product-information">
            <h2><?php echo $u_chitiet_id[0]['name'] ?></h2>
            <span>
                <span><?php echo number_format($u_chitiet_id[0]['price']) . " " . "VND" ?></span>
            </span>
            <p><b>Thông số kỹ thuật: </b><?php echo $u_chitiet_id[0]['description'] ?></p>
            <p><b>Số Lượng:</b> 100 cái</p>
            <p><b>Tình trạng:</b> Mới</p>
            <p><b>Hãng sản xuất:</b> <?php echo $getBrand[0]['manu_name'] ?></p>
            <span>
                <form action="cart.php" method="get">
                    <label> Số lượng:</label>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <input type="hidden" name="url" value="detail">
                    <input type="hidden" name="manu" value="<?php echo $getBrand[0]['manu_id'] ?>">
                    <input type="text" name="num" value="1"/>        
                    <input class="add" type="submit" value="Thêm vào giỏ hàng">
                </form>
            </span>
        </div>
        <!-- End product-information -->
    </div>
</div>

<?php 
$type = $u_chitiet_id[0]['type_id'];
$id = $u_chitiet_id[0]['id'];
 ?>