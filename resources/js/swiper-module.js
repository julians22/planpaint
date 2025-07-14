// import Swiper JS
import Swiper from 'swiper';
// import Swiper styles
import { Navigation } from 'swiper/modules';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
// import 'swiper/css/effect-fade';


// .home-swiper-container
const homeSwiper = new Swiper('.home-swiper-container', {
    modules: [Navigation],
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    speed: 1000,
    autoHeight: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
});
