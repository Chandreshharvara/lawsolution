//Load Image on Widget
jQuery( document ).ready( function($) {
    $( '.kortez-lawyer-install-plugins' ).click( function (e) {
        e.preventDefault();

        $( this ).addClass( 'updating-message' );
        $( this ).text( kortez_lawyer_adi_install.btn_text );

        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: {
                action     : 'kortez_lawyer_getting_started',
                security : kortez_lawyer_adi_install.nonce,
                slug : 'elementor',
                request : 1
            },
            success:function( response ) {
                setTimeout( function(){
                    $.ajax({
                        type: "POST",
                        url: ajaxurl,
                        data: {
                            action     : 'kortez_lawyer_getting_started',
                            security : kortez_lawyer_adi_install.nonce,
                            slug : 'advanced-import',
                            request : 2
                        },
                        success:function( response ) {
                            setTimeout( function(){
                                $.ajax({
                                    type: "POST",
                                    url: ajaxurl,
                                    data: {
                                        action     : 'kortez_lawyer_getting_started',
                                        security : kortez_lawyer_adi_install.nonce,
                                        slug : 'kortez-toolset',
                                        request : 3
                                    },
                                    success:function( response ) {
                                        setTimeout( function(){
                                            $.ajax({
                                                type: "POST",
                                                url: ajaxurl,
                                                data: {
                                                    action     : 'kortez_lawyer_getting_started',
                                                    security : kortez_lawyer_adi_install.nonce,
                                                    slug : 'contact-form-7',
                                                    main_file : 'wp-contact-form-7',
                                                    request : 4
                                                },
                                                success:function( response ) {
                                                    setTimeout( function(){
                                                        $.ajax({
                                                            type: "POST",
                                                            url: ajaxurl,
                                                            data: {
                                                                action     : 'kortez_lawyer_getting_started',
                                                                security : kortez_lawyer_adi_install.nonce,
                                                                slug : 'elementskit-lite',
                                                                request : 5
                                                            },
                                                            success:function( response ) {
                                                                var extra_uri, redirect_uri, dismiss_nonce;
                                                                redirect_uri         = kortez_lawyer_adi_install.adminurl+'/themes.php?page=advanced-import&browse=all';
                                                                window.location.href = redirect_uri;
                                                            },
                                                            error: function( xhr, ajaxOptions, thrownError ){
                                                                console.log( thrownError );
                                                            }
                                                        });
                                                    }, 500);
                                                },
                                                error: function( xhr, ajaxOptions, thrownError ){
                                                    console.log( thrownError );
                                                }
                                            });
                                        }, 500);
                                    },
                                    error: function( xhr, ajaxOptions, thrownError ){
                                        console.log( thrownError );
                                    }
                                });
                            }, 500);
                        },
                        error: function( xhr, ajaxOptions, thrownError ){
                            console.log( thrownError );
                        }
                    });
                }, 500);
            },
            error: function( xhr, ajaxOptions, thrownError ){
                console.log( thrownError );
            }
        });
    } );

});

