
<nav class="nav-bar">
  <div class="container d-flex align-items-center">
    <div class="logo"> <a href="?act=home" class="text-uppercase">YourStyle</a> </div>
    <div class="ml-auto"> <a href="?act=home" class="text-uppercase">Quay lại mua hàng </a> </div>
  </div>
</nav>

<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
      <div class="mobile section-title h2" style="margin: 20px 20px;">Địa Chỉ Thanh Toán </div>
      <div id="billing-details" class="card bg-white rounded pb-5">
        <form>
          <div class="form-group"> <label class="text-muted">Họ và Tên</label> <input type="text" value="" class="form-control"> </div>
          <div class="form-group"> <label class="text-muted">Email</label>
            <div> <input type="email" value=""> </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group"> <label>Thành Phố</label>
                <div> <input type="text" value=""></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group"> <label>Số Điện Thoại</label>
                <div> <input type="text" value=""> </span> </div>
              </div>
            </div>
          </div>
          <div class="form-group"> <label class="text-muted">Địa Chỉ Nhận Hàng</label>
            <div> <input type="text" value=""> </div>
          </div>
          <div style="margin-bottom: 15px;color: #6c757d;" class="payment-method">
                                  <span ><p style="color: #6c757d;font-weight: bold;">Phương thức thanh toán</p></span>
                                  <div class="payment-links">

                                      <a href="index.php?act=ptttmm">Thanh toán qua MoMo</a>
                                      <a href="index.php?act=ptttatm">Thanh toán qua ATM</a>

                                  </div>
                              </div>
        </form>
        <input type="checkbox" checked> 
      <label>Địa Chỉ & Số Điện Thoại Chính Xác</label>
      </div> 
      
 
    </div>
    <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1 pt-lg-0 pt-3">
      <div id="cart-summary"  class="card bg-white rounded">
        <div class="d-flex justify-content-between align-items-center">
          <div class="section-title h6">Giỏ Hàng</div>
          <div class="section-title h6"> <a href="#">Chỉnh sửa</a> </div>
        </div>
        <div class="cart-item d-flex jusitfy-content-between align-items-center pt-3 pb-2 border-bottom">
          <div class="item-image pr-2"> <img src="https://images.unsplash.com/photo-1569488859134-24b2d490f23f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" width="80" height="80">
            <div class="item-quantity number">2</div>
          </div>
          <div class="item-details d-flex flex-column px-3"> <b class="item-title h5">BattleCreek Coffee</b> <a href="#" class="item-code h5 text-primary">C-770</a> </div>
          <div class="item-price ml-auto"> <b class="h5">$80.9</b> </div>
        </div>
        <div style="margin: 20px 20px;" class="promo-code my-3"> <input type="text" class="w-100 form-control text-center" placeholder="Gift Card or Promo Card"> </div>
        <div style="display: flex;" class="d-flex align-items-center">
          <div class="summary-label display-5">Tổng Cộng</div>
          <div class="summary-value ml-auto font-weight-bold">$80.9</div>
        </div>
        <div style="display: flex;" class="d-flex align-items-center py-2 border-bottom">
          <div class="summary-label display-5">Giảm Giá</div>
          <div class="summary-value ml-auto font-weight-bold">$12.9</div>
        </div>
        <hr>
        <div  class="d-flex align-items-center py-2">
          <div class="summary-label display-5">Tổng tiền</div>
          <div class="summary-value ml-auto d-flex">
            <div class="currency text-primary text-uppercase px-3">usd</div>
            <div class="total-amount font-weight-bold">$92.98</div>
          </div>
        </div>
      </div>
     
      
      <div style="margin-top: 20px;" class="row pt-lg-3 pt-2 action-buttons mb-sm-0 mb-2">
        <div style="display: flex;" class="col-md-6">
          <div class="btn back-btn text-uppercase"><a href="?act=cart">Quay Lại Giỏ Hàng</a></div>
          <div class="btn continue-btn text-white ml-auto"> <a href="?act=home">Mua Hàng</a> </div>
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
                    <a href="" class="step-title">
                     Địa Chỉ Nhận Hàng
                    </a>
                    <div class="step-description">
                      <form>
                        <div class="row">
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Chi Tiết Thông Tin Nhận Hàng
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Họ 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Tên
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Email 
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Số Điện Thoại
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div>
                             
                              
                              <p>
                                
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6">
                            <div class="your-details">
                              <h5>
                                Địa Chỉ Nhận Hàng
                              </h5>
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Địa Chỉ
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div>
                             
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Thành Phố
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div>
                              
                              <div class="form-row">
                                <label class="lebel-abs">
                                  Quốc Gia
                                  <strong class="red">
                                    *
                                  </strong>
                                </label>
                                <input type="text" class="input namefild" name="">
                              </div>

                              <strong class="red">
                                    *
                                  </strong>
                           
                                 <div class="payment-method">
                                  <span>Phương thức thanh toán</span>
                                  <div class="payment-links">

                                      <a href="index.php?act=ptttmm">Thanh toán qua MoMo</a>
                                      <a href="index.php?act=ptttatm">Thanh toán qua ATM</a>

                                  </div>
                              </div>
                              
                              
                              
                              <button style="margin-left: 100px;">
                                <a href="#">Mua Ngay</a>
                              </button>
                              
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>
                  
                </ol>
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
        
        </div>
      </div>
      <div class="clearfix">
      </div>
     
    </div>
 
     <script>
    document.querySelector('.dropdown-toggle').addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = this.href;
    });
</script>
  </body>
</html> -->