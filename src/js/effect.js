(function ($) {
    $(function () {
        firstAnimate();

        $('#fullpage').fullpage({
            verticalCentered: false,
            css3: true,
            navigation: true,
            navigationPosition: 'right',
            anchors: ['page1', 'page2', 'page3'],
            afterLoad: function (anchorLink, index) {
                if (index == 1) {
                    $('.section_1 .tit').delay(300).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });
                    $('.section_1 .ct').delay(500).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });
                    $('.section_1 .ct2').delay(800).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });

                }
                ;
                if (index == 2) {
                    $('.section_2 .ct').delay(400).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });
                    $('.section_2 .ct2').delay(600).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });
                }
                ;
                if (index == 3) {
                    $('.section_3 .ct').delay(400).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });
                    $('.section_3 .ct2').delay(600).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });
                    $('.section_3 .ct3').delay(800).queue(function () {
                        $(this).addClass('fadeIn');
                        $(this).dequeue();
                    });
                    $(".globalFooter").addClass("up");
                }
                ;
            },
            onLeave: function (index, direction) {
                if (index == 1) {
                    $('.section_1 .tit').removeClass('fadeIn');
                    $('.section_1 .ct').removeClass('fadeIn');
                    $('.section_1 .ct2').removeClass('fadeIn');
                }
                ;
                if (index == 2) {
                    $('.section_2 .ct').removeClass('fadeIn');
                    $('.section_2 .ct2').removeClass('fadeIn');
                }
                ;
                if (index == 3) {
                    $('.section_3 .ct').removeClass('fadeIn');
                    $('.section_3 .ct2').removeClass('fadeIn');
                    $('.section_3 .ct3').removeClass('fadeIn');
                    $(".globalFooter").removeClass("up");
                }
                ;
            }
        })

        function firstAnimate() {
            $('.section_1 .tit').delay(300).queue(function () {
                $(this).addClass('fadeIn');
                $(this).dequeue();
            });
            $('.section_1 .ct').delay(500).queue(function () {
                $(this).addClass('fadeIn');
                $(this).dequeue();
            });
            $('.section_1 .ct2').delay(800).queue(function () {
                $(this).addClass('fadeIn');
                $(this).dequeue();
            });
        }
    });
})(jQuery);