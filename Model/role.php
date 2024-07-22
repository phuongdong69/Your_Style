<?php
        function insert_role($roleName){
            $sql = "INSERT INTO `role` ( `id`,`roleName`) 
            VALUES (NULL, '$roleName');";
            return pdo_execute($sql);
        }
      
        function load_role(){
            $sql ="SELECT * FROM `role`";
            $listrole = pdo_query($sql);
            return $listrole;
        }
     
        
        function load_one_role($id){
                $sql = "SELECT * FROM `role` where `id` =". $id;
                return pdo_query_one($sql);
            }
        
        function update_role($id,$roleName){
            $sql= "UPDATE `role` SET `roleName` = '$roleName' where `id`= $id";
            return pdo_execute($sql);
        }
     


?>