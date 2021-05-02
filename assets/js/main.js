;(function($){
    import {tns} from './src/tiny-slider.js';

    var slider = tns({
      container: '.slider',
      items: 3,
      slideBy: 'page',
      autoplay: true
    });
})(jQuery);