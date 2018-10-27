jQuery(document).ready(function($){
    //code here
});

window.onload = function() {
    // News images same height
    if ($('.news-block').length > 0) {
        var max =  0;

        $('.news-block').each(function(){
            var curH = $(this).find('.news-img').outerHeight();

            if ( curH > max )
            {
                max = curH;
            }
        });

        $('.news-block .news-img').height(max);
    }
}
