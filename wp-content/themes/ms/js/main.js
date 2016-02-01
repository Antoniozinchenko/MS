(function($){

    $(document).ready(function () {

        var respArgs = [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
                // ,
                // {
                //     breakpoint: 480,
                //     settings: {
                //         slidesToShow: 1,
                //         slidesToScroll: 1
                //     }
                // }
            ];

        $('#our-rewards-mobile-slider').slick({

            prevArrow: '.rewards-mobile-arrow-left',
            nextArrow: '.rewards-mobile-arrow-right',
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            customPaging: function(slider, i) {
                return '<span class="carousel-mobile-navigation">-</span>';
            },
            responsive: [
                {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]

        });

        $('#mobile-slider-our-projects-container').slick({

            prevArrow: '.mobile-slider-our-projects-arrow-left',
            nextArrow: '.mobile-slider-our-projects-arrow-right',
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            customPaging: function(slider, i) {
                return '<span class="carousel-mobile-navigation">-</span>';
            },
            responsive: [
                {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true
                    }
                }
            ]

        });

        $('#carousel-news').slick({
            prevArrow: '.news-arrow-left',
            nextArrow: '.news-arrow-right',
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            customPaging: function(slider, i) {
                return '<span class="carousel-mobile-navigation">-</span>';
            },
            responsive: respArgs,
            adaptiveHeight: true
        });

        $('#carousel-articles').slick({
            prevArrow: '.articles-arrow-left',
            nextArrow: '.articles-arrow-right',
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            customPaging: function(slider, i) {
                return '<span class="carousel-mobile-navigation">-</span>';
            },
            responsive: respArgs
        });

        $('#carousel-feedback').slick({
            prevArrow: '.feedback-arrow-left',
            nextArrow: '.feedback-arrow-right',
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            customPaging: function(slider, i) {
                return '<span class="carousel-mobile-navigation">-</span>';
            },
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 1,
                        dots: true
                    }
                }
                // ,
                // {
                //     breakpoint: 600,
                //     settings: {
                //         slidesToShow: 1,
                //         slidesToScroll: 2
                //     }
                // },
                // {
                //     breakpoint: 480,
                //     settings: {
                //         slidesToShow: 1,
                //         slidesToScroll: 1,
                //         dots: true
                //     }
                // }
            ]
        });
    });
})(window.jQuery);

// $(document).ready(function() {
//     $(".fancybox").fancybox({
//         'titlePosition' : 'inside',
//         'transitionIn' : 'none',
//         'transitionOut' : 'none',
//         'width': 560,
//         'showNavArrows': false
//     });
// });


(function($){
    "use strict";
    /*
    * Pop Up Constructor
    */

    $(document).ready(function() {

        var popupBox = document.getElementById('popup-box'),
            $popupBox = $(popupBox),

            closeBtn = document.getElementById('popup-box-close-btn'),

            list = document.getElementById('pop-up-list'),
            $list = $(list);

        $(closeBtn).on('click', function(){
            $popupBox.fadeOut(500);
            document.body.classList.remove('blur');
            document.body.style.overflow = '';
            $list.children().addClass('hide');
        });
        
        $('.modal-pop-up').on('click', function(e){
            e.preventDefault();
            //console.log(this);
            showPopUp(this, $(this).data() ); //e.target
        });

        function showPopUp(target, data){
            document.body.classList.add('blur');
            document.body.style.overflow = 'hidden';
            $popupBox.fadeIn(300);

            var tmpTarget = target;
            var tmpData = data;


            if( target.classList.contains('camera') ) {

                var modalID = 'modal-camera-' + data.modal;
                var el = document.getElementById(modalID);

                // console.log( 'modalID = ' + modalID );
                // console.log( 'el = ' + el );
                el.classList.remove('hide');

                return false;

                // if(!el) {
                //     var div = document.createElement('div');
                //     div.id = modalID;
                //     div.innerHTML = 'Title';

                //     // var video = document.createElement('video');
                //     // video.id = 'online-video-' + data.modal;
                //     // video.className = 'video-js vjs-default-skin';
                //     // video.controls = 'controls';
                //     // video.preload = 'auto';
                //     // video.width = '640';
                //     // video.height = '268';

                //     // var source = document.createElement('source');
                //     // source.src = 'rtmp://193.108.170.185:1935/camera3/stream';
                //     // source.type = 'rtmp/mp4';

                //     // video.appendChild(source);

                //     var video = '<video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640" height="268" data-setup="{}">'+
                //         '<source src="rtmp://193.108.170.185:1935/camera3/stream" type="rtmp/mp4">'+
                //     '</video>';


                //     var li = document.createElement('li');
                //     li.appendChild(div);
                //     $(li).append( video );
                //     // $(video).data('setup', '{}');

                //     list.appendChild(li);
                // } else {

                // }
                //console.log( 'el = ' + el.length );
            }

            if ( bildModal('article', tmpTarget, tmpData) === 'done') {
                return false;
            }

            if ( bildModal('news', tmpTarget, tmpData) === 'done') {
                return false;
            }
        }

        function bildModal(element, targetDom, dataDom){

            //if( $(targetDom).parents('.modal-' + element) ) {
                //console.dir($(targetDom).parents('.modal-' + element));

                var modalID = 'modal-' + element + '-' + dataDom.modal;
                var el = document.getElementById(modalID);

                console.log( 'modal = ' + element );
                //console.log( dataDom );
                console.log( 'modalID = ' + modalID );
                
                if(el) {
                    el.classList.remove('hide');
                } else {
                    var $targetDom2 = $(targetDom);//.parents('.modal-' + element);
                    //console.dir($targetDom2);
                    //console.log( 'not el');
                    var h2 = document.createElement('h2');
                    h2.id = modalID;
                    h2.innerHTML = $targetDom2.find('.title h4').text();
                    h2.className = 'title';

                    var p = document.createElement('p');
                    p.id = modalID;
                    p.innerHTML = $targetDom2.find('.title p').text();
                    p.className = 'address';

                    var img = document.createElement('img');
                    img.id = modalID;
                    img.src = $targetDom2.find('img').prop('src');

                    var div = document.createElement('div');
                    div.className = 'post-content';
                    div.innerHTML = $targetDom2.find('.post-content').text();

                    var li = document.createElement('li');
                    li.id = modalID;
                    li.className = 'modal-block';

                    li.appendChild(h2);
                    li.appendChild(p);
                    li.appendChild(img);
                    li.appendChild(div);

                    list.appendChild(li);
                }

                return 'done';

            //}

            //return 'no-done';
        }

    });

})(window.jQuery);

