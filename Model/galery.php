<?php
  
    function insert_galery($image,$id_product){
        $sql = "INSERT INTO `galery` ( `id`,`image`,`id_product` ) 
        VALUES (NULL, '$image', '$id_product');";
        return pdo_execute($sql);
    }
?>