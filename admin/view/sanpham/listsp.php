<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Danh Sách Sản Phẩm Hiện Có</h1>
        </div>
        <form action="index.php?act=listsp" method="POST">
                <h4>Danh mục sản phẩm</h4>
                <select class="tk-form-sl" name="id_cate" id=""> 
                    <option value="0" selected>Tất cả</option>
                    <?php foreach ($listdanhmuc as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <input class="tk-form-bt" type="submit" name="listok" value="Check">
        </form>
        <div class="row2 form_content ">
            <form action="index.php?act=listsp" method="POST">
                <div class="row2 mb10 formds_loai">
                    <table border="1">
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <!-- <th>Mô tả</th> -->
                            <!-- <th>Giá sale</th> -->
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Trạng thái</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Giá</th>
                            <th>Giá Sale</th>
                            <th>Brand</th>
                            <th>Branddư</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php
                        foreach ($listSanPham as $product) {
                            extract($product);
                            $suaUrl = "?act=updatesp&id=".$id ."&idproductdetail=".$idproductdetail;
                            $listimg = "?act=showimg&id_product=".$id;
                            // $id_product = $id;
                            $imgPath = "./img/" . $galery_imgage;
                            // $hinhpath = "./img/".$img;
                            // if(is_file($hinhpath)){
                            //     $imgPath = "<img src='".$hinhpath.">";
                            // }else{
                            //     $imgPath = "No Photo";
                            // }
                        ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $name ?></td>
                            <!-- <td>?= $description ?></td> -->
                            <!-- <td>?= $priceSale ?></td> -->
                            <!-- <td>?=  $hinhpath ?></td> -->
                            <td>
                                <img src="<?= $imgPath ?>" alt=""  style='width:100px;height:100px;' >
                            </td>
                            <td><?= $quantity ?></td>
                            <td><?= $status ?></td>
                            <td><?= $size_sizeValue ?></td>
                            <td><?= $color_name ?></td>
                            <td><?= $price?></td>
                            <td><?= $priceSale ?></td>
                            <td><?= $brand_name?></td>
                            <td><?= $idproductdetail?></td>
                            <td>
                                <a href="<?= $suaUrl ?>"><input type="button" value="Sửa"></a>
                                <a href="<?= $listimg ?>"><input type="button" value="xem thêm ảnh"></a>
                                <!-- <a href="?= $img ?>">
                                <input type="button" value="img">
                                </a> -->
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <div class="row mb10 ">
                    <a href="index.php?act=addsp"><input class="mr20" type="button" value="Thêm Sản Phẩm"></a>
                    <a href="index.php?act=listpd"><input class="mr20" type="button" value="Chi Tiết Sản Phẩm"></a>
                    <!-- <a href="index.php?act=listglr"><input class="mr20" type="button" value="Quản lý ảnh sản phẩm"></a> -->
                </div>
            </form>
        </div>
    </div>
</article>
