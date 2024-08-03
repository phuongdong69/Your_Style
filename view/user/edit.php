<style>
    .row {
    display: flex;
    flex-wrap: wrap;
    margin: 0 -15px;
}

.col-md-9 {
    width: 75%;
    padding: 0 15px;
}

.checkout-page {
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h2 {
    margin-top: 0;
    color: #333;
    font-size: 24px;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

form {
    margin-top: 20px;
}

h5 {
    margin: 10px 0;
    color: #333;
}



button {
    background-color: #5cb85c;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

a {
    color: #5cb85c;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

hr {
    border: none;
    border-top: 1px solid #ddd;
    margin: 20px 0;
}

p {
    margin: 0;
    color: #666;
}

@media (max-width: 768px) {
    .col-md-9 {
        width: 100%;
    }
}
</style>
<div class="container_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="checkout-page">
                        <h2>Sửa Thông Tin Cá Nhân</h2>
                        <form action="?act=updateinfo" method="POST" style="margin-left: 10px;">
                            <h5>Tên đăng nhập</h5>
                            <input type="text" name="username" id="" value="" required><br><br>
                            <h5>Email</h5>
                            <input type="email" name="email" id="" value="" required><br><br>
                            <h5>Số điện thoại</h5>
                            <input type="text" name="phone" id="" value="" required><br><br>
                            <h5>Địa chỉ</h5>
                            <input type="text" name="address" id="" value="" required><br><br>
                            <h5>Mật Khẩu</h5>
                            <input type="password" name="password" id="" required><br><br>
                            <button style="width: 181px; margin-left: 22px;">Cập Nhật Thông Tin</button>
                        </form>
                        <hr style="margin-top: 20px; margin-bottom: 20px;">
                        <p style="font-size: 12px;">Quay lại <a href="index.php">Trang Chủ</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>