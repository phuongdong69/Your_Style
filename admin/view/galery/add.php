<article>
  <div class="row2">
    <div class="row2 font_title">
      <h1>THÊM ẢNH</h1>
    </div>
    <div class="row2 form_content ">
      <form action="" method="POST" enctype="multipart/form-data">
      <div class="row2 mb10">
            <label>HÌNH ẢNH </label> <br>
            <input type="file" name="image" required >
           </div>

           <div class="row2 mb10">
          <!-- <label> TÊN SẢN PHẨM </label> <br> -->
          
               <!-- ?php foreach ($listproduct as $listpro) :
                extract ($listpro);
                
                ?> 
              <input type="hidden" name="id_product" value="<?= $id_product?>">
               <option value="?= $id?>">?= $name?></option> 
              ?php endforeach;?> -->
            
        </div>

        <input class="mr20" type="submit" name="themanh" value="THÊM MỚI">
        <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
        
        <?php
          if(isset($thongBao) &&($thongBao != "")){
            echo $thongBao;
          } 
        ?>
      </form>
    </div>
  </div>
</article>