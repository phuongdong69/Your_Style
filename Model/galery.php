<?php
  
    function insert_galery($image,$id_product){
        $sql = "INSERT INTO `galery` ( `id`,`image`,`id_product` ) 
        VALUES (NULL, '$image', '$id_product');";
        return pdo_execute($sql);
    }
    function load_galery(){
        $sql = "SELECT * FROM `galery`";"SELECT `galery`.`id`,`galery`.`image`,`product`.`name` FROM `galery`
        join `product` on `product`.`id_galery` = `galery`.`id`";
        $listanh = pdo_query($sql);
        return $listanh;
    }
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