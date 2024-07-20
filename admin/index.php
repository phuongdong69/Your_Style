<?php
 include "layout/header.php";
     include "layout/box_left.php";
   
   

    if(isset($_GET['act'])){
        switch ($_GET['act']) {

            case 'listsp':
                include "./view/sanpham/listsp.php";
                break;
            case 'addsp':
                include "./view/sanpham/addsp.php";
                break;
        

            default:
                include "./layout/home.php";
                break;

            
        }
    }else{
        include "layout/home.php";
    }
    include "layout/footer.php";
        ?>
