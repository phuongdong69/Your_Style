<?php 
function insert_bill_status($status){
    $sql = "INSERT INTO `bill_status` (`id`, `status`) VALUES (NULL, '$status');";
    return pdo_execute($sql);
}

function load_bs(){
    $sql = "SELECT * FROM `bill_status`";
    return pdo_query($sql);
}

function update_bs($status, $id){
    $sql = "UPDATE `bill_status` SET `status` = '$status' WHERE `id` = $id;";
    return pdo_execute($sql);
}

function load_one_bs($id){
    $sql = "SELECT * FROM `bill_status` WHERE `id`=$id;";
    return pdo_query_one($sql);
}
