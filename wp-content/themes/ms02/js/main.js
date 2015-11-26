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

        // CLOSE PROM POPUP BUTTON
        $('.close-promo-btn').on('click', function(){
            $(this).parent().fadeOut(500);
        });
        // END CLOSE PROM POPUP BUTTON

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
            var $btnCloseMenu = $('#nav-menu-close-btn, #nav-menu a');

            $btnMenu.on('click', function(){
                //$navMain.slideDown();
                $('body').css('overflow', 'hidden').addClass('blur');
                $('#fixed-menu').fadeIn();
            });

            $btnCloseMenu.on('click', function(){
                //$navMain.slideDown();
                $('#fixed-menu').fadeOut();
                $('body').css('overflow', '').removeClass('blur');
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
            remains: document.getElementById('remains'),
            textApartment: document.getElementById('lost-apartment-text')
        };

        function setBigHexagon(smallHexagone){
            var $tmpHex = $(smallHexagone);
            sots.tmpHrefObj = $tmpHex.find('image').prop('href');

            sots.$topImg.prop('href').animVal = sots.tmpHrefObj.animVal;
            sots.$topImg.prop('href').baseVal = sots.tmpHrefObj.baseVal;

            $tmpHex.data('number') == 0 ? sots.remains.classList.remove('hide') : sots.remains.classList.add('hide');

            // var target = $tmpHex.data('link') == 'javascript:void(0)' ? '_self' : '_blank';
            // sots.linkApartment.setAttribute('target', target );

            sots.textApartment.innerText = $tmpHex.data('sold-text');

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

        function changeText(self) {
            var data = $(self).data();
            self.innerText = self.innerText == data.more ? data.less : data.more;
        }

        $('.btn_detailed').on('click', function(){

            $(this).parent().toggleClass('open');
			changeText(this);
        });

        $('.read-more-btn').on('click', function(){

            var box = $(this).parents('.center-content')[0];
            box.classList.contains('open') ? box.classList.remove('open') : box.classList.add('open');

			changeText(this);
        });

        $('.feedback').find('.slick-arrow').on('click', function(){

            $('.feedback').find('.center-content.open').removeClass('open');
        });

    });
})(window.jQuery);


/**
 * Contacts tabs switch
 */
jQuery(document).ready(function () {

    var delay = 400,
        tab,
        mapSettings;

    $('.contact-tab-btn').on('click', function(){

        if(this.classList.contains('active') ){
            return false;
        };

        var tabData = $(this).data();

        mapSettings = {
            mapCanvas: document.getElementById('map'),
            longitude: tabData.lon,
            latitude: tabData.lat,
            image: tabData.icon
        };

        tab = tabData.tab;

        $('.contact-tab-btn').removeClass('active');
        this.classList.add('active');

        initialize(mapSettings);

        $('.contacons:not(.contacons-'+tab+')').fadeOut(delay, function(){
            $('.contacons-'+tab).fadeIn(delay);
        });

    });

    function initialize(option) {
        var mapOptions = {
            center: new google.maps.LatLng(option.longitude, option.latitude),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,

            disableDefaultUI: false,
            scrollwheel: false,
            draggable: true
        };

        var map = new google.maps.Map(option.mapCanvas, mapOptions);

        var marker = new google.maps.Marker({
            position: mapOptions.center,
            map: map,
            icon: option.image
        });

    }

    function setMap(){

        var activeTabData = $('.contact-tab-btn.active').data();

        var lvivOption = {
            mapCanvas: document.getElementById('map'),
            longitude: activeTabData.lon,
            latitude: activeTabData.lat,
            image: activeTabData.icon
        };

        initialize(lvivOption);
    };

    google.maps.event.addDomListener(window, 'load', setMap);

});

/*
jQuery(document).ready(function () {

    // bicycle=((
    
    function show_ad(){
        $('body').addClass('blur').css('overflow','hidden');
       $('#promo-popup').fadeIn(300);
    }
    var slideBlock1 = $('.slick-slide[data-slick-index=0]').first().addClass('hover-bicycle').children();
    $('.hover-bicycle, #modal-promo-link').on('click',function(e){
        e.preventDefault();
        show_ad();
    });
    var scripts= document.getElementsByTagName('script');
    var path= scripts[5].src.split('?')[0];      // remove any ?query
    var mydir= path.split('/').slice(0, -1).join('/')+'/';
    var srcImg = mydir+'../img/News_2.png';
    slideBlock1[1].src = srcImg;
    slideBlock1[1].className = 'bicycle';
    slideBlock1[2].style.display = 'none';
    
    // end bicycle
    
});*/