<?php
  
    function insert_galery($image,$id_product){
        $sql = "INSERT INTO `galery` ( `id`,`image`,`id_product` ) 
        VALUES (NULL, '$image', '$id_product');";
        return pdo_execute($sql);
    }
    function load_galery($id_product){
        // // $sql ="SELECT `galery`.`id`,`galery`.`image`,`galery`.`id_product` FROM `galery`
        // -- join `product` on `product`.`id` = `galery`.`id` 
        $sql ="SELECT * FROM `galery`
        where `galery`.`id_product` = $id_product;";
        $listanh = pdo_query($sql);
        return $listanh;
    }
    
        function load_one_galery($id){
            $sql = "SELECT * FROM `galery` where `id` = $id";
            return pdo_query_one($sql);
        }
    
    function update_galery($image,$id){
        $sql= "UPDATE `galery` SET `image` = '$image' where `id`= $id";
        return pdo_execute($sql);
    }
    function delete_galery($id){
        $sql = "DELETE FROM `galery`
        WHERE `galery`.`id` = $id";
        return pdo_execute($sql);
    }
    // function update_category($name, $status, $id){
    //     $sql = "UPDATE `category` SET `name` = '$name', `status` = '$status' WHERE `id` = $id;";
    //     return pdo_execute($sql);
    // }
    // function load_gallery($id_product) {
    //     $sql = "SELECT `gallery`.`id`, `gallery`.`image_url`, `product`.`name` 
    //             FROM `gallery`
    //             JOIN `product` ON `product`.`id` = `gallery`.`product_id`
    //             WHERE `gallery`.`product_id` = :id_product";
    //     $listanh = pdo_query($sql, ['id_product' => $id_product]);
    //     return $listanh;
    // }
    // function insert_gallery($image, $id_product) {
    //     $sql = "INSERT INTO `gallery` ( `image_url`, `product_id` ) 
    //             VALUES (:image, :id_product)";
    //     return pdo_execute($sql, ['image' => $image, 'id_product' => $id_product]);
    // }
    
?>