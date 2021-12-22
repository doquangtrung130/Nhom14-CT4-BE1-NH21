<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protype.php";
require "models/user.php";
require "models/cart.php";

$product = new Product;
$manufacture = new manufactures;
$protype = new Protype;
$user = new User;
$cart = new Cart;