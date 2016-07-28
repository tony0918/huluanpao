(function ($) {
    $(function () {
        $(".mainNav li").each(function (ind, el) {
            $(el).mouseenter(function () {
                $(el).find(".dropNav").fadeIn();
            }).mouseleave(function () {
                $(el).find(".dropNav").fadeOut();
            });
            //$(el).on("tap",function(){
            //    $(this).find(".dropNav").toggle();
            //})
        });

        var setHeight = function () {
            var windowH = $(window).height();
            $(".kvImg").css("height", windowH);
        };
        setHeight();
        $(window).resize(function () {
            setHeight();
        });
    });
})(jQuery);