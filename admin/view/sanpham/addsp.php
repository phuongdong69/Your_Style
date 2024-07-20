<article>
<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI SẢN PHẨM</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
           <div  class="row2 mb10 form_content_container">
           <label> Danh Mục </label> <br>
            <select style="margin-right: 1250px;" class="sl1" name="">


              <!-- code php show all danh muc tu dtb -->


                <option value=""></option>
            </select>
           </div>
           <div class="row2 mb10">
            <label>Tên Sản Phẩm </label> <br>
            <input type="text" name="tensp" placeholder="Nhập tên sản phẩm">
           </div>

           <div class="row2 mb10">
            <label>Hình Ảnh </label> <br>
            <input  type="file" name="hinh" >
           </div>


           <div class="row2 mb10">
            <label>Giá Sản Phẩm </label> <br>
            <input type="text" name="giasp" placeholder="Nhập giá sản phẩm">
           </div>
           
           <div class="row2 mb10">
            <label>Mô Tả Sản Phẩm </label> <br>
            <textarea style="float:left;" name="mota" id="" placeholder="Mô tả sản phẩm"></textarea>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
    
           <!-- code thong bao da nhap thanh cong -->

          </form>
</body>

         </div>
        </div>
   
    
</article>