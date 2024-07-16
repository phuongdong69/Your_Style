<?php

    include "layout/header.php";
    include "layout/box_left.php";
 
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
   
            case 'buttons':
                include "./view/buttons.php";
                break;
            case 'cards':
                include "./view/cards.php";
                break;
            case 'color': //utilities-color
                include "./view/utilities-color.php";
                break;
            case 'border': //utilities-border
                include "./view/utilities-border.php";
                break;
            case 'utilities-animation': //utilities-animation
                include "./view/utilities-animation.php";
                break;
            case 'other': //utilities-other
                include "./view/utilities-other.php";
                break;
            case 'login': // Dang Nhap
                include "./view/login.php";
                break;
            case 'register': //dang ky
                include "./view/register.php";
                break;
            case 'forgot-password': // Quen mat khau
                include "./view/forgot-password.php";
                break;
            case '404': 
                include "./view/404.php";
                break;
            case 'blank': 
                include "./view/blank.php";
                break;
            case 'charts': 
                include "./view/charts.php";
                break;
            case 'tables': 
                include "./view/tables.php";
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