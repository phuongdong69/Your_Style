<?php
include "layout/header.php";
include "layout/box_left.php";

// Sửa đường dẫn nếu cần thiết
include "../Model/pdo.php";
include "../Model/product.php";
include "../Model/category.php";
include "../Model/size.php";
include "../Model/galery.php";
include "../Model/color.php";
include "../Model/brand.php";
include "../Model/product_detail.php";
<<<<<<< HEAD
include "../Model/bill_status.php";
=======
include "../Model/role.php";


>>>>>>> f90b78dc90f9848a5d4e952af6af216bc275f050


if (isset($_GET['act'])) {
    switch ($_GET['act']) {

            //Danh sách sản phẩm
        case 'home':
            include "./layout/home.php";
            break;

        case 'listsp': //done show
            $listSanPham = load_product("", 0);
            include "./view/sanpham/listsp.php";
            break;
        case 'addsp': //done thêm sản phẩm
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $priceSale = $_POST['priceSale'];
                $quantity = $_POST['quantity'];
                $status = $_POST['status'];
                $create_at = $_POST['create_at'];
                $update_at = $_POST['update_at'];
                $id_cate = $_POST['id_cate'];
                $id_brands = $_POST['id_brands'];
                insert_product($name, $description, $priceSale, $quantity, $status, $create_at, $update_at, $id_cate, $id_brands);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = load_category();
            $listbrands = load_brands();
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
                $priceSale = $_POST['priceSale'];
                $quantity = $_POST['quantity'];
                $status = $_POST['status'];
                $update_at = $_POST['update_at'];
                $id_cate = $_POST['id_cate'];
                $id_brands = $_POST['id_brands'];
                update_product($name, $description, $priceSale, $quantity, $status, $update_at, $id_cate, $id_brands, $id);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = load_category();
            $listbrands = load_brands();
            include "./view/sanpham/updatesp.php";
            break;

            //product_detail

        case 'listpd':
            $listpd = load_productdetail();
            include "./view/productdetail/listpd.php";
            break;

        case 'addpd':
            if (isset($_POST['addpd']) && ($_POST['addpd'])) {
                $id_product = $_POST['id_product'];
                $id_size = $_POST['id_size'];
                $id_color = $_POST['id_color'];
                $price = $_POST['price'];
                insert_productdetail($price, $id_product, $id_size, $id_color);
                $thongbao = "Thêm thành công";
            }
            // $listdanhmuc = load_category();
            $listproduct = load_product();
            $listsize = load_size();
            $listcolor = load_color();

            include "./view/productdetail/addpd.php";
            break;

        case 'updatepd':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $product = load_one_product_detail($_GET['id']);

                extract($product);
                $pro = load_name_product_detail($id_product);
                extract($pro);
                var_dump($name);
            }
            if (isset($_POST['updatepd'])) {
                $price = $_POST['price'];
                // $id_product = $_POST['id_product'];
                $id_size = $_POST['id_size'];
                $id_color = $_POST['id_color'];

                update_productdetail($price, $id_size, $id_color, $id);
                $thongbao = "Thêm thành công";
            }
            // var_dump($id);
            // $listdanhmuc = load_category();
            $listproduct = load_product();
            $listsize = load_size();
            $listcolor = load_color();

            include "./view/productdetail/updatepd.php";
            break;


            //Bill_Status

        case 'listbs':
            $listbs = load_bs();
            include "./view/bill_status/list.php";
            break;

        case 'addbs':
            if (isset($_POST['addbs']) ) {
                $status = $_POST['status'];
                insert_color($status);
                $thongbao = "Thêm thành công";
            }
            include "./view/bill_status/add.php";
            break;

        case 'updatebs':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bs = load_one_bs($_GET['id']);
                extract($bs);
            }

            if (isset($_POST['updatebs'])) {
                $status = trim($_POST['status']);
                update_bs($status, $_GET['id']);
                $thongbao = "Cập nhật thành công";
                
            }
            // $listbs = update_bs($id);
            include "./view/bill_status/update.php";
            break;

            //product_detail

        case 'listpd':
            $listpd = load_productdetail();
            include "./view/productdetail/listpd.php";
            break;

        case 'addpd':
            if (isset($_POST['addpd']) && ($_POST['addpd'])) {
                $id_product = $_POST['id_product'];
                $id_size = $_POST['id_size'];
                $id_color = $_POST['id_color'];
                $price = $_POST['price'];
                insert_productdetail($price, $id_product, $id_size, $id_color);
                $thongbao = "Thêm thành công";
            }
            // $listdanhmuc = load_category();
            $listproduct = load_product();
            $listsize = load_size();
            $listcolor = load_color();

            include "./view/productdetail/addpd.php";
            break;

        case 'updatepd':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $product = load_one_product_detail($_GET['id']);
               
                extract($product);
                $pro = load_name_product_detail($id_product);
                extract($pro);
                var_dump($name);
            }
            if (isset($_POST['updatepd'])) {
                $price = $_POST['price'];
                // $id_product = $_POST['id_product'];
                $id_size = $_POST['id_size'];
                $id_color = $_POST['id_color'];
                
                update_productdetail($price,$id_size,$id_color,$id);
                $thongbao = "Thêm thành công";
            }
            // var_dump($id);
            // $listdanhmuc = load_category();
            $listproduct = load_product();
            $listsize = load_size();
            $listcolor = load_color();

            include "./view/productdetail/updatepd.php";
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
                insert_category($name, $status);
                $thongbao = "Thêm thành công";
            }
            include "./view/danhmuc/adddm.php";
            break;

        case 'updatedm':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $danhmuc = load_one_category($_GET['id']);
                extract($danhmuc);
            }

            if (isset($_POST['capnhatdanhmuc'])) {
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

            //galery

        case 'showimg':
            if (isset($_GET['id_product']) && $_GET['id_product'] > 0) {
                $listanh = load_galery($_GET['id_product']);

                extract($listanh);
            }
            include "./view/galery/showimg.php";
            break;

        case 'addimg':
            if (isset($_POST['themanh'])) {

                // Xử lý hình ảnh 
                $image = $_FILES['image']['name'];
                $target_dir = "./img/";
                $target_file = $target_dir . basename($image);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    echo "upload thành công";
                } else {
                    echo "Có lỗi trong quá trình upload file";
                }
                $id_product = $_POST['id_product'];
                insert_galery($image, $id_product);
                $thongBao = "Thêm sản phẩm thành công";
            }
            $listproduct = load_product();
            include "./view/galery/add.php";
            break;
        case 'updateimg':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $one_galery = load_one_galery($_GET['id']);
                extract($one_galery);
                // var_dump($tintuc);
            }
            if (isset($_POST['updateanh'])) {

                // Xử lý hình ảnh 
                $image = $_FILES['image']['name'];
                $target_dir = "./img/";
                $target_file = $target_dir . basename($image);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    echo "upload thành công";
                    update_galery($image, $id);
                    $thongBao = "Thêm sản phẩm thành công";
                }
                // $id_product = $_POST['id_product'];
                // Gọi model để thực hiện câu lệnh insert


            }

            include "./view/galery/update.php";
            break;
        case 'deleteimg':
            if (isset($_GET["id"]) & $_GET["id"] > 0) {
                // echo "thực hiện xoá" . $_GET["id"];
                delete_galery($_GET["id"]);
                echo "<script>
                     alert('Xoá thành công. Nhấn ok để chuyển trang danh sách');
                     </script>";
            }
            $listSanPham = load_product("", 0);
            include "./view/sanpham/listsp.php";

            break;

            

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
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $color = load_one_color($_GET['id']);
                extract($color);
            }

            if (isset($_POST['capnhatcolor'])) {
                $name = trim($_POST['name']);
                update_color($name, $_GET['id']);
                $thongbao = "Cập nhật thành công";
                $color = load_one_color($_GET['id']);
                extract($color);
            }
            $listcolor = load_color();
            include "./view/color/updatecl.php";
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
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $size = load_one_size($_GET['id']);
                extract($size);
            }


            if (isset($_POST['capnhatsize'])) {
                $sizeValue = trim($_POST['sizeValue']);
                update_size($_GET['id'], $sizeValue);
                $thongbao = "Cập nhật thành công";
                $size = load_one_size($_GET['id']);
                extract($size);
            }
            $listsize = load_size();
            include "./view/size/updatesz.php";
            break;


            // end size


            // brand
        case 'listbr':
            $listbrands = load_brands();
            $listbrands = load_brands();
            include "./view/brands/listbr.php";
            break;
        case 'addbr':
            if (isset($_POST['thembrand']) && ($_POST['thembrand'])) {
                $name = $_POST['name'];
                insert_brands($name);
                $thongbao = "Thêm thành công";
            }
            include "./view/brands/addbr.php";
            break;
        case 'updatebr':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $brands = load_one_brands($_GET['id']);
                extract($brands);
            }

            if (isset($_POST['capnhatbrand'])) {
                $name = trim($_POST['name']);
                update_brands($name, $_GET['id']);
                $thongbao = "Cập nhật thành công";
                $brands = load_one_brands($_GET['id']);
                extract($brands);
            }
            $listbrands = load_brands();
            include "./view/brands/updatebr.php";
            break;


            // role
            case 'listrole':
                $listrole = load_role();
                include "./view/role/listrole.php";
                break;
            case 'addrole':
                if (isset($_POST['themrole']) && ($_POST['themrole'])) {
                    $roleName = $_POST['roleName'];
                    insert_role($roleName);
                    $thongbao = "Thêm thành công";
                }
                include "./view/role/addrole.php";
                break;
            case 'updaterole':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $role = load_one_role($_GET['id']);
                    extract($role);
                }
    
    
                if (isset($_POST['capnhatrole'])) {
                    $roleName = trim($_POST['roleName']);
                    update_role($_GET['id'], $roleName);
                    $thongbao = "Cập nhật thành công";
                    $role = load_one_role($_GET['id']);
                    extract($role);
                }
                $listrole = load_role();
                include "./view/role/updaterole.php";
                break;

            //end role



    }
} else {
    include "layout/home.php";
}
include "layout/footer.php";
