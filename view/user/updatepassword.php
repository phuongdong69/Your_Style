<style>
.registration-page {
  margin-left: 25%;
  width: 50%; 
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.registration-steps {
  list-style-type: none;
  padding: 0;
}

.step-item {
  margin-bottom: 20px;
}

.step-link {
  text-align: center;
  font-size: 20px;
  font-weight: bold;
  color: #333;
  display: block;
  margin-bottom: 10px;
}

.step-content {
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
}

.form-grid {
  display: flex;
  flex-direction: column;
}

.form-col {
  flex: 1;
}

.form-section {
  padding: 10px 0;
}

.form-label {
  margin-left: 20px;
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.input-field {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.required {
  color: red;
}

.password-section {
  margin-bottom: 15px;
}

.confirm-field {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.clear {
  clear: both;
}

a input.submit-button {
  display: block;
  width: 100%;
  padding: 10px 20px;
  background-color: #5cb85c;
  border: none;
  color: #fff;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

a input.submit-button:hover {
  background-color: #4cae4c;
}

</style>
<div class="registration-page">
  <ol class="registration-steps">
    <li class="step-item active">
      
        <h2>Thông tin tài khoản</h2>
      
      <div class="step-content">
        <form action="?act=register" method="POST">
          <div class="form-grid">
            <div class="form-col">
              <div class="form-section">
                <label class="form-label">
                   Họ & Tên<strong class="required">*</strong>
                </label>
                <div class="form-group">
                  <input type="text" class="input-field" name="name" placeholder="nhập họ tên" required>
                </div>
                <label class="form-label">
                  Email <strong class="required">*</strong>
                </label>
                <div class="form-group">
                  <input type="email" class="input-field" name="email" placeholder="nhập email"required>
                </div>
                <label class="form-label">
                  Số Điện Thoại<strong class="required">*</strong>
                </label>
                <div class="form-group">
                  <input type="text" class="input-field" name="phoneNumber" placeholder="nhập số điện thoại"required>
                </div>
                <label class="form-label">
                  Tên đăng nhập<strong class="required">*</strong>
                </label>
                <div class="form-group">
                  <input type="text" class="input-field" name="username" placeholder="nhập tên đăng nhập"required>
                </div>
                
                <div class="password-section">
                  <label class="form-label">
                    Mật Khẩu <strong class="required">*</strong>
                  </label>
                  <div class="form-group">
                    <input type="password" class="input-field" name="password" placeholder="nhập mật khẩu"required>
                  </div>
                  <label class="form-label">
                    Nhập Lại Mật Khẩu<strong class="required">*</strong>
                  </label>
                  <div class="form-group">
                    <input type="password" class="confirm-field" name="repassword" placeholder="nhập lại mật khẩu"required>
                  </div>
                  <!-- t -->
                  
                  
                  <label class="form-label">
                  Ngày sinh
                  </label>
                  <div class="form-group">
                    <input type="datetime-local" class="input-field" name="birthday" placeholder="Ngày sinh">
                  </div>
                  <label class="form-label">
                    Địa Chỉ
                  </label>
                  <div class="form-group">
                    <input type="text" class="input-field" name="address" placeholder="nhập địa chỉ">
                  </div>
                <?=$erorrMsg?>
                  <div class="form-section">
                    <a href="?act=register">
                      <input type="submit" name="dangky" class="submit-button" value="Đăng ký">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        
        <hr style="margin-top: 20px; margin-bottom: 20px;">
        <!-- <p style="font-size: 12px;">Quay lại trang <a href="index.php?act=login">Đăng Nhập</a></p> -->
      </div>
    </li>
  </ol>
</div>
<div class="clear"></div>