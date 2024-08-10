<?php
function insert_productdetail($price, $id_product, $id_size, $id_color)
{
    $sql = "INSERT INTO `product_detail` (`id`,`price`,`id_product`,`id_size`,`id_color`) 
        VALUES (NULL, $price, $id_product, $id_size, $id_color);";
    return pdo_execute($sql);
}
function load_productdetail($id_product){
    $sql = "SELECT product.id,product.name AS p_name,product_detail.*,
            size.sizeValue AS size_sizeValue,
            color.name AS color_name
            FROM product_detail
            JOIN product ON product_detail.id_product = product.id
            JOIN size ON product_detail.id_size = size.id
            JOIN color ON product_detail.id_color = color.id
            where id_product = $id_product";
    return pdo_query($sql);
}
function getsize_by_color($id_product, $id_color){
    $sql = "Select size.sizeValue, color.name AS color_name
        
    from product_detail 
    join size on size.id = product_detail.id_size
    join color on color.id = product_detail.id_color
    where id_product = $id_product and id_color = $id_color";
    return pdo_query($sql);
}
function getprice($id_product, $id_color,$id_size){
    $sql = "Select size.sizeValue, color.name AS color_name,
       product_detail.price
    from product_detail 
    join size on size.id = product_detail.id_size
    join color on color.id = product_detail.id_color
    where id_product = $id_product and id_color = $id_color and id_size = $id_size";
    return pdo_query($sql)
}
function update_productdetail($price, $id_product, $id_size, $id_color, $id)
{
    $sql = "UPDATE `product_detail` 
        SET `price` = $price, `id_product` = '$id_product', `id_size` = $id_size, `id_color` = $id_color
        where `id` = $id";
    return pdo_execute($sql);
}

function load_name_product_detail($id_product)
{
    $sql = "SELECT `product`.`name` FROM `product` JOIN `product_detail`
    ON `product_detail`.`id_product` = `product`.`id` where `product_detail`.`id_product` = $id_product;";
    return pdo_query_one($sql);
}

function load_one_product_detail($id)
{
    $sql = "SELECT id AS id_prodt, price, id_product ,id_size,id_color
    FROM `product_detail` where id =" . $id;
    return pdo_query_one($sql);
}
