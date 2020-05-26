

(function () {

    "use strict";

    //START WRITING THEME FUNCTIONS HERE

    let $window = $(window);
    let cart;

    let sd_loadCartOnLocalStorage = () => {

        //CHECK IF LOCAL STORAGE COMPATIBLE
        if (typeof localStorage !== 'undefined') {

            cart = {
                'fullname': "",
                'company': "",
                'contact' : "",
                'email': "",
                'details' : "",
                'package' : "Single Page Site",
                'domain' : false,
                'hosting': false,
                'extendedMaintenance': false    
            }

            if(localStorage.getItem("sd_cart") === null) {

                localStorage.setItem("sd_cart", JSON.stringify(cart));

            } else {

                cart = JSON.parse(localStorage.getItem("sd_cart"));

                //IF IN CHECKOUT PAGE, LOAD CART DETAILS INTO FORM
                if($('#wpcf7-f44-o1').length) {

                    $.each(cart, function(key, value){
                            
                        if (key === "domain" || key === "hosting" || key === "extendedMaintenance") {

                            $(`.wpcf7-form-control[name='${key}[]']`).prop("checked", value);

                        } else {

                            $(`.wpcf7-form-control[name='${key}']`).val(value);

                        }

                    });

                }

            }
            
        } else {

            alert("Your browser does not support Local Storage! Please update your browser to the latest version.");

        }


    }
    

    let updatePackageDropdown = (packageName) =>  {

            const features = {
                "Single Page Site" : {
                    duration: 5,
                    timeline: 'days',
                    maintenance: 1,
                    features: 4,
                    price: 300
                },
                "SME's Choice" : {
                    duration: 4,
                    timeline: 'weeks',
                    maintenance: 3,
                    features : 7,
                    price: 900
                },
                "Ecommerce Pro" : {
                    duration: 8,
                    timeline: 'weeks',
                    maintenance: 3,
                    features : 10,
                    price: 1600
                }
            };
            
            let data = features[packageName];
            
            $(".js-pkgName").html(name);
            $(".js-pkgDuration").html(duration);
            $(".js-pkgTimeline").html(timeline);

            $(".js-pkgPrice").html();

            $(".package__feature").each(function(i, obj){
            
                if(featureCount > i) {
                    $(this).addClass("js-activeFeature");
                } else {
                    $(this).removeClass("js-activeFeature");
                }
                
                i++;
    
            });
    
            $(`select[name='${packageName}']`).val(packageName);
    }

    function currencyFormat(num) {

        return `$ ${num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')}`;

    }

    const sd_calculateAmount = () => {
        

    }


    const sd_showModal = (modalElement) => {
        
        $('body').addClass('modal-shown');

        modalElement.find('.menu');

    };

    const sd_closeModal = () => {

        $('body').removeClass("modal-shown");

    }

    const sd_fixHeader = () => {
    

        let headerHeight = $(".header").innerHeight();
    
        if(PHPVARS.isHome === "false"){
            $("#content").css({'margin-top' : headerHeight});
        } else if ($('.jumbotron').length){
            console.log("with jumbotron");
            $(".jumbotron__header").css({'margin-top' : headerHeight});
        }

    };

    const sd_fixNavMenuHeight = () => {

        const navContainerHeight = ($window.height() - $('.modal__header').height()) - 50;
        
        $(".modal__nav").css('height', navContainerHeight);
    
    }

    const sd_isHome = () => {

        const isMobile = $window.width() < 769 ?  true : false;

        const logo = $('.custom-logo');

        if(PHPVARS.isHome === 'true' && !isMobile && $window.scrollTop() < 200) {
    
            $('body').addClass('is-home');
            //logo.attr("src", PHPVARS.theme_dir + "/assets/images/logo_website.png");
    
        } else {

            $('body').removeClass('is-home');
            //logo.attr("src", PHPVARS.theme_dir + "/assets/images/logo_websiteWhite.png");

        }

    }

    $(document).ready(function($) {

        
        //CALL STACK FOR ON SCROLL FUNCTIONS
        $window.scroll(function () {

            sd_fixHeader();
            sd_isHome();

        });


        //CALL STACK FOR RESIZE FUNCTIONS
        $window.resize(function () {

            sd_fixHeader();
            sd_fixNavMenuHeight();
            sd_isHome();

        });


        //EVENT LISTENERS

        $(".js-btnSearch").click(function(e) {
            
            e.preventDefault();
            $(".search-form").slideToggle();
        
        });


        $(".js-btnMenu").click(function(e){            
            
            e.preventDefault();

            sd_showModal($("#js-modalMenu"));

        });

        $(".js-page-overlay").click(function(e){

            sd_closeModal();

        });

        $("#js-scrollToTop").click(function (){

            $("html, body").animate({ 
                scrollTop: 0 
            }, "slow");
        
        });

        $(".dropdown__option").on ("click", function(e){
            
            let pkgName = $(this).find('.js-pkgValue').text();

            //sd_populateFeatures(pkgName);
        
        });

        $(".dropdown").on("click", function(){

            $(this).toggleClass("dropdownIsToggled");

        });


        // CALL STACK ONLOAD

        sd_fixHeader();
        sd_fixNavMenuHeight();
        sd_isHome();
        sd_loadCartOnLocalStorage();
        //sd_populateFeatures("Single Page Site");

    });

    $(document).keydown(function(e){
        if (e.key == "Escape") {

            sd_closeModal();

        }
    });

})();