(function($){

    $(document).ready(function() {

        // CLOSE PROM POPUP BUTTON
        $('.close-promo-btn').on('click', function(){
            $(this).parent().fadeOut(500);
        });
        // END CLOSE PROM POPUP BUTTON

        var $smallHex = $('#small-top-hexagon .smalligon');

        for(var i = 0, j ,max = $smallHex.length; i <= max; i++) {
            j = (i+2) > $smallHex.length ? 1 : (i+2);
            $($smallHex[i]).data('next', j);
        }

        /**
         * Create Nav Menu
         */
        var $mainSection = $('.section_title');

        function  createNavMenu(){

            var listHtml = '';

            for(var i = 1, max = $mainSection.length; i < max; i++){
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
            camera: document.getElementById('big-hex-camera'),
            $camera: $( document.getElementById('big-hex-camera') ),
            countApartment: document.getElementById('big-hex-count'),
            titleApartment: document.getElementById('big-hex-title'),
            linkApartment: document.getElementById('big-hex-link'),
            remains: document.getElementById('remains'),
            textApartment: document.getElementById('lost-apartment-text')
        };

        function setBigHexagon(smallHexagone){
            var $tmpHex = $(smallHexagone),
                tmpHexData = $tmpHex.data();

            sots.tmpHrefObj = $tmpHex.find('image').prop('href');

            sots.$topImg.prop('href').animVal = sots.tmpHrefObj.animVal;
            sots.$topImg.prop('href').baseVal = sots.tmpHrefObj.baseVal;

            tmpHexData.number === 0 ? sots.remains.classList.remove('hide') : sots.remains.classList.add('hide');
            tmpHexData.link === 'noset' ? sots.linkApartment.classList.add('hide') : sots.linkApartment.classList.remove('hide');

            if(tmpHexData.camera === 'noset') {
                sots.camera.classList.add('hide');
                sots.$camera.data('modal', '');
            } else {
                sots.camera.classList.remove('hide');
                sots.$camera.data('modal', tmpHexData.id);
            };

            sots.textApartment.innerText = tmpHexData.soldtext;
            sots.countApartment.innerText = tmpHexData.number;
            sots.titleApartment.innerText = tmpHexData.title;
            sots.linkApartment.setAttribute('href', tmpHexData.link );

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

    "use strict";

    var DELAY = 400,
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

        $('.contacons:not(.contacons-'+tab+')').fadeOut(DELAY, function(){
            $('.contacons-'+tab).fadeIn(DELAY);
        });

    });



    //MOBILE MAPS NAVIGATION


    $('.maps-navigation .navigation-elements').slick({
        prevArrow: '.maps-navigation-arrow-left',
        nextArrow: '.maps-navigation-arrow-right',
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        customPaging: function(slider, i) {
            return '<span class="carousel-mobile-navigation">-</span>';
        },
        responsive: [
            {
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }
        ]
    });

    $('.maps-navigation .navigation-elements').on('afterChange', function(event,slider){
        var current_city_data = $(slider.$slides[slider.currentSlide]).data();
        var map_city = $('#map');

        if(map_city.data('city') != current_city_data.city) {
            mapSettings = {
                mapCanvas: document.getElementById('map'),
                longitude: current_city_data.lon,
                latitude: current_city_data.lat,
                image: current_city_data.icon
            };
            initialize(mapSettings);

            map_city.data('city', current_city_data.city);
        }

    });



    var boxStart = document.getElementById('set-route-form');

    function initialize(option) {
        var mapOptions = {
            center: new google.maps.LatLng(option.longitude, option.latitude),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,

            disableDefaultUI: false,
            scrollwheel: false,
            draggable: !("ontouchend" in document)
        };


        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;

        //#ee8c01

        var map = new google.maps.Map(option.mapCanvas, mapOptions);

        var marker = new google.maps.Marker({
            position: mapOptions.center,
            map: map,
            icon: option.image
        });

        directionsDisplay.setMap(map);

        directionsDisplay.setOptions({
            polylineOptions: {
                strokeWeight: 6,
                strokeOpacity: 0.8,
                strokeColor:  '#ee8c01'
            },
            suppressMarkers:true
        });


        var searchBox = new google.maps.places.SearchBox(boxStart.querySelector('#set-route-form-input'));
        map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(boxStart);

        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            places.forEach(function(place) {

                //placeMarkerAndPanTo(place.geometry.location, map, marker);

                // marker.setTitle(place.name);
                // marker.setPosition(place.geometry.location);
                // map.setCenter(marker.getPosition());
                // console.log(place.geometry);

                calculateAndDisplayRoute(directionsService, directionsDisplay, place.geometry.location, mapOptions.center);
            });
        });


        boxStart.querySelector('#get-geolocation-btn').addEventListener('click', function(){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    calculateAndDisplayRoute(directionsService, directionsDisplay, pos, mapOptions.center);

                }, function() {
                    handleLocationError(true);
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false);
            }
        });



        document.querySelector('.get_route_form').addEventListener('click', function(){
            if($('#set-route-form').css('display') == 'none') {

                $('.get_route_form').fadeOut(400, function(){
                    $('.set-route-form').slideDown(400);
                    google.maps.event.trigger(map, 'resize');
                });
            }
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


    function handleLocationError(browserHasGeolocation) {
        window.alert(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
    }



    function calculateAndDisplayRoute(directionsService, directionsDisplay, startLatLng, endLatLng) {
        console.log(endLatLng);
        console.log(startLatLng);
        directionsService.route({
            origin: startLatLng,
            destination: endLatLng,
            travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
            if (status === google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);

                if($('#set-route-form').css('display') == 'block') {
                    $('#set-route-form').slideUp(400 , function(){
                        $('.get_route_form').fadeIn(400);
                    });
                }
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', setMap);



    //MAp routes handlers
    $('#route-form-close').on('click', function(){
        $(this).parent().slideUp(400, function(){
            $('.get_route_form').fadeIn(400);
        });
    });

});

(function($){
    
    // fade in #back-top

    var backTopBtn = document.getElementById('back-top'),
        $backTopBtn = $(backTopBtn);

    $backTopBtn.hide(0);

    $(window).scroll(function() {
        $(this).scrollTop() > 100 ? $backTopBtn.fadeIn(200) : $backTopBtn.fadeOut(200);
    });

    // scroll body to 0px on click
    $backTopBtn.on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

})(window.jQuery);

$(document).ready(function(){
    $('.scroll-to-contact').on('click', function(){
        $('html, body').animate({
            scrollTop: $("#question-form").offset().top
        }, 1000);
    });

    var y = $(this).scrollTop();
    if (y > 100) {
        $('.secondary-header').addClass('is-down');
    } else {
        $('.secondary-header').removeClass('is-down');
    }
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 100) {
            $('.secondary-header').addClass('is-down');
        } else {
            $('.secondary-header').removeClass('is-down');
        }
    });
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


(function($){
    $(document).ready(function(){
        $('#close-footer-contact-form').on('click', function(){
            $('#contact-popup-box').fadeOut(300);
            $('body').removeClass('blur').css('overflow', '');
        });

        $('.get_call').on('click', function(){
            var contacts_popup = $('#contact-popup-box');
            if(typeof(contacts_popup.find('.footer-contact-form').html()) === "undefined") {
                //contacts_popup.find('.box').append($('footer').find('.footer-contact-form').clone()).html();
            }

            contacts_popup.fadeIn(300);
            $('body').addClass('blur').css('overflow', 'hidden');
        });


        //FIX PARALLAX AFTER RESIZE OF WINDOW

        var resizeTimer;

        $(window).on('resize', function(e) {

            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {

                $(window).resize();

            }, 250);

        });
    });
})(window.jQuery)