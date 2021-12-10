<?php
get_header();
?>

<section class="hero">
    <img class="hero__image" src="<?php the_field('hero_image'); ?>">
    <h1 class="hero__heading"><?php the_field('hero_heading'); ?></h1>
    <h2 class="hero__subheading"><?php the_field('hero_subheading'); ?></h2>

    <form class="hero__menu hero__menu_0">
        <h3 class="hero__cta"><?php the_field('hero_cta'); ?></h3>
        <input type="radio" name="parent" id="parent" class="hero__radio">
        <label class="hero__button" for="parent" tabindex="0">I'm a Parent or Guardian</label>
        <input type="radio" name="volunteer" id="volunteer" class="hero__radio">
        <label class="hero__last-button" for="volunteer" tabindex="0">I'm a Volunteer</label>
    </form>
    <form class="hero__menu hero__menu_1 hidden">
        <h3 class="hero__cta">Which programs are you interested in?</h3>
        <fieldset class="hero__check-row">
            <input type="checkbox" name="tutoring" id="tutoring" class="hero__checkbox">
            <label class="hero__label" for="tutoring">1-on-1 Tutoring</label>
        </fieldset>
        <fieldset class="hero__check-row">
            <input type="checkbox" name="workshops" id="workshops" class="hero__checkbox">
            <label class="hero__label" for="workshops">Educational Workshops</label>
        </fieldset>
        <p class="hero__validation hero__validation_program invisible">Select a program to continue</p>
    </form>
    <form class="hero__menu hero__menu_2 hidden">
        <label for="username" class="hero__cta">What is your name?</label>
        <input type="text" required="true" name="username" id="username" class="hero__name-input" aria-required="true">
        <p class="hero__validation hero__validation_name invisible">Enter your name to continue</p>
    </form>
    <form class="hero__menu hero__menu_3 hidden">
        <label for="email" class="hero__cta">What is your email address?</label>
        <input type="text" required="true" name="email" id="email" class="hero__email-input" aria-required="true">
        <p class="hero__validation hero__validation_email invisible">Enter a valid email address to continue</p>
    </form>
    <form class="hero__menu hero__menu_4 hidden">
        <h3 class="hero__cta">Thanks for signing up! Check your email for more information!</h3>
    </form>
    <nav class="hero__button-row invisible">
        <button class="back-button">
            <i class="fas fa-caret-left back-button__icon"></i>
            <p class="back-button__text">Back</p>
        </button>
        <button class="continue-button">
            <p class="continue-button__text">Continue</p>
        </button>
    </nav>

</section>

<section class="featured-programs">
    <h2 class="featured-programs__heading"><?php the_field('featured_programs_heading'); ?></h2>

    <?php 
        $featuredProgramsArgs = array(
            'post_type' => 'featured_programs',
            'posts_per_page' => -1,
            'orderby' => 'menu_order title',
            'order' => 'asc'
        );

        $featuredProgramsQ = new WP_Query( $featuredProgramsArgs );
        if($featuredProgramsQ->have_posts()){
            while ($featuredProgramsQ->have_posts()){
                $featuredProgramsQ->the_post();
                $postNumber = $featuredProgramsQ->current_post;
                ?>
                    
                <div class="width-fixer">
                    <div class="program">
                        <h3 class="program__heading"><?php the_field('heading'); ?></h3>
                        <p class="program__caption"><?php the_field('caption'); ?></p>
                        <a href="<?php the_field('1st_additional_link'); ?>" class="program__card <?php 
                            if($postNumber%2 == 0){
                                echo "program__card_top-left";
                            }
                            else{
                                echo "program__card_top-right";
                            }
                            ?>">
                            <figure class="program__image-slot">
                                <img class="program__card-image" src="<?php the_field('1st_additional_link_image'); ?>" loading="lazy" alt="featured program">
                            </figure>
                            <h4 class="program__card-heading"><?php the_field('1st_additional_link_heading'); ?></h4>
                        </a>
                        <a href="<?php the_field('spotlight_link'); ?>" class="program__card <?php 
                            if($postNumber%2 == 0){
                                echo "program__card_right-spotlight";
                            }
                            else{
                                echo "program__card_left-spotlight";
                            }
                            ?>">
                            <figure class="program__image-slot">
                                <img class="program__card-image" src="<?php the_field('spotlight_image'); ?>" loading="lazy" alt="spotlight program">
                            </figure>
                            <div class="program__card-description"><?php the_field('spotlight_description'); ?></div>
                        </a>
                        <a href="<?php the_field('2nd_additional_link'); ?>" class="program__card <?php 
                            if($postNumber%2 == 0){
                                echo "program__card_bottom-left";
                            }
                            else{
                                echo "program__card_bottom-right";
                            }
                            ?>">
                            <figure class="program__image-slot">
                                <img class="program__card-image" src="<?php the_field('2nd_additional_link_image'); ?>" loading="lazy" alt="featured program">
                            </figure>
                            <h4 class="program__card-heading"><?php the_field('2nd_additional_link_heading'); ?></h4>
                        </a>
                        <a class="program__button" href="<?php the_field('more_info'); ?>">Learn more about <?php the_title(); ?></a>
                    </div>
                </div>

                <?php
            }
        }
        wp_reset_postdata();
    ?>

    
</section>

<section class="upcoming">

    <h2 class="upcoming__heading">Upcoming Events</h2>
    <?php echo do_shortcode('[upcomingevents number=3 url="https://calendar.google.com/calendar/ical/admin%40mindbubble.org/public/basic.ics"]'); ?>

</section>

<?php
get_footer();
?>