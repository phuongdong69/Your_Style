<?php
function load_vou()
{
    $sql = "SELECT * FROM `voucher` ";
    return pdo_query($sql);
}
function insert_vou($name)
{

        $sql = "INSERT INTO `voucher` ( `id`,`name`) 
        VALUES (NULL,'$name');";
      
    
    return pdo_execute($sql);
}
function update_vou($id, $name){
    $sql = "UPDATE `voucher` SET `name` = '$name' WHERE `id` = $id;";
    return pdo_execute($sql);
}
function load_one_vou($id){
    $sql = "SELECT * FROM `voucher` WHERE `id`=$id;";
    return pdo_query_one($sql);
}
?>