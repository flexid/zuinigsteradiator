// Init vars simulator

var CONTEST_URL             = 'http://staging-2015.theradiatorfactory.com/batibouw_contest';

var type_woning             = '';
var type_verwarming         = '';
var type_brandstof          = '';
var type_temperatuur        = '';
var oppervlakte             = '';
var energieverbruik         = '';
var energie_coefficient     = '';  
var besparing_jaar          = '';
var inflatie                = '';
var rente                   = '';
var stijging_energieprijs   = '';
var energieprijs            = '';
var besparing               = [];
var inflatiesom             = '';
var co2                     = '';
var brandstof = {
    1 : {
        'omzetting' : 9.9,
        'prijs' : 0.697,
        'eenheid' : 'm<sup>3</sup> gas/jaar',
        'eenheid_fr' : 'm<sup>3</sup> gas/ans',
        'eenheid_prijs' : 'euro/m<sup>3</sup>',
        'co2' : 2.1
    },
    2 : {
        'omzetting' : 10.641,
        'prijs' : 0.76,
        'eenheid' : 'lit. maz./jaar',
        'eenheid_fr' : 'lit. max./ans',
        'eenheid_prijs' : 'euro/Liter',
        'co2' : 2.9
    },
    3 : {
        'omzetting' : 0.3125,
        'prijs' : 0.310976,
        'eenheid' : 'kwh',
        'eenheid_fr' : 'kwh',
        'eenheid_prijs' : 'euro/Kwh',
        'co2' : 0.444
    }
};

