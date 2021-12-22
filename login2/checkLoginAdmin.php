<?php
session_start();
if (isset($_POST['Username'])) {
    foreach ($user->getAll() as $value) {
        if ($value['power'] == "admin") {
            if ($value['name'] == $_POST['Username'] && $value['pass'] == $_POST['Password'])
                $_SESSION['adminname'] = $_POST['Username'];
        }
    }
}
if (!isset($_SESSION['adminname'])) {
    header('Location: ../login2/index_logadmin.php');
}