<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-0 offset-md-2 offset-sm-1">
            <div class="mobile section-title h2" style="margin: 20px 20px;">Thông tin  </div>
            <div style="width: 800px;margin-left: 50%;" id="billing-details" class="card bg-white rounded pb-5">

                <form action="index.php?act=thanhtoan" method="POST">
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

                    <input type="submit" name="mua" value="Mua Hàng">

                </form>

                <div style="margin-top: 72px;" class="row pt-lg-3 pt-2 action-buttons mb-sm-0 mb-2">
                    <div style="display: flex;" class="col-md">
                        <div style="margin-right: 15px;line-height: 54px;" class="btn back-btn text-uppercase">
                            <a href="?act=cart">Quay Lại Giỏ Hàng</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>