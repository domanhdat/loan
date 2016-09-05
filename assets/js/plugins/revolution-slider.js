var RevolutionSlider = function () {

    return {

        //Revolution Slider - Full Screen
        initRSfullScreen: function () {
            var revapi;
            jQuery(document).ready(function () {
                revapi = jQuery('.fullscreenbanner').revolution(
                    {
                        delay                    : 15000,
                        startwidth               : 1170,
                        startheight              : 500,
                        hideThumbs               : 10,
                        fullWidth                : "on",
                        fullScreen               : "on",
                        hideCaptionAtLimit       : "",
                        dottedOverlay            : "twoxtwo",
                        navigationStyle          : "preview4",
                        fullScreenOffsetContainer: ""
                    });
            });
        },
        initRSfullWidth : function () {
            var revapi;
            jQuery(document).ready(function () {
                revapi = jQuery('.tp-banner').revolution(
                    {
                        delay          : 9000,
                        startwidth     : 1170,
                        startheight    : 500,
                        hideThumbs     : 10,
                        navigationStyle: "preview4"
                    });
            });
        },

    };
}();
