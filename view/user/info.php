<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
      <div class="mobile section-title h2" style="margin: 20px 20px;">Thông tin người dùng </div>
      <div style="width: 800px;margin-left: 50%;" id="billing-details" class="card bg-white rounded pb-5">

        <form action="index.php?act=mua" method="POST">
        <div class="form-group">
            <label class="text-muted">Tên tài khoản</label>
            <input type="text" name="name" value="<?= $username ?>" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-muted">Tên </label>
            <input type="text" name="name" value="<?= $name ?>" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-muted">Email</label>
            <input type="email" name="email" value="<?= $email ?>">
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group"> <label>Số Điện Thoại</label>
                <input style="margin-left: 72px;" name="phoneNumber" type="text" value="<?= $phoneNumber ?>">
              </div>
            </div>
          </div>
          <div class="form-group"> <label class="text-muted">Địa Chỉ</label>
            <input type="text" name="address" value="<?= $address ?>" required>
          </div>
          <div class="form-group"> <label class="text-muted">Sinh nhật</label>
            <input type="text" name="birthday" value="<?= $birthday ?>" required>
          </div>
         

        </form>

        <div style="margin-top: 72px;" class="row pt-lg-3 pt-2 action-buttons mb-sm-0 mb-2">
          <div style="display: flex;" class="col-md">
           
        </div>
      </div>


    </div>
  </div>
</div>
