<?php
class Cart extends Db
{
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAll()
    {
        $sql = self::$connection->prepare("SELECT * FROM `cart` ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    function add($user, $pro)
    {
        $sql = self::$connection->prepare("INSERT INTO `cart`(`id_user`, `id_pro`) VALUES ('$user','$pro')");
        $sql->execute(); //return an object
    }
}
