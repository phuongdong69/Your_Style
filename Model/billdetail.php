<?php

function load_bill_detail(){
    $sql = "SELECT * FROM `bill_detail` "; 
    "SELECT `bill_detail`.`id`,`bill_detail`.`id_bill`,`bill`.`id` FROM `bill_detail`
    join `bill` on `bill_detail`.`id_bill` = `bill`.`id` ";
    "SELECT `bill_detail`.`id`,`bill_detail`.`id_bill_status`,`bill`.`id` FROM `bill_detail`
    join `bill_status` on `bill_detail`.`id_bill_status` = `bill_status`.`id` ";
    "SELECT `bill_detail`.`id`,`bill_detail`.`id_product`,`product`.`id` FROM `bill_detail`
    join `product` on `bill_detail`.`id_product` = `product`.`id` ";
    $listbdt = pdo_query($sql);
    return $listbdt;
}

function insert_bill_detail($id_product,$id_bill,$id_voucher,$id_bill_status,$quantity,$payment,$note){
    $sql = "INSERT INTO `bill_detail` (`id`,`id_product`, `id_bill`,  `id_voucher`, `id_bill_status`,`quantity`, `payment`, `note`)
            VALUES (NULL,'$id_product', '$id_bill',  '$id_voucher', '$id_bill_status','$quantity', '$payment', '$note')";
    return pdo_execute($sql);
}

?>
