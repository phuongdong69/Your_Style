<?php
function insert_productdetail($price, $id_product, $id_size, $id_color)
{
    $sql = "INSERT INTO `product_detail` (`id`,`price`,`id_product`,`id_size`,`id_color`) 
        VALUES (NULL, $price, $id_product, $id_size, $id_color);";
    return pdo_execute($sql);
}
function load_productdetail($id_product){
    $sql = "SELECT product.id,product.name AS p_name,product_detail.*, size.sizeValue AS size_sizeValue, color.name AS color_name
            FROM product_detail
            JOIN product ON product_detail.id_product = product.id
            JOIN size ON product_detail.id_size = size.id
            JOIN color ON product_detail.id_color = color.id
            where id_product = $id_product";
    return pdo_query($sql);
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
