
<div class="container_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="checkout-page">
                        <h2>Thông tin khách hàng</h2>
                        <form action="?act=thanhtoan" method="POST" style="margin-left: 10px;">
                            
                            <h5 style="padding-left: 15px;">Họ và tên</h5>
                            <input style="width: 80%;" type="text" name="name" id="" value="<?= $name ?>"><br><br>
                            <h5 style="padding-left: 15px;">Email</h5>
                            <input style="width: 80%;" type="text" name="email" id="" value="<?= $email?>"><br><br>
                            <h5 style="padding-left: 15px;">Phone Number</h5>
                            <input style="width: 80%;" type="text" name="phoneNumber" id="" value="<?= $phoneNumber?>"><br><br>
                            <h5 style="padding-left: 15px;">Địa chỉ</h5>
                            <input style="width: 80%;" type="text" name="address" id="" value="<?= $address?>"><br><br>
                            <div class="">
                            <button style="margin-left: 22px;"><a style="color: #fff;" href="?act=login">Hủy</a></button>
                            <!-- <button style="width: 181px; margin-left: 22px;" type="submit" name="thanhtoan">Thanh toán</button> -->
                            <input type="submit" name="thanhtoan" value="Thanh Toán">    
                        </div>
                            
                        </form>
                        <hr style="margin-top: 20px; margin-bottom: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </div>