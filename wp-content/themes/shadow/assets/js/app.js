

(function () {

    "use strict";

    //START WRITING THEME FUNCTIONS HERE

    let $window = $(window);

    function currencyFormat(num) {

        return `&#8369; ${num.toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')}`;

    }


    let sd_populateFeatures = (selectedPkg) => {

        const pkgData = {
            "Single Page Site" : {
                duration: 5,
                timeline: 'days',
                maintenance: 1,
                features: 4,
                price: 15000
            },
            "SME's Choice" : {
                duration: 4,
                timeline: 'weeks',
                maintenance: 3,
                features : 5,
                price: 45000
            },
            "Ecommerce Pro" : {
                duration: 4,
                timeline: 'weeks',
                maintenance: 3,
                features : 10,
                price: 80000
            }
                
        }

        const data = pkgData[selectedPkg];

        let elements = [
            `<li><i class="fa fa-calendar"></i>&plusmn; ${data.duration} ${data.timeline} delivery</li>`,
            `<li><i class="fas fa-laptop-code"></i>Fully Mobile Responsive</li>`,
            `<li><i class="fas fa-pen-nib"></i>SEO Optimized Website</li>`,
            `<li><i class="fa fa-tools"></i>Website Maintenance (${data.maintenance} month)</li>`,
            `<li>
                <i class="fas fa-chart-line"></i>
                Google Analytics 
                <i class="fa fa-info-circle tooltip">
                    <span>
                        Track how your visitors use your website by integrating Google Analytics.
                    </span>
                </i>
            </li>`,
            `<li>,
                <i class="fab fa-wordpress"></i>
                Content Management System 
                <i class="fa fa-info-circle tooltip">
                    <span>
                        Publish posts, pages, and create online forms with integrated wordpress content sanagement system. Update your site content without coding!
                    </span>
                </i>
            </li>`,
            `<li><i class="fab fa-facebook-messenger"></i>Live Chat (3 months)</li>`,
            `<li>
                <i class="fas fa-shopping-cart"></i>
                Ecommerce
                <i class="fa fa-info-circle tooltip">
                    <span>
                        Sell products and manage your online store by integrating ecommerce on your website.
                    </span>
                </i>
            </li>`,
            `<li>
                <i class="fas fa-envelope"></i>
                Business Email Setup
                <i class="fa fa-info-circle tooltip">
                    <span>
                        Configure Email Hosting Services such GSuite or Outlook.
                    </span>
                </i>
            </li>`,
            `<li>
                <i class="fas fa-database"></i>
                Site Backups 
                <i class="fa fa-info-circle tooltip">
                    <span>
                        Monthly backup service for 6 months to get you ready in case of data failure or malicious attacks.
                    </span>
                </i>
            </li>`
        ];

        let dataToAppend = `<ul class="package__features">${elements.slice(0, data.features).join('')}</ul>`;

        $(".package__details").html(dataToAppend);

    }

    const sd_calculateAmount = () => {
        
        $(".checkout__amount").html(currencyFormat(data.price));

        console.log(data.price);

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


        $("#package-choice").on("change", function(){

            var selectedPkg = $(this).children("option:selected").val();

            sd_populateFeatures(selectedPkg);

        
        });


        // CALL STACK ONLOAD

        sd_fixHeader();
        sd_fixNavMenuHeight();
        sd_isHome();
        sd_populateFeatures('Single Page Site');

    });

    $(document).keydown(function(e){
        if (e.key == "Escape") {

            sd_closeModal();

        }
    });

})();