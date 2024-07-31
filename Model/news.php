<?php
function load_news(){
    $sql = "SELECT * FROM `news`";
    $listnews = pdo_query($sql);
    return $listnews;
}

function insert_news($title, $intro, $detail, $create_at, $update_at){
    $sql = "INSERT INTO `news` ( `title`,`intro`,`detail`,`create_at`,`update_at`) 
    VALUES ('$title', '$intro','$detail', '$create_at', '$update_at');";
    return pdo_execute($sql);
}
function update_news($title, $intro, $detail, $update_at,$id){
    $sql = "UPDATE `news` SET `title` = '$title', `intro` = '$intro', `detail` = '$detail', `update_at` = '$update_at' WHERE `id` = $id;";
    return pdo_execute($sql);
}

function load_one_news($id){
    $sql = "SELECT * FROM `news` WHERE `id`=$id;";
    return pdo_query_one($sql);
}
?>

