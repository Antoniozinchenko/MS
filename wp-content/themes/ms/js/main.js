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
        var $smallHex = $('#small-top-hexagon .smalligon');

        for(var i=0; i<=$smallHex.length; i++) {
            j = (i+2) > $smallHex.length ? 1 : (i+2);
            $($smallHex[i]).data('next', j);
        }



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

                id = $section[0].id ? $section[0].id : 'custome-nav-title-id-' + i;
                $section.prop('id', id);

                itemHtml += '<li><a href="#' + id + '">' + item.innerText + '</a></li>';

                return itemHtml;
            }

        if ($mainSection.length > 0) {

            var $navMainBox = $('#nav-main-box'),
                $navMain = $('#nav-menu');

            createNavMenu();

            var $btnMenu = $('#nav-main-box').children('.nav-menu-btn');
            var $btnCloseMenu = $('#nav-menu-close-btn');

            $btnMenu.on('click', function(){
                //$navMain.slideDown();
                $('body').css('overflow', 'hidden')
                $('#fixed-menu').fadeIn();
            });

            $btnCloseMenu.on('click', function(){
                //$navMain.slideDown();
                $('#fixed-menu').fadeOut();
                $('body').css('overflow', '');
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
            countApartment: document.getElementById('big-hex-count'),
            titleApartment: document.getElementById('big-hex-title'),
            linkApartment: document.getElementById('big-hex-link'),
        };

        function setBigHexagon(smallHexagone){
            var $tmpHex = $(smallHexagone);
            sots.tmpHrefObj = $tmpHex.find('image').prop('href');

            sots.$topImg.prop('href').animVal = sots.tmpHrefObj.animVal;
            sots.$topImg.prop('href').baseVal = sots.tmpHrefObj.baseVal;

            sots.countApartment.innerText = $tmpHex.data('number');
            sots.titleApartment.innerText = $tmpHex.data('title');
            sots.linkApartment.setAttribute('href', $tmpHex.data('link') );

            smallHexagone.classList.add('active');
        }

        $('.smalligon').on('click', function(){

            document.querySelector('.smalligon.active').classList.remove('active');
            
            setBigHexagon(this);
        });

        var nextAptBtn = document.getElementById('next-appartmen-btn'),
            activeApt,
            newApt,
            nextNumb; 

        $(nextAptBtn).on('click', function(){

            activeApt = document.querySelector('.smalligon.active');

            nextNumb = $(activeApt).data('next');
            activeApt.classList.remove('active');

            newApt = document.getElementById('number-apt-' + nextNumb);

            setBigHexagon(newApt);
        });

        $(".get_call").on('click', function() {
            $('html, body').animate({
                scrollTop: $("#question-form").offset().top
            }, 800);
        });


    });
})(window.jQuery);