$(function(){
    $(document).foundation({
        'magellan-expedition': {
          active_class: 'active', // specify the class used for active sections
          threshold: 0, // how many pixels until the magellan bar sticks, 0 = auto
          destination_threshold: -40, // pixels from the top of destination for it to be considered active
          throttle_delay: 50, // calculation throttling to increase framerate
          fixed_top: 0, // top distance in pixels assigned to the fixed element on scroll
        }
    });
    
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        hash = this.hash.split('#').join(''),
        target = $("a[name='"+hash+"']");
        
        if (target.length === 0) {
            target = $('#'+hash);
        }
        
        var scroll_top = target.offset().top
        
        if(target == '#earth') {
            $('html, body').stop().animate({
                'scrollTop': scroll_top - (120)
            }, 900, 'swing', function () {
                if(history.pushState) {
                    history.pushState(null, null, '#'+hash);
                }
                else {
                    location.hash = '#'+hash;
                }
            });
        } else {
            $('html, body').stop().animate({
                'scrollTop': scroll_top - 40
            }, 900, 'swing', function () {
                if(history.pushState) {
                    history.pushState(null, null, '#'+hash);
                }
                else {
                    location.hash = '#'+hash;
                }
            });
        }
    });
    
    
    
    
    
    // Set start values (values entered in HTML)
    type_woning             = $('*[name=type_woning]:checked').val();
    type_verwarming         = $('*[name=type_verwarming]:checked').val();
    type_brandstof          = $('*[name=type_brandstof]:checked').val();
    type_temperatuur        = $('*[name=type_temperatuur]:checked').val();
    oppervlakte             = $('*[name=oppervlakte]').val();
    inflatie                = $('*[name=inflatie]').val();
    rente                   = $('*[name=rente]').val();
    stijging_energieprijs   = $('*[name=stijging_energieprijs]').val();
    
    updateEnergieverbruik();
    updateBesparing();
    
    // Check if changes are made
    $('*[name=type_woning]').change(function() {
        type_woning = $('*[name=type_woning]:checked').val();
        updateEnergieverbruik();
        updateBesparing();
        $('*[name=type_woning]').each(function() {
            $(this).next('label').removeClass('checked');
        });
        $(this).next('label').addClass('checked');
    });
    $('*[name=type_verwarming]').change(function() {
        type_verwarming = $('*[name=type_verwarming]:checked').val();
        updateEnergieverbruik();
        updateBesparing();
        $('*[name=type_verwarming]').each(function() {
            $(this).next('label').removeClass('checked');
        });
        $(this).next('label').addClass('checked');
    });
    $('*[name=type_brandstof]').change(function() {
        type_brandstof = $('*[name=type_brandstof]:checked').val();
        updateEnergieverbruik();
        updateBesparing();
        $('*[name=type_brandstof]').each(function() {
            $(this).next('label').removeClass('checked');
        });
        $(this).next('label').addClass('checked');
    });
    $('*[name=type_temperatuur]').change(function() {
        type_temperatuur = $('*[name=type_temperatuur]:checked').val();
        updateEnergieverbruik();
        updateBesparing();
        $('*[name=type_temperatuur]').each(function() {
            $(this).next('label').removeClass('checked');
        });
        $(this).next('label').addClass('checked');
    });
    $('*[name=oppervlakte]').change(function() {
        oppervlakte = $('*[name=oppervlakte]').val();
        oppervlakte = oppervlakte.replace(',', '.');
        updateEnergieverbruik();
        updateBesparing();
    });
    $('*[name=energieverbruik]').change(function() {
        energieverbruik = $('*[name=energieverbruik]').val();
        energieverbruik = energieverbruik.replace(',', '.');
        updateBesparing();
    });
    $('*[name=energieprijs]').change(function() {
        energieprijs = $('*[name=energieprijs]').val();
        energieprijs = energieprijs.replace(',', '.');
        updateBesparing();
    });
    $('*[name=inflatie]').change(function() {
        inflatie = $('*[name=inflatie]').val();
        inflatie = inflatie.replace(',', '.');
        updateBesparing();
    });
    $('*[name=rente]').change(function() {
        rente = $('*[name=rente]').val();
        rente = rente.replace(',', '.');
        updateBesparing();
    });
    $('*[name=stijging_energieprijs]').change(function() {
        stijging_energieprijs = $('*[name=stijging_energieprijs]').val();
        stijging_energieprijs = stijging_energieprijs.replace(',', '.');
        updateBesparing();
    });


    // Contest

    $("#participate").click(function(e) {
        e.preventDefault();

        $('.ajaxloader').show();

        var c_name              = $('#name').val();
        var c_address           = $('#address').val();
        var c_postcode          = $('#postcode').val();
        var c_city              = $('#city').val();
        var c_email             = $('#email').val();
        var c_phone             = $('#phone').val();
        var c_question          = $('#question').val();
 
        var c_total_savings     = $('.besparing_30_jaar').html();
        var c_total_co2         = $('.co2_final').html();


        if(c_name == '' || c_address == '' || c_postcode == '' || c_city == '' || c_email == '' || c_phone == '' || c_question == '') {

            if(getLang() == 'fr') {
                alert('Veuillez remplir tous les champs!')
            } else {
                alert('Gelieve alle velden in te vullen!')
            }
            $('.ajaxloader').hide();

        } else {
    
            $.post(CONTEST_URL, {

                contest_entry: {
                    name:           c_name,
                    address:        c_address,
                    postcode:       c_postcode,
                    city:           c_city,
                    email:          c_email,
                    phone:          c_phone,
                    question:       c_question,
                    total_savings:  c_total_savings,
                    total_co2:      c_total_co2
                }

            }, function(){

                $('.contest, .ajaxloader, .grey-button').hide();
                $('.contest-thanks').fadeIn();
                
            });
            
        }
    });
    
    /*
     * END SIMULATOR
     */
    
    $('.products .product').click(function(e) {
        e.preventDefault();
        
        var $lightbox = $(this).next('.lightbox');
        $lightbox.addClass('active');
        $('body').css('overflow', 'hidden');
        
        $lightbox.find('.close').click(function() {
            $lightbox.removeClass('active');
            $('body').css('overflow', 'visible');
        });
        
        $lightbox.click(function(e) {
            if (e.target !== this) return;
            $lightbox.removeClass('active');
            $('body').css('overflow', 'visible');
        });
    });

    var isDraggable = $(document).width() > 640 ? true : false;
    
    $('#map-container').storeLocator({
        'infowindowTemplatePath'   : 'js/plugins/storeLocator/templates/infowindow-description.html',
        'listTemplatePath'         : 'js/plugins/storeLocator/templates/location-list-description.html',
        'KMLinfowindowTemplatePath': 'js/plugins/storeLocator/templates/kml-infowindow-description.html',
        'KMLlistTemplatePath'      : 'js/plugins/storeLocator/templates/kml-location-list-description.html',
        'dataLocation'             : 'js/data/locations.xml',
        'slideMap' : false,
        //'defaultLoc': true,
        //'defaultLat': '50.930690',
        //'defaultLng' : '5.332480',
        'distanceAlert' : -1,
        'fullMapStart' : true,
        'lengthUnit' : 'km',
        'listColor1' : '#ffffff',
        'listColor2' : '#fffff',
        'maxDistance' : false,
        'catMarkers' : { 'Dealer' : ['img/marker.png', 26, 33]},
        'mapSettings' : {
                zoom : 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDoubleClickZoom: true,
                scrollwheel: false,
                draggable: isDraggable
        }
    });
    
    $('.open-table.close').hide();
    
    $('.open-table').click(function(e) {
        e.preventDefault();
        $('.toggle-table').toggle();
        $('.open-table.close').toggle();
        $('.open-table.open').toggle();
        // Same height
        if($(window).width() < 640){
            $('.same-height').unSyncHeight();
        } else {
            $('.same-height').syncHeight({ 'updateOnResize': true});
        }
    });
    
    $('.hamburger-menu').click(function(e) {
        e.preventDefault();
        $('.main-menu').toggle();
    });
    
    $('.earthToggle').click(function() {
       $('#earth').find('p').slideDown(); 
       $('#earth').find('a.button').fadeOut();
       $('#earth').find('.right').stop().animate({
           'margin-top' : 0
       }, 400);
       $('#earth').find('a.close').fadeIn().css("display","block");; 
       
        $('#earth').find('a.close').click(function() {
            $('#earth').find('p').slideUp(); 
            $('#earth').find('a.close').fadeOut();
            $('#earth').find('.right').stop().animate({
                'margin-top' : 100
            }, 400);
            $('#earth').find('a.button').fadeIn();
        });
    });
    
    $('.popup.white').tooltipsy({
        offset: [0, -15]
    });
    
    $('.popup.red').tooltipsy({
       offset: [0, -15],
       className: 'tooltipsy2'
    });
    
    $('body').bind('touchmove',function(e){
        $('.popup.white').each(function() {
            $(this).data('tooltipsy').hide();
        });
        $('.popup.red').each(function() {
            $(this).data('tooltipsy').hide();
        });
    });

    $('body').bind('touchend',function(e){
        $('.popup.white').each(function() {
            $(this).data('tooltipsy').hide();
        });
        $('.popup.red').each(function() {
            $(this).data('tooltipsy').hide();
        });
    });
    
    $('body').bind('touchstart',function(e){
        $('.popup.white').each(function() {
            $(this).data('tooltipsy').hide();
        });
        $('.popup.red').each(function() {
            $(this).data('tooltipsy').hide();
        });
    });
    
    $('.reasons li').click(function() {
       $(this).find('p').slideToggle();
       $(this).find('a.close').slideToggle();
    });
    
    $(window).scroll(function() {
        var $st = $(window).scrollTop();
        var windowHeight = $(window).height();
        
        // Parallax body background
        $('body').css('background-position-y', $st/1.3);
        
        // Earth parralax
        /*var $earth = $('#earth');
        var $begin = $earth.offset().top + $earth.height() - windowHeight;
        var $end = $earth.offset().top;
        var $difference = 500 - $earth.height();
        var $step = $difference / (windowHeight - $earth.height()) * ($st - $begin);
        
        if($st >= $begin && $st <= $end) {
            $earth.css('background-position-y', -$step);
        }*/
        // Kenmerken animation
        var $kenmerken = $('#kenmerken');
        if(($st + (windowHeight / 3)) > $kenmerken.offset().top) {
            
            $('#kenmerken .reasons ul').find('li').each(function (i) {
                var reason = $(this);
                setTimeout(function () {
                    reason.addClass('active');
                }, i*250);
            });
        }
        
    });
    
    $('#submit').click(function(e) {
        e.preventDefault(); 

        var name = $("#name").val();
        var email = $("#email").val();
        var number = $("#number").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var hello = $("#hello").val();
        $("#returnmessage").empty(); 
        
        if (name == '' || email == '' || subject == '' || message == '') {
            $("#returnmessage").append('Please fill in all fields.');
        } else if(!validateEmail(email)) {
            $("#returnmessage").append('Your e-mail is incorrect.');
        } else {
            
            $.post("contact.php", {
                name: name,
                email: email,
                number: number,
                subject: subject,
                message: message,
                hello: hello
            }, function(data) {
                if (data == true) {
                    $("#returnmessage").append('Your message has been successfully sent.');
                    $("#form")[0].reset(); 
                } else {
                    $("#returnmessage").append('Oops, something went wrong.');
                }
            });
        }
    });
    
    

});


