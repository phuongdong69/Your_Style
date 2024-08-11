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
        case "cart": //giỏ hàng
            if(isset($_POST['dathang']) && $_POST['dathang']) {
                // Lấy giá trị từ form
                $img = $_POST['image'];
                $name = $_POST['name']; 
                $color = $_POST['color'];
                $size = $_POST['size'];
                $price = $_POST['price'];
                $soluong = $_POST['quantity'];
                $id = $_POST['id'];
                
                // Tạo mảng sản phẩm
                $sp = array($id, $img, $name, $color, $size, $price, $soluong);
                
                // Thêm vào giỏ hàng
                if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
                array_push($_SESSION['cart'], $sp);
                // var_dump($_SESSION['cart']);
                // header('Location: index.php?act=cart');
                
            }
            // var_dump($_SESSION['cart']);
            include "view/cart/cart.php";
            break;

        case "addtocart":

                include "view/cart/addtocart.php";
                break;
        case "xoadh":
                    if(isset($_SESSION['cart'])) unset ($_SESSION['cart']); 
                include "view/layout/home.php";
                break;
        case "mua": //Mua Ngay
            include "view/mua.php";
            break;

        case "trangthaitt": 
            include "view/trangthaitt.php";
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
        
        case "search": // Tìm kiếm
            if (isset($_POST['timkiem'])) {
                $tukhoa = $_POST['tukhoa'];
                // Gọi hàm tìm kiếm sản phẩm theo từ khóa
                $listSanPham = load_all_products_by_keyword($tukhoa);
            } else {
                // Nếu không có từ khóa, lấy tất cả sản phẩm
                $listSanPham = load_all_products_img();
            }
            // Lấy danh mục
            $listcate = load_category();
            // Bao gồm file giao diện hiển thị kết quả tìm kiếm
            include "view/product/search.php";
            break;
            $listcate = load_category();
            include "view/product/search.php";
            break;
        case 'categorysp': //áo
                if (isset($_GET['tukhoa'])) {
                    $tukhoa = $_GET['tukhoa'];
                    // Load sản phẩm theo từ khóa
                    $listSanPham = load_all_products_by_keyword($tukhoa);
                } elseif (isset($_GET['id']) && $_GET['id'] > 0) {
                    $id_cate = $_GET['id'];
                    $l_cate = load_one_category($id);
                    if ($l_cate) {
                        $name = $l_cate['name'];
                        extract($l_cate);
                        // Load danh sách sản phẩm theo danh mục
                        $listSanPham = load_all_product($id_cate);
                    }
                }
                include "view/product/categorysp.php";
                break;
        case 'brandsp':
                if(isset($_GET['id']) && $_GET['id'] > 0) {
                    $id_brands = $_GET['id'];
                    $l_brands = load_one_brands($id);
                    if ($l_brands) {
                        $name = $l_brands['name'];
                        extract($l_brands);
                        // Load danh sách sản phẩm theo danh mục
                        $listSanPham = load_all_products_by_brand($id_brands);
                    }
                }
                include "view/product/brandsp.php";
                break;
        


        case "forgotpass": 
            $repass="";
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $phoneNumber = $_POST['phone_number'];
                $test = load_getpassword_user($username,$email,$phoneNumber);
                if($test !=""){
                    extract($test);
                    $repass = "Mật khẩu của bạn là: ".$password;
                }
            }
            include "view/user/forgotpass.php";
            break;


        case "login": //đăng nhập
            $errorMsg=NULL;
            if(isset($_POST['login'])){
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                $test = load_login_users($username, $password);
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
                $birthday = $_POST['birthday'];$address = $_POST['address'];
                $name = $_POST['name'];
                if($password == $repassword){
                    insert_user($name,$phoneNumber,$email,$birthday,$address,$username,$password);
                    $erorrMsg = "Đăng ký tài khoản thành công";
                    header("Location:index.php?act=login");
                    break;
                }
                else{
                    $erorrMsg = "Thông tin đăng ký chưa hợp lý, vui lòng nhập lại";
                    header("Location:index.php?act=register");
                    break;
                }}else{
                    include "view/user/register.php";
                    break;
                }
        case 'sanphamct':
            if(isset($_GET['id']) && ($_GET['id']> 0)){
                $id = $_GET['id'];
                $onesp = load_one_product($id);
                extract($onesp);
                // $listsize = load_all_sizes();
                // $listcolor = load_all_colors();
                $images = load_images_by_product($id); // Lấy hình ảnh của sản phẩm nhưng chưa được
                $pro_detail = load_productdetail($_GET['id']);
                // extract($pro_detail);
                include "view/product/productdetail.php";
            }  
             
            break;

        // Xử lý xóa sản phẩm khỏi giỏ hàng
        case 'deletecart':
            if (isset($_GET['index'])) {
                $index = $_GET['index'];
                delete_cart_item($index);
            }
            header('Location: index.php?act=cart');
            break;
        
    }

   }else{
    

    include "view/layout/home.php";

   }



   
    include "view/layout/footer.php";

?>