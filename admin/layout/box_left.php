
<nav class="sidebar">
    <div class="logo">
        <a href="index.php?act=home">
            <img src="./img/z5613796303251_0df7407cc28d8200079c638466473baf-removebg-preview.png" alt="Logo">
        </a>
    </div>
    <hr>
    <ul>
        <!-- <li class="nav-item">
            <a class="nav-link" href="index.php?act=home">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <hr> -->

        <!-- Thống kê -->
        <li class="nav-item">
            <a class="nav-link" href="index.php?act=listtk">
                <i class="fas fa-chart-pie"></i>
                <span>Thống kê</span>
            </a>
        </li>
        <hr>

        <!-- Sản Phẩm -->
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="toggleCollapse('collapseSanPham')">
                <i class="fas fa-box"></i>
                <span>Sản Phẩm</span>
            </a>
            <div id="collapseSanPham" class="collapse-menu">
                <div class="collapse-menu-inner">
                    <a class="collapse-menu-item" href="index.php?act=listsp">Danh sách Sản Phẩm</a>
                    <a class="collapse-menu-item" href="index.php?act=listdm">Danh Mục Sản Phẩm</a>
                </div>
            </div>
        </li>
        <hr>

        <!-- SP Chi Tiết -->
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="toggleCollapse('collapseSPChiTiet')">
                <i class="fas fa-cogs"></i>
                <span>SP Chi Tiết</span>
            </a>
            <div id="collapseSPChiTiet" class="collapse-menu">
                <div class="collapse-menu-inner">
                    <a class="collapse-menu-item" href="index.php?act=listbdt">Chi tiết đơn hàng</a>
                    <a class="collapse-menu-item" href="index.php?act=listbs">Trạng thái đơn hàng</a>
                    <a class="collapse-menu-item" href="index.php?act=listbr">Brands</a>
                    <a class="collapse-menu-item" href="index.php?act=listcl">Color</a>
                    <a class="collapse-menu-item" href="index.php?act=listsz">Size</a>
                </div>
            </div>
        </li>
        <hr>

        <!-- Khách Hàng -->
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="toggleCollapse('collapseKhachHang')">
                <i class="fas fa-user"></i>
                <span>Khách Hàng</span>
            </a>
            <div id="collapseKhachHang" class="collapse-menu">
                <div class="collapse-menu-inner">
                    <a class="collapse-menu-item" href="index.php?act=listuser">Danh sách khách hàng</a>
                    <a class="collapse-menu-item" href="index.php?act=listrole">Role</a>
                    <a class="collapse-menu-item" href="index.php?act=comments">Bình Luận</a>
                </div>
            </div>
        </li>
        <hr>

        <!-- Quản Lý ĐH -->
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="toggleCollapse('collapseDonHang')">
                <i class="fas fa-receipt"></i>
                <span>Quản Lý ĐH</span>
            </a>
            <div id="collapseDonHang" class="collapse-menu">
                <div class="collapse-menu-inner">
                    <a class="collapse-menu-item" href="index.php?act=listbill">Bill</a>
                    <a class="collapse-menu-item" href="index.php?act=voucher">Voucher</a>
                </div>
            </div>
        </li>
        <hr>

        <!-- Tin tức -->
        <li class="nav-item">
            <a class="nav-link" href="index.php?act=listnews">
                <i class="fas fa-newspaper"></i>
                <span>Tin tức</span>
            </a>
        </li>
        <hr>

        <!-- Về Trang Chủ -->
        <li class="nav-item">
            <a class="nav-link" href="../index.php">
                <i class="fas fa-home"></i>
                <span>Về Trang Chủ</span>
            </a>
        </li>
        <hr>
    </ul>
</nav>

<script>
    function toggleCollapse(id) {
        var element = document.getElementById(id);
        if (element.classList.contains('show')) {
            element.classList.remove('show');
        } else {
            // Ẩn tất cả các phần mở rộng khác
            var collapses = document.querySelectorAll('.collapse-menu');
            collapses.forEach(function(coll) {
                coll.classList.remove('show');
            });
    
            // Hiển thị phần mở rộng đã chọn
            element.classList.add('show');
        }
    }
</script>
