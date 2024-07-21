<?php
function load_category(){
    $sql = "SELECT * FROM `category`";
    $listcategory = pdo_query($sql);
    return $listcategory;
}

function insert_category($id_cate,$name_cate,$status_cate){
    $sql = "INSERT INTO `category` (`id_cate`, `name_cate`,`status_cate`) VALUES ('$id_cate','$name_cate','$status_cate');";
    return pdo_execute($sql);
} 
?>