$(window).load(function() {
  $('.slider2').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 190,
    itemMargin: 0,
    maxItems: getGridSize(),
    move: 1,
    controlNav: false,
    useCSS: false,
    slideshow: false
  });
  
  
  $('.flexslider-next').click(function() {
      $('.slider2').flexslider('next');
  });
  
  var slideComplete = true;
  // profit simulator
  $('.slider').flexslider({
    animation: "fade",
    animationLoop: false,
    controlNav: false,
    directionNav: false,
    useCSS: true,
    slideshow: false,
    touch: false,
    start: function(){
        // Same height
        if($(window).width() < 640){
            $('.same-height').unSyncHeight();
        } else {
            $('.same-height').syncHeight({ 'updateOnResize': true});
        }
    },
    before: function() {
        slideComplete = false;
    },
    after: function() {
        slideComplete = true;
    }
  });
  
  var currentStep = 0;
   if(getLang() == 'fr') {
        var stepName = 'Etape';
    } else {
        var stepName = 'Stap';
    }
    
    $('.grey-button.prev').click(function(e) {
        console.log(currentStep);
        e.preventDefault();
        if(slideComplete) {
            currentStep--;
            $('.toggle-table').hide();
            $('.open-table.close').hide();
            $('.open-table.open').show();
            $('.steps ul li').each(function(index) {
                if(index < currentStep) {
                   $(this).addClass('active2'); 
                } else if(index === currentStep) {
                   $(this).addClass('active'); 
                   $(this).removeClass('active2');
                } else {
                    $(this).removeClass('active');
                    $(this).removeClass('active2');
                }
            });
            $('.slider').flexslider('prev');
            if(currentStep === 0) {
                $('.saving .step1').show();
                $('.saving .step2').hide();
                $('.saving .step3').hide();
                $('.saving .step4').hide();
            } else if(currentStep === 1) {
                $('.saving .step1').hide();
                $('.saving .step2').show();
                $('.saving .step3').hide();
                $('.saving .step4').hide();
            } else if(currentStep === 2) {
                $('.saving .step1').hide();
                $('.saving .step2').hide();
                $('.saving .step3').show();
                $('.saving .step4').hide();
            } else if(currentStep === 3) {
                $('.saving .step1').hide();
                $('.saving .step2').hide();
                $('.saving .step3').hide();
                $('.saving .step4').show();
            }
            
            if(currentStep == 0) {
                $('.button-bar .prev').fadeOut();
                $('.button-bar .next').html(stepName + ' 2 >').fadeIn();
            } else if (currentStep == 1) {
                $('.button-bar .prev').html('< ' + stepName + ' 1').fadeIn();
                $('.button-bar .next').html(stepName + ' 3 >').fadeIn();
            } else if (currentStep == 2) {
                $('.button-bar .prev').html('< ' + stepName + ' 2').fadeIn();
                $('.button-bar .next').html(stepName + ' 4 >').fadeIn();
            } else if (currentStep == 3) {
                $('.button-bar .prev').html('< ' + stepName + ' 3').fadeIn();
                $('.button-bar .next').fadeOut();
            }
            
            if($(window).width() < 640){
                $('.same-height').unSyncHeight();
            } else {
                $('.same-height').syncHeight({ 'updateOnResize': true});
            }
            
            $('html, body').stop().animate({
                'scrollTop': $('#profit-simulator').offset().top - 40
            }, 900, 'swing', function () {
                // nothing
            });
        }
    });
    
    $('.grey-button.next').click(function(e) {
        e.preventDefault();
        if(slideComplete) {
            currentStep++;
            $('.toggle-table').hide();
            $('.open-table.close').hide();
            $('.open-table.open').show();
            $('.steps ul li').each(function(index) {
                if(index < currentStep) {
                   $(this).addClass('active2'); 
                } else if(index === currentStep) {
                   $(this).addClass('active'); 
                   $(this).removeClass('active2');
                } else {
                    $(this).removeClass('active');
                    $(this).removeClass('active2');
                }
            });
            $('.slider').flexslider('next');
            if(currentStep === 0) {
                $('.saving .step1').show();
                $('.saving .step2').hide();
                $('.saving .step3').hide();
                $('.saving .step4').hide();
            } else if(currentStep === 1) {
                $('.saving .step1').hide();
                $('.saving .step2').show();
                $('.saving .step3').hide();
                $('.saving .step4').hide();
            } else if(currentStep === 2) {
                $('.saving .step1').hide();
                $('.saving .step2').hide();
                $('.saving .step3').show();
                $('.saving .step4').hide();
            } else if(currentStep === 3) {
                $('.saving .step1').hide();
                $('.saving .step2').hide();
                $('.saving .step3').hide();
                $('.saving .step4').show();
            }
            
            if(currentStep == 0) {
                $('.button-bar .prev').fadeOut();
                $('.button-bar .next').html(stepName + ' 2 >').fadeIn();
            } else if (currentStep == 1) {
                $('.button-bar .prev').html('< ' + stepName + ' 1').fadeIn();
                $('.button-bar .next').html(stepName + ' 3 >').fadeIn();
            } else if (currentStep == 2) {
                $('.button-bar .prev').html('< ' + stepName + ' 2').fadeIn();
                $('.button-bar .next').html(stepName + ' 4 >').fadeIn();
            } else if (currentStep == 3) {
                $('.button-bar .prev').html('< ' + stepName + ' 3').fadeIn();
                $('.button-bar .next').fadeOut();
            }
            
            if($(window).width() < 640){
                $('.same-height').unSyncHeight();
            } else {
                $('.same-height').syncHeight({ 'updateOnResize': true});
            }
            
            $('html, body').stop().animate({
                'scrollTop': $('#profit-simulator').offset().top - 40
            }, 900, 'swing', function () {
                // nothing
            });
        }
    });
  
  
  // Same height
  if($(window).width() < 640){
        $('.same-height').unSyncHeight();
    } else {
        $('.same-height').syncHeight({ 'updateOnResize': true});
    }
});

