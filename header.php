<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">


    <?php if (isset($ten_css)) { echo $ten_css; } ?>
</head>
<body>
    <div class="khung-banner-top">
                <img src="images/banner1920x250.png" alt="">
            </div>
    <header class="dau-trang">

        <!-- THANH TREN -->
        <div class="thanh-tren">
            <div class="khung-ben-tren khung-chung">

                <div class="thong-tin-trai">
                    <img src="images/Logo.png" class="logo">
                    <span class="ngay-thang">Thứ ba 02-01-2024</span>
                    <span class="dia-diem">Hà Nội </span>
                    <span class="ds-dia-diem">⌄</span>
                    <span class="thoi-tiet">
                        <img src="images/drizzle.png" alt="thoi tiet">
                        26.2°C
                    </span>
                </div>

                <div class="thong-tin-phai">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <span class="co-quoc-gia">
                        <svg viewBox="0 0 512 512">
                            <rect width="512" height="512" fill="#DA251D" />
                            <polygon fill="#FFDD00" points="256,96 293,208 411,208 315,272
                                                            351,384 256,320 161,384 197,272
                                                            101,208 219,208" />
                        </svg>
                    </span>
                </div>

            </div>
        </div>
        <!-- THANH MENU -->
        <nav class="thanh-menu">
            <div class="khung-menu khung-chung">

                <ul class="danh-sach-menu">
                    <li><a href="home.php" class="home"><img src="images/Home.png" alt="home"></a></li>
                    <li><a href="Gioi_Thieu.php">Giới thiệu</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Dự án</a></li>
                    <li><a href="hoclieu.php">Học liệu</a></li>
                    <li><a href="#"><strong class="noi-bat">E</strong>-magazine</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>

                <div class="tim-kiem">
                    <input type="text" placeholder="Tìm kiếm thông tin">
                    <button class="btn-tim-kiem">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

            </div>
        </nav>
    </header>