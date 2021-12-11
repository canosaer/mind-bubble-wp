<?php
/*
* Template Name: Tutors Landing Page
*/

get_header();
?>

<section class="tutor-hero">
    <img class="tutor-hero__image" src="<?php the_field('hero_image'); ?>" alt="tutoring hero image"></img>
    <p class="tutor-hero__text"><?php the_field('hero_text'); ?></p>
    <a class="tutor-hero__button" href="<?php the_field('tutoring_sign_up_link'); ?>"><?php the_field('button_text'); ?></a>
</section>

<section class="tutor-gallery">
    <h2 class="tutor-gallery__heading"><?php the_field('heading'); ?></h2>
    <p class="tutor-gallery__text"><?php the_field('intro_text'); ?></p>

    <div class="tutor-gallery__card-display">
        <?php
            $teamLandingArgs = array(
                'post_type' => 'team_member',
                'posts_per_page' => -1,
                'meta_key' => 'last_name',
                'orderby' => 'menu_order meta_value',
                'order' => 'asc'
            );

            $teamLandingQ = new WP_Query( $teamLandingArgs );
            if($teamLandingQ->have_posts()){
            ?>
                <?php
                    while ($teamLandingQ->have_posts()){
                        $teamLandingQ->the_post();
                        ?>
                            <a class="card" href="<?php echo get_the_permalink(); ?>">
                                <img class="card__image" src="<?php the_field('headshot'); ?>">
                                <div class="card__text-display">
                                    <h2 class="card__heading"> <?php the_field('name'); ?> </h2>
                                    <h3 class="card__subheading"> <?php the_field('job_title'); ?> </h3>
                                </div>
                            </a>
                        <?php
                    }
                ?>
                </ul>
                <?php
            }
            wp_reset_postdata();
        ?>
    </div>

    <h3 class="tutor-gallery__fact-heading">Did You Know?</h3>
    <p class="tutor-gallery__fact"><?php the_field('did_you_know'); ?></p>
</section>

<section class="get-help">
    <h3 class="get-help__text">Not sure where to begin? We can help.</h3>
    <a class="get-help__button" href="mailto:<?php the_field('more_info_email_address'); ?>">Get More Info</a>
</section>

<?php
get_footer();
?>