$(window).resize(function() {

    $('.slider2').data('flexslider').vars.itemWidth = $('#vergelijking .table .green').width();
    $('.slider2').data('flexslider').vars.maxItems = getGridSize();
    $('.slider2').data('flexslider').doMath();
    
    // Same height
    if($(window).width() < 640){
        $('.same-height').unSyncHeight();
    } else {
        $('.same-height').syncHeight({ 'updateOnResize': true});
    }
    
});

function getGridSize() {
    if(window.innerWidth < 640) {
        return 1;
    } else if(window.innerWidth < 880) {
        return 2;
    } else {
        return 3;
    }
}
  
function updateEnergieverbruik() {
    if(type_woning == 1) {
        if(type_temperatuur == 1) {
            energie_coefficient = 98;
        } else if(type_temperatuur == 2) {
            if(type_brandstof == 3) {
                energie_coefficient = 98;
            } else {
                energie_coefficient = 102;
            } 
        }
    } else if(type_woning == 2) {
        if(type_temperatuur == 1) {
            energie_coefficient = 117;
        } else if(type_temperatuur == 2) {
            if(type_brandstof == 3) {
                energie_coefficient = 117;
            } else {
                energie_coefficient = 122;
            }
        }
    }

    energieverbruik = oppervlakte * energie_coefficient;
    
    if(type_brandstof == 1 || type_brandstof == 2) {
        energieverbruik = energieverbruik / brandstof[type_brandstof].omzetting;
    } else if (type_brandstof == 3) {
        energieverbruik = energieverbruik * brandstof[type_brandstof].omzetting;
    }
    
    energieverbruik = Math.round(energieverbruik);
    
    $('*[name=energieverbruik]').val(energieverbruik);
   
    if(getLang() == 'fr') {
        $('.eenheid').html(brandstof[type_brandstof].eenheid_fr);
    } else {
        $('.eenheid').html(brandstof[type_brandstof].eenheid);
    }
    $('.eenheid_prijs').html(brandstof[type_brandstof].eenheid_prijs);
    $('*[name=energieprijs]').val(brandstof[type_brandstof].prijs);
    energieprijs = brandstof[type_brandstof].prijs;
}

