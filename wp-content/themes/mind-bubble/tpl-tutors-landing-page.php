<?php
/*
* Template Name: Tutor Landing Page
*/

get_header();
?>

<section class="tutor-hero">
    <img class="tutor-hero__image" src="<?php the_field('hero_image'); ?>" alt="tutoring hero image"></img>
    <div class="tutor-hero__content">
        <p class="tutor-hero__text"><?php the_field('hero_text'); ?></p>
        <a class="tutor-hero__button" href="<?php the_field('tutoring_sign_up_link'); ?>"><?php the_field('button_text'); ?></a>
    </div>
</section>

<section class="tutor-gallery">
    <h2 class="tutor-gallery__heading"><?php the_field('heading'); ?></h2>
    <p class="tutor-gallery__text"><?php the_field('intro_text'); ?></p>

    <div class="tutor-gallery__card-display">
        <?php
            $tutorLandingArgs = array(
                'post_type' => 'tutor',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'asc'
            );

            $tutorLandingQ = new WP_Query( $tutorLandingArgs );
            if($tutorLandingQ->have_posts()){
            ?>
                <?php
                    while ($tutorLandingQ->have_posts()){
                        $tutorLandingQ->the_post();
                        ?>
                            <a class="tutor-card" href="<?php echo get_the_permalink(); ?>">
                                <img class="tutor-card__image" src="<?php the_field('headshot'); ?>">
                                <div class="tutor-card__text-display">
                                    <h2 class="tutor-card__name"> <?php the_field('first_name'); ?> </h2>
                                    <p class="tutor-card__detail">With Mind Bubble since <?php the_field('with_mind_bubble_since'); ?></p>
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
    <a class="get-help__button" href="mailto:<?php the_field('more_info_email_address'); ?>">Contact Us</a>
</section>

<?php
get_footer();
?>