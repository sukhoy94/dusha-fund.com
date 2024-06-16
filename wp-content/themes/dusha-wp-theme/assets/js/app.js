import * as bootstrap from 'bootstrap'
import '../styles/main.sass'


document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '.splide', {
        perPage    : 4,
        breakpoints: {
            640: {
                perPage: 1,
            },
        },
    } ).mount();
} );