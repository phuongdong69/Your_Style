<?php

function load_all_products_img($id_cate = 0) {
    if ($id_cate > 0) {
        $sql = "SELECT product.*,product_detail.price,
                brands.name AS brand_name ,
                galery.image AS galery_imgage, 
                size.sizeValue AS size_sizeValue, 
                color.name AS color_name,
                product_detail.id AS idproductdetail
                FROM product
                JOIN product_detail ON product_detail.id_product = product.id 
                JOIN (
                    SELECT id_product, MIN(id) AS first1_id
                    FROM galery
                    GROUP BY id_product
                ) first1 ON product.id = first1.id_product
                JOIN galery ON first1.first1_id = galery.id
                JOIN brands ON brands.id = product.id_brands
                JOIN size ON product_detail.id_size = size.id
                JOIN color ON product_detail.id_color = color.id
                WHERE `id_cate` = $id_cate";
    } else {
        $sql = "SELECT product.*,product_detail.price,
                brands.name AS brand_name ,
                galery.image AS galery_imgage, 
                size.sizeValue AS size_sizeValue, 
                color.name AS color_name,
                product_detail.id AS idproductdetail
                FROM product
                JOIN product_detail ON product_detail.id_product = product.id 
                JOIN (
                    SELECT id_product, MIN(id) AS first1_id
                    FROM galery
                    GROUP BY id_product
                ) first1 ON product.id = first1.id_product
                JOIN galery ON first1.first1_id = galery.id
                JOIN brands ON brands.id = product.id_brands
                JOIN size ON product_detail.id_size = size.id
                JOIN color ON product_detail.id_color = color.id ";           
    }       
    return pdo_query($sql);

}

// function search_products($keyword) {
//     $keyword = '%' . $keyword . '%';
//     $sql = "SELECT product.*, product_detail.price, 
//                 brands.name AS brand_name,
//                 galery.image AS galery_imgage,
//                 size.sizeValue AS size_sizeValue, 
//                 color.name AS color_name,
//                 product_detail.id AS idproductdetail
//             FROM product
//             JOIN product_detail ON product_detail.id_product = product.id
//             JOIN (
//                 SELECT id_product, MIN(id) AS first1_id
//                 FROM galery
//                 GROUP BY id_product
//             ) first1 ON product.id = first1.id_product
//             JOIN galery ON first1.first1_id = galery.id
//             JOIN brands ON brands.id = product.id_brands
//             JOIN size ON product_detail.id_size = size.id
//             JOIN color ON product_detail.id_color = color.id
//             WHERE product.name LIKE :keyword 
//                OR brands.name LIKE :keyword";
    
//     return pdo_query($sql, ['keyword' => $keyword]);
// }


function load_product($id_cate = 0) {
    if ($id_cate > 0) {
        $sql = "SELECT product.*, brands.name AS brand_name FROM product 
                JOIN brands ON product.id_brands = brands.id 
                WHERE `id_cate` = $id_cate";
    } else {
        $sql = "SELECT product.*, brands.name AS brand_name FROM product 
                JOIN brands ON product.id_brands = brands.id";
    }
    return pdo_query($sql);
}

// function load_all_products() {
//     $sql = "SELECT product.*, brands.name AS brand_name FROM product 
//             JOIN brands ON product.id_brands = brands.id";
//     return pdo_query($sql);
// }
function load_all_products() {
    $sql = "SELECT product.*,product_detail.price,
                brands.name AS brand_name ,
                galery.image AS galery_imgage, 
                size.sizeValue AS size_sizeValue, 
                color.name AS color_name,
                product_detail.id AS idproductdetail
                FROM product
                JOIN product_detail ON product_detail.id_product = product.id 
                JOIN (
                    SELECT id_product, MIN(id) AS first1_id
                    FROM galery
                    GROUP BY id_product
                ) first1 ON product.id = first1.id_product
                JOIN galery ON first1.first1_id = galery.id
                JOIN brands ON brands.id = product.id_brands
                JOIN size ON product_detail.id_size = size.id
                JOIN color ON product_detail.id_color = color.id ";
    return pdo_query($sql);
}

// function insert_image($id_product, $image) {
//     if (!is_int($id_product) || $id_product <= 0) {
//         throw new InvalidArgumentException('ID sản phẩm không hợp lệ.');
//     }

//     $sql = "INSERT INTO `galery` (`id_product`, `image`) VALUES (:id_product, :image)";
//     $params = [
//         ':id_product' => $id_product,
//         ':image' => $image
//     ];
//     return pdo_execute($sql, $params);
// }

function load_images_by_product($id_product) {
    $sql = "SELECT * FROM `galery` WHERE `id_product` = $id_product";
    return pdo_query($sql);
}

// function load_one_product($id) {
//     $sql = "SELECT product.*, brands.name AS brand_name FROM product 
//             JOIN brands ON product.id_brands = brands.id 
//             WHERE product.id = $id";
//     return pdo_query_one($sql);
// }
function load_one_product($id) {
    $sql = "SELECT product.*,
            product_detail.price,
            product_detail.id_size,
            product_detail.id_color,
            brands.name AS brand_name ,
            galery.image AS galery_imgage, 
            size.sizeValue AS size_sizeValue, 
            color.name AS color_name,
            product_detail.id AS idproductdetail
            FROM product
            JOIN product_detail ON product_detail.id_product = product.id 
            JOIN (
                SELECT id_product, MIN(id) AS first1_id
                FROM galery
                GROUP BY id_product
            ) first1 ON product.id = first1.id_product
            JOIN galery ON first1.first1_id = galery.id
            JOIN brands ON brands.id = product.id_brands
            JOIN size ON product_detail.id_size = size.id
            JOIN color ON product_detail.id_color = color.id
            WHERE product.id = $id";
    return pdo_query_one($sql);
}
function load_one_product_name($name) {
    $sql = "SELECT * FROM product 
            WHERE `name` = '$name'";
    return pdo_query_one($sql);
}



// function insert_product($name, $description, $priceSale, $quantity, $status, $id_cate, $id_brands) {
//     $sql = "INSERT INTO `product`, 
//             (`id`,`name`, `description`, `priceSale`, `quantity`, `status`, `create_at`, `update_at`, `id_cate`, `id_brands`) 
//             VALUES 
//             (NULL, '$name', '$description', $priceSale, $quantity, '$status', NOW(), NOW(), $id_cate, $id_brands)";
//     return pdo_execute($sql);
// }

function insert_product($name, $description, $priceSale, $quantity, $status,  $id_cate, $id_brands) {
    $sql = "INSERT INTO `product` (`id`,`name`, `description`,  `priceSale`, `quantity`, `status`, `create_at`,`update_at`, `id_cate`, `id_brands`)
            VALUES (NULL,'$name', '$description', '$priceSale', '$quantity', '$status', NOW(),NOW(), '$id_cate',  '$id_brands')";
    return pdo_execute($sql);
}

function update_product($name, $description, $priceSale, $quantity, $status,  $id_cate, $id_brands, $id) {
    $sql = "UPDATE `product` SET `name` = '$name', `description` = '$description', `priceSale` = '$priceSale',  `quantity` = '$quantity', 
            `status` = '$status', `update_at` = NOW(), `id_cate` = '$id_cate', `id_brands` = '$id_brands' WHERE `id` = $id";
    return pdo_execute($sql);
}
?>
