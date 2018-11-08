jQuery(document).ready(function($){
    var isshow = localStorage.getItem('isshow');

    if(isshow !== "1") {
        $('.info-cookie').removeClass('d-none');
    }

    $(".close-cookie").click(function() {
        if (isshow === null) {
            localStorage.setItem('isshow', 1);
            $('.info-cookie').addClass('d-none');
        }
    });
});

window.onload = function() {
    // News same height
    if ($('.news-block').length > 0) {
        var max =  0;

        $('.news-block').each(function(){
            var curC = $(this).find('.news-title').outerHeight();

            if ( curC > max )
            {
                max = curC;
            }
        });

        $('.news-block .news-title').height(max);

        $('.news-block').each(function(){
            var curH = $(this).find('.news-img-block').outerHeight();

            if ( curH > max )
            {
                max = curH;
            }
        });

        $('.news-block .news-img-block').height(max);
    }
}
