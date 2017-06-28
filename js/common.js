$(document).ready(function(){

    // плагин селекта
    $('select').selectric();

    // переключатель
    // var itemprice = $('.item-price').text();
    // $('#total').val(itemprice);

    // $(".switch__number .switch-button").on("click", function() {
    //     var $button = $(this);
    //     var oldValue = $button.parent().find("input").val();  
    //     if ($button.text() == "+") {
    //         var newVal = parseFloat(oldValue) + 1;
    //     }  
    //     else {
    //         if (oldValue > 1) {
    //             var newVal = parseFloat(oldValue) - 1;
    //         } else {
    //             newVal = 1;
    //         }
    //     }
    //     $button.parent().find("input").val(newVal);

    //     var quantity = $('#quantity').val();
    //     var total = itemprice*quantity;
    //     $('#total').val(total);
    // }); 

    $(".switch__number .switch-button").on("click", function() {
      var button = $(this);
      var oldValue = button.parent().find(".price_area").val();
      if (button.text() == "+") {
         var newVal = parseFloat(oldValue) + 1;
     }
     else {
         if (oldValue > 1) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 1;
        }
    }
    button.parent().find(".price_area").attr('value', newVal);
});

	// Мобильное меню 
	$(".fa-bars").click(function(m){
		m.preventDefault();
		$(".main-menu").slideToggle(500);
	});
	// Конец Мобильное меню

       /* Slider
       =====================*/
       var owl2 = $("#slider__actual");
       owl2.owlCarousel({
        loop:true,
        nav:true, 
        autoplay:false,
        smartSpeed:1000,
        margin:5,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left"></span>','<span class="nav-right"></span>'],
        responsive:{
            0:{
                items:2
            },
            320:{
                items:3
            },
            480:{
                items:4 
            },
            768:{
                items:6
            }, 
            1240:{
                items:10
            },      
        }
    });

       $(function(){
        $(window).scroll(function() {
            if($(this).scrollTop() >= 737) {
                $('.slider-wrap').addClass('stickytop');
            }
            else{
                $('.slider-wrap').removeClass('stickytop');
            }
        });
    });

       $('.filter__client a').click(function(e) {
        e.preventDefault();
        $('.filter__client_active').removeClass('filter__client_active');
        $(this).addClass('filter__client_active');
        var tab = $(this).attr('href');       
        $('.catalog__content').not(tab).css({'display':'none'});
        $(tab).css({'display':'block'});
    });  


       /* Timer 
       =======================*/ 
       var count = 8;
       var minutes = 1;
       var hours = 2;

       var end = 0;

       if (count < 10) {
        $("#dd-sec").html('0'+count);
    }
    else {
        $("#dd-sec").html(count);
    }
    if (minutes < 10) {
        $("#dd-min").html('0'+minutes);
    }
    else {
        $("#dd-min").html(minutes);
    }
    if (hours < 10) {
        $("#dd-hours").html('0'+hours);
    }
    else {
        $("#dd-hours").html(hours);
    }

    var counter=setInterval(timer, 1000); //1000 will  run it every 1 second

    function timer()
    {
        count = count - 1;
        if (count<10) {
            $("#dd-sec").html('0'+count);
        } else {
            $("#dd-sec").html(count);
        }
        if (count == 0) {
            minutes = minutes - 1;
            if (minutes < 10 && minutes >= 0) {
                $("#dd-min").html('0'+minutes);
            }
            if (minutes > 10) {
                $("#dd-min").html(minutes);
            }
            if (minutes < 0) {
                hours = hours - 1;
                if (hours < 10 && hours >=0) {
                    $("#dd-hours").html('0'+hours);
                }
                if (hours>10) {
                    $("#dd-hours").html('0'+hours);
                }
                if (hours < 0 ) {

                    end = 1;
                    clearTimeout(counter);
                }
                if (end) { minutes = '00';}
                else {
                    minutes = 59;
                }
                $("#dd-min").html(minutes);
            }
            if (end) { count = '00';}
            else {
                count = 59;
            }
            
            $("#dd-sec").html(count);
        }
    }
       /* End Timer
       ======================*/

       // slider news
       var owl2 = $("#slider__news");
       owl2.owlCarousel({
        loop:true,
        nav:true, 
        autoplay:false,
        smartSpeed:1000,
        margin: 0,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left2"></span>','<span class="nav-right2"></span>'],
        responsive:{
            0:{
                items:1
            },
            320:{
                items:1
            },
            768:{
                items:3
            },   
            992:{
                items:4
            },    
        }
    });

              // slider news
              var owl2 = $("#slider__actions");
              owl2.owlCarousel({
                loop:true,
                nav:true, 
                autoplay:false,
                smartSpeed:1000,
                margin: 0,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left3"></span>','<span class="nav-right3"></span>'],
        responsive:{
            0:{
                items:1
            },
            320:{
                items:1
            },
            768:{
                items:3
            },   
            992:{
                items:4
            },    
        }
    });




              $('.faq__box_left .js-tab').click(function(e) {
                e.preventDefault();
                $('.js-tab').removeClass('active_tab');
                $(this).addClass('active_tab');
                var tab = $(this).attr('href');
                $('.faq__box_tab').not(tab).css({'display':'none'});
                $(tab).fadeIn(400);       
            });
              $('.faq__box_left .js-tab:first').click();






});//END READY
