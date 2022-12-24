import './bootstrap';
import 'alpinejs';
import Alpine from 'alpinejs'
window.Alpine = Alpine

import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
// ..
AOS.init();
Alpine.start();
