<?php
require "load.php";
require "login2/checkLoginUser.php";

$perPage = 8; // hiển thị 8 sản phẩm trên 1 trang
if (isset($_GET['page'])) {
    $page = $_GET['page']; // Lấy số trang trên thanh địa chỉ
} else {
    $page = 1;
}

$url = $_SERVER['PHP_SELF']; // lấy đường dẫn đến file hiện hành

if (isset($_GET['key'])) {
    $key = $_GET['key'];
    $getByName = $product->getByNamePage($key, $page, $perPage);
    $total = count($product->getByName($key)); //số lượng SP
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/prettyPhoto.css" rel="stylesheet">
    <link href="public/css/price-range.css" rel="stylesheet">
    <link href="public/css/animate.css" rel="stylesheet">
    <link href="public/css/main.css" rel="stylesheet">
    <link href="public/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Start header -->
    <?php
    require "module/header.php";
    ?>
    <!-- End header -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Start item -->
                    <?php
                    require "module/items_search.php";
                    ?>
                    <!-- End item -->
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <!-- Start footer -->
        <?php
        require "module/footer.php";
        ?>
        <!-- End footer -->
    </footer>
    <!--/Footer-->
</body>

</html>