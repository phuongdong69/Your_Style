
<div class="fullwidth-container">
        <div class="content-container">
            <div class="content-row">
                <div class="main-column">
                <div class="login-page">
                  <ol class="login-steps">
                  <li class="active-step">
                  <div class="step-content">
            <div class="inner-row">
                <div class="form-column">
                    <div class="login-form-container">
                            
                            <h2>Đăng nhập</h2>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="username">Tài khoản</label>
                                    <input style="width: 85%;" type="text" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input style="width: 85%;" type="password" id="password" name="password" required>
                                </div>
                                <?= $errorMsg ?>
                                <!-- <div class="form-group checkbox-group">
                                    <input type="checkbox" id="remember">
                                    <label for="">Nhớ mật khẩu</label>
                                </div> -->
                                
                                <button  type="submit" name="login">Đăng Nhập</button>
                                
                            </form>
                            <hr>
                            <div class="additional-options">
                                <p>Chưa có tài khoản? <a href="index.php?act=register">Đăng ký ngay!</a></p>
                                <p><a href="?act=forgotpass">Quên mật khẩu?</a></p>
                                <p><a href="?act=edit">Cập Nhật Thông Tin</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- 
<div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
           
            <div class="col-md-9">
              <div class="checkout-page">
                <ol class="checkout-steps">
                  <li class="steps active">
                    
                    <div class="step-description">
                      <div class="rows">
                      <div class="col-md-6 col-sm-6">
                    <div class="run-customer">
                    <form action="?act=dangnhap" method="POST" style="margin-left: 10px;">
                    <h5>Tên đăng nhập</h5>
                    <input type="text" name="user" id="" value=""><br><br>
                    <h4>Mật khẩu</h4><br>
                     <label for="">Mật khẩu</label>
                      <h5>Mật Khẩu</h5>
                    <input type="password" name="pass" id="" value=""><br><br>
                    <input type="checkbox" name="" id="">
                    Ghi nhớ tài khoản?
                    <br><br>
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                    <button style="width: 181px;margin-left: 22px;">
                      Đăng Nhập
                    </button>
                    <hr style="margin-top: 0px;margin-bottom: 0px;">
                    <p style="font-size: 12px;">Bạn Chưa Có Tài Khoản <a href="index.php?act=register">Đăng Ký Ngay</a> </p>
                    <li class="form_li"><a href="?act=forgotpass">Quên mật khẩu</a></li>
                <li class="form_li"><a href="?act=edit">Đăng kí thành viên</a></li>
                <li class="form_li"><a href="?act=edit">Cập Nhật THông Tin</a></li>
                </form>
 -->

                
                <!-- <li class="form_li"><a href="?act=quenmk">Quên mật khẩu</a></li>
                <li class="form_li"><a href="?act=dangky">Đăng kí thành viên</a></li> -->
                      <!-- <form action="" method="POST">
                        <div class="form-row">
                          <label class="lebel-abs">
                            Tên đăng nhập
                            <strong class="red">

                            </strong>
                          </label>
                          <input type="text" class="input namefild" name="user" >
                        </div>
                        <div class="form-row">
                          <label class="lebel-abs">
                            Mật Khẩu
                            <strong class="red">
                              *
                            </strong>
                          </label>
                          <input type="password" class="input namefild" name="password" >
                        </div>
                        <p class="forgoten">
                          <a href="#">
                            Quên Mật Khẩu?
                          </a>
                        </p>
                        <button>
                         <a href="?act=login" type="submit" name="login"> Đăng Nhập</a>
                        </button>
                        <button>
                          <a href="index.php?act=register"> Đăng Ký</a>
                        </button>
                      </form> -->


<!-- 
                    </div>
                  </div>
                </div>
              </div>
            </li>

          </ol>
        </div>
      </div>
    </div>
    <div class="clearfix">
    </div>

  </div>
</div> -->