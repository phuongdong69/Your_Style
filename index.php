<?php
    include "./Model/category.php";
    include "./Model/galery.php";
    include "./Model/product.php";
    include "./Model/product_detail.php";
    include "./Model/size.php";
    include "./Model/brand.php";
    include "./Model/bill_status.php";
    include "./Model/billdetail.php";
    include "./Model/color.php";
    include "./Model/pdo.php";
    
    $listSanPham = load_all_products_img($id_cate = 0);
    $listcate = load_category();







    include "view/header.php";
   if(isset($_GET['act'])){
    switch ($_GET['act']) {
        //service dịch vụ
        case "news": //tin tức
            include "view/news.php";
            break;
        case "cart": //giỏ hàng
            include "view/cart.php";
            break;
        case "mua": //Mua Ngay
            include "view/mua.php";
            break;

        case "ptttatm": //Mua Ngay
            include "view/ptttatm.php";
            break;
        case "ptttmm": //Mua Ngay
            include "view/ptttmm.php";

            break;
        case "details": //Chi Tiết SP
            include "view/details.php";
            break;
        case 'introduce': //giới thiệu
            include "view/introduce.php";
            break;
        case 'feedback': //góp ý
            include "view/feedback.php";
            break;
        case 'support': //hỗ trợ
            include "view/support.php";
            break;
        case "contact": //liên hệ
            include "view/contact.php";
            break;
        //task bar thanh tác vụ
        case 'shirt': //áo
            include "view/shirt.php";
            break;
        case 'pants': //quần
            include "view/pants.php";
            break;
        case "dior": //brand
            include "view/brand_dior.php";
            break;
        case "gucci": //brand
            include "view/brand_gucci.php";
            break;
        case "login": //đăng nhập
            include "view/login.php";
            break;
        case "register": //đăng ký
            include "view/register.php";
            break;







        // default:
        //     include "view/home.php";
        //     break;
    }

   }else{
    include "view/home.php";

   }



   
    include "view/footer.php";

?>