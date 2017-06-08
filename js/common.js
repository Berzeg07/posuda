$(document).ready(function(){

    // переключатель
    var itemprice = $('.item-price').text();
    $('#total').val(itemprice);

    $(".switch__number .switch-button").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();  
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        }  
        else {
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);

        var quantity = $('#quantity').val();
        var total = itemprice*quantity;
        $('#total').val(total);
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
        margin:10,
        center:false,     //если нужны обрезаные края
        navText:['<span class="nav-left"></span>','<span class="nav-right"></span>'],
        responsive:{
            0:{
                items:3
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

    // $('.item-box__1').hover(function(){
    //     $('p').css('color', 'red');
    // });


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


    // Fancybox
    $("a[rel=group]").fancybox({
        'transitionIn' : 'none',
        'transitionOut' : 'none',
        'titlePosition' : 'over',
        'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });

    // Modal window
    $('a[name=modal]').click(function(e) {
    	e.preventDefault();
    	var id = $(this).attr('href');
    	var maskHeight = $(document).height();
    	var maskWidth = $(window).width();
    	$('#mask').css({'width':maskWidth,'height':maskHeight});
    	$('#mask').fadeTo("slow",0.8); 
    	var winH = $(window).height();
    	var winW = $(window).width();
    	posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement ||document.body.parentNode || document.body).scrollTop;
    	$(id).css('top',  posTop+50);
    	$(id).css('left', winW/2-$(id).width()/2);
    	$(id).fadeIn(500); 
    });
    $('.window .dd-close').click(function (e) {
    	e.preventDefault();
    	$('#mask, .window').hide();
    	$('.window').hide();
    }); 

    $('#mask, .an-exit__krest').click(function () {
    	$('#mask').hide();
    	$('.window').hide();
    }); 
    $(".phone").mask("+ 7 (999) 999 - 99 - 99?"); 
    $(".form-message").submit(function() { 
    	var tel = $(this).find('input[name="phone"]');
    	var empty = false;
    	if (tel.val() == ""){
    		empty = true;
    	}
    	if (empty == true){
    		tel.addClass("error-input");
    		tel.focus();
    	}else{
    		var form_data = $(this).serialize(); 
    		$.ajax({
    			type: "POST", 
    			url: "/message.php", 
    			data: form_data,
    			success: function() {
    				cleanTnanks(this);
    			}
    		});
    	}
    	return false;
    }); 

    function cleanTnanks(form){
    	$('input[type="text"]').removeClass("error-input");
    	$("input[type=text], textarea").val("");
    	$('.window').hide();
    	$('a[href=#thanks]').trigger('click');

    };

    // css slider
    function func1() {
    	$('.current_item1').addClass('current_item2')
    	$('.current_item .current_item1').removeClass('current_item2');
    	$('.current_item .item-title').removeClass('hide');
    	$('.current_item .item-someth').removeClass('hide');
    }
    $(function() {
    	$("#mySlider2").AnimatedSlider( { prevButton: "#btn_prev2", 
    		nextButton: "#btn_next2",
    		visibleItems: 5,
    		infiniteScroll: true,
    		willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
    		changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
    	});
    	$('#btn_next2, #btn_prev2').click(function(){
    		func1();
    	});
    	func1();
    });

});//END READY
