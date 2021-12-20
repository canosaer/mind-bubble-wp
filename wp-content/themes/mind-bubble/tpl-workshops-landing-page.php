<?php
/*
* Template Name: Workshops Landing Page
*/


get_header();
?>

<main class="workshops">

    <?php
        $workshopsLandingArgs = array(
            'post_type' => 'workshop',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'desc'
        );

        $workshopsLandingQ = new WP_Query( $workshopsLandingArgs );
        if($workshopsLandingQ->have_posts()){
        ?>
            <?php
                while ($workshopsLandingQ->have_posts()){
                    $workshopsLandingQ->the_post();
                    $postNumber = $workshopsLandingQ->current_post;
                    $archiveState = get_field('archive');
                    if($postNumber == 0 && !$archiveState){ ?>
                        <img class="workshops__image" src="<?php the_field('image'); ?>" alt="workshops hero image">
                        <section class="workshops__info">
                            <a class="workshops__sign-up workshops__sign-up_intro" href="#sign-up">Sign Up</a>
                            <h2 class="workshops__description-heading">Workshop Description</h2>
                            <p class="workshops__description"><?php the_field('description'); ?>
                            <div class="details">
                                <h3 class="details__title"><?php the_field('title'); ?></h3>
                                <p class="details__presenter">Presented By: <a class="details__presenter-link" target="_blank" href="<?php the_field('presenter_link'); ?>"><?php the_field('presenter_name'); ?></a></p>
                                <p class="details__date-time"><?php the_field('date'); ?>, <?php the_field('time'); ?></p>
                                <p class="details__grades">Best for grades <?php the_field('grade_range'); ?></p>
                                <p class="details__price">FREE</p>
                                <a class="details__button" href="#sign-up">Sign Up</a>
                            </div>
                        </section>


                            
                    <?php 
                    } ?>
                        
                    <?php
                }
            ?>

            <?php
        }
        wp_reset_postdata();
    ?>

</main>


<?php
get_footer();
?>