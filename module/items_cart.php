<section id="cart_items">
    <div class="container">
        <h3>Giỏ hàng của bạn</h3>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản phẩm</td>
                        <td class="description">Tên</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['cart'])) {
                        if ($_SESSION['cart'] != null) {
                            foreach ($_SESSION['cart'] as $id => $value) {
                                $item = $product->u_chitiet_id($id) ?>
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img src="public/images/<?php echo $item[0]['pro_image'] ?>" alt="" width=110></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="detail.php?id=<?php echo $item[0]['id'] ?>&manu=<?php echo $item[0]['manu_id'] ?>"><?php echo $item[0]['name'] ?></a></h4>
                                    </td>
                                    <td class="cart_price">
                                        <p><?php echo number_format($item[0]['price']) . " " . "VND" ?></p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <a class="cart_quantity_up" href="cart.php?id=<?php echo $item[0]['id'] ?>&url=cart"> + </a>
                                            <input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $value ?>" autocomplete="off" size="2">
                                            <a class="cart_quantity_down" href="cart.php?id=<?php echo $item[0]['id'] ?>&del=1"> - </a>
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price"><?php echo number_format($item[0]['price'] * $value) . " " . "VND" ?></p>
                                    </td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" href="cart.php?id=<?php echo $item[0]['id'] ?>&clear=1"><img src="public/images/istockphoto-1138089771-1024x1024.jpg" alt="" srcset="" style="height: 25px;width: 25px;"></a>
                                    </td>
                                </tr>
                    <?php   }
                        }
                    } ?>
                </tbody>
            </table>
            <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="?order=ordered">
                <div class="form-group col-md-12">
                    <a class="btn btn-default update" href="index.php">Continue Buying</a>
                    <a class="btn btn-default check_out" href="cart.php?clear_all=1">Delete All</a>
                    
                </div>
            </form>
        </div>
    </div>
</section>