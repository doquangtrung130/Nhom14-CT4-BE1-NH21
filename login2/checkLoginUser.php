<?php
session_start();
if (isset($_POST['Username'])) {
    foreach ($user->getAll() as $value) {
        if ($value['power'] == "user") {
            if ($value['name'] == $_POST['Username'] && $value['pass'] == $_POST['Password'])
                $_SESSION['username'] = $_POST['Username'];
        }
    }
}
if (!isset($_SESSION['username'])) {
    header('Location: ./login2/index.php');
}