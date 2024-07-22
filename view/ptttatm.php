<style>
    .chung{
        display: flex;
    }
.thong-tin {
    width: 500px;
    height: 500px;
    margin-top: 100px;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.thong-tin h1 {
    margin-top: 100px;
    font-size: 28px;
    color: #333;
    margin-bottom: 10px;
}

.thong-tin p {
    font-size: 18px;
    color: #666;
    margin-bottom: 20px;
}

.thong-tin ul {
    list-style: none;
    padding: 0;
}

.thong-tin li {
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
}

.qr {
    /* float: right; */
    text-align: center;
    margin: 50px;
}

.qr img {
    width: 600px; 
    height: 600px; 
    border: 1px solid #ccc; 
    border-radius: 10px; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
}

.info {
    margin-top: 20px;
}

.info h1 {
    font-size: 24px;
    color: #333;
}

.info p {
    font-size: 16px;
    color: #666;
}
</style>
<div class="chung">
<div class="thong-tin">
        <h1>  ---Thanh Toán Qua ATM---</h1>
        <p>**Quét mã QR này để thanh toán đơn hàng của bạn.</p>
        <ul>
            <li>**BẠN CHUYỂN KHOẢN TỚI SỐ TK TƯƠNG ỨNG HOẶC QUÉT MÃ QR.</li>
            <li>**VUI LÒNG GHI ĐÚNG NỘI DUNG GIAO DỊCH.</li>
        </ul>
    </div>
    <div class="qr">
    <img src="./images/qr.jpg" alt="">
        <div class="info">
            <h1>Mã QR</h1>
        </div>
    </div>
    
</div>
<button style="float: right;margin-right: 700px;margin-bottom: 20px;">
        <a href="index.php?act=mua">Quay Lại </a>
    </button>
        