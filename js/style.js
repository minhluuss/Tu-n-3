document.addEventListener('DOMContentLoaded', function () {
    const videoList = document.getElementById('videoList');
    const btnNext = document.getElementById('btnNext');
    const btnPrev = document.getElementById('btnPrev');

    // Nếu trang không có slider → thoát, không lỗi
    if (!videoList || !btnNext || !btnPrev) return;

    btnNext.addEventListener('click', function () {
        videoList.scrollBy({
            left: 300,
            behavior: 'smooth'
        });
    });

    btnPrev.addEventListener('click', function () {
        videoList.scrollBy({
            left: -300,
            behavior: 'smooth'
        });
    });
});
