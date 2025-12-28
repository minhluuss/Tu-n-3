document.addEventListener('DOMContentLoaded', function () {
    const sliders = document.querySelectorAll('.slider-section');

    if (!sliders.length) return;

    sliders.forEach(slider => {
        const videoList = slider.querySelector('.slider-container');
        const btnNext = slider.querySelector('.btn-next');
        const btnPrev = slider.querySelector('.btn-prev');

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
});
