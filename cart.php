<?php
require "load.php";
require "login2/checkLoginUser.php";

if (isset($_GET['id'])) {
    if (isset($_GET['del'])) { //Xóa thì ở trang cart
        if (isset($_SESSION['cart'][$_GET['id']])) {
            if ($_SESSION['cart'][$_GET['id']] == 1) {
                unset($_SESSION['cart'][$_GET['id']]);
            } else {
                $_SESSION['cart'][$_GET['id']]--;
            }
        }
        header("location:cart.php");
    } else {
        if (isset($_GET['clear'])) {
            unset($_SESSION['cart'][$_GET['id']]);
        } else //Thêm
        {
            if (isset($_GET['num'])) { //Thêm nhiều ở trang detail
                if ($_GET['num'] >= 1) {
                    if (isset($_SESSION['cart'][$_GET['id']])) {
                        $_SESSION['cart'][$_GET['id']] = $_SESSION['cart'][$_GET['id']] + $_GET['num'];
                    } else {
                        $_SESSION['cart'][$_GET['id']] = $_GET['num'];
                    }
                    header("location:detail.php?id=" . $_GET['id'] . "&manu=" . $_GET['manu']);
                }
            } else { //Thêm 1 nhiều trang
                if (isset($_SESSION['cart'][$_GET['id']])) {
                    $_SESSION['cart'][$_GET['id']]++;
                } else {
                    $_SESSION['cart'][$_GET['id']] = 1;
                }

                if ($_GET['url'] == "cart") //Trang cart
                {
                    header("location:cart.php");
                } else if ($_GET['url'] == "index") //Trang index
                {
                    header("location:index.php");
                } else if ($_GET['url'] == "result") //Trang result
                {
                    header("location:result.php?key=" . $_GET['key']);
                } else if ($_GET['url'] == "detail") //Trang detail sp lien quan
                {
                    header("location:detail.php?id=" . $_GET['id'] . "&manu=" . $_GET['manu']);
                } else //Trang cate
                {
                    if (isset($_GET['manu'])) {
                        header("location:cate.php?manu=" . $_GET['manu']);
                    } else {
                        header("location:cate.php?type=" . $_GET['type']);
                    }
                }
            }
        }
    }
}
if (isset($_GET['clear_all'])) {
    session_unset();
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

<style>
    #cart_items .cart_info .cart_price p {
        padding-top: 20px;
    }
</style>

<body>
    <!-- Start header -->
    <?php
    require "module/header.php";
    ?>
    <!-- End header -->

    <!-- Start cart -->
    <?php
    require "module/items_cart.php";
    ?>
    <!-- End cart -->

    <footer id="footer">
        <!-- Start footer -->
        <?php
        require "module/footer.php";
        ?>
        <!-- End footer -->
    </footer>
</body>

</html>