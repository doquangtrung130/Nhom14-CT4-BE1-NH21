<?php
require "../load.php";
require "../login2/checkLoginAdmin.php";

$url = "../public/images/";

if (isset($_POST['name']) || isset($_POST['price'])) {
    if (empty($_POST['name'])) {   ?>
        <script>
            alert("Lưu ý: Không để trống!");
        </script>
        <?php
    } else {
        $check = 0;
        if ($_POST['edit']) {
            if ($_FILES['fileUpload']['name'] != "") {
                if ($_FILES['fileUpload']['error'] == 0) {
                    $temp = $_FILES['fileUpload']['tmp_name'];
                    $file = $_FILES['fileUpload']['name'];
                    move_uploaded_file($temp, $url . $_FILES['fileUpload']['name']);
                    if (isset($_POST['name'])) {
                        $product->edit($_POST['edit'], $_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_POST['price'], $file, $_POST['description'], $_POST['feature']);
                    }
                }
            } else {
                $file = $product->getNameById($_POST['edit'])[0]['pro_image'];
                $product->edit($_POST['edit'], $_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_POST['price'], $file, $_POST['description'], $_POST['feature']);
            }
        } else {
            if (isset($_FILES['fileUpload'])) {
                if ($_FILES['fileUpload']['size'] < 500000); {
                    if ($_FILES['fileUpload']['error'] == 0) {
                        $temp = $_FILES['fileUpload']['tmp_name'];
                        $file = $_FILES['fileUpload']['name'];
                        move_uploaded_file($temp, $url . $_FILES['fileUpload']['name']);
                        if (isset($_POST['name'])) {
                            $product->add($_POST['name'], $_POST['manu_id'], $_POST['type_id'], $_POST['price'], $file, $_POST['description'], $_POST['feature']);
                        }
                    }
                }
            } else {
                $check = 1; ?>
                <script>
                    alert("Lưu ý: Lỗi!");
                </script>
<?php
            }
        }
        if ($check == 0) {
            header("location:index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mobile Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/uniform.css" />
    <link rel="stylesheet" href="css/select2.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
        ul.pagination {
            list-style: none;
            float: right;
        }

        ul.pagination li.active {
            font-weight: bold
        }

        ul.pagination li {
            display: inline-block;
            padding: 10px
        }
    </style>
</head>

<body>

    <?php require "module/header.php"; ?>
    <!--sidebar-menu-->
    <?php require "module/menu.php"; ?>
    <!-- BEGIN CONTENT -->
    <?php require "module/form_pro.php";
    ?>
    <!--end-Footer-part-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.tables.js"></script>
</body>

</html>