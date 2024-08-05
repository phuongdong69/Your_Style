
<div class="registration-page">
  <ol class="registration-steps">
    <li class="step-item active">
      
        <h2>Đăng Ký Tài Khoản</h2>
      
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
                      <input type="submit" name="register" class="submit-button" value="Đăng ký">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var repassword = document.getElementById('repassword').value;
            var errorMessage = document.getElementById('errorMessage');

            if (password !== repassword) {
                errorMessage.style.display = 'block';
                event.preventDefault(); // Ngăn form submit
            } else {
                errorMessage.style.display = 'none';
            }
        });
    </script>
        <hr style="margin-top: 20px; margin-bottom: 20px;">
        <!-- <p style="font-size: 12px;">Quay lại trang <a href="index.php?act=login">Đăng Nhập</a></p> -->
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
