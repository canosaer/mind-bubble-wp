<?php
get_header();
?>

<section class="hero">
    <img class="hero__image" src="<?php the_field('hero_image'); ?>">
    <h1 class="hero__heading"><?php the_field('hero_heading'); ?></h1>
    <h2 class="hero__subheading"><?php the_field('hero_subheading'); ?></h2>
    <h3 class="hero__cta"><?php the_field('hero_cta'); ?></h3>
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

<?php echo do_shortcode('[upcomingevents number=3 url="https://calendar.google.com/calendar/ical/admin%40mindbubble.org/public/basic.ics"]'); ?>

<?php
get_footer();
?>