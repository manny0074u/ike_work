(function ($) {
 "use strict";
	
	/*----------------------------
	 wow js active
	------------------------------ */
	 new WOW().init();
    
	// slider-active
	$('.slider-active').owlCarousel({
		smartSpeed:1000,
		margin:0,
		animateOut: 'fadeOut',
		animateIn: 'FadepIn',
		nav:true,
		autoplay:true,
		autoplayTimeout:3000,
		loop:true,
		navText:['<i class="fa fa-long-arrow-right"></i>','<i class="fa fa-long-arrow-left"></i>'],
		responsive:{
			0:{
				items:1
			},
			450:{
				items:1
			},
			678:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
    
	// slider-active
	$(".slider-active").on('translate.owl.carousel', function(){
		$('.slider-content h2').removeClass('fadeInDown animated').hide();
		$('.slider-content h3').removeClass('fadeInDown animated').hide();
		$('.slider-content p').removeClass('fadeInUp animated').hide();
		$('.slider-content ul').removeClass('fadeInUp animated').hide();
	});	
		
	$(".slider-active").on('translated.owl.carousel', function(){
		$('.owl-item.active .slider-content h2').addClass('fadeInDown animated').show();
		$('.owl-item.active .slider-content h3').addClass('fadeInDown animated').show();
		$('.owl-item.active .slider-content p').addClass('slideInUp animated').show();
		$('.owl-item.active .slider-content ul').addClass('fadeInUp animated').show();
	});
	
	//slider-area background setting
    function sliderBgSetting() {
		var slideItem = $(".slider-area .slider-items");
        if (slideItem.length) {
            slideItem.each(function() {
                var $this = $(this);
                var img = $this.find(".slider").attr("src");

                $this.css({
                    backgroundImage: "url("+ img +")",
                    backgroundSize: "cover",
                    backgroundPosition: "center center"
                })
            });
        }
    }
	
    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize     = height - $(window).scrollTop();
                var parallaxSpeed = $(this).data("speed");
                var doParallax = -(resize / parallaxSpeed);
                var positionValue   = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover",
                });

                if ( window.innerWidth < 768) {
                    $(this).css({
                        backgroundPosition: "center center"
                    });
                }
            });
        }
    }
	
	/*--------------------------
	 scrollUp
	---------------------------- */	
	$.scrollUp({
		scrollText: '<i class="fa fa-arrow-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});  
	
	/*--
	Magnific Popup
	------------------------*/
	$('.popup').magnificPopup({
		type: 'image',
		gallery:{
			enabled:true
		}

	});
	
	/* magnificPopup video view */
	$('.video-popup').magnificPopup({
		type: 'iframe',
		gallery:{
			enabled:true
		}
	});
	
	// counter up
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});
	
	
	// slicknav
	$('ul#navigation').slicknav({
		prependTo:".responsive-menu-wrap"
	});
	
	// team-active
	 $('.team-active').owlCarousel({
        margin:0,
		loop:true,
		// autoplay:true,
		// autoplayTimeout:4000,
        nav:false,
		smartSpeed:800,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
            },
            768:{
                items:1
            },
            993:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });
	
	// team-active2
	 $('.team-active2').owlCarousel({
        margin:0,
		loop:true,
		// autoplay:true,
		// autoplayTimeout:4000,
        nav:false,
		smartSpeed:800,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
            },
            768:{
                items:2
            },
            993:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
	
	// brand-active
	 $('.test-active').owlCarousel({
        margin:0,
		loop:true,
		autoplay:true,
		autoplayTimeout:4000,
        nav:false,
		smartSpeed:800,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
            },
            768:{
                items:1
            },
            993:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });
	
	// brand-active
	 $('.brand-active').owlCarousel({
        margin:0,
		loop:true,
		autoplay:true,
		autoplayTimeout:4000,
        nav:false,
		smartSpeed:800,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1
            },
            450:{
                items:2
            },
            768:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
	
	// team-active
	 $('.team-details-active').owlCarousel({
        margin:0,
		loop:true,
		autoplay:true,
		autoplayTimeout:4000,
        nav:true,
		smartSpeed:800,
        navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
            },
            768:{
                items:1
            },
            993:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
	
	// product-details-active
	$('.product-details-active').owlCarousel({
        smartSpeed:1000,
        margin:0,
		loop:true,
        nav:false,
        navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        URLhashListener:true,
        startPosition: 'URLHash',
        responsive:{
            0:{
                items:1
            },
            450:{
                items:1
            },
            678:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
	
	// thamb-active
	$(".thamb-active").owlCarousel({
		loop: true,
		margin:10,
		items: 1,
		center:true,
		nav: true,
		autoplayHoverPause: false,
		navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		responsive:{
            0:{
                items:2
            },
            450:{
                items:2
            },
            678:{
                items:3
            },
            1000:{
                items:3
            }
        }
	});
	
    $('.grid').imagesLoaded( function() {
		// init Isotope
		var $grid = $('.grid').isotope({
		  itemSelector: '.grid-item',
		  percentPosition: true,
		  masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: '.grid-item',
		  }
		});
	});
	
	/*-------------------------------------------------------
        blog details
    -----------------------------------------------------*/
    if ($(".blog-details-area .blog-details-wrap,.blog-details-area .comment-main,.single-service-area .single-service").length) {
        var post = $(".blog-details-wrap .blog-author-img,.comment-wrap .comment-theme,.single-service .single-service-img");

        post.each(function() {
            var $this = $(this);
            var entryMedia = $this.find("img");
			var entryMediaPic = entryMedia.attr("src");

            $this.css({
                backgroundImage: "url("+ entryMediaPic +")",
                backgroundSize: "cover",
                backgroundPosition: "center center",
            })
        })
    }  
	
    function setTwoColEqHeight($col1, $col2) {
        var firstCol = $col1,
            secondCol = $col2,
            firstColHeight = $col1.innerHeight(),
            secondColHeight = $col2.innerHeight();

        if (firstColHeight > secondColHeight) {
            secondCol.css({
                "height": firstColHeight + 1 + "px"
            })
        } else {
            firstCol.css({
                "height": secondColHeight + 1 + "px"
            })
        }
    } 
	
	
	/*-- price range start --*/
	function collision($div1, $div2) {
		var x1 = $div1.offset().left;
		var w1 = 40;
		var r1 = x1 + w1;
		var x2 = $div2.offset().left;
		var w2 = 40;
		var r2 = x2 + w2;

		if (r1 < x2 || x1 > r2) return false;
		return true;
      
    }
	// slider call

	$('#slider').slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
		slide: function(event, ui) {
			
			$('.ui-slider-handle:eq(0) .price-range-min').html('$' + ui.values[ 0 ]);
			$('.ui-slider-handle:eq(1) .price-range-max').html('$' + ui.values[ 1 ]);
			$('.price-range-both').html('<i>$' + ui.values[ 0 ] + ' - </i>$' + ui.values[ 1 ] );
			
			//
			
	    if ( ui.values[0] === ui.values[1] ) {
	      $('.price-range-both i').css('display', 'none');
	    } else {
	      $('.price-range-both i').css('display', 'inline');
	    }
	        
	        //
			
			if (collision($('.price-range-min'), $('.price-range-max')) === true) {
				$('.price-range-min, .price-range-max').css('opacity', '0');	
				$('.price-range-both').css('display', 'block');		
			} else {
				$('.price-range-min, .price-range-max').css('opacity', '1');	
				$('.price-range-both').css('display', 'none');		
			}
			
		}
	});

	$('.ui-slider-range').append('<span class="price-range-both value"><i>$' + $('#slider').slider('values', 0 ) + ' - </i>' + $('#slider').slider('values', 1 ) + '</span>');

	$('.ui-slider-handle:eq(0)').append('<span class="price-range-min value">$' + $('#slider').slider('values', 0 ) + '</span>');

	$('.ui-slider-handle:eq(1)').append('<span class="price-range-max value">$' + $('#slider').slider('values', 1 ) + '</span>');
	/*-- price range End --*/
	
	/*==========================================================================
        WHEN DOCUMENT LOADING 
    ==========================================================================*/
	$(window).on('load', function() {
		
		sliderBgSetting();
		
		$('.loader-container').fadeOut();
		$('.loader').delay(150).fadeOut('slow');
		$('body').delay(150).css({'overflow':'visible'})
		
		setTwoColEqHeight($(".blog-details-wrap .blog-author-img"), $(".blog-details-wrap .blog-author-content"));
		setTwoColEqHeight($(".comment-wrap .comment-theme"), $(".comment-main-area"));
		setTwoColEqHeight($(".single-service .single-service-img"), $(".single-service .single-service-wrap"));

	});
	
	/*====================================
				scroll 
	======================================*/
	// // stickey menu
	$(window).on('scroll',function() {    
		var scroll = $(window).scrollTop(),
			mainHeader = $('#sticky-header'),
			mainHeaderHeight = mainHeader.innerHeight();
		
		// console.log(mainHeader.innerHeight());
		if (scroll > 1) {
			$("#sticky-header").addClass("sticky");
		}else{
			$("#sticky-header").removeClass("sticky");
		}
		
		
		bgParallax();
	});
	

	/*---------------------
	// Ajax Contact Form
	--------------------- */

	$('.cf-msg').hide();
		$('form#cf button#submit').on('click', function() {
			var fname = $('#fname').val();
			var subject = $('#subject').val();
			var email = $('#email').val();
			var msg = $('#msg').val();
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			if (!regex.test(email)) {
				alert('Please enter valid email');
				return false;
			}

			fname = $.trim(fname);
			subject = $.trim(subject);
			email = $.trim(email);
			msg = $.trim(msg);

			if (fname != '' && email != '' && msg != '') {
				var values = "fname=" + fname + "&subject=" + subject + "&email=" + email + " &msg=" + msg;
				$.ajax({
					type: "POST",
					url: "mail.php",
					data: values,
					success: function() {
						$('#fname').val('');
						$('#subject').val('');
						$('#email').val('');
						$('#msg').val('');

						$('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
						setTimeout(function() {
							$('.cf-msg').fadeOut('slow');
						}, 4000);
					}
				});
			} else {
				$('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')
			}
			return false;
	});
 
})(jQuery); 