<!DOCTYPE html>
<html lang="en">
<?php
require "load.php";
require "login2/checkLoginUser.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $u_chitiet_id = $product->u_chitiet_id($id);
    $getBrand = $manufacture->getBrand($_GET['manu']);
}
?>

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

<style>
    input.add {
        width: 200px !important;
    }

    input.add:hover {
        background-color: #FE980F !important;
    }
</style>

<body>
    <!-- Start header -->
    <?php
    require "module/header.php";
    ?>
    <!-- End header -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="left-sidebar">
                            <!-- Start Cate -->
                            <?php
                            require "module/menu_cate.php";
                            ?>
                            <!-- End Cate -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 padding-right">
                    <!-- Start product-information -->
                    <?php
                    require "module/items_detail.php";
                    ?>
                    <!-- End product-information -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!-- Start New_items -->
                        <?php
                        require "module/items_lienquan.php";
                        ?>
                        <!-- End New_items -->
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