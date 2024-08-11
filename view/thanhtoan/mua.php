
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
      <div class="mobile section-title h2" style="margin: 20px 20px;">Địa Chỉ Thanh Toán </div>
      <div style="width: 800px;margin-left: 50%;" id="billing-details" class="card bg-white rounded pb-5">
        <form id="billing-form">
          <div class="form-group"> <label class="text-muted">Họ và Tên</label> <input type="text" value="" class="form-control" required> </div>
          <div class="form-group"> <label class="text-muted">Email</label>
            <div> <input type="email" value="" required> </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group" > <label>Số Điện Thoại</label>
                <div> <input style="margin-left: 72px;"  type="text" value="" required></div>
              </div>
            </div>
          </div>
          <div class="form-group"> <label class="text-muted">Địa Chỉ Nhận Hàng</label>
            <div> <input type="text" value="" required> </div>
          </div>
          <div class="payment-method" style="margin-bottom: 15px;color: #6c757d;">
  <span>
    <p style="color: #6c757d;font-weight: bold;">Phương thức thanh toán</p>
  </span>
    <label>
      <input type="radio" name="pttt" checked value="COD" required> Thanh toán (COD)
    </label>
  
</div>

                              
        </form>
         
      <div style="margin-top: 72px;" class="row pt-lg-3 pt-2 action-buttons mb-sm-0 mb-2">
        <div style="display: flex;" class="col-md">
          <div style="margin-right: 15px;line-height: 54px;" class="btn back-btn text-uppercase"><a href="?act=cart">Quay Lại Giỏ Hàng</a></div>
          <div class="btn continue-btn text-white ml-auto">
                <button type="submit" class="text-white" onclick="validateForm(event)"><a href="?act=trangthaitt">Mua Hàng</a></button>
              </div>
        </div>
      </div>
      </div> 
      
 
    </div>
  </div>
</div>
<script>
  function validateForm(event) {
    const form = document.getElementById('billing-form');
    if (!form.checkValidity()) {
      event.preventDefault();
      alert('Vui lòng điền đầy đủ thông tin.');
    } else {
      form.submit();
    }
  }
</script>
