

(function () {

    "use strict";

    //START WRITING THEME FUNCTIONS HERE

    const sd_showModal = (modalElement) => {
        
        $('body').addClass('modal-shown');

        modalElement.find('.menu');

    };

    const sd_closeModal = () => {

        $('body').removeClass("modal-shown");

    }

    const sd_fixHeader = () => {
        
        let headerHeight = $(".header-container").innerHeight();

        $("#content").css({'margin-top' : headerHeight});
    };

    const sd_fixNavMenuHeight = () => {

        const navContainerHeight = ($(window).height() - $('.modal__header').height()) - 50;
        
        $(".modal__nav").css('height', navContainerHeight);
    
    }

    const sd_headerOnScroll = () => {

        const body = $('body');

        if(PHPVARS.isHome === 'true'){

            if (window.pageYOffset > 200) {
                body.removeClass('is-home');
            } else {
                body.addClass('is-home');
            }

        }

        

    }

    const sd_isHome = () => {
        
        if(PHPVARS.isHome === 'true') {
            $('body').addClass('is-home');
        }

    }

    const changeHomeLogo = () => {

        $('.custom-logo').attr("src", "images/card-front.jpg");
    
    }
    $(document).ready(function() {
        
        //CALL STACK FOR ON SCROLL FUNCTIONS
        $(window).scroll(function () {

            sd_fixHeader();
            sd_headerOnScroll();

        });


        //CALL STACK FOR RESIZE FUNCTIONS
        $(window).resize(function () {

            sd_fixHeader();
            sd_fixNavMenuHeight();

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