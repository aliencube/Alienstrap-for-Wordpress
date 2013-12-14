(function ($) {
    var setMaxHeight = function() {
        var maxHeight = 0;
        boxes = $("article .panel");
        boxes.each(function () {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });
        boxes.height(maxHeight);
    };

    $(document).ready(function () {
        setMaxHeight();

        var resizeTimer = null;
        $(window).resize(function () {
            if (resizeTimer) {
                clearTimeout(resizeTimer);
            }
            resizeTimer = setTimeout(setMaxHeight, 100);
        });
    });
})(jQuery);