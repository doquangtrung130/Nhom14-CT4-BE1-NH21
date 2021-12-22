<?php
class manufactures extends Db{
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAll(){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` ");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
  
    //Brand

    function getBrand($manu_id){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` where manu_id = $manu_id");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function getNameById($manu_id){
        $sql = self::$connection->prepare("SELECT `manu_name` FROM `manufactures` where manu_id = '$manu_id'");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function delete($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `manufactures` WHERE manu_id = $id");
        $sql->execute(); //return an object
    }

    function AddProductManu_name($manu_name)
    {
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`manu_name`) VALUES ('$manu_name')");
        $sql->execute(); //return an object
    }

    function EditProductManu_name($id ,$manu_name)
    {
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `manu_name`='$manu_name' WHERE `manu_id`='$id'");
        $sql->execute(); //return an object
    }

    //Phan trang
    function a_phantrang_getAll($page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `manufactures` LIMIT $firstLink, $perPage");
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