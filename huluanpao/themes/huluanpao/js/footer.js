(function ($) {
    $(function () {
        function handle(delta) {
            if (delta < 0) {
                $(".globalFooter").addClass("up");
            } else {
                $(".globalFooter").removeClass("up");
            }
        }

        function wheel(event) {
            var delta = 0;
            if (!event) event = window.event;
            if (event.wheelDelta) {
                delta = event.wheelDelta / 120;
                if (window.opera) delta = -delta;
            } else if (event.detail) {
                delta = -event.detail / 3;
            }
            if (delta)
                handle(delta);
        }

        if (window.addEventListener)
            window.addEventListener('DOMMouseScroll', wheel, false);
        window.onmousewheel = document.onmousewheel = wheel;
    });
})(jQuery);