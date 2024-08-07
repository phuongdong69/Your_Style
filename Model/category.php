<?php
function load_category(){
    $sql = "SELECT * FROM `category`";
    $listcategory = pdo_query($sql);
    return $listcategory;
}
function insert_category($name,$status){
    $sql = "INSERT INTO `category` ( `id`,`name`,`status`) 
    VALUES (NULL, '$name', '$status');";
    return pdo_execute($sql);
}
function update_category($name, $status, $id){
    $sql = "UPDATE `category` SET `name` = '$name', `status` = '$status' WHERE `id` = $id;";
    return pdo_execute($sql);
}

function load_one_category($id){
    $sql = "SELECT * FROM `category` WHERE `id`=$id;";
    return pdo_query_one($sql);
}

// function load_category_shirts(){
//     $sql = "SELECT * FROM `category` WHERE `name` LIKE '%áo%'";
//     return pdo_query($sql);
// }


// function load_category_pants(){
//     $sql = "SELECT * FROM `category` WHERE `name` LIKE '%quần%'";
//     return pdo_query($sql);
// }
// Function mới để lấy danh sách category theo tiêu chí lọc
function load_category_by_filter($filter) {
    $sql = "SELECT `id`, `name` FROM `category` WHERE `name` LIKE '%$filter%'";
    return pdo_query($sql);
}
function loadall_thongke(){
    $sql = "SELECT category.id AS madm, category.name AS tendm, 
                   COUNT(product.id) AS countsp, 
                   MIN(product_detail.price) AS minprice, 
                   MAX(product_detail.price) AS maxprice, 
                   AVG(product_detail.price) AS avgprice";
    $sql .= " FROM product";
    $sql .= " LEFT JOIN category ON category.id = product.id_cate";
    $sql .= " LEFT JOIN product_detail ON product_detail.id_product = product.id";
    $sql .= " GROUP BY category.id ORDER BY category.id";
    $listtk = pdo_query($sql);
    return $listtk;
}

?>

