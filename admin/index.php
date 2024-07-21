<?php
include "layout/header.php";
include "layout/box_left.php";

// Sửa đường dẫn nếu cần thiết
include "../Model/pdo.php"; 
include "../Model/product.php";
include "../Model/category.php";

include "../Model/size.php";

include "../Model/color.php";


if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        //Danh sách sản phẩm
        case 'listsp': //done show
            $listSanPham = load_product("", 0);
            include "./view/sanpham/listsp.php";
            break;
        case 'addsp': //done thêm sản phẩm
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $priceSale = $_POST['priceSale'];
                $quantity = $_POST['quantity'];
                $status = $_POST['status'];
                $create_at = $_POST['create_at'];
                $update_at = $_POST['update_at'];
                $id_cate = $_POST['id_cate'];
                $id_brands = $_POST['id_brands'];
                insert_product($name, $description, $price, $priceSale, $quantity, $status, $create_at, $update_at , $id_cate, $id_brands);
            $thongbao="Thêm thành công";
            }
            $listdanhmuc = load_category();
            include "./view/sanpham/addsp.php";
            break;
        case 'updatesp': //sửa done
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $product = load_one_product($_GET['id']);
                    extract($product);
                }
                if (isset($_POST['capnhatsanpham'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $price = $_POST['price'];
                    $priceSale = $_POST['priceSale'];
                    $quantity = $_POST['quantity'];
                    $status = $_POST['status'];
                    $update_at = $_POST['update_at'];
                    $id_cate = $_POST['id_cate'];
                    $id_brands = $_POST['id_brands'];
                    update_product($name, $description, $price, $priceSale, $quantity, $status, $update_at, $id_cate, $id_brands, $id);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = load_category();
        include "./view/sanpham/updatesp.php";
        break;

        //Danh mục sản phẩm
        case 'listdm': //done danh mục
            $listcategory = load_category("", 0); 
            include "./view/danhmuc/listdm.php";
            break;
        case 'adddm':
            if (isset($_POST['themdanhmuc']) && ($_POST['themdanhmuc'])) {
                $name = $_POST['name'];
                $status = $_POST['status'];
                insert_category($name,$status);
                $thongbao = "Thêm thành công";
            } 
            include "./view/danhmuc/adddm.php";
            break;
            case 'updatedm':
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    $danhmuc = load_one_category($_GET['id']);
                    extract($danhmuc);
                }
            
                if (isset($_POST['capnhatdanhmuc'])){
                    $name = trim($_POST['name']);
                    $status = trim($_POST['status']);
                    update_category($name, $status, $_GET['id']);
                    $thongbao = "Cập nhật thành công";
                    $danhmuc = load_one_category($_GET['id']);
                    extract($danhmuc);
                }
                $listdanhmuc = load_category();
                include "./view/danhmuc/updatedm.php";
                break;

            case 'addimg':
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    $danhmuc = load_one_category($_GET['id']);
                    extract($danhmuc);
                }


            // color
            case 'listcl':
                $listcolor = load_color();
                include "./view/color/listcl.php";
                break;
                case 'addcl':
                    if (isset($_POST['themcolor']) && ($_POST['themcolor'])) {
                        $name = $_POST['name'];
                        insert_color($name);
                        $thongbao = "Thêm thành công";
                    } 
                    include "./view/color/addcl.php";
                    break;
                    case 'updatecl':
                        if (isset($_GET['id']) && $_GET['id'] > 0){
                            $color = load_one_color($_GET['id']);
                            extract($color);
                        }
                    
                        if (isset($_POST['capnhatcolor'])){
                            $name = trim($_POST['name']);
                            update_color($name, $_GET['id']);
                            $thongbao = "Cập nhật thành công";
                            $color = load_one_color($_GET['id']);
                            extract($color);
                        }
                        $listcolor = load_color();
                        include "./view/color/updatecl.php";
                        break;

            
                if (isset($_POST['capnhatdanhmuc'])){
                    $name = trim($_POST['name']);
                    $status = trim($_POST['status']);
                    update_category($name, $status, $_GET['id']);
                    $thongbao = "Cập nhật thành công";
                    $danhmuc = load_one_category($_GET['id']);
                    extract($danhmuc);
                }
                $listdanhmuc = load_category();
                include "./view/danhmuc/updatedm.php";
                break;
            // Size
            case 'listsz': 
                $listsize = load_size(); 
                include "./view/size/listsz.php";
                break;
            case 'addsz':
                    if (isset($_POST['themsize']) && ($_POST['themsize'])) {
                        $sizeValue = $_POST['sizeValue'];
                        insert_size($sizeValue);
                        $thongbao = "Thêm thành công";
                    } 
                    include "./view/size/addsz.php";
                    break;
            case 'updatesz':
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    $size = load_one_size($_GET['id']);
                    extract($size);
                }
            
                if (isset($_POST['capnhatsize'])){
                    $sizeValue = trim($_POST['sizeValue']);
                    update_size($_GET['id'], $sizeValue);
                    $thongbao = "Cập nhật thành công";
                    $size = load_one_size($_GET['id']);
                    extract($size);
                }
                $listsize = load_size();
                include "./view/size/updatesz.php";
                break;

    }
} else {
    include "layout/home.php";
}
include "layout/footer.php";
?>
