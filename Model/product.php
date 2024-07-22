<?php

function load_product(){
    $sql = "SELECT * FROM `product` "; 
    "SELECT `product`.`id`,`product`.`id_cate`,`category`.`id` FROM `product`
    join `category` on `product`.`id_cate` = `category`.`id` ";
    "SELECT `product`.`id`,`product`.`id_brands`,`brands`.`id` FROM `product`
    join `brands` on `product`.`id_brands` = `brands`.`id` ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function load_one_product($id){
    $sql = "SELECT * FROM `product` where id =". $id;
    return pdo_query_one($sql);
}

function update_product($name, $description, $priceSale, $quantity, $status, $update_at, $id_cate, $id_brands, $id) {
    $sql = "UPDATE `product`
    SET `name` = '$name', `description` = '$description',  `priceSale` = '$priceSale', `quantity` = '$quantity',
    `status` = '$status', `update_at` = '$update_at', `id_cate` = '$id_cate', `id_brands` = '$id_brands'
    WHERE `id` = $id;";
    return pdo_execute($sql);
}


function insert_product($name, $description, $priceSale, $quantity, $status, $create_at, $update_at,  $id_cate, $id_brands) {
    $sql = "INSERT INTO `product` (`id`,`name`, `description`,  `priceSale`, `quantity`, `status`, `create_at`,`update_at`, `id_cate`, `id_brands`)
            VALUES (NULL,'$name', '$description', '$priceSale', '$quantity', '$status', '$create_at','$update_at', '$id_cate',  '$id_brands')";
    return pdo_execute($sql);
}
?>
