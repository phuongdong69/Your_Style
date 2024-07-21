<?php
function load_category(){
    $sql = "SELECT * FROM `category`";
    $listcategory = pdo_query($sql);
    return $listcategory;
}

function insert_category($name,$status){
    $sql = "INSERT INTO `category` (`id`, `name`,`status`) VALUES (NULL,'$name','$status');";
    return pdo_execute($sql);
}
function update_category($name,$status,$id){
    $sql = "UPDATE `category` SET `name` = '$name',`status` = '$status' WHERE `id`=$id;";
    return pdo_execute($sql);
}
function load_one_category($id){
    $sql = "SELECT * FROM `category` WHERE `id`=$id;";
    return pdo_query_one($sql);
}

?>

