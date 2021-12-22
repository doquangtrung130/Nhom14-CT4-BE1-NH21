<?php
require "../load.php";
require "../login2/checkLoginAdmin.php";

if (isset($_POST['name']) || isset($_POST['pass'])) {
    if (empty($_POST['name']) || empty($_POST['pass'])) {   ?>
        <script>
            alert("Lưu ý: Không để trống!");
        </script>
    <?php
    } else {
        if ($_POST['edit']) {
            $user->edit($_POST['edit'], $_POST['name'], $_POST['pass']);
        } else {
            $user->add($_POST['name'], $_POST['pass']);
        }
        header("location:users.php");
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
    <?php require "module/form_user.php"; ?>
    <!-- END CONTENT -->
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