function updateBesparing() {
    if(type_verwarming == 1) {
        if(type_woning == 1) {
            if(type_temperatuur == 1) {
                var besparing_percentage = 10;
            } else if(type_temperatuur == 2) {
                var besparing_percentage = 9;
            }
        } else if(type_woning == 2) {
            if(type_temperatuur == 1) {
                var besparing_percentage = 16;
            } else if(type_temperatuur == 2) {
                var besparing_percentage = 13;
            }
        }
    } else if(type_verwarming == 2) {
        var besparing_percentage = 5;
    }
    
    besparing_jaar = energieverbruik * (besparing_percentage / 100);
    besparing_jaar = Math.round(besparing_jaar);
    
    inflatiesom = (parseFloat(inflatie) + parseFloat(rente) + parseFloat(stijging_energieprijs)) / 100;
    co2_final = '';
    
    $('.table .inner-content').empty();
    jaar = getLang() == 'fr' ? 'An' : 'Jaar';
    for(i=1;i<=30;i++) {
        besparing_geld_jaar = (parseFloat(energieprijs) * parseFloat(besparing_jaar)) * Math.pow((1 + inflatiesom), i);
        co2 = (besparing_jaar * brandstof[type_brandstof].co2) * i;
        if(i > 1) {
            besparing[i] = besparing_geld_jaar + besparing[i-1];
        } else {
            besparing[i] = besparing_geld_jaar;
        }
        $('.table .inner-content').append('<div class="row"><div class="small-3 columns text-center"><span>' + jaar + ' ' + i + '</span></div><div class="small-3 columns"><span>&euro;' + besparing_geld_jaar.toFixed() + '</span></div><div class="small-3 columns"><span>&euro;' + besparing[i].toFixed() + '</span></div><div class="small-3 columns"><span>' + co2.toFixed() + ' kg CO<span class="h2o">2</span></span></div></div>');
        co2_final = number_format(co2, 2, ',', '.');
    }
    
    $('.besparing_percentage').html(besparing_percentage + '%');
    $('.besparing_jaar').html(besparing_jaar);
    $('.besparing_geld_jaar').html(number_format(besparing[1], 2, ',', '.'));
    $('.besparing_30_jaar').html(number_format(besparing[30], 2, ',', '.'));
    
    besparing_30_jaar_split = number_format(besparing[30], 2, ',', '.');
    besparing_30_jaar_split = besparing_30_jaar_split.split(',');
    $('.besparing_30_jaar_first').html(besparing_30_jaar_split[0]);
    $('.besparing_30_jaar_last').html(',' + besparing_30_jaar_split[1]);
    $('.co2_final').html(co2_final);
}

function number_format(number, decimals, dec_point, thousands_sep) {
  thousands_sep = ''; // Geen punt bij duizendtallen
  
  number = (number + '')
    .replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}

function getLang() {
    return $( "body" ).data( "lang" );
}

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 