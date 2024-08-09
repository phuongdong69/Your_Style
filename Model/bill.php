<?php
function load_bill()
{
    $sql = "SELECT * FROM `bill` ";
    return pdo_query($sql);
}

// function insert_bill($creat_at, $name, $phoneNumber, $email, $address)
// {
//     $sql = "INSERT INTO `bill` ( `id`,`creat_at`,`id_user`,`name`,`phoneNumber`,`email`,`address`) 
//         VALUES (NULL, '$creat_at', NULL, '$name', '$phoneNumber', '$email', '$address');";
//     return pdo_execute($sql);
// }
function insert_bill( $name, $phoneNumber, $email, $address)
{
    if($id_user= ""){
        $sql = "INSERT INTO `bill` ( `id`,`creat_at`,`id_user`,`name`,`phoneNumber`,`email`,`address`) 
        VALUES (NULL, NOW(), NULL, '$name', '$phoneNumber', '$email', '$address');";
    }else{
        $sql = "INSERT INTO `bill` ( `id`,`creat_at`,`id_user`,`name`,`phoneNumber`,`email`,`address`) 
        VALUES (NULL, NOW(), $id_user, '$name', '$phoneNumber', '$email', '$address');";
    }
    
    return pdo_execute($sql);
}
// function update_bill($id, $creat_at, $id_user, $name, $phoneNumber, $email, $address)
// {
//     $sql = "UPDATE `bill` SET `creat_at` = '$creat_at', `id_user` = NULL, `name` = '$name', `phoneNumber` = '$phoneNumber',
//         `email` = '$email',`address` = '$address' WHERE `id` = $id;";
//     return pdo_execute($sql);
// }
// function update_bill($id, $creat_at, $id_user, $name, $phoneNumber, $email, $address)
// {
//     $sql = "UPDATE `bill` SET `creat_at` = '$creat_at', `id_user` = NULL, `name` = '$name', `phoneNumber` = '$phoneNumber',
//         `email` = '$email',`address` = '$address' WHERE `id` = $id;";
//     return pdo_execute($sql);
// }

function load_one_bill_id($id)
{
    $sql = "SELECT bill.*, bill_detail.*,bill_status.name,product_detail.* ,
            color.name AS color_name, size.sizeValue, brands.name AS brand_name
    FROM `bill_detail` 
    join  bill on bill.id = bill_detail.id_bill
    join  bill_status on bill_status.id = bildetail.id_bill_status
    join  product_detail on product_detail.id = bill_detail.id_product_detail
    join  product on product.id = product_detail.id_product
    join  brands on brands.id = product.id_brands 
    join  color on color.id = product_detail.id_color
    join  `size` on  `size`.id = product_detail.id_size 
    WHERE `id`=$id;";
    return pdo_query_one($sql);
}
 function delete_bill($id){
    $sql = "DELETE FROM bill where id= $id";
    return pdo_execute($sql);
 }