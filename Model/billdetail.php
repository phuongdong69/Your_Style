<?php

// function load_bill_detail($id_bill){
//     $sql ="SELECT 
//         bill_detail.id,
//         bill_detail.id_product,
//         bill_detail.id_bill,
//         bill_detail.id_voucher,
//         bill_detail.id_bill_status,
//         bill_detail.quantity,
//         bill_detail.payment,
//         bill_detail.note,
//         product.name AS product_name,
//         voucher.name AS voucher_name,
//         bill_status.status AS bill_status
//         FROM bill_detail
//         JOIN product ON bill_detail.id_product = product.id
//           LEFT JOIN voucher ON bill_detail.id_voucher = voucher.id 
//         JOIN bill_status ON bill_detail.id_bill_status = bill_status.id
//         where `bill_detail`.`id_bill` = $id_bill;";
//         //sử dụng LEFT JOIN để xử lý trường hợp id_voucher có thể là NULL.
//     $listbdt = pdo_query($sql);
//     return $listbdt;
// }

// function load_one_bill_detail($id){
//     $sql = "SELECT * FROM `bill_detail` where id =". $id;
//     return pdo_query_one($sql);
// }
function update_bill_detail($id_product, $id_bill, $id_bill_status, $quantity, $payment, $note, $id) {
    $sql = "UPDATE `bill_detail`
    SET `id_product` = '$id_product', `id_bill` = '$id_bill',  `id_voucher` = NULL, `id_bill_status` = '$id_bill_status',
    `quantity` = '$quantity', `payment` = '$payment', `note` = '$note'
    WHERE `id` = $id;";
    return pdo_execute($sql);
}
function insert_bill_detail($id_product_detail, $id_bill, $quantity, $payment) {
    $sql = "INSERT INTO `bill_detail` (`id_product`, `id_bill`, `id_voucher`, `id_bill_status`, `quantity`, `payment`)
            VALUES ('$id_product_detail', '$id_bill', NULL, 'Đang chờ xác nhận đơn hàng', '$quantity', '$payment')";
    return pdo_execute($sql);
}

function load_bill_detail($id_bill){
    $sql = "SELECT * 
    FROM bill_detail
    where bill_detail.id_bill  = $id_bill ";
    return pdo_execute($sql);
}
function delete_bill_detail($id_bill){
    $sql = "UPDATE `bill_detail` SET `bill_detail`.`id_bill_status` = $id_bill";
}
?>
