<footer>
    <div class="p-footer">
        <div class="p-footer__container">
            <div class="p-footer__inner">
                <div>
                    <img
                        src="<?php echo get_template_directory_uri() . '/src/images/main/l-footer-logo.png' ;?>"
                        alt=""
                        class="py-8 mx-auto"
                    >
                    <div class="p-footer__info">
                        <div class="p-footer__info__post">
                            <p>〒150-0002</p>
                            <p>東京都渋谷区渋谷3-9-10 KDC渋谷ビル2F</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>

// MEMO: スライダー
const mobile = window.matchMedia('(max-width: 640px)');
if (mobile.matches) {
    var preview = 1.3;

} else {
    var preview = 2.3;
}

var swiper = new Swiper(".js-achievementsSlide", {
    watchSlidesProgress: true,
    slidesPerView: preview,
    spaceBetween: 10,
    centeredSlides: true,
    
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

// MEMO: ページロード時のアニメーション
window.onload = function() {
    const spinner = document.getElementById('loading');
    spinner.classList.add('loaded');
}

// MEMO: スクロール時に各エリアをふわっと表示
function scrollAnimation() {
    const element = document.getElementsByClassName('scroll-up');

    if (!element) {
        return;
    }

    const scrollY    = window.pageYOffset;
    const windowH    = window.innerHeight;
    const showTiming = 200;

    for (let i = 0; i < element.length; i++) { 
        const elemClientRect = element[i].getBoundingClientRect(); 
        const elemY = scrollY + elemClientRect.top;

        if (scrollY > elemY - windowH + showTiming) {
            element[i].classList.add('is-show');

        } else {
            // element[i].classList.remove('is-show');
        }
    }
}

window.addEventListener('scroll', scrollAnimation);

</script>