(function ($) {
    ("use strict");

    // Page loading
    $(window).on("load", function () {
        $("#loader-wrapper").delay(1000).fadeOut("slow");
        $("body").delay(1000).css({
            overflow: "visible"
        });
        $("#onloadModal").modal("show");
    });

    // Sticky Bar

    var header = $(".sticky-bar");
    var win = $(window);
    win.on("scroll", function () {
        var scroll = win.scrollTop();
        if (scroll < 200) {
            header.removeClass("stick");
        } else {
            header.addClass("stick");
        }
    });

    // Scroll Up

    $.scrollUp({
        scrollText: '<i class="fi-rs-arrow-small-up"></i>',
        easingType: "linear",
        scrollSpeed: 900,
        animation: "fade"
    });

     // Wow Active

    new WOW().init();

    // Sidebar Sticky

    if ($(".sticky-sidebar").length) {
        $(".sticky-sidebar").theiaStickySidebar();
    }

    // Slider Range JS

    if ($("#slider-range").length) {
        $(".noUi-handle").on("click", function () {
            $(this).width(50);
        });
        var rangeSlider = document.getElementById("slider-range");
        var moneyFormat = wNumb({
            decimals: 0,
            thousand: ",",
            prefix: "$"
        });
        noUiSlider.create(rangeSlider, {
            start: [500, 1000],
            step: 1,
            range: {
                min: [0],
                max: [2000]
            },
            format: moneyFormat,
            connect: true
        });

        // Set visual min and max values and also update value hidden form inputs

        rangeSlider.noUiSlider.on("update", function (values, handle) {
            document.getElementById("slider-range-value1").innerHTML = values[0];
            document.getElementById("slider-range-value2").innerHTML = values[1];
            document.getElementsByName("min-value").value = moneyFormat.from(values[0]);
            document.getElementsByName("max-value").value = moneyFormat.from(values[1]);
        });
    }

    // Hero slider

    $(".banner-slider-one").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        arrow: true,
        dots: false,
        prevArrow: '<span class="slider-btn slider-prev"><i class="feather-arrow-left"></i></span>',
        nextArrow: '<span class="slider-btn slider-next"><i class="feather-arrow-right"></i></span>',
       // appendArrows: ".banner-slider-one-arrow",
        autoplay: true
    });

    // Carousel Slider

    $(".carousel-4-columns").each(function (key, item) {
        var id = $(this).attr("id");
        var sliderID = "#" + id;
        var appendArrowsClassName = "#" + id + "-arrows";

        $(sliderID).slick({
            dots: true,
            infinite: true,
            speed: 1000,
            arrows: true,
            autoplay: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            loop: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<span class="slider-btn slider-prev"><i class="feather-arrow-left"></i></span>',
            nextArrow: '<span class="slider-btn slider-next"><i class="feather-arrow-right"></i></span>',
            appendArrows: appendArrowsClassName
        });
    });

    // Carousel Slider

    $(".carousel-5-columns").each(function (key, item) {
        var id = $(this).attr("id");
        var sliderID = "#" + id;
        var appendArrowsClassName = "#" + id + "-arrows";

        $(sliderID).slick({
            dots: true,
            infinite: true,
            speed: 1000,
            arrows: true,
            autoplay: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            loop: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<span class="slider-btn slider-prev"><i class="feather-arrow-left"></i></span>',
            nextArrow: '<span class="slider-btn slider-next"><i class="feather-arrow-right"></i></span>',
            appendArrows: appendArrowsClassName
        });
    });

    // Carousel Slider

    $(".carousel-6-columns").each(function (key, item) {
        var id = $(this).attr("id");
        var sliderID = "#" + id;
        var appendArrowsClassName = "#" + id + "-arrows";

        $(sliderID).slick({
            dots: true,
            infinite: true,
            speed: 1000,
            arrows: true,
            autoplay: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            loop: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<span class="slider-btn slider-prev"><i class="feather-arrow-left"></i></span>',
            nextArrow: '<span class="slider-btn slider-next"><i class="feather-arrow-right"></i></span>',
            appendArrows: appendArrowsClassName
        });
    });

    // Carousel Slider

    $(".carousel-7-columns").each(function (key, item) {
        var id = $(this).attr("id");
        var sliderID = "#" + id;
        var appendArrowsClassName = "#" + id + "-arrows";

        $(sliderID).slick({
            dots: true,
            infinite: true,
            speed: 1000,
            arrows: true,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            loop: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<span class="slider-btn slider-prev"><i class="feather-arrow-left"></i></span>',
            nextArrow: '<span class="slider-btn slider-next"><i class="feather-arrow-right"></i></span>',
            appendArrows: appendArrowsClassName
        });
    });
	
	// Carousel Slider

    $(".carousel-category").each(function (key, item) {
        var id = $(this).attr("id");
        var sliderID = "#" + id;
        var appendArrowsClassName = "#" + id + "-arrows";

        $(sliderID).slick({
            dots: false,
            infinite: true,
            speed: 1000,
            arrows: true,
            autoplay: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            loop: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },,
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<span class="slider-btn slider-prev"><i class="feather-arrow-left"></i></span>',
            nextArrow: '<span class="slider-btn slider-next"><i class="feather-arrow-right"></i></span>',
            appendArrows: appendArrowsClassName
        });
    });

    // Carousel Slider

    $(".carousel-category-one").each(function (key, item) {
        var id = $(this).attr("id");
        var sliderID = "#" + id;
        var appendArrowsClassName = "#" + id + "-arrows";

        $(sliderID).slick({
            dots: false,
            infinite: true,
            speed: 1000,
            arrows: true,
            autoplay: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            loop: true,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },,
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ],
            prevArrow: '<span class="slider-btn slider-prev"><i class="feather-arrow-left"></i></span>',
            nextArrow: '<span class="slider-btn slider-next"><i class="feather-arrow-right"></i></span>',
            appendArrows: appendArrowsClassName
        });
    });
	
    // Date Range Picker

    if ($('.selected-date').length > 0) {
        var start = moment();
        //var end = moment();

        function booking_range(start) {
            $('.selected-date').html(start.format('MMMM D, YYYY'));
        }

        $('.selected-date').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, booking_range);

        booking_range(start);
    }

    // Sidebar popup overlay
	
	if($('.popup-toggle').length > 0) {
		$(".popup-toggle").on("click", function () {
			$('.toggle-sidebar').addClass('sidebar-popup');
            $('.toggle-sidebar1').removeClass('sidebar-popup');
		});
		$(".sidebar-close").on("click", function () {
			$('.toggle-sidebar').removeClass('sidebar-popup');
		});
	}

    if($('.popup-toggle1').length > 0) {
		$(".popup-toggle1").on("click", function () {
			$('.toggle-sidebar1').addClass('sidebar-popup');
            $('.toggle-sidebar').removeClass('sidebar-popup');
		});
		$(".sidebar-close").on("click", function () {
			$('.toggle-sidebar1').removeClass('sidebar-popup');
		});
	}

    if($('.popup-toggle2').length > 0) {
		$(".popup-toggle2").on("click", function () {
			$('.toggle-sidebar2').addClass('sidebar-popup');
            $('.toggle-sidebar').removeClass('sidebar-popup');
		});
		$(".sidebar-close").on("click", function () {
			$('.toggle-sidebar2').removeClass('sidebar-popup');
		});
	}

    if($('.popup-toggle3').length > 0) {
		$(".popup-toggle3").on("click", function () {
			$('.toggle-sidebar3').addClass('sidebar-popup');
		});
		$(".sidebar-close").on("click", function () {
			$('.toggle-sidebar3').removeClass('sidebar-popup');
		});
	}

    // Check radio
	
	if($('.ventor-groups').length > 0) {
		$("#in-vendor").on("click", function () {
			$('.ventor-groups').show(500);
		});
		$("#in-customer").on("click", function () {
			$('.ventor-groups').hide(500);
		});
	}

    // Toggle Password

    if($('.toggle-password').length > 0) {
		$(document).on('click', '.toggle-password', function() {
			$(this).toggleClass("feather-eye feather-eye-off");
			var input = $(".pass-input");
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});
	}

    if($('.new-password').length > 0) {
		$(document).on('click', '.new-password', function() {
			$(this).toggleClass("feather-eye feather-eye-off");
			var input = $(".new-pass-input");
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});
	}

    if($('.conform-password').length > 0) {
		$(document).on('click', '.conform-password', function() {
			$(this).toggleClass("feather-eye feather-eye-off");
			var input = $(".pass-one-input");
			if (input.attr("type") == "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		});
	}

    // Tab & Slick Slider

    $('button[data-bs-toggle="tab"]').on("shown.bs.tab", function (e) {
        $(".carousel-4-columns").slick("setPosition");
    });

    // Category Toggle

    var searchToggle = $(".categories-btn");
    searchToggle.on("click", function (e) {
        e.preventDefault();
        if ($(this).hasClass("open")) {
            $(this).removeClass("open");
            $(this).siblings(".categories-dropdown-list").removeClass("open");
        } else {
            $(this).addClass("open");
            $(this).siblings(".categories-dropdown-list").addClass("open");
        }
    });

    // Sort By Active
    
    if ($(".sort-by-product-area").length) {
        var $body = $("body"),
            $cartWrap = $(".sort-by-product-area"),
            $cartContent = $cartWrap.find(".sort-by-dropdown");
        $cartWrap.on("click", ".sort-by-product-wrap", function (e) {
            e.preventDefault();
            var $this = $(this);
            if (!$this.parent().hasClass("show")) {
                $this.siblings(".sort-by-dropdown").addClass("show").parent().addClass("show");
            } else {
                $this.siblings(".sort-by-dropdown").removeClass("show").parent().removeClass("show");
            }
        });
        /*Close When Click Outside*/
        $body.on("click", function (e) {
            var $target = e.target;
            if (!$($target).is(".sort-by-product-area") && !$($target).parents().is(".sort-by-product-area") && $cartWrap.hasClass("show")) {
                $cartWrap.removeClass("show");
                $cartContent.removeClass("show");
            }
        });
    }

    // Shop Filter Active 

    $(".shop-filter-toogle").on("click", function (e) {
        e.preventDefault();
        $(".shop-product-fillter-header").slideToggle();
    });
    var shopFiltericon = $(".shop-filter-toogle");
    shopFiltericon.on("click", function () {
        $(".shop-filter-toogle").toggleClass("active");
    });
    

    // Select active
    
    $(".select-active").select2();

    // Checkout paymentMethod function
    
    paymentMethodChanged();
    function paymentMethodChanged() {
        var $order_review = $(".payment-method");

        $order_review.on("click", 'input[name="payment_method"]', function () {
            var selectedClass = "payment-selected";
            var parent = $(this).parents(".sin-payment").first();
            parent.addClass(selectedClass).siblings().removeClass(selectedClass);
        });
    }

    // Sidebar Search

    function sidebarSearch() {
        var searchTrigger = $(".search-active"),
            endTriggersearch = $(".search-close"),
            container = $(".main-search-active");

        searchTrigger.on("click", function (e) {
            e.preventDefault();
            container.addClass("search-visible");
        });

        endTriggersearch.on("click", function () {
            container.removeClass("search-visible");
        });
    }
    sidebarSearch();

    // Sidebar Menu Active

    function mobileHeaderActive() {
        var navbarTrigger = $(".bar-icon"),
            endTrigger = $(".mobile-menu-close"),
            container = $(".main-menu-wrapper"),
            wrapper4 = $("body");

        wrapper4.prepend('<div class="sidebar-overlay"></div>');

        navbarTrigger.on("click", function (e) {
            e.preventDefault();
            container.addClass("sidebar-visible");
            wrapper4.addClass("mobile-menu-active");
        });

        endTrigger.on("click", function () {
            container.removeClass("sidebar-visible");
            wrapper4.removeClass("mobile-menu-active");
        });

        $(".sidebar-overlay").on("click", function () {
            container.removeClass("sidebar-visible");
            wrapper4.removeClass("mobile-menu-active");
        });
    }
    mobileHeaderActive();

    // Mobile Menu Active
    
    var $offCanvasNav = $(".main-nav"),
        $offCanvasNavSubMenu = $offCanvasNav.find(".dropdown");

    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fi-rs-angle-small-down"></i></span>');

    $offCanvasNavSubMenu.slideUp();

    $offCanvasNav.on("click", "li a, li .menu-expand", function (e) {
        var $this = $(this);
        if (
            $this
                .parent()
                .attr("class")
                .match(/\b(mobile-menu-item|has-children|has-has-submenu)\b/) &&
            ($this.attr("href") === "#" || $this.hasClass("menu-expand"))
        ) {
            e.preventDefault();
            if ($this.siblings("ul:visible").length) {
                $this.parent("li").removeClass("active");
                $this.siblings("ul").slideUp();
            } else {
                $this.parent("li").addClass("active");
                $this.closest("li").siblings("li").removeClass("active").find("li").removeClass("active");
                $this.closest("li").siblings("li").find("ul:visible").slideUp();
                $this.siblings("ul").slideDown();
            }
        }
    });

    // Language Currency
    $(".mobile-language-active").on("click", function (e) {
        e.preventDefault();
        $(".lang-dropdown-active").slideToggle(900);
    });

    // Menu Open

    $(".categories-slide-open").slideUp();
    $(".more-categories").on("click", function () {
        $(this).toggleClass("show");
        $(".categories-slide-open").slideToggle();
    });

    // remove table row

    $(".table-btn-close").on("click", function () {
        $(this).parent().parent('tr').hide("slow");
    });

    // Modal

    $(".modal").on("shown.bs.modal", function (e) {
        $(".product-image-slider").slick("setPosition");
        $(".slider-nav-thumbnails").slick("setPosition");

        $(".product-image-slider .slick-active img").elevateZoom({
            zoomType: "inner",
            cursor: "crosshair",
            zoomWindowFadeIn: 500,
            zoomWindowFadeOut: 750
        });
    });
    
})(jQuery);

