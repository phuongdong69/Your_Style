<?php
session_start();
ob_start();
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
    include "./Model/news.php";
    include "./Model/user.php";
    include "./Model/cart.php";
    $listSanPham = load_all_products_img($id_cate = 0);
    $listcate = load_category();







    include "view/layout/header.php";

    include "view/layout/top_bar.php";

   if(isset($_GET['act'])){
    switch ($_GET['act']) {
        //service dịch vụ
        case "news": //tin tức
            $listnews = load_news();
            include "view/news/news.php";
            break;
        case "newsdetail": 
                if (isset($_GET['id']) && $_GET['id']) {
                    $listnews = load_one_news($_GET['id']);
                    // extract($listnews);
                }
                include "view/news/newsdetail.php";

                break;
        case "home": 
            include "view/layout/home.php";

            break;
        case "xoadh": 
            include "view/cart/xoadh.php";
            break;
        case "cart": //giỏ hàng
            include "view/cart/cart.php";
            break;
        case "addtocart": //giỏ hàng
            include "view/cart/addtocart.php";
            break;
        case "mua": //Mua Ngay
            include "view/mua.php";
            break;

        case "ptttatm": //Mua Ngay
            include "view/thanhtoan/ptttatm.php";
            break;
        case "ptttmm": //Mua Ngay
            include "view/thanhtoan/ptttmm.php";

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
        case 'categorysp': //áo
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id_cate = $_GET['id'];
                $l_cate = load_one_category($id);
                if ($l_cate) {
                    $name = $l_cate['name'];
                    extract($l_cate);
                    // Load danh sách sản phẩm theo danh mục
                    $listSanPham = load_all_products_img($id_cate);
                }
            }
            include "view/product/categorysp.php";
            break;
        case 'pants': //quần
            include "view/pants.php";
            break;
        case "dior": //brand
            include "view/brand_dior.php";
            break;


        case "forgotpass": 
            
            include "view/user/forgotpass.php";
            break;


        case "login": //đăng nhậ
            $errorMsg=NULL;
            if(isset($_POST['login'])){
                $username=$_POST['username'];
                // $pass=sha1($_POST['pass']);
                $password=md5($_POST['password']);
                // $sql="select * from `user` where `username`='$username' and `password`= md5('$password')";
                $test = load_login_users($username, $password);
                // $result=$conn->query($test);
                if($test!=""){
                    extract($test);
                    $_SESSION['username']=$username;
                    $_SESSION['id_role']=$id_role;
                    var_dump( $_SESSION['username']);
                    header("Location:index.php");
                    break;
                }else{
                    $errorMsg ="Tên tài khoản hoặc mật khẩu chưa đúng, hãy đăng nhập lại";
                    include "view/user/login.php";
                    break;
                }
            }else{
                
                include "view/user/login.php";
                    break;
            }
            case 'logout':
                
                session_destroy();
                header("Location:index.php");
                break;
          
        case "register": //đăng ký
            $erorrMsg = "";
            if(isset($_POST['register']) && $_POST['register']){
                $email=$_POST['email'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $phoneNumber = $_POST['phoneNumber'];
                
                $repassword = $_POST['repassword'];
                
                // if($_POST['birthday'] == ""){
                //     $birthday = NULL;
                // }else{
                    $birthday = $_POST['birthday'];
                // }
                // if($_POST['address'] == ""){
                //     $address = NULL;
                // }else{
                    $address = $_POST['address'];
                // }
                $name = $_POST['name'];
                // echo "Cứu";
                //   include "view/user/login.php";
                if($password == $repassword){
                    insert_user($name,$phoneNumber,$email,$birthday,$address,$username,$password);
                    $erorrMsg = "Đăng ký tài khoản thành công";
                    header("Location:index.php?act=login");
                    break;
                }
                else{
                    $erorrMsg = "Thông tin đăng ký chưa hợp lý, vui lòng nhập lại";
                    // include "view/user/register.php";
                    header("Location:index.php?act=register");
                    break;
                }}else{
                    include "view/user/register.php";
                    break;
                }
        // case 'register':
        //     $erorrMsg = "";
        //     include "view/user/register.php";
        //     break;
        case 'sanphamct':
            if(isset($_GET['id']) && ($_GET['id']> 0)){
                $id = $_GET['id'];
                $onesp = load_one_product($id);
                extract($onesp);
                $listsize = load_all_sizes();
                $listcolor = load_all_colors();
                $images = load_images_by_product($id); // Lấy hình ảnh của sản phẩm nhưng chưa được
                include "view/product/productdetail.php";
            }
            //  else {
            //     include "view/layout/home.php";
            // }   
            break;
        
        







        // default:
        //     include "view/home.php";
        //     break;
    }

   }else{
    

    include "view/layout/home.php";

   }



   
    include "view/layout/footer.php";

?>