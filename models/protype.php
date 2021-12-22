<?php
class Protype extends Db
{
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAll()
    {
        $sql = self::$connection->prepare("SELECT * FROM `protypes` ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Brand

    function getNameById($type_id)
    {
        $sql = self::$connection->prepare("SELECT `type_name` FROM `protypes` where type_id = $type_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function getBrand($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `protypes` where type_id = $manu_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function delete($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `protypes` WHERE type_id = $id");
        $sql->execute(); //return an object
    }
    
    function AddProductType_name($Type_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `protypes`(`type_name`) VALUES ('$Type_name')");
        $sql->execute(); //return an object
    }

    function EditProductType_name($id, $name)
    {
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name`='$name' WHERE `type_id`='$id'");
        $sql->execute(); //return an object
    }

    //Phan trang
    function a_phantrang_getAll($page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `protypes` LIMIT $firstLink, $perPage");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }
    // Link phan trang
    function a_link_phantrang_getAll($url, $total, $perPage)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a href='$url?page=$j'> $j </a>";
        }
        return $link;
    }
}
