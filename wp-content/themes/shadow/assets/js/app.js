

(function () {

    "use strict";

    //START WRITING THEME FUNCTIONS HERE

    

    let $window = $(window);

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

    $(document).ready(function() {
        
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


        // CALL STACK ONLOAD

        sd_fixHeader();
        sd_fixNavMenuHeight();
        sd_isHome();

    });

    $(document).keydown(function(e){
        if (e.key == "Escape") {

            sd_closeModal();

        }
    });

})();