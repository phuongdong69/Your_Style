<?php
  
    function insert_galery($image,$id_product){
        $sql = "INSERT INTO `galery` ( `id`,`image`,`id_product` ) 
        VALUES (NULL, '$image', '$id_product');";
        return pdo_execute($sql);
    }
    function load_galery($id_product){
        $sql ="SELECT * FROM `galery`
        where `galery`.`id_product` = $id_product;";
        $listanh = pdo_query($sql);
        return $listanh;
    }
    
        function load_one_galery($id){
            $sql = "SELECT * FROM `galery` where `id.product` = $id";
            return pdo_query_one($sql);
        }
    
    function update_galery($image,$id){
        $sql= "UPDATE `galery` SET `image` = '$image' where `id`= $id";
        return pdo_execute($sql);
    }
    function delete_galery($id){
        $sql = "DELETE FROM `galery`
        WHERE `galery`.`id` = $id";
        return pdo_execute($sql);
    }
?>