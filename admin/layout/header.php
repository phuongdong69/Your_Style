<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Style - Admin</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <li id="search" class="search">
            <div class="form">
                <form>
                    <input class="search-input" placeholder="Tìm Kiếm" type="text" value="" name="search">
                    <button class="search-submit" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            
         </li>
        <div class="hea-right">
            <ul>
                <li class="login-logout">
                    <a class="nav" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <div class="collapse">
                        <div class="">
                            <a class="item" href="index.php?act=login">Đăng Nhập</a>
                            <a class="item" href="index.php?act=register">Đăng Ký</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>