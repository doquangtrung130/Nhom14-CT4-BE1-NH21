<?php
class Product extends Db
{
    //User
    function u_getAll_type_DESC($type)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = $type = 1 ORDER BY `id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function u_getAll_manu_DESC($manu)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `manu_id` = $manu = 1 ORDER BY `id` DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }



    function u_noibat_DESC()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` = 1 ORDER BY `id` DESC LIMIT 3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function u_noibat_type_DESC($type)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` = 1 AND `type_id` = $type ORDER BY `id` DESC LIMIT 3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function u_noibat_manu_DESC($manu)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` = 1 AND `manu_id` = $manu ORDER BY `id` DESC LIMIT 3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }



    function u_moi_DESC()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` ORDER BY `id` DESC LIMIT 3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function u_moi_type_DESC($type)
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = $type ORDER BY `id` DESC LIMIT 3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    // Phan trang
    function u_phantrang_moi_type_DESC($page, $perPage, $type)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `type_id` = $type ORDER BY id DESC LIMIT $firstLink, $perPage");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }
    function u_phantrang_moi_manu_DESC($page, $perPage, $manu)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `manu_id` = $manu ORDER BY id DESC LIMIT $firstLink, $perPage");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }
    // Link phan trang
    function u_link_phantrang_moi_type_DESC($type, $url, $total, $perPage)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a href='$url?type=$type&page=$j'> $j </a>";
        }
        return $link;
    }
    function u_link_phantrang_moi_manu_DESC($manu, $url, $total, $perPage)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a href='$url?manu=$manu&page=$j'> $j </a>";
        }
        return $link;
    }

    function u_chitiet_id($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products where id = $id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }




    //Admin
    function a_getAll()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products`");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    //Phan trang
    function a_phantrang_getAll($page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products` ORDER BY id DESC LIMIT $firstLink, $perPage");
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

    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAllFeatureProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `feature` = 1 ORDER BY id LIMIT 3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    //Viet phuong thuc lay ra 10 sp moi nhat
    function getNewProducts()
    {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 3");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    //hiển thị chi tiết
    function getDectProduct($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products where id = $id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    //Brand

    function getManuName($manu_id)
    {
        $sql = self::$connection->prepare("SELECT products.* FROM products , manufactures where manufactures.manu_id = products.manu_id and manufactures.manu_id = $manu_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function getTypeName($type_id)
    {
        $sql = self::$connection->prepare("SELECT products.* FROM products , manufactures where manufactures.manu_id = products.manu_id and manufactures.manu_id = $type_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function getByTypeId($type_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products where type_id = $type_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function getByManuId($manu_id)
    {
        $sql = self::$connection->prepare("SELECT * FROM products where manu_id = $manu_id");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function getByNamePage($name, $page, $perPage)
    {
        $firstLink = ($page - 1) * $perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE '%$name%' LIMIT $firstLink, $perPage");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function getByName($name)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE `name` LIKE '%$name%'");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function paginate($name, $url, $total, $perPage)
    {
        $totalLinks = ceil($total / $perPage);
        $link = "";
        for ($j = 1; $j <= $totalLinks; $j++) {
            $link = $link . "<a href='$url?key=$name&page=$j'> $j </a>";
        }
        return $link;
    }

    function delete($id)
    {
        $sql = self::$connection->prepare("DELETE FROM `products` WHERE id = $id");
        $sql->execute(); //return an object
    }

    function add($name, $manu_id, $type_id, $price, $pro_image, $description, $feature)
    {
        $sql = self::$connection->prepare("INSERT INTO `products`(`name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`) VALUES ('$name', '$manu_id', '$type_id', '$price', '$pro_image', '$description', '$feature')");
        $sql->execute(); //return an object
    }

    function getNameById($id){
        $sql = self::$connection->prepare("SELECT * FROM `products` where id = '$id'");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array    
    }

    function edit($id, $name, $manu_id, $type_id, $price, $pro_image, $description, $feature)
    {
        $sql = self::$connection->prepare("UPDATE `products` SET `name`='$name',`manu_id`='$manu_id',`type_id`='$type_id',`price`='$price',`pro_image`='$pro_image',`description`='$description',`feature`='$feature' WHERE `id`='$id'");
        $sql->execute(); //return an object
    }
}
