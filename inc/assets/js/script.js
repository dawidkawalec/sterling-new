jQuery(function($) {

    // Add custom script here. Please backup the file before editing/modifying. Thanks

    // Run the script once the document is ready
    $(document).ready(function() {


        //tlumaczenie na siłe

        console.log("Hello world!");






        $("input[id='faktura__tak']").click(function() {
            if ($("input[id='faktura__tak']:checked").val()) {
                $('#billing_nip_field').css('display', 'block');
                $('#billing_nazwa_firmy_field').css('display', 'block');
                $('#billing_adres_firmy_field').css('display', 'block');
            }
        });
        $("input[id='faktura__nie']").click(function() {
            if ($("input[id='faktura__nie']:checked").val()) {
                $('#billing_nip_field').css('display', 'none');
                $('#billing_nazwa_firmy_field').css('display', 'none');
                $('#billing_adres_firmy_field').css('display', 'none');
            }
        });


        // jQuery('.collapse').collapse();

        $('.site-hamburger').click(function() {
            $('#nav-icon3').toggleClass('open');
            $('header#hamburger .container .navbar').toggle();
            $('div#main-nav').toggleClass('show');
        });


        $('.produkty-pakiety__switcher .year-tab').on('click', function() {
            $('.produkty-pakiety__switcher .year-tab').addClass('active');
            $('.produkty-pakiety__switcher .month-tab').removeClass('active');
            $('.row-year').show();
            $('.row-month').hide();
        })
        $('.produkty-pakiety__switcher .month-tab').on('click', function() {
            $('.produkty-pakiety__switcher .month-tab').addClass('active');
            $('.produkty-pakiety__switcher .year-tab').removeClass('active');
            $('.row-year').hide();
            $('.row-month').show();
        })

        $('.archive ul.children.nav').hide();
        var arrow = '<img src="https://sterlink.two-colours.com/wp-content/uploads/2021/03/arrow-nav-cat.png" class="arrow-mobile">';
        $('.archive ul.product-categories>li.cat-parent').append(arrow);

        $('.archive ul.product-categories>li img').on('click', function() {
            $(this).parent().find('ul.children').toggle();
        })

        // $('.archive ul.product-categories>li>a').each(function() {
        //     $widthNav = $(this).width();
        //     $('.archive ul.product-categories>li img').css('right', $widthNav);
        // });


        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 35,
            nav: true,
            dots: false,
            navText: [
                '<img src="/wp-content/themes/sterlink/inc/assets/images/arrow-black.svg" />',
                '<img src="/wp-content/themes/sterlink/inc/assets/images/arrow-black.svg" />'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })

    });


    jQuery('.woocommerce-account-fields').appendTo('.woocommerce-billing-fields');

    // Run the script once the window finishes loading


});