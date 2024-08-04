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
      
        <h2>Đăng Ký Tài Khoản</h2>
      
      <div class="step-content">
        <form>
          <div class="form-grid">
            <div class="form-col">
              <div class="form-section">
                <label class="form-label">
                   Họ & Tên<strong class="required">*</strong>
                </label>
                <div class="form-group">
                  <input type="text" class="input-field" name="name" placeholder="nhập họ tên">
                </div>
                <label class="form-label">
                  Email <strong class="required">*</strong>
                </label>
                <div class="form-group">
                  <input type="text" class="input-field" name="email" placeholder="nhập email">
                </div>
                <label class="form-label">
                  Số Điện Thoại<strong class="required">*</strong>
                </label>
                <div class="form-group">
                  <input type="text" class="input-field" name="phoneNumber" placeholder="nhập số điện thoại">
                </div>
                <div class="password-section">
                  <label class="form-label">
                    Mật Khẩu <strong class="required">*</strong>
                  </label>
                  <div class="form-group">
                    <input type="password" class="input-field" name="password" placeholder="nhập mật khẩu">
                  </div>
                  <label class="form-label">
                    Nhập Lại Mật Khẩu<strong class="required">*</strong>
                  </label>
                  <div class="form-group">
                    <input type="password" class="confirm-field" name="repassword" placeholder="nhập lại mật khẩu">
                  </div>
                  <label class="form-label">
                    Địa Chỉ<strong class="required">*</strong>
                  </label>
                  <div class="form-group">
                    <input type="text" class="input-field" name="address" placeholder="nhập địa chỉ">
                  </div>
                  <div class="form-section">
                    <a href="?act=dangki"><input type="submit" class="submit-button" value="Đăng ký"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <hr style="margin-top: 20px; margin-bottom: 20px;">
        <p style="font-size: 12px;">Quay lại trang <a href="index.php?act=login">Đăng Nhập</a></p>
      </div>
    </li>
  </ol>
</div>
<div class="clear"></div>



<!-- <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                 
                  <li class="steps active">
                    <a href="" class="step-title">
                     Thông Tin Đăng Ký
                    </a>
                    <div class="step-description">
                      <form>
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Đăng ký
                              </h5>
                              
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Tên
                                  Họ Tên<strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="name" placeholder="nhập họ tên">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="email" placeholder="nhập email">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Số Điện Thoại
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="phoneNumber" placeholder="nhập số điện thoại">
                              </div>
                              <div class="pass-wrap">
                                <div class="form-row">
                                  <label class="lebel-abs">
                                    Mật Khẩu 
                                    <strong class="red">
                                      *
                                    </strong>
                                  </label>
                                  <input type="password" class="input namefild" name="password" placeholder="nhập mật khẩu">
                                </div>
                                <div class="form-row">
                                  <label class="lebel-abs">
                                    Nhập Lại Mật Khẩu
                                    <strong class="red">
                                      *
                                    </strong>
                                  </label>
                                  <input type="password" class="input cpass" name="repassword" placeholder="nhập lại mật khẩu">
                                </div>
                              </div>
                              <p>
                                
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Địa Chỉ
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="address" placeholder="nhập địa chỉ">
                              </div>
                              <a href="?act=dangki"><input type="submit">Đăng ký</a>
                              
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>
                  
                </ol>
              </div>
        
 <div class="clearfix">
      </div>
</div>
    -->