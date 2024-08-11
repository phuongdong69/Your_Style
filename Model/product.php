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
                join (
                     Select id_product, MIN(id) AS first_id
                     FROM product_detail
                     GROUP BY id_product
                )first on product.id = first.first_id
                JOIN product_detail ON product_detail.id_product = first.first_id

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
                join (
                     Select id_product, MIN(id) AS first_id
                     FROM product_detail
                     GROUP BY id_product
                )first on product.id = first.id_product
                JOIN product_detail ON product_detail.id = first.first_id

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
//hàm phụ để lọc danh mục ở web
function load_all_product($id_cate = 0) {
    if ($id_cate > 0) {
        $sql = "SELECT DISTINCT  product.*,product_detail.price,
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
    //lọc tránh sản phẩm bị lặp
    $products = pdo_query($sql);
    $unique_products = [];

    foreach ($products as $product) {
        if (!isset($unique_products[$product['id']])) {
            $unique_products[$product['id']] = $product;
        }
    }

    return array_values($unique_products);     
    return pdo_query($sql);

}
function load_all_products_by_brand($id_brands) {
    $sql = "SELECT DISTINCT product.*, product_detail.price,
            brands.name AS brand_name,
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
            WHERE product.id_brands = $id_brands";
            //lọc tránh sản phẩm bị lặp
    $products = pdo_query($sql);
    $unique_products = [];

    foreach ($products as $product) {
        if (!isset($unique_products[$product['id']])) {
            $unique_products[$product['id']] = $product;
        }
    }

    return array_values($unique_products);
    return pdo_query($sql);
}

//search
function load_all_products_by_keyword($keyword) {
    $sql = "SELECT DISTINCT 
            product.*,
            product_detail.price,
            brands.name AS brand_name,
            galery.image AS galery_imgage, 
            size.sizeValue AS size_sizeValue, 
            color.name AS color_name,
            product_detail.id AS idproductdetail
            FROM product
            JOIN product_detail ON product_detail.id_product = product.id 
            JOIN 
            (SELECT id_product, MIN(id) AS first1_id
                FROM galery
                GROUP BY id_product
            ) first1 ON product.id = first1.id_product
            JOIN galery ON first1.first1_id = galery.id
            JOIN brands ON brands.id = product.id_brands
            JOIN size ON product_detail.id_size = size.id
            JOIN color ON product_detail.id_color = color.id
            WHERE 
                product.name LIKE '%$keyword%'
                OR brands.name LIKE '%$keyword%'";
    //lọc tránh sản phẩm bị lặp
    $products = pdo_query($sql);
    $unique_products = [];

    foreach ($products as $product) {
        if (!isset($unique_products[$product['id']])) {
            $unique_products[$product['id']] = $product;
        }
    }

    return array_values($unique_products);
    return pdo_query($sql);
}
//thay đổi trạng thái sản phẩm
function update_product_status($id, $status) {
    // SQL query để cập nhật trạng thái sản phẩm
    $sql = "UPDATE `product` SET `status` = '$status' WHERE `id` = $id";
    
    // Gọi hàm pdo_execute để thực thi truy vấn SQL
    return pdo_execute($sql);
}
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

function load_all_products_img1($id_cate ) {
    if($id_cate > 0){
    $sql = "SELECT product.*, brands.name AS brand_name,galery.image AS galery_imgage, product_detail.*
    FROM product 
    JOIN (
                    SELECT id_product, MIN(id) AS first1_id
                    FROM galery
                    GROUP BY id_product
                ) first1 ON product.id = first1.id_product
    JOIN galery ON first1.first1_id = galery.id    
    JOIN brands ON brands.id = product.id_brands
    join (
                    SELECT id_product, MIN(id) AS first_id
                    FROM product_detail
                    GROUP BY id_product
                ) `first` ON product.id = first.id_product
    JOIN product_detail ON first.first_id = product_detail.id             
    WHERE `id_cate` = $id_cate";
    }else{
        $sql = "SELECT product.*, brands.name AS brand_name,galery.image AS galery_imgage,product_detail.*
    FROM product 
    FROM product 
    JOIN (
                    SELECT id_product, MIN(id) AS first1_id
                    FROM galery
                    GROUP BY id_product
                ) first1 ON product.id = first1.id_product
    JOIN galery ON first1.first1_id = galery.id    
    JOIN brands ON brands.id = product.id_brands
    join (
                    SELECT id_product, MIN(id) AS first_id
                    FROM product_detail
                    GROUP BY id_product
                ) `first` ON product.id = first.id_product
    JOIN product_detail ON first.first_id = product_detail.id  ";
    }
    return pdo_query($sql);
}
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


function load_images_by_product($id_product) {
    $sql = "SELECT * FROM `galery` WHERE `id_product` = $id_product";
    return pdo_query($sql);
}

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

function insert_product($name, $description, $priceSale, $quantity, $id_cate, $id_brands) {
    $sql = "INSERT INTO `product` (`id`,`name`, `description`,  `priceSale`, `quantity`, `create_at`,`update_at`, `id_cate`, `id_brands`)
            VALUES (NULL,'$name', '$description', '$priceSale', '$quantity', NOW(),NOW(), '$id_cate',  '$id_brands')";
    return pdo_execute($sql);
}

function update_product($name, $description, $priceSale, $quantity, $id_cate, $id_brands, $id) {
    $sql = "UPDATE `product` SET `name` = '$name', `description` = '$description', `priceSale` = '$priceSale',  `quantity` = '$quantity', 
            `update_at` = NOW(), `id_cate` = '$id_cate', `id_brands` = '$id_brands' WHERE `id` = $id";
    return pdo_execute($sql);
}
?>


