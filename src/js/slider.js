import Swiper, { Navigation } from "swiper";

import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', function(){
    if(document.querySelector('.slider')) {
        const opciones = {
           slidesPerView: 3,
           spaceBetween: 15,
           freeMode: true,
           navigation: {
             nextEl: ".swiper-button-next",
             prevEl: ".swiper-button-prev"
           },
           breakpoints: {
            640: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            }
           }
        }
          
        Swiper.use([Navigation])
        new Swiper('.slider', opciones)
    }
});