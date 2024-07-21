<?php
    function insert_productdetail($id,$price,$id_product,$id_size,$id_color){
        $sql = "INSERT INTO `product_detail` (`id`,`price`,`id_product`,`id_size`,`id_color`) VALUES (NULL,'$price','$id_product','$id_size','$id_color');";
        return pdo_execute($sql);
    } 
    function load_productdetail(){
        $sql = "SELECT * FROM `product_detail`";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    
?>