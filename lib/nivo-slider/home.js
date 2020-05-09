(function ($) {
 "use strict";

    //---------------------------------------------
    //Nivo slider
    //---------------------------------------------
        $('#nivoslider').nivoSlider({
            effect: 'random',
            slices: 15,
            boxCols: 10,
            boxRows: 10,
            animSpeed: 500,
            pauseTime: 5000,
            startSlide: 0,
            directionNav: false,
            controlNavThumbs: false,
            pauseOnHover: false,
            manualAdvance: false
        });

        $('#nivoslider-1').nivoSlider({
            effect: 'random',
            slices: 15,
            boxCols: 10,
            boxRows: 10,
            animSpeed: 500,
            pauseTime: 5000,
            startSlide: 0,
            directionNav: false,
            controlNavThumbs: false,
            pauseOnHover: false,
            manualAdvance: false
        });
})(jQuery);