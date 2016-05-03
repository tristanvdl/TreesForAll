/**
 * Created by Tristan on 17-4-2016.
 */

$(window).scroll(function () {
    var scrollPos = $(this).scrollTop();

    function ScrollAnimation(row, section, elemen1, element2, adjustment) {
        if (scrollPos > $(row).offset().top - $(window).height()) {
            var offset = Math.min(0, scrollPos - $(section).offset().top + adjustment);

            $(elemen1).css({'transform': 'translate(' + offset + 'px, 0px)'});
            $(element2).css({'transform': 'translate(' + -offset + 'px, 0px)'});
        }
    }

    ScrollAnimation('.one', '.story', '.image1', '.text1', 300);
    ScrollAnimation('.two', '.two', '.text2', '.image2', 300);
    ScrollAnimation('.three', '.three', '.image3', '.text3', 300);
    ScrollAnimation('.four', '.four', '.text4', '.image4', 300);

});
