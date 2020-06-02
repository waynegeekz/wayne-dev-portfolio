
<?php
/*
Template Name: Showcase Page
Template Post Type: page
*/
get_header();
?>

<main id="showcase" class="site-main">


    <h3>Portfolio Showcase</h3>
    
    <hr class="hr-bar">

    <p class="box--margin">
        Hi! Here's some of the recent work I did while I was working as a full-time software development instructor.
    </p>

    <article class="box--margin projects">

        <div class="project">

            <img src="<?php echo get_bloginfo('template_url');?>/assets/images/feat_citewebsite.jpg" alt="">

            <a class="project--ongoing" href="#">VIEW ONGOING DESIGN</a>

            <p>A TESDA accredited tech-voc school in Cebu City offering 3-year diploma courses for the deserving and underprivileged youth.</p>

            <ul class="package__features">
                <li>
                    <i class="fas fa-map-marked-alt"></i>
                    UX/UI Journey Mapping
                </li>

                <li>
                    <i class="fas fa-phone"></i>
                    Mobile Responsive
                </li>
                <li>
                    <i class="fas fa-image"></i>
                    Image Gallery Integration
                </li>
                <li>
                    <i class="fas fa-chart-line"></i>
                    Google Analytics
                </li>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    Google Map Integration
                </li>
                <li>
                    <i class="fab fa-yoast"></i>
                    Yoast SEO Integration
                </li>
                <li>
                    <i class="fab fa-wpforms"></i>
                    Contact Forms
                </li>
                <li>
                    <i class="fab fa-facebook-messenger"></i>
                    Messenger Integration
                </li>
                <li>
                    <i class="fab fa-wordpress"></i>
                    Content Management System (CMS)
                </li>
            </ul>
        </div>

        <div class="project">

            <img src="<?php echo get_bloginfo('template_url');?>/assets/images/feat_epicparcwebsite.jpg" alt="">

            <a href="https://www.epicparctanay.com" target="_blank">VIEW LIVE</a>


            <p>A rainforest camp destination in Tanay, Rizal situated near the city for people looking for stunning venues and facilities.</p>

            <ul class="package__features">
                <li>
                    <i class="fas fa-map-marked-alt"></i>
                    UX/UI Journey Mapping
                </li>

                <li>
                    <i class="fas fa-phone"></i>
                    Mobile Responsive
                </li>
                <li>
                    <i class="fas fa-image"></i>
                    Image Gallery Integration
                </li>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    Google Map Integration
                </li>
                <li>
                    <i class="fab fa-wpforms"></i>
                    Contact Forms
                </li>
                <li>
                    <i class="fas fa-plane"></i>
                    Online Booking System
                </li>
                <li>
                    <i class="fas fa-comment"></i>
                    Tawk Live Chat Integration
                </li>
            </ul>
        </div>

        <div class="project">

            <img src="<?php echo get_bloginfo('template_url');?>/assets/images/feat_ucwebsite.jpg" alt="">


            <a href="https://www.epicparctanay.com" target="_blank">VIEW LIVE</a>
  

            <p>A university in Cebu with 4 campuses offering preschool, grade school, junior & senior high school, undergraduate degrees, and post-graduate degrees. </p>

            <ul class="package__features">
                <li>
                    <i class="fas fa-map-marked-alt"></i>
                    UX/UI Journey Mapping
                </li>

                <li>
                    <i class="fas fa-phone"></i>
                    Mobile Responsive
                </li>
                <li>
                    <i class="fas fa-image"></i>
                    Image Gallery Integration
                </li>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    Google Map API Integration
                </li>
                <li>
                    <i class="fab fa-wpforms"></i>
                    Contact Forms
                </li>
                <li>
                    <i class="fab fa-wordpress"></i>
                    Content Management System (CMS)
                </li>
            </ul>
        </div>

        <div class="project">

            <img src="<?php echo get_bloginfo('template_url');?>/assets/images/feat_gotravelwiselywebsite.jpg" alt="">

            <a href="https://www.gotravelwisely.com" target="_blank">VIEW LIVE</a>

            <p>A blogsite maintained by Jian Carlo Suliano, an aspring Cebuano travel blogger.</p>

            <ul class="package__features">
                <li>
                    <i class="fas fa-map-marked-alt"></i>
                    UX/UI Journey Mapping
                </li>

                <li>
                    <i class="fas fa-phone"></i>
                    Mobile Responsive
                </li>
                <li>
                    <i class="fab fa-wpforms"></i>
                    Contact Forms
                </li>
                <li>
                    <i class="fab fa-wordpress"></i>
                    Content Management System (CMS)
                </li>
            </ul>
        </div>

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

    </article>

    
    <section class="promotion--dark">
        <div>
            <p>I'll help you every step of the process, from ideation, to development, and deployment.</p>
            <p>Let's create an impactful website design for your customers.</p>
        </div>
        <a class="btn btn--primary" href="">I need a website <i class="fas fa-caret-right"></i></a>
    </section>


    <h3>Website Rework Just for Fun</h3>
    
    <hr class="hr-bar">

    <p class="box--margin">Here are some homepage design rework I did on some existing famous websites and institutions.</p>
    
    <section class="projects--rework">

        <div class="rework">

            <h4>
                Case 1: Sunstar Philippines
            </h4>

            <div class="rework__samples">
                
                <div class="sample">

                    <header>Original Version</header>

                    <img class="responsive" src="<?php echo get_bloginfo('template_url');?>/assets/images/feat_sunstarwebsite.jpg" alt="">
                    
                    <a href="">View Live</a>

                </div>

                <div class="sample sample--reworked">

                    <header>Reworked Version</header>

                    <img class="responsive" src="<?php echo get_bloginfo('template_url');?>/assets/images/feat_sunstarwebsite.jpg" alt="">

                    <a href="">View Design</a>

                </div>

            </div>
        </div>

    </section>



</main>

<?php
get_footer();