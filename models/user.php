<?php
class User extends Db
{
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAll()
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` ");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    
    function add($name, $pass)
    {
        $sql = self::$connection->prepare("INSERT INTO `users`(`name`, `pass`, `power`) VALUES ('$name','$pass','user')");
        $sql->execute(); //return an object
    }

    function edit($id, $name, $pass)
    {
        $sql = self::$connection->prepare("UPDATE `users` SET `name`='$name',`pass`='$pass' WHERE `id`='$id'");
        $sql->execute(); //return an object
    }

    function getId($user){
        $sql = self::$connection->prepare("SELECT * FROM `users` where `name` = $user");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    //Phan trang
    function a_phantrang_getAll($page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `users` LIMIT $firstLink, $perPage");
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

    function delete($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `users` WHERE id = $id");
        $sql->execute(); //return an object
    }

    function getNameById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` where `id` = $id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }
}
