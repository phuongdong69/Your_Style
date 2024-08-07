<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Thêm chi tiết sản phẩm</h1>
        </div>
        <div class="row2 form_content ">
            <form action="index.php?act=addpd" method="POST" enctype="multipart/form-data">
                <div class="row2 mb10">


                    <div class="row2 mb10">
                        <!-- <label> TÊN SẢN PHẨM </label> <br>
                        <select name="id_product" id="">
                            ?php foreach ($listproduct as $listpro) :
                                extract($listpro);

                            ?>

                                <option value="?= $id ?>">?= $name ?></option>
                            ?php endforeach; ?>
                        </select> -->
                    </div>
                    <div class="row2 mb10">
                        <label> Size </label> <br>
                        <select name="id_size" id="">
                            <?php foreach ($listsize as $listsiz) :
                                extract($listsiz);

                            ?>

                                <option value="<?= $id ?>"><?= $sizeValue ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row2 mb10">
                        <label> Color </label> <br>
                        <select name="id_color" id="">
                            <?php foreach ($listcolor as $listcol) :
                                extract($listcol);

                            ?>

                                <option value="<?= $id ?>"><?= $name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="row2 mb10">
                        <label> Price </label> <br>
                        <input type="text" name="price" placeholder="nhập giá sản phẩm" required>
                    </div>

                    <input class="mr20" type="submit" name="addpd" value="THÊM MỚI">
                    <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>

                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
            </form>
        </div>
    </div>
</article>