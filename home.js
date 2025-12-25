$(document).ready(function () {
    console.log("JS đã load");
    /* ===== MENU ===== */
    $('.menu-toggle').click(function () {
        $('.menu').slideToggle();
    });

    /* ===== SLIDER TIN TỨC ===== */
    /* ===== SLIDER TIN ===== */
    document.querySelectorAll('.khung-slider').forEach(slider => {
        const danhSachTin = slider.querySelector('.danh-sach-tin');
        const nutSau = slider.querySelector('.nut-sau');
        const nutTruoc = slider.querySelector('.nut-truoc');

        if (!danhSachTin || !nutSau || !nutTruoc) return;

        const soTheHien = 4;
        const tongSoThe = danhSachTin.children.length;
        const toiDa = tongSoThe - soTheHien;
        let viTri = 0;

        const tinhChieuRongThe = () => {
            const the = danhSachTin.querySelector('.the-tin');
            const gap = 24;
            return the.offsetWidth + gap;
        };

        const capNhatNut = () => {
            nutTruoc.style.display = viTri === 0 ? 'none' : 'flex';
            nutSau.style.display = viTri === toiDa ? 'none' : 'flex';
        };

        capNhatNut();

        nutSau.addEventListener('click', () => {
            if (viTri < toiDa) {
                viTri++;
                danhSachTin.style.transform =
                    `translateX(-${viTri * tinhChieuRongThe()}px)`;
                capNhatNut();
            }
        });

        nutTruoc.addEventListener('click', () => {
            if (viTri > 0) {
                viTri--;
                danhSachTin.style.transform =
                    `translateX(-${viTri * tinhChieuRongThe()}px)`;
                capNhatNut();
            }
        });

        window.addEventListener('resize', () => {
            danhSachTin.style.transform =
                `translateX(-${viTri * tinhChieuRongThe()}px)`;
            capNhatNut();
        });
    });
    const pages = document.querySelectorAll('.trang:not(.truoc):not(.sau)');

    pages.forEach(btn => {
        btn.addEventListener('click', () => {
            pages.forEach(p => p.classList.remove('active'));
            btn.classList.add('active');
        });
    });
}); 