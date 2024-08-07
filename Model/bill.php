<?php
function load_bill()
{
    $sql = "SELECT * FROM `bill` ";
    return pdo_query($sql);
}
function delete_bill($id)
{
    $sql = "DELETE FROM `bill`
        WHERE `bill`.`id` = " . $id;
    return pdo_execute($sql);
}
// function insert_bill($creat_at, $name, $phoneNumber, $email, $address)
// {
//     $sql = "INSERT INTO `bill` ( `id`,`creat_at`,`id_user`,`name`,`phoneNumber`,`email`,`address`) 
//         VALUES (NULL, '$creat_at', NULL, '$name', '$phoneNumber', '$email', '$address');";
//     return pdo_execute($sql);
// }
function insert_bill( $name, $phoneNumber, $email, $address)
{
    $sql = "INSERT INTO `bill` ( `id`,`creat_at`,`id_user`,`name`,`phoneNumber`,`email`,`address`) 
        VALUES (NULL, NOW(), NULL, '$name', '$phoneNumber', '$email', '$address');";
    return pdo_execute($sql);
}
// function update_bill($id, $creat_at, $id_user, $name, $phoneNumber, $email, $address)
// {
//     $sql = "UPDATE `bill` SET `creat_at` = '$creat_at', `id_user` = NULL, `name` = '$name', `phoneNumber` = '$phoneNumber',
//         `email` = '$email',`address` = '$address' WHERE `id` = $id;";
//     return pdo_execute($sql);
// }
function update_bill($id, $creat_at, $id_user, $name, $phoneNumber, $email, $address)
{
    $sql = "UPDATE `bill` SET `creat_at` = '$creat_at', `id_user` = NULL, `name` = '$name', `phoneNumber` = '$phoneNumber',
        `email` = '$email',`address` = '$address' WHERE `id` = $id;";
    return pdo_execute($sql);
}

function load_one_bill($id)
{
    $sql = "SELECT * FROM `bill` WHERE `id`=$id;";
    return pdo_query_one($sql);
}
