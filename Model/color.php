<?php
function load_color(){
    $sql = "SELECT * FROM `color`";
    $listcolor = pdo_query($sql);
    return $listcolor;
}

function insert_color($name){
    $sql = "INSERT INTO `color` ( `id`,`name`) 
    VALUES (NULL, '$name');";
    return pdo_execute($sql);
}
function update_color($name, $id){
    $sql = "UPDATE `color` SET `name` = '$name' WHERE `id` = $id;";
    return pdo_execute($sql);
}

function load_one_color($id){
    $sql = "SELECT * FROM `color` WHERE `id`=$id;";
    return pdo_query_one($sql);
}

function load_all_colors() {
    $sql = "SELECT * FROM color";
    return pdo_query($sql);
}

?>

