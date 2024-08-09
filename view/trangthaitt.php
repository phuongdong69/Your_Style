
    <style>
        .alltt{
            display: ruby-text;
        }
        .order-status-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
            margin: 35px auto;
        }

        h1 {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .status-steps {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .status-step {
            padding: 10px;
            margin: 5px 0;
            background-color: #ddd;
            border-radius: 5px;
            color: #555;
        }

        .status-step.active {
            background-color: #4caf50;
            color: white;
        }

        .cod-status {
            margin-top: 20px;
        }

        #cod-status-text {
            margin-top: 10px;
            font-weight: bold;
            color: #f39c12;
            display: none; /* Mặc định không hiển thị */
        }
    </style>
<div class="alltt">
<div class="order-status-container">
        <h1>Trạng Thái Đơn Hàng Của Bạn</h1>
        <ul class="status-steps">
            <li id="paid" class="status-step">Đã thanh toán thành công</li>
            <li id="waiting" class="status-step">Đang chờ kiểm hàng</li>
            <li id="shipping" class="status-step">Đang giao hàng</li>
            <li id="delivered" class="status-step">Đã giao hàng</li>
        </ul>
        <div class="cod-status">
            <p id="cod-status-text">Chờ thanh toán (COD)</p>
        </div>
        <a href="?act=home">Trang Chủ</a>
    </div>
</div>
    <script>
        function toggleCODStatus() {
            const codStatusText = document.getElementById('cod-status-text');

            codStatusText.style.display = 'block';
            document.getElementById('paid').classList.remove('active');
            document.getElementById('waiting').classList.add('active');
            // document.getElementById('shipping').classList.add('active');
        }

        function updateOrderStatus(status) {
            const steps = document.querySelectorAll('.status-step');
            steps.forEach(step => {
                step.classList.remove('active');
            });
            if (status === 'paid') {
                document.getElementById('paid').classList.add('active');
            } else if (status === 'waiting') {
                document.getElementById('waiting').classList.add('active');
            } else if (status === 'shipping') {
                document.getElementById('shipping').classList.add('active');
            } else if (status === 'delivered') {
                document.getElementById('delivered').classList.add('active');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            const paymentMethod = localStorage.getItem('paymentMethod');

            if (paymentMethod === 'Online') {
                updateOrderStatus('paid');
            } else if (paymentMethod === 'COD') {
                toggleCODStatus(); 
            }
            localStorage.removeItem('paymentMethod');
        });
    </script>

