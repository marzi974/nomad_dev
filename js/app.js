jQuery(document).ready(function($){


    $('.scroll_top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });


    $(document).scroll( function() {
        var $window = $(window);
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 34) {
            $('header').addClass("stick");
        } else {
            $('header').removeClass("stick");
        }

    });



    var $container = $('#expert');

    // create a clone that will be used for measuring container width
    $containerProxy = $container.clone().empty().css({ visibility: 'hidden' });

    $container.after( $containerProxy );

    // get the first item to use for measuring columnWidth
    var $item = $container.find('.expertise-item').eq(0);

    $container.imagesLoaded(function(){

        $container.isotope({
            // options
            itemSelector: '.expertise-item',
            layoutMode: 'masonry'
        });


    });

});


