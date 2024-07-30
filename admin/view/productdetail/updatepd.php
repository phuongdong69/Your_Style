<article>
    <div class="row2">
        <div class="row2 font_title">
            <h1>Cập nhật chi tiết sản phẩm</h1>
        </div>
        <div class="row2 form_content ">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row2 mb10">

                <div class="row2 mb10">
                        <label> Product's name  </label> <?= $name ?><br>
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
                        <input type="text" name="price" placeholder="nhập giá sản phẩm" value="<?= $price ?>">
                    </div>
                    
                    <input class="mr20" type="submit" name="updatepd" value="Cập nhật">
                    <a href="index.php?act=listpd"><input class="mr20" type="button" value="DANH SÁCH"></a>

                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
            </form>
        </div>
    </div>
</article>