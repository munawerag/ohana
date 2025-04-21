jQuery(function ($) {
    var sw = jQuery(window).width();
    var sh = jQuery(window).height();

    //     jQuery('html,body').animate({
    // 		scrollTop: '+=1px'
    // 	})
    // Font Resizer-------------------Start
    function fontResizer() {
        var perc = parseInt(sw) / 118.9375;
        jQuery("body").css("font-size", perc);
    }
    // Font Resizer-------------------End


    // 	 window.onbeforeunload = function () {
    //  	 	window.scrollTo(0, 0);
    //   }

    jQuery(window).on("load", function () {

        if (sw > 1025) {
            fontResizer();
        }


        if (jQuery(document).find("img").hasClass("svg-convert")) {
            jQuery(".svg-convert").svgConvert({
                onComplete: function () { },
            });
        }
    });

    jQuery(document).ready(function () {
        jQuery("html").removeClass("loadjs");
        jQuery('.about-menu > a').click(function (e) {
            e.preventDefault();
            return false;
        });

        jQuery('.projects-menu > a').click(function (e) {
            e.preventDefault();
            return false;
        });

        jQuery('.residents-menu > a').click(function (e) {
            e.preventDefault();
            return false;
        });

        setTimeout(function () {
            jQuery(".loader-first").fadeOut("slow");
        }, 30);



        setTimeout(function () {

            //loader-------------------
            setTimeout(function () {
                jQuery(".loader-logo").fadeOut("slow");
            }, 30);

            setTimeout(function () {
                jQuery("html").removeClass("transform");
            }, 2000);


            // -------------------------

            // setTimeout(function () {
            //     /* ---------------- In View Animation -------------------- */
            //     jQuery(".animate").bind("inview", function (event, isInView) {
            //         if (isInView) {
            //             var animate = jQuery(this).attr("data-animation");
            //             var speedDuration = jQuery(this).attr("data-duration");
            //             var $t = jQuery(this);
            //             setTimeout(function () {
            //                 $t.removeClass("animate");
            //                 $t.addClass(animate + " animate__animated");
            //             }, speedDuration);
            //         }
            //     });
            // }, 1500);
        }, 200);



        //Home Hero Slider--------------
        if (jQuery(document).find("div").hasClass("home-hero__heroSlider")) {
            var homeheroSlider = new Swiper(".home-hero__heroSlider", {
                slidesPerView: 1,
                loop: false,
                speed: 1500,
                effect: "fade",
                fadeEffect: {
                    crossFade: true,
                },
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".home-hero__heroSlider .swiper-pagination",
                    clickable: true,
                },
            });
        }
        // ------------------------------

        //amenities__cards-slider--------------
        if (sw < 1025) {
            if (jQuery(document).find("div").hasClass("amenities__cards-slider")) {
                var amenities__cardsSlider = new Swiper(".amenities__cards-slider", {
                    slidesPerView: 2,
                    speed: 1500,
                    autoplay: {
                        delay: 1500,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        577: {
                            slidesPerView: 2,
                        },
                        768: {
                            slidesPerView: 4,
                        },
                    },
                });
            }
        }
        // ------------------------------

        if (jQuery(document).find("div").hasClass("floor-plan__thumb-slider")) {
            var floorPlan__thumb = new Swiper(".floor-plan__thumb-slider", {
                slidesPerView: 'auto',
                speed: 1500,
                // autoplay: {
                //     delay: 2500,
                //     disableOnInteraction: false,
                // },
            });
        }
        // ------------------------------

        //floor-plans__gallery Slider--------------
        if (jQuery(document).find("div").hasClass("floor-plan__gallery-slider")) {
            var floorPlan__gallerySlider = new Swiper(".floor-plan__gallery-slider", {
                slidesPerView: 1,
                speed: 1500,
                allowTouchMove: false,
                thumbs: {
                    swiper: floorPlan__thumb
                },
                // autoplay: {
                //     delay: 2500,
                //     disableOnInteraction: false,
                // },

            });
        }
        // ------------------------------

        //floor-plans Inner Slider--------------
        if (jQuery(document).find("div").hasClass("floor-plan__floor-innerSlider")) {
            var floorInner_slider = new Swiper(".floor-plan__floor-innerSlider", {
                slidesPerView: 1,
                speed: 1500,
                allowTouchMove: true,
                spaceBetween: 60,
                // autoplay: {
                //     delay: 2500,
                //     disableOnInteraction: false,
                // },
                pagination: {
                    el: ".floor-plan__floor-innerSlider .swiper-pagination",
                    clickable: true,
                },

            });
        }
        // ------------------------------

        //js_floor_plane_slider ----------
        if (document.querySelector(".js_floor_plane_slider")) {
            const case_studies_small_slider = new Swiper(".js_floor_plane_slider.swiper", {
              spaceBetween: 10,
              slidesPerView: 1,
              allowTouchMove: false,
              observer: true,
              observeParents: true,
              speed: 2000,
              effect: "fade",
              autoHeight: false,
              fadeEffect: {
                crossFade: true
              },
              autoplay: {
                delay: 4000,
                disableOnInteraction: false,
              },
              pagination: {
                el: ".js_floor_plane_slider .swiper-pagination",
                clickable: true,
            },
            });
          }
        // ------------------------------

        //Virtual tour Slider--------------
        if (jQuery(document).find("div").hasClass("virtual-tour__virtual-slider")) {
            var virtualTour__sliderNew = new Swiper(".virtual-tour__virtual-slider", {
                slidesPerView: 1,
                spaceBetween: 25,
                speed: 1200,
                effect: "fade",
                fadeEffect: {
                    crossFade: true,
                },
                // autoplay: {
                //     delay: 2500,
                //     disableOnInteraction: false,
                // },

                navigation: {
                    nextEl: ".virtual-tour__virtual-slider .swiper-button-next",
                    prevEl: ".virtual-tour__virtual-slider .swiper-button-prev",
                },
                on: {
                    // init: function() {
                    //     console.log('checking', swiper.realIndex)
                    //     // let dataSrc = slideActive.find('.lazyloaded.iframevimeocover').get(0).attr('data-src');

                    // },
                    slideChange: function () {
                        // select active slide
                        var slideActive = $('.swiper-slide').eq(virtualTour__sliderNew.activeIndex);
                        console.log(slideActive);

                        // get content from "data-src" attribute           
                        // let dataSrc = slideActive.find('.iframe').get(0).attr('data-src');

                        // // write in the iframe a new attribute 'src' with all the dataSrc content inside
                        // slideActive.find('.lazyloaded.iframevimeocover').get(0).attr('src', dataSrc);
                    }
                },
            });
        }
        // ------------------------------

        //Video Slider--------------
        if (jQuery(document).find("div").hasClass("project-detail-videos__wrapper")) {
            var videoSlider = new Swiper(".project-detail-videos__wrapper", {
                slidesPerView: 1,
                spaceBetween: 14,
                speed: 1200,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                },

            });
        }
        // ------------------------------

        // Gallery Slider--------------
        if (jQuery(document).find("div").hasClass("photo-gallery__gallery-sldier")) {
            var gallerySlider = new Swiper(".photo-gallery__gallery-sldier", {
                slidesPerView: 'auto',
                centeredSlides: true,
                observer: true,
                observeParent: true,
                loop: 'true',
                speed: 1200,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
            });
        }

        // ---------
    });


    // Landscape Mode off----------------Start
    jQuery(window).on("resize orientation", function () {
        sw = jQuery(window).width();
        sh = jQuery(window).height();
        if (sw > 320 && sh < 480) {
            jQuery("#portrait-warnning").css("display", "flex");
        } else {
            jQuery("#portrait-warnning").css("display", "none");
        }

        setTimeout(function () {
            if (sw > 1025) {
                if (sw < 1400 && sw > 1300 && sh > 900) { } else {
                    fontResizer();
                }
            }
        }, 1000);



    });
    // Landscape Mode off----------------End


    //Image Observer Start

    let imageObserver1 = [...document.querySelectorAll(".img__observer__one")];
    let imageObserver2 = [...document.querySelectorAll(".img__observer__two")];

    let options = {
        rootMargin: "0px",
        threshold: 0.2,
    };

    let setItemActive = (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    };

    let observer = new IntersectionObserver(setItemActive, options);

    imageObserver1.forEach((item1, idx) => {
        observer.observe(item1);
    });

    imageObserver2.forEach((item2, idx) => {
        observer.observe(item2);
    });

    //Image Observer END




    jQuery("[data-fancybox]").fancybox({
        afterClose: function (instance, slide) {
            jQuery('.sent .wpcf7-response-output').remove();
            jQuery('#pdf-download').parent().remove();
        }
    });


    if (sw < 1200) {
        $(".iti__selected-flag").click(function () {
            $(this).toggleClass("iti__hide");
            console.log("clicked")
        });
    }


    // $(document).ready(function() {
    //     $(".show-pop-up").click(function () {
    //         $(".show-pop-up").addClass("active");
    //         $(this).removeClass("active");     
    //     });



    // });

    // --------------------------- pop-up-1 -------------------------
    $('.pop-up-enquire').on('click', function () {
        $(".show-pop-up-enquire").toggleClass("active");
        $("body").toggleClass("open-enquire-modale");
    });

    $('.close-btn').on('click', function () {
        $(".show-pop-up-enquire").toggleClass("active");
        $("body").toggleClass("open-enquire-modale");
    });

 // --------------------------- pop-up-2 -------------------------

 $('.pop-up-brochure').on('click', function () {
    $(".show-pop-up-brochure").toggleClass("active");
    $("body").toggleClass("open-enquire-modale-brouchure");
});

$('.close-btn-broucher').on('click', function () {
    $(".show-pop-up-brochure").toggleClass("active");
    $("body").toggleClass("open-enquire-modale-brouchure");
});


}, (jQuery));


// Phone Country Code Dropdown - Start
(function () {
    if (document.querySelector(".phoneiti")) {
      window.addEventListener("load", function () {
        const input = document.querySelectorAll(".phoneiti");
        input.forEach(function (intll) {
          window.intlTelInput(intll, {
            hiddenInput: "full_phone",
            initialCountry: "auto",
            /* For Country Code */
            separateDialCode: true,
            geoIpLookup: function (callback) {
              fetch("https://ipinfo.io/json")
                .then((response) => response.json())
                .then((data) => {
                  var countryCode = data.country ? data.country : "us";
                  console.log(data);
                  callback(countryCode);
                });
            },
            // utilsScript: intlTelInputUtils
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.19/build/js/utils.js",
          });
        });
      });
    }
   })();
   // Phone Country Code Dropdown - End