<?php
    function load_size(){
        $sql = "SELECT * FROM `size`";
        $listsize = pdo_query($sql);
        return $listsize;
    }

    function insert_size($sizeValue){
        $sql = "INSERT INTO `size` ( `id`,`sizeValue` ) 
        VALUES (NULL, '$sizeValue');";
        return pdo_execute($sql);
    }
    function update_size($id, $sizeValue){
        $sql = "UPDATE `size` SET `sizeValue` = '$sizeValue' WHERE `id` = $id;";
        return pdo_execute($sql);
    }
    
    function load_one_size($id){
        $sql = "SELECT * FROM `size` WHERE `id`=$id;";
        return pdo_query_one($sql);
    }

    function load_all_sizes() {
        $sql = "SELECT * FROM size";
        return pdo_query($sql);
    }
?>