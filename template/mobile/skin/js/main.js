$(document).ready(function(){
	var ww=$(window).width();
	var wh=$(window).height();
	var fh=$('.fnav').height();
	$('.no').css({'padding-bottom':fh+'px'});
	
	if(ww>750){ ww=750;
		$('.header').css({'width':ww+'px','right':'auto','left':'50%','margin-left':'-'+ww/2+'px'});
		$('.fixbg').css({'width':ww+'px','right':'auto','left':'50%','margin-left':'-'+ww/2+'px'});
	}
	
	if($('.mbg').length>0){
		var mh=wh-$('.header').height()-$('.contact').height()-$('.nbanner').height()-$('.menu').height()-30-$('.footer').height();
		$('.mbg').css({'min-height':mh+'px'});
	}
	
	$('.fnav ul li').last().click(function(){
	  $(".modal").show();
	});
	$('.modal .close').click(function(){
	  $(".modal").hide();
	});
	$(".modal .list .ul li").on("click", function () {
	  $(this).parent().siblings("input").val($(this).text());
	  $('#class_name').val($(this).text())
	  $(this).parent().siblings("input").css("color", "#000");
	  $(this).parent().hide();
	});
	var three = new Swiper('#three .swiper-container', {
	    autoplay: false,//可选选项，自动滑动
	    slidesPerView: 1.3,
	});	 
	$(".ztab ul li").eq(0).addClass("active").siblings().removeClass("active");
	$('.workslist').hide();
	$('.works0').show();
	new Swiper('.works0 .swiper-container', {
	    effect: 'coverflow',
	    paginationClickable: true,
	    slidesPerView: 2,
	    centeredSlides: true,
	    loop: true,
	    coverflowEffect: {
	        rotate: 30,
	        stretch: 20,
	        depth: 60,
	        modifier: 2,
	        slideShadows: false
	    },
	});
	$('#persons-modal .swiper-wrapper').html($('.works0 .swiper-wrapper').html());
	$('#persons-modal .swiper-slide').removeAttr('style');
	$(".ztab ul li").on("click", function () {
	var id = $(this).attr('_id');
	$(this).addClass("active").siblings().removeClass("active");
	$('.workslist').hide();
	$('.works'+id).show();
	    new Swiper('.works'+id+' .swiper-container', {
	            effect: 'coverflow',
	            paginationClickable: true,
	            slidesPerView: 2,
	            centeredSlides: true,
	            loop: true,
	            coverflowEffect: {
	                rotate: 30,
	                stretch: 20,
	                depth: 60,
	                modifier: 2,
	                slideShadows: false
	            },
	        });			
		$('#persons-modal .swiper-wrapper').html($(".works"+id+" .swiper-wrapper").html());
		$('#persons-modal .swiper-slide').removeAttr('style');			
	});	
			
	  $(".zpzs .swiper-slide").on("click", function () {
	    $(".img-modal").show();
		var id = $(this).find('a').attr('_id');
		console.log(id);
		var n=$(this).index();
		console.log(n);
	    var imgModal = new Swiper('#persons-modal .swiper-container', {
	     loop: false,
	    })
		imgModal.slideTo(n,1000,false)
	  });	
	  $("#persons-modal .cha").on("click", function () {
		$(".img-modal").hide();
	  });
	  
	 //表单验证
	    $(".name,.phone,.qq").on("keydown", function () {
	        if ($(this).val().trim().length != 0) {
	            $(this).siblings(".cha").show();
	        }
	    }).on("focus", function () {
	        if ($(this).val().trim().length != 0) {
	            $(this).siblings(".cha").show();
	        }
	    })
	
	    $(".chan").on("click", function () {
	        $(".name").val('');
	        $(this).hide();
	    })
	    $(".chap").on("click", function () {
	        $(".phone").val('');
	        $(this).hide();
	    })
	    $(".chaq").on("click", function () {
	        $(".qq").val('');
	        $(this).hide();
	    })
	
	    $(".inputwrapper.list .right input").on("click", function () {
	        $(".list ol").show();
	    })
	
	    $(".form .list .right ol li").on("click", function () {
	        $(".list ol").hide();
	        $(this).parent().siblings('input').val($(this).text());
	    });
				
	    //表单提交
	   $(".form input").on("change focus", function () {
	       if ($(".name").val().trim() != '' &&
	            $(".phone").val().trim() !='' &&
	           ( $("#class_name").val() != '选择班级' || $("#class_name").val() != '') &&
	            $(".qq").val().trim() !='') {
	            $('.postdata').css("opacity", "1");
	        } else {
	            $('.postdata').css("opacity", "0.5");
	        }
	    });
		$(".form .postdata").on("click", function () {
		    if ($(".name").val().trim() != '' &&
		         $(".phone").val().trim() !='' &&
		        ( $("#class_name").val() != '选择班级' || $("#class_name").val() != '') &&
		         $(".qq").val().trim() !='') {
		         $('.postdata').css("opacity", "1");
		     } else {
		         $('.postdata').css("opacity", "0.5");
		     }
		 });
		
	
	    $('body').on('scroll', function () {
	        if ($(this).scrollTop() > 100) {
	            $(".toTop").show();
	        } else {
	            $(".toTop").hide();
	        }
	    });	
	    $(".toTop").on("click", function () {
	        $('body,html').animate({scrollTop:0},500);
	        return false;
	    });
	if ($('.banner').length > 0) {
		var bannerswiper = new Swiper(".banner .swiper-container", {
			slidesPerView: 1, //一行显示3个
			spaceBetween: 0,
			speed: 500,
			pagination: {
				el: '.banner .swiper-pagination',
				clickable: true,
			},
			autoplay: {
				delay: 2000,
				stopOnLastSlide: false,
				disableOnInteraction: true,
			},
			simulateTouch: true,
			on: {
				transitionEnd: function() {
	
				}
			}
		});
	}
	
	if ($('.yxxx').length > 0) {
		var timgswiper = new Swiper(".timg .swiper-container", {
			slidesPerView: 1, //一行显示3个
			spaceBetween: 0,
			speed: 500,
			loop:true,
			navigation: {
			    nextEl: '.timg .next',
			    prevEl: '.timg .prev',
			},
			autoplay: {
				delay: 2000,
				stopOnLastSlide: false,
				disableOnInteraction: true,
			},
			simulateTouch: true,
			on: {
				transitionEnd: function() {
	
				}
			}
		});
	}
	if ($('.smenu').length > 0) {
		var timgswiper = new Swiper(".smenu .swiper-container", {
			slidesPerView: 4, //一行显示3个
			spaceBetween: 0,
			speed: 500,
//  loop:1,

		});
	}
	if ($('.smenucity').length > 0) {
		var timgswiper = new Swiper(".smenucity .swiper-container", {
			slidesPerView: 5, //一行显示3个
			spaceBetween: 0,
			speed: 500,
            loop:true,
		autoplay:{
			disableOnInteraction: false,
		}

		});
	}
	if ($('.smenuzp').length > 0) {
		var timgswiper = new Swiper(".smenuzp .swiper-container", {
			slidesPerView: 4, //一行显示3个
			spaceBetween: 0,
			speed: 500,
 loop:true,
		autoplay:{
			disableOnInteraction: false,
		}

		});
	}
	if ($('.tbanner').length > 0) {
		var bimgswiper = new Swiper(".tbanner .bimg .swiper-container", {
			slidesPerView: 1, //一行显示3个
			spaceBetween: 0,
			speed: 500,
			autoplay: {
				delay: 2000,
				stopOnLastSlide: false,
				disableOnInteraction: true,
			},
			simulateTouch: true,
			on: {
				transitionEnd: function() {
	
				}
			}
		});
		$('.tbanner .stab ul li').click(function(){
			bimgswiper.slideTo($(this).index(),1000,false);
		});
	}
	
	$('.ksxx .mtab ul li').removeClass('active');
	$('.ksxx .mtab ul li').eq(0).addClass('active');
	$('.ksxx .xtab ul').hide();
	$('.ksxx .xtab ul').eq(0).show();	
	$('.ksxx .mtab ul li').click(function(){
		$('.ksxx .mtab ul li').removeClass('active');
		$('.ksxx .mtab ul li').eq($(this).index()).addClass('active');
		$('.ksxx .xtab ul').hide();
		$('.ksxx .xtab ul').eq($(this).index()).show();
		$('.ksxx .xtab ul').eq($(this).index()).find('li').removeClass('active');
		$('.ksxx .xtab ul').eq($(this).index()).find('li').eq(0).addClass('active');
	});
	
	$('.ksxx .xtab ul li').click(function(){
		$('.ksxx .xtab ul li').removeClass('active');
		$(this).addClass('active');
	});
	
	
	$('.backtop').click(function(){
		$('body,html').animate({scrollTop:0},700);
	});

});
!function(){
    function setFontSize(){
        var _w=document.documentElement.clientWidth;
        _w=_w>768?768:_w;
        document.documentElement.style.fontSize=_w/15+"px";
    }
    var _t=null;
    window.addEventListener("resize",function(){clearTimeout(_t);_t=setTimeout(setFontSize,100);},false);
    setFontSize();
}(window);




