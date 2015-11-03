jQuery(document).ready(function () {

    jQuery('#carousel-news').slick({
        infinite: true,
        speed: 300,
        prevArrow: '.news-arrow-left',
        nextArrow: '.news-arrow-right',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    jQuery('#carousel-articles').slick({
        infinite: true,
        speed: 300,
        prevArrow: '.articles-arrow-left',
        nextArrow: '.articles-arrow-right',
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    jQuery('#carousel-feedback').slick({
        infinite: true,
        speed: 300,
        prevArrow: '.feedback-arrow-left',
        nextArrow: '.feedback-arrow-right',
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

$(document).ready(function() {
    $(".fancybox").fancybox({
        'titlePosition' : 'inside',
        'transitionIn' : 'none',
        'transitionOut' : 'none',
        'width': 560,
        'showNavArrows': false
    });
});

(function($){

    $(document).ready(function() {

        /**
         * Create Nav Menu
         */
        var $mainSection = $('.section_title');

        function  createNavMenu(){

            var listHtml = '';

            for(var i = 0; i < $mainSection.length; i++){
                listHtml += _createLiHtml($mainSection[i], i);
            }

            $navMain.html(listHtml);
        }

            function  _createLiHtml(item, i){

                var itemHtml = '',
                    $section = $(item).parents('section'),
                    id;


                id = $section.id ? $section.id : 'custome-nav-title-id-' + i;
                $section.prop('id', id);

                itemHtml += '<li><a href="#' + id + '">' + item.innerText + '</a></li>';

                return itemHtml;
            }

        if ($mainSection.length > 0) {

            var $navMainBox = $('#nav-main-box'),
                $navMain = $navMainBox.children('ul');

            createNavMenu();

            var $btnMenu = $('#nav-main-box').children('.nav-menu-btn');

            $btnMenu.on('click', function(){
                $navMain.slideDown();
            });

            var isBtn, btn, inBtn;

            $(document).on('click', function(event){
                btn = event.target.classList.contains("nav-menu-btn");
                inBtn = $(event.target).parent().hasClass("nav-menu-btn");

                isBtn = btn || inBtn;

                if( !isBtn && $navMain[0].style.display == 'block' ) {
                    $navMain.slideUp();
                }
            });
        };


        /**
         * Contacts tabs switch
         */

        var delay = 400,
            tab;

        $('.contact-tab-btn').on('click', function(){

            if(this.classList.contains('active') ){
                return false;
            };
            tab = $(this).data('tab');

            $('.contact-tab-btn').removeClass('active');
            this.classList.add('active');

            $('.contacons:not(.'+tab+')').fadeOut(delay, function(){

                $('.'+tab).fadeIn(delay);
            });

        });

        /**
         * Header sots switch
         */

        var sots = {
            animVal: '',
            baseVal: '',
            tmpHrefObj: {},
            $topImg: $('.slide_image').find('image'),
            numberApartment: 0,
            $countApartment: $('.count-apartment')
        };

        $('.smalligon').on('click', function(){

           document.querySelector('.smalligon.active').classList.remove('active');
           this.classList.add('active');

            sots.tmpHrefObj = $(this).find('image').prop('href');

            sots.$topImg.prop('href').animVal = sots.tmpHrefObj.animVal;
            sots.$topImg.prop('href').baseVal = sots.tmpHrefObj.baseVal;

            sots.numberApartment = $(this).data('number');
            sots.$countApartment.text( sots.numberApartment );

        });


    });
})(window.jQuery);