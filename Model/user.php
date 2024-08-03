<?php
 
function insert_user($name,$phoneNumber,$email,$sex,$username,$password){
    $sql="INSERT INTO `user` (`id`, `name`, `phoneNumber`, `email`, `sex`, `birthday`, `address`, `username`, `password`, `status`, `id_role`)
    s VALUES (NULL, '$name', '$phoneNumber', '$email', '$sex', NULL, NULL, '$username', MD5('$password'), 'Đang hoạt động', 1); ";
    return pdo_execute($sql);
}
function load_all_user(){
    $sql = "SELECT * FROM `user`";
    return pdo_query($sql);
}

function load_one_users($id){
    $sql = "SELECT * FROM `user` where `id` = $id";
    return pdo_query_one($sql);
}

function update_user_admin( $name,$phoneNumber,$email,$sex,$bỉthday,$address,$password,$status,$id){
    $sql = "UPDATE `user` SET `name` = '$name', `phoneNumber` = '$phoneNumber',`email` = '$email',`sex` = '$sex',`bỉthday` = '$bỉthday',`address` = '$address',`password` = '$password',`status` = '$status' WHERE `id` = $id;";
    return pdo_execute($sql);
}
function update_user( $name,$phoneNumber,$email,$sex,$bỉthday,$address,$password,$id){
    $sql = "UPDATE `user` SET `name` = '$name', `phoneNumber` = '$phoneNumber',`email` = '$email',`sex` = '$sex',`bỉthday` = '$bỉthday',`address` = '$address',`password` = '$password' WHERE `id` = $id;";
    return pdo_execute($sql);
}
function update_password( $id,$password){
    $sql = "UPDATE user SET `password` = '$password' WHERE `id` =$id";
    return pdo_execute($sql);
}
?>