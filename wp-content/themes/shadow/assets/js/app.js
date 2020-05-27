

(function () {

    "use strict";

    //START WRITING THEME FUNCTIONS HERE

    let $window = $(window);
    let cart;
    let searchParams = new URLSearchParams(window.location.search)


    //CONVERT NUMBER INTO CURRENCY
    let currencyFormat = function currencyFormat(num) {

        return `$ ${num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')}`;

    }

    //GET URL PARAMETERS
    let getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };


    //LOAD LOCAL STORAGE WHEN IN CHECKOUT PAGE
    let sd_loadCartOnLocalStorage = function sd_loadCartOnLocalStorage() {

        //IF IN CHECKOUT PAGE
        if($('#wpcf7-f44-o1').length) {
            
            //STORE IN LOCAL STORAGE
            if (typeof localStorage !== 'undefined') {

                //CHECK FIRST FOR PARAMETERS
                let paramPackage = getUrlParameter('package');  
                 
                //IF LOCAL STORAGE CONTAINS CART INFORMATION
                if(localStorage.getItem("sd_cart") !== null) {
 
                    cart = JSON.parse(localStorage.getItem("sd_cart"));

                    if(paramPackage !== undefined && ((paramPackage === "SME's Choice" || paramPackage === "Single Page Site" || paramPackage ==="Ecommerce Pro" ))) {

                        cart['package'] = paramPackage;

                        sd_updateLocalStorage("package", paramPackage);

                    }

                    //POPULATE FORM WITH INFORMATION FROM LOCAL STORAGE
                    $.each(cart, function(key, value){
                            
                        if (key === "domain[]" || key === "hosting[]" || key === "extendedMaintenance[]") {

                            $(`.wpcf7-form-control input[name='${key}']`).prop("checked", value);

                        } else {

                            $(`.wpcf7-form-control[name='${key}']`).val(value);
                            
                            if (key === 'package') {

                                sd_populateFeatures(value);

                            }

                        }

                    });

                } else {
                     
                    cart = {
                        'fullname': "",
                        'company': "",
                        'contact' : "",
                        'email': "",
                        'details' : "",
                        'package' : "",
                        'domain[]' : false,
                        'hosting[]': false,
                        'extendedMaintenance[]': false    
                    }

                    if(paramPackage !== undefined && (paramPackage === "SME's Choice" || paramPackage === "Single Page Site" || paramPackage === "Ecommerce Pro" )) {

                        cart['package'] = paramPackage;

                    } else {
                    
                        cart['package'] = "SME's Choice";
                    
                    }
                    
                    localStorage.setItem("sd_cart", JSON.stringify(cart));

                    sd_populateFeatures(cart['package']);

                } 
                
            } else {

                alert("Your browser does not support Local Storage! Please update your browser to the latest version.");

            }

        }

    
    }
    
    let sd_hasCartOrder = function sd_hasCartOrder() {

        if(typeof localStorage !== undefined) {

            if(localStorage.hasOwnProperty("sd_cart")) {

                $(".fa-shopping-cart").addClass("hasOrder");

            }

        }

    }

    let sd_updateLocalStorage = (key, value) => {

        cart[key] = value;

        if(typeof localStorage !== undefined) {

            localStorage.setItem("sd_cart", JSON.stringify(cart));
        
        }

    }

    let sd_populateFeatures = (packageName) =>  {

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
            
            $(".js-pkgName").html(packageName);
            $(".js-pkgDuration").html(data.duration);
            $(".js-pkgTimeline").html(data.timeline);
            $(".js-pkgPrice").html(currencyFormat(data.price));
            $(".js-pkgDefaultMaintenance").html(data.maintenance < 2 ? `${data.maintenance} month` : `${data.maintenance} months`);

            let featureCount = data.features;

            $(".package__feature").each(function(i, obj){
            
                if(i < featureCount) {
                    $(this).addClass("js-activeFeature");
                } else {
                    $(this).removeClass("js-activeFeature");
                }
                
                i++;
    
            });
    
            $(`select[name='package']`).val(packageName);

            sd_updateLocalStorage('package', packageName);

            sd_calculateAmount();

    }

    const sd_calculateAmount = () => {
        
        let packageCost = 300;

        let packageSelected = cart['package'];

        if(packageSelected == "SME's Choice") {

            packageCost = 900;

        } else if (packageSelected == "Ecommerce Pro") {

            packageCost = 1600;

        }

        let domainCost = cart['domain[]'] ? 50 : 0;

        let hostingCost = cart['hosting[]'] ? 300 : 0;

        let maintenanceCost = cart['extendedMaintenance[]'] ? 300 : 0;
        
        let total = packageCost + domainCost + hostingCost + maintenanceCost;

        $(".checkout__amount").html(currencyFormat(total));

    }


    const sd_showModal = () => {
        
        $('body').addClass('modal-shown');

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

            sd_showModal();

        });

        $(".js-page-overlay").click(function(e){

            sd_closeModal();

        });


        //BOTTOM SCROLL TO TOP
        $("#js-scrollToTop").click(function (){

            $("html, body").animate({ 
                scrollTop: 0 
            }, "slow");
        
        });

        //CHECKOUT FORM - DROPDOWN TOGGLE
        $(".dropdown").on("click", function(){

            $(this).toggleClass("dropdownIsToggled");

        });

        //CHECKOUT FORM - WHEN DROPDOWN OPTION IS CLICKED
        $(".dropdown__option").on ("click", function(e){
            
            let pkgName = $(this).find('.js-pkgValue').text();

            sd_populateFeatures(pkgName);

        
        });

        //CHECKOUT FORM - STORE LOCAL STORAGE WHEN EDITING INPUT TEXT
        $("#wpcf7-f44-o1").on("keyup", ".wpcf7-form-control", function(){

            sd_updateLocalStorage([$(this).attr("name")], $(this).val());

        });

        //CHECKOUT FORM - STORE LOCAL STORAGE WHEN CHECKBOX IS CHANGED
        $("#wpcf7-f44-o1").on("change", "input[type='checkbox']", function(){

            let checkValue = $(this).is(":checked") ? true : false;

            sd_updateLocalStorage([$(this).attr("name")], checkValue);

            sd_calculateAmount();

        });


        // CALL STACK ONLOAD

        sd_fixHeader();
        sd_fixNavMenuHeight();
        sd_isHome();
        sd_loadCartOnLocalStorage();
        sd_hasCartOrder();

    });

    $(document).keydown(function(e){
        if (e.key == "Escape") {

            sd_closeModal();

        }
    });

})();