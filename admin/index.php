<?php
include "layout/header.php";
include "layout/box_left.php";

// Sửa đường dẫn nếu cần thiết
include "../Model/pdo.php";
include "../Model/product.php";
include "../Model/category.php";
include "../Model/size.php";
// include "../Model/galery.php";
include "../Model/color.php";
include "../Model/brand.php";
include "../Model/product_detail.php";

include "../Model/bill.php";
include "../Model/bill_status.php";
include "../Model/role.php";
include "../Model/billdetail.php";



if (isset($_GET['act'])) {
    switch ($_GET['act']) {

            //Danh sách sản phẩm
        case 'home':
            include "./layout/home.php";
            break;

            case 'listsp': // Show products list
                if(isset($_POST['listok']) && ($_POST['listok'])) {
                    $id_cate = $_POST['id_cate'];
                } else {
                    $id_cate = 0;
                }
                $listdanhmuc = load_category();
                $listSanPham = load_product($id_cate);
                include "./view/sanpham/listsp.php";
                break;
    
            case 'addsp': // Add new product
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
                    $img = $_FILES['hinh']['name']; 
    
                    $target_dir = "../admin/img/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // Quá trình di chuyển thành công
                    } else {
                        // Xử lý lỗi nếu di chuyển thất bại
                        echo "Lỗi khi di chuyển tệp ảnh!";
                    }
    
                    insert_product($name, $description, $priceSale, $quantity, $status, $create_at, $update_at, $id_cate, $id_brands, $img);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = load_category();
                $listbrands = load_brands();
                include "./view/sanpham/addsp.php";
                break;
    
            case 'updatesp': // Update product
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
    
                    $img = $_FILES['hinh']['name'];
                    if ($img == '') {
                        $img = $_POST['existing_image']; // Retrieve existing image if no new image is uploaded
                    } else {
                        $target_dir = "../admin/img/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            // Quá trình di chuyển thành công
                        } else {
                            // Xử lý lỗi nếu di chuyển thất bại
                            echo "Lỗi khi di chuyển tệp ảnh!";
                        }
                    }
    
                    update_product($name, $description, $priceSale, $quantity, $status, $update_at, $id_cate, $id_brands, $img, $id);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = load_category();
                $listbrands = load_brands();
                include "./view/sanpham/updatesp.php";
                break;
            //galery
            case 'listglr':
                $listSanPham = load_all_products();
                include './view/galery/listglr.php';
                break;
        
            case 'updateglr':
                $id_product = isset($_GET['id']) ? intval($_GET['id']) : 0; // Đảm bảo id_product là số nguyên
                if ($id_product <= 0) {
                    echo "ID sản phẩm không hợp lệ.";
                    exit;
                }
        
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['id_product']) && intval($_POST['id_product']) === $id_product) {
                        // Xử lý thêm ảnh mới
                        if (isset($_FILES['new_images']) && !empty($_FILES['new_images']['name'][0])) {
                            $total_files = count($_FILES['new_images']['name']);
                            for ($i = 0; $i < $total_files; $i++) {
                                $file_name = $_FILES['new_images']['name'][$i];
                                $file_tmp = $_FILES['new_images']['tmp_name'][$i];
                                $file_target = "../admin/img/" . basename($file_name);
        
                                if (move_uploaded_file($file_tmp, $file_target)) {
                                    insert_image($id_product, $file_name);
                                } else {
                                    echo "Lỗi khi tải lên tệp ảnh!";
                                }
                            }
                        }
        
                        // Xử lý xóa ảnh
                        if (isset($_POST['delete_images']) && !empty($_POST['delete_images'])) {
                            foreach ($_POST['delete_images'] as $image_id) {
                                $sql = "SELECT `image` FROM `galery` WHERE `id` = :image_id";
                                $params = [':image_id' => $image_id];
                                $image = pdo_query_one($sql, $params)['image'];
                                unlink("../admin/img/" . $image);
                                $sql = "DELETE FROM `galery` WHERE `id` = :image_id";
                                pdo_execute($sql, $params);
                            }
                        }
                    } else {
                        echo "ID sản phẩm không khớp.";
                        exit;
                    }
                }
        
                $product_images = load_images_by_product($id_product);
                include './view/galery/updateglr.php';
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

            //billdetail
        case 'listbdt':
            $listbdt = load_bill_detail();
            include "./view/bill_detail/listbdt.php";
            break;

        case 'addbdt':
            if (isset($_POST['thembdt']) && ($_POST['thembdt'])) {
                $id_product = $_POST['id_product'];
                $id_bill = $_POST['id_bill'];
                $id_voucher = $_POST['id_voucher'];
                $id_bill_status = $_POST['id_bill_status'];
                $quantity = $_POST['quantity'];
                $payment = $_POST['payment'];
                $note = $_POST['note'];
                insert_bill_detail($id_product, $id_bill, $id_voucher, $id_bill_status, $quantity, $payment, $note);
                $thongbao = "Thêm thành công";
            }
            $listSanPham = load_product();
            $listbs = load_bs();
            $listbill = load_bill();
            include "./view/bill_detail/addbdt.php";
            break;

        case 'updatebdt':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bill_detail = load_one_bill_detail($_GET['id']);
                extract($bill_detail);
            }
            if (isset($_POST['capnhatbdt'])) {
                $id = $_POST['id'];
                $id_product = $_POST['id_product'];
                $id_bill = $_POST['id_bill'];
                $id_voucher = $_POST['id_voucher'];
                $id_bill_status = $_POST['id_bill_status'];
                $quantity = $_POST['quantity'];
                $payment = $_POST['payment'];
                $note = $_POST['note'];
                update_bill_detail($id_product, $id_bill, $id_voucher, $id_bill_status, $quantity, $payment, $note, $id);
                $thongbao = "Cập nhật thành công";
            }
            $listSanPham = load_product();
            $listbs = load_bs();
            $listbill = load_bill();
            include "./view/bill_detail/updatebdt.php";
            break;

            //Bill_Status

        case 'listbs':
            $listbs = load_bs();
            include "./view/bill_status/list.php";
            break;

        case 'addbs':
            if (isset($_POST['addbs'])) {
                $status = $_POST['status'];
                insert_bill_status($status);
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
                $id = $_POST['id'];
                update_bs($status, $id);
                $thongbao = "Cập nhật thành công";
                $bs = load_one_bs($id);
                extract($bs);
            }
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

            //bill
        case 'listbill':
            $listbill = load_bill();
            include "./view/bill/listbill.php";
            break;
        case 'deletebill':
            if (isset($_GET["id"]) & $_GET["id"] > 0) {
                delete_bill($_GET["id"]);
                echo "<script>
                        alert('Xoá thành công. Nhấn ok để chuyển trang danh sách');
                        </script>";
            }
            $listbill = load_bill();
            include "./view/bill/listbill.php";

            break;

        case 'addbill':
            if (isset($_POST['thembill']) && ($_POST['thembill'])) {
                $creat_at = $_POST['creat_at'];
                $name = $_POST['name'];
                $phoneNumber = $_POST['phoneNumber'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                insert_bill($creat_at, $name, $phoneNumber, $email, $address);
                $thongbao = "Thêm thành công";
            }
            include "./view/bill/addbill.php";
            break;

        case 'updatebill':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $bill = load_one_bill($_GET['id']);
                extract($bill);
            }

            if (isset($_POST['capnhatbill'])) {
                $id = trim($_POST['id']);
                $id_user = isset($_POST['id_user']) ? trim($_POST['id_user']) : null;
                $creat_at = trim($_POST['creat_at']);
                $name = trim($_POST['name']);
                $phoneNumber = trim($_POST['phoneNumber']);
                $email = trim($_POST['email']);
                $address = trim($_POST['address']);

                if ($id_user === '') {
                    $id_user = null; // Handle empty id_user as NULL
                }

                update_bill($id, $creat_at, $id_user, $name, $phoneNumber, $email, $address);
                $thongbao = "Cập nhật thành công";
                $bill = load_one_bill($id);
                extract($bill);
            }

            $listbill = load_category();
            include "./view/bill/updatebill.php";
            break;


            //end bill

    }
} else {
    include "layout/home.php";
}
include "layout/footer.php";
