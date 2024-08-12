<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
      <div class="mobile section-title h2" style="margin: 20px 20px;">Địa Chỉ Thanh Toán </div>
      <div style="width: 800px;margin-left: 50%;" id="billing-details" class="card bg-white rounded pb-5">

        <form action="index.php?act=mua" method="POST">
          <div class="form-group">
            <label class="text-muted">Họ và Tên</label>
            <input type="text" name="name1" value="<?= $name ?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="text-muted">Email</label>
            <input type="email" name="email1" value="<?= $email ?>" required>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group"> <label>Số Điện Thoại</label>
                <input style="margin-left: 72px;" name="phoneNumber1" type="text" value="<?= $phoneNumber ?>" required>
              </div>
            </div>
          </div>
          <div class="form-group"> <label class="text-muted">Địa Chỉ Nhận Hàng</label>
            <input type="text" name="address1" value="<?= $address ?>" required>
          </div>
          <!-- <div class="payment-method" style="margin-bottom: 15px;color: #6c757d;">
            <span>
              <p style="color: #6c757d;font-weight: bold;">Phương thức thanh toán</p>
            </span>
            <label>
              <input type="radio" name="pttt" checked value="COD" required> Thanh toán (COD)
            </label>

          </div> -->
          <!-- <button type="submit" id="submit-button" onclick="showFormData()">Mua Hàng</button> -->
          <input type="submit" name="mua" value="Mua Hàng">

        </form>

        <div style="margin-top: 72px;" class="row pt-lg-3 pt-2 action-buttons mb-sm-0 mb-2">
          <div style="display: flex;" class="col-md">
            <div style="margin-right: 15px;line-height: 54px;" class="btn back-btn text-uppercase"><a href="?act=cart">Quay Lại Giỏ Hàng</a></div>
            <div class="btn continue-btn text-white ml-auto">
              <!-- <input onclick="" type="submit" value="Mua Hàng"> -->
              <!-- <button type="submit">Mua Hàng</button> -->
              <!-- <button type="submit" name="muahang" class="text-white" onclick="validateForm(event)">Mua Hàng -->
              <!-- <a href="?act=mua"><input type="submit" name="mua" value="Mua Hàng"></a>
                <a href="index.php?act=listbr"><input  class="mr20" type="button" value="DANH SÁCH"></a> -->
              <!-- </button> -->
            

            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>

<!-- <script>
        function showFormData() {
            var form = document.getElementById('billing-form');

            // Kiểm tra xem phần tử form có tồn tại không
            if (!form) {
                console.error('Form element not found');
                return;
            }

            var formData = new FormData(form);
            var output = '';
            formData.forEach(function(value, key) {
                output += key + ': ' + value + '\n';
            });

            // Hiển thị dữ liệu trong alert
            alert('Dữ liệu đã được gửi:\n' + output);

            // Gửi form sau khi hiển thị dữ liệu
            form.submit();
        }
    </script> -->











<!-- <script>
  function validateForm(event) {
    const form = document.getElementById('billing-form');
    if (!form.checkValidity()) {
      event.preventDefault();
      alert('Vui lòng điền đầy đủ thông tin.');
    } else {
      form.submit();
    }
  }
</script> -->