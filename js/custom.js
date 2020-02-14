$=jQuery;
$(document).ready(function() {
    
    //main nav
    $('.navSide > ul > li').on('mouseover', function(){
        var dropdown = $(this).find('ul').first();
        $(dropdown).css({'display':'block'});
    })

    $('.navSide > ul > li').on('mouseout', function(){
        var dropdown = $(this).find('ul').first();
        $(dropdown).css({'display':'none'});
    })
    
    
     scrollLink = $('.scroll');

      scrollLink.click(function(e) {
        e.preventDefault();
        $('body,html').animate({
          scrollTop: $(this.hash).offset().top - 122
        }, 1000 );

        })

      
      //show scrolled nav
      
            $(window).scroll(function(){
                var top = $('html').scrollTop();
                if (top > 200) {
                    $('nav.isScrolled').css({'display':'block'})
                }else if (top < 200) {
                $('nav.isScrolled').css({'display':'none'})
                }
            });
    
  
    
    var url= window.location.href;
    
    if(url.match('attend')) {
//        console.log('ATT');
        $('.scrolledAttendSubnav').css({'display':'flex'});
        $('.scrolledExhibitSubnav').css({'display':'none'});
        $('.scrolledAttend').addClass('activeNav');
        $('.attendNav').addClass('activeNav');
        
    }
    if(url.match('exhibitors')) {
//        console.log('EX');
        $('.scrolledExhibitSubnav').css({'display':'flex'});
        $('.scrolledAttendSubnav').css({'display':'none'});
        $('.scrolledExhibit').addClass('activeNav');
        $('.exhibitNav').addClass('activeNav');
    }
    

    $('#mobile-hamburger').on('click',function () {
        $('#mobile-menu-ul').toggleClass('toggleShow');
    })
    
    
    $('#alertToggleControl').on('click', function (e) {
        e.preventDefault();
        $('.alert_wrap').toggleClass('alertHidden');
        $('#state').toggleClass('sleeping');
        $('#state').toggleClass('awake');
        $('.awake').html('&times;');
        $('.sleeping').html('<i class="fas fa-caret-up"></i>');
    }) 
    
    if ($('#state').hasClass('awake')) {
        
    }
    
})