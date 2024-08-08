<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Style - Admin</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    .dropdown {
        position: relative;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #344959;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        min-width: 160px;
        border-radius: 4px;
        padding: 0;
        list-style: none;
    }

    .dropdown-menu li {
        width: 100%;
    }

    .dropdown-menu li a {
        color: #fff;
        padding: 10px 15px;
        display: block;
        text-decoration: none;
        border-bottom: 1px solid #34495e;
        transition: background-color 0.3s;
    }

    .dropdown-menu li a:hover {
        background-color: #34495e;
    }

    .dropdown-menu li:last-child a {
        border-bottom: none;
    }

    .show {
        display: block;
    }
</style>

<body>
    <header>
        <!-- <li id="search" class="search">
            <div class="form">
                <form>
                    <input class="search-input" placeholder="Tìm Kiếm" type="text" value="" name="search">
                    <button class="search-submit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

        </li> -->
        <div class="hea-right">
            <ul>
                <li class="login-logout">
                <h3 style="text-align: center;margin-left: 700px;" class="title"><strong>ADMIN</strong></h3>
                    <!-- <a class="nav" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> -->
                    <!-- <a class="nav" href="#">
                        <i class="fa-solid fa-user"></i>
                    </a> -->
                    <!-- <div class="collapse">
                        <div class="">
                            <a class="item" href="index.php?act=login">Đăng Nhập</a>
                            <a class="item" href="index.php?act=register">Đăng Ký</a>
                        </div> -->
                    </div>
                </li>
            </ul>
        </div>
    </header>