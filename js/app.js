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



    $("#hamburger").click(function() {
        $("#hamburger").toggleClass("cross");
        $(this).closest(".container").toggleClass("cross");
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



    $( 'input:file' ).each( function()
    {
        var $input	 = $( this ),
            $label	 = $input.closest('.fileUpload').find('label'),
            labelVal = $label.html();;
        $input.on( 'change', function( e )
        {
            var fileName = '';

            if( this.files && this.files.length > 1 )
                fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
                fileName = e.target.value.split( '\\' ).pop();
            if( fileName )
                $label.html( fileName );
            else
                $label.html( labelVal );

        });

        // Firefox bug fix
        $input
            .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
            .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
    });

});



