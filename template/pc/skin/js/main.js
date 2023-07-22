$(document).ready(function(){
	
	$('.header').after('<div style="height:78px"></div>')
	
	$(".dianhuazixun").hover(function() {
		$(".dianhuazixun_titi").css("right", 0)
	});
	$(".dianhuazixun_titi").hover(function() {
		
	},function(){
		$(".dianhuazixun_titi").css("right", -265)
	});
	
	$(".fotnav").hover(function() {
		$(".saoyisao").fadeIn(500)
	},function(){
		$(".saoyisao").fadeOut(20) 
	}); 
	$(".nav_qq").hover(function() {
	},function(){
		$(".dianhuazixun_titi").css("right", -265); 
	});
	$(".nav_qq").before("<div class='nav_zxkf'></div>")
	/*在线客服*/
	$(".nav_zxkf").hover(function(){
		$(this).hide();
		$(".nav_qq").fadeIn();
	});
	$(".nav_qq").hover(function(){
	},function(){
		$(this).hide();
		$(".nav_zxkf").fadeIn()
	})
	
	$(".searchbox_nav_navtop").click(function() {
		$(".searchbox_nav_navcom").slideToggle(0)
	});
	
	

	var ww=$(window).width();

	
	
	var sn=	$('.nav ul li.active').index()==-1?0:$('.nav ul li.active').index();
	$('.nav ul li').hover(function(){
		$('.nav ul li').removeClass('active');
		$(this).addClass('active');
		// $(this).find('dl').stop(true,false).slideDown(600);
		$('.nav ul li').eq(sn).addClass('active');
	},function(){
		$(this).removeClass('active');
		// $(this).find('dl').stop(true,false).slideUp(600);		
		$('.nav ul li').eq(sn).addClass('active');
	});
	
	$('.backtop').click(function(){
		$('body,html').animate({scrollTop:0},600);
	});
	
	$('.smenu ul li').click(function(){
		$('.smenu ul li').removeClass('active');
		$(this).addClass('active');
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
			navigation: {
				nextEl: '.banner .next',
				prevEl: '.banner .prev',
			},
			autoplay: {
				delay: 3000,
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
	
	
	if ($('.hh').length > 0) {
		var hhswiper = new Swiper(".hh .swiper-container", {
			slidesPerView: 1, //一行显示3个
			spaceBetween: 0,
			speed: 500,
			pagination: {
				el: '.hh .swiper-pagination',
				clickable: true,
			},
			autoplay: {
				delay: 3000,
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
	
	var mySwipersz = new Swiper ('.sz .swiper-container', {
				loop: true, // 循环模式选项
				autoplay:true,
	
				navigation: {
					nextEl: '.swiper-button-nexts',
					prevEl: '.swiper-button-prevs',
				},
	});
	
	var layuipersz = new Swiper ('.layui-carousel .swiper-container', {
				loop: true, // 循环模式选项
				autoplay:true,
	
				navigation: {
					nextEl: '.layui-carousel .next',
					prevEl: '.layui-carousel .prev',
				},
	});
	
	var mySwiperzp = new Swiper('.zp .swiper-container',{
				effect : 'coverflow',
				loop:true,
				slidesPerView: 3,
				centeredSlides: true,
				coverflowEffect: {
					rotate: 0,
					stretch: 40,
					depth: 80,
					modifier: 2,
					slideShadows : true,
					shadowOffset: 100,
					shadowScale: 0.6
				},
	});
			
	$(".px .tab div").on("mouseenter", function() {
				$(this).addClass("active").siblings().removeClass("active");
				$(".px ul").eq($(this).index()).show().siblings().hide();
	});
	$(".sd .tab li").on("mouseenter", function() {
				$(this).addClass("active").siblings().removeClass("active");
	});
	$(".fx .box .fxhd").on("mouseenter", function() {
				$(this).parents('.wrapper').css("opacity","1");
				$(this).prev('.fxbk').show();
	});
	$(".fx .box").on("mouseleave", function() {
				$(this).children('.wrapper').css("opacity","0");
				$(this).find('.fxbk').hide();
	});
	$(".layuitxt_hot a").mousemove(function() {
		$(this).children("i").children("img").attr("src", "/static/home/images/jtbs.png")
	});
	$(".layuitxt_hot a").mouseout(function() {
		$(this).children("i").children("img").attr("src", "/static/home/images/right_icon.png")
	});
	$(".txt_hot a").mousemove(function() {
		$(this).children("i").children("img").attr("src", "/static/home/images/jtbs.png")
	});
	$(".txt_hot a").mouseout(function() {
		$(this).children("i").children("img").attr("src", "/static/home/images/right_icon.png")
	});
	$(".demo_hot a").mousemove(function() {
		$(this).children("i").children("img").attr("src", "/static/home/images/jtbs.png")
	});
	$(".demo_hot a").mouseout(function() {
		$(this).children("i").children("img").attr("src", "/static/home/images/right_icon.png")
	});
	
	$(".excellent_banner_nav ul li").hover(function() {
		var t = $(this).index();
		$(this).addClass("ex_active").siblings().removeClass("ex_active");
		if(t == 0) {
			$(".A_Demo").addClass("show");
			$(".B_Demo").removeClass("show");
			$(".C_Demo").removeClass("show")
		} else if(t == 1) {
			$(".A_Demo").removeClass("show");
			$(".B_Demo").addClass("show");
			$(".C_Demo").removeClass("show")
		} else if(t == 2) {
			$(".A_Demo").removeClass("show");
			$(".B_Demo").removeClass("show");
			$(".C_Demo").addClass("show")
		}
	});
	
	function isPhoneNew(phone){
				if(!/^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1}))+\d{8})$/.test(phone)){
					return false;
				}
				return true;
			}
			$('#submitform').click(function () {
				if(typeof $("[name='mobile']").val() !='undefined'){
					if(isPhoneNew($("[name='mobile']").val()) == false){
						alert('请输入有效电话号码');
						return false;
					}
	
					document.getElementById("form").submit();
				}else{
					document.getElementById("form").submit();
				}
		});
	
	
	
	$('.layui-tab-content ').each(function(){
		$(this).find('.layui-tab-item').eq(0).addClass('layui-show');
		
	});
	
	
	$(".layui-tab-title li").hover(function() {
		$(this).addClass("layui-this").siblings().removeClass("layui-this");
		$(this).parent().siblings().children().removeClass("layui-show").eq($(this).index()).addClass("layui-show");
		var t = $(this).width() ;
		var i = $(this)[0].offsetLeft;
		$(this).parent().siblings(".page_table").css("width", t);
		$(this).parent().siblings(".page_table").css("transform", "translate3d(" + (i-1) + "px" + ",0,0)")
	});	
						
						
	var information_right_lbswpersz = new Swiper ('.information_right_lb .swiper-container', {
				loop: true, // 循环模式选项
				autoplay:true,
	
				navigation: {
					nextEl: '.information_right_lbl .next',
					prevEl: '.information_right_lb .prev',
				},
	});
	
	
	$('.intro a').click(function(){
		$('.intro').removeClass('hide');
		$(this).parent().addClass('hide');
	});
	
	
	$(".ftoollist li").hover(function() {
					var $this = $(this);
					$(this).addClass("ftoollist_active").children("a").css("color", "white").parent("li").siblings().removeClass("ftoollist_active").children("a").css("color", "#d7000f")
					$this.addClass("on").siblings().removeClass("on");
					var $preNumber = $this.index();
					$(".fimglist li").removeClass("onpre");
					$(".fimglist li:eq($preNumber)").addClass("onpre");
					var distance = 614;
					distance = distance * $preNumber;
					distance = distance * -1;
					$(".fimglist").stop().animate({
						marginLeft: distance + "px"
					}, {
						duration: 500
					});
	});
								
								
});