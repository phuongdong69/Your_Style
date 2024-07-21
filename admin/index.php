<?php
include "layout/header.php";
include "layout/box_left.php";

// Sửa đường dẫn nếu cần thiết
include "../Model/pdo.php";
include "../Model/product.php";
include "../Model/category.php";
include "../Model/galery.php";
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
            //Danh sách sản phẩm
        case 'listsp': //done show
            $listSanPham = load_product("", 0);
            include "./view/sanpham/listsp.php";
            break;
        case 'addsp': //done thêm sản phẩm
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
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
                insert_product($name, $description, $price, $priceSale, $quantity, $status, $create_at, $update_at, $id_cate, $id_brands);
                $thongbao = "Thêm thành công";
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
            // case 'showimg':
            // if(isset($_GET['id']) && $_GET['id'] > 0){
            //     $listproduct=load_one_product($id);
            //     extract($listproduct);
            //     $id_product = $id;
            // }

            //     $listanh = load_galery($id_product);

            //     include "./view/galery/showimg.php";
            //     break;
        case 'showimg':
            if (isset($_GET['id_product']) && $_GET['id_product'] > 0) {
                // $danhmuc = load_one_category($_GET['id_product']);
                $listanh = load_galery($_GET['id_product']);

                extract($listanh);
            }

            // $listanh = load_galery($_GET['id_product']);

            include "./view/galery/showimg.php";
            break;

        case 'addimg':
            // if (isset($_GET['id']) && $_GET['id'] > 0) {
            //     $pro = load_product($_GET['id']);
            //     extract($pro);
            // }
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
                // Gọi model để thực hiện câu lệnh insert
                insert_galery($image, $id_product);
                $thongBao = "Thêm sản phẩm thành công";
            }
            // $listanh = load_galery($_GET['id_product']);
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
        case 'deletesp':
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
    }
} else {
    include "layout/home.php";
    //ố dè
}
include "layout/footer.php";
