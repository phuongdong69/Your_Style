<?php
function load_brands(){
    $sql = "SELECT * FROM `brands`";
    $listbrands = pdo_query($sql);
    return $listbrands;
}

function insert_brands($name){
    $sql = "INSERT INTO `brands` ( `id`,`name`) 
    VALUES (NULL, '$name');";
    return pdo_execute($sql);
}
function update_brands($name, $id){
    $sql = "UPDATE `brands` SET `name` = '$name' WHERE `id` = $id;";
    return pdo_execute($sql);
}

function load_one_brands($id){
    $sql = "SELECT * FROM `brands` WHERE `id`=$id;";
    return pdo_query_one($sql);
}
?>

