
<div class="full-width-container">
    <div class="content-wrapper">
        <div class="form-section">
            <h2>Gửi liên hệ về Your Style</h2>
            <div class="form-group">
                <label for="name">Nhập họ tên</label>
                <input style="margin-left: 0%; width: 80%;" class="lh" type="text" id="name" name="name" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
                <label for="email">Email của bạn</label>
                <input style="margin-left: 0%;width: 80%;" class="lh" type="email" id="email" name="email" placeholder="Email của bạn">
            </div>
            <div class="form-group">
                <label for="phone">Điện thoại</label>
                <input style="margin-left: 0%;width: 80%;" class="lh" type="tel" id="phone" name="phone" placeholder="Điện thoại">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input style="margin-left: 0%;width: 80%;" class="lh" type="text" id="address" name="address" placeholder="Địa chỉ">
            </div>
            <div class="form-group">
                <label   for="subject">Chọn chủ đề liên hệ</label>
                <select style="margin-left:0%" id="subject" name="subject">
                    <option>-- Chọn chủ đề liên hệ --</option>
                    <option>Thắc mắc</option>
                    <option>Góp ý</option>
                    <option>Khiếu nại</option>
                </select>
            </div>
            <div class="form-group">
                <label for="message">Nội dung liên hệ</label>
                <textarea style="margin-left:0%" id="message" name="message" rows="5" placeholder="Nội dung liên hệ"></textarea>
            </div>
            
            <button type="submit">Gửi liên hệ</button>
        </div>
        <div class="info-section">
            <h2>Thông tin liên hệ</h2>
            <div class="info-item">
                <i class="fa fa-map-marker"></i> Trụ sở chính: Trịnh Văn Bô, Nam Từ Liêm, Hà Nội
            </div>
            <div class="info-item">
                <i class="fa fa-phone"></i> Điện thoại: 0961.799.999
            </div>
            <div class="info-item">
                <i class="fa fa-envelope"></i> Email: yourstyle@gmail.com
            </div>
            <p style="font-weight: bold;">
                Website www.yourstyle.com là website chuyên bán <br> các dòng sản phẩm thời trang cao cấp phù hợp với mọi lứa tuổi
            </p>
            <div class="image-container">
                <img src="images/z5613796303251_0df7407cc28d8200079c638466473baf-removebg-preview.png" alt="YourStyle">
            </div>
        </div>
    </div>
</div>

<!-- 
    <style>
        .container_fullwidth {
            width: 100%;
            background-color: #f9f9f9;
            padding: 20px 0;
        }
     
        .form-group {
            margin-bottom: 15px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group label {
            margin-bottom: 5px;
            display: block;
            font-weight: bold;
        }
        .contact-info {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .contact-info h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .contact-info p {
            font-size: 16px;
            line-height: 1.6;
        }
        .contact-info .info-item {
            margin-bottom: 10px;
        }
        .contact-info .info-item i {
            margin-right: 10px;
        }
        .contact-info .imgs {
            margin: auto;
            max-width: 400px;
        }
        .contact-form {
            flex: 1;
            margin-right: 20px;
        }
        .contact-form button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #333;
        }

    </style>

    <div class="container_fullwidth">
        <div class="container">
            <div class="row">
                <div class="contact-form">
                    <h2>Gửi liên hệ về Your Style</h2><br>
                    <div class="form-group">
                        <label for="name">Nhập họ tên</label>
                        <input type="text" id="name" name="name" placeholder="Nhập họ tên">
                    </div>
                    <div class="form-group">
                        <label for="email">Email của bạn</label>
                        <input type="email" id="email" name="email" placeholder="Email của bạn">
                    </div>
                    <div class="form-group">
                        <label for="phone">Điện thoại</label>
                        <input type="tel" id="phone" name="phone" placeholder="Điện thoại">
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" id="address" name="address" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <label for="subject">Chọn chủ đề liên hệ</label>
                        <select id="subject" name="subject">
                            <option>-- Chọn chủ đề liên hệ --</option>
                            <option>Thắc mắc</option>
                            <option>Góp ý</option>
                            <option>Khiếu nại</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Nội dung liên hệ</label>
                        <textarea id="message" name="message" rows="5" placeholder="Nội dung liên hệ"></textarea>
                    </div>
                    
                    <button type="submit">Gửi liên hệ</button>
                </div>
                <div class="contact-info">
                    <h2>Thông tin liên hệ</h2>
                    <div class="info-item">
                        <i class="fa fa-map-marker"></i> Trụ sở chính: Trịnh Văn Bô, Nam Từ Liêm, Hà Nội
                    </div>
                    <div class="info-item">
                        <i class="fa fa-phone"></i> Điện thoại: 0961.799.999
                    </div>
                    <div class="info-item">
                        <i class="fa fa-envelope"></i> Email: yourstyle@gmail.com
                    </div>
                    <p>
                        Website www.yourstyle.com là website chuyên bán <br> các dòng sản phẩm thời trang cao cấp phù hợp với mọi lứa tuổi
                    </p>
                    <div class="imgs">
                      <img src="images/logoshop.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->
