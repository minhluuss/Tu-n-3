 <section class="khu-vuc-lien-he">
        <div class="khung-noi-dung khung-chung">

            <!-- BÊN TRÁI -->
            <div class="noi-dung-trai mb-5 mt-5">
                <img src="images/thathskm.png" alt="">
            </div>

            <!-- BÊN PHẢI -->
            <div class="hop-lien-he mb-5 mt-5">
                <h3 class="tieu-de-form">Liên hệ</h3>

                <form id="form-lien-he">
                    <input type="email" class="o-nhap" placeholder="Email">
                    <input type="text" class="o-nhap" placeholder="Số điện thoại">
                    <textarea class="o-nhap o-noi-dung" placeholder="Nội dung"></textarea>

                    <div class="nhom-lua-chon">
                        <label class="lua-chon">
                            <input type="radio" name="loai-lien-he">
                            Liên hệ truyền thông
                        </label>
                        <label class="lua-chon">
                            <input type="radio" name="loai-lien-he">
                            Liên hệ đồng hành
                        </label>
                    </div>

                    <button type="submit" id="nut-gui-lien-he">
                        LIÊN HỆ NGAY
                    </button>
                </form>
            </div>
        </div>
    </section>
 <footer class="chan-trang">

        <div class="khung-footer khung-chung">

            <!-- NHÓM CỘT TRÁI -->
            <div class="cot-footer cot-thong-tin">
                <div class="logo-footer">
                    <img src="images/Logoft.png" alt="Sức khỏe học đường">
                </div>

                <p class="giay-phep">
                    Giấy phép số 100/**-***** do Bộ Thông tin và Truyền thông cấp
                </p>

                <p>Liên hệ chương trình: Công ty TNHH Truyền thông UNICOM </p>
                <p>Địa chỉ: Tầng 4. Toà nhà An Bình, số 3, Trần Nguyên Đán, Định Công, Hoàng Mai, Hà Nội</p>
                <p>Điện thoại: 024 3640 0671</p>
                <p>Email:</p>

                <p><br>Kết nối với chúng tôi tại</p>
                <div class="mang-xa-hoi">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- NHÓM CỘT PHẢI-->
            <div class="nhom-cot-phai">
                <!-- CỘT 1: TIN TỨC / HỌC LIỆU -->
                <div class="cot-footer">
                    <h4>Tin tức</h4>
                    <ul>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Sức khỏe học đường TV</a></li>
                        <li><a href="#">Hỏi đáp cùng chuyên gia</a></li>
                        <li><a href="#">Thông cáo báo chí</a></li>
                    </ul>

                    <h4>Học liệu</h4>
                    <ul>
                        <li><a href="#">Mầm non</a></li>
                        <li><a href="#">Tiểu học</a></li>
                        <li><a href="#">THCS</a></li>
                        <li><a href="#">THPT</a></li>

                    </ul>
                </div>

                <!-- CỘT 2: DỰ ÁN -->
                <div class="cot-footer">
                    <h4>Dự án</h4>
                    <ul>
                        <li><a href="#">Nước sạch học đường</a></li>
                        <li><a href="#">Dinh dưỡng học đường</a></li>
                        <li><a href="#">Nha học đường</a></li>
                        <li><a href="#">Bệnh học đường</a></li>
                        <li><a href="#">An toàn thực phẩm</a></li>
                        <li><a href="#">Chống bạo lực học đường</a></li>
                        <li><a href="#">An toàn trên môi trường mạng</a></li>
                        <li><a href="#">Giáo dục giới tính</a></li>
                        <li><a href="#">Tâm lý học đường</a></li>
                    </ul>
                </div>

                <!-- CỘT 3: MENU PHỤ -->
                <div class="cot-footer">
                    <div class="cot-phu">
                        <h4><strong class="noi-bat">E</strong>-magazine</h4>
                        <h4>Giới thiệu</h4>
                        <h4>Liên hệ</h4>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    if (isset($ten_js)) {echo $ten_js;}
?>

</body>
</html>