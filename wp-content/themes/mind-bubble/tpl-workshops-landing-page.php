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
            $activeSignUp = false;
            $archiveHeading = false;
            while ($workshopsLandingQ->have_posts()){
                $workshopsLandingQ->the_post();
                $postNumber = $workshopsLandingQ->current_post;
                $archiveState = get_field('archive');
                if($postNumber == 0 && !$archiveState){ 
                    $activeSignUp = true;
                    ?>
                    <img class="workshops__image" src="<?php the_field('image'); ?>" alt="workshops hero image">
                    <section class="workshops__info">
                        <a class="workshops__sign-up workshops__sign-up_intro" href="#sign-up">Sign Up</a>
                        <h2 class="workshops__description-heading">Workshop Description</h2>
                        <p class="workshops__description"><?php the_field('description'); ?></p>
                        <div class="details">
                            <h3 class="details__title"><?php the_field('title'); ?></h3>
                            <p class="details__presenter">Presented By: <a class="details__presenter-link" target="_blank" href="<?php the_field('presenter_link'); ?>"><?php the_field('presenter_name'); ?></a></p>
                            <p class="details__date-time"><?php the_field('date'); ?>, <?php the_field('time'); ?></p>
                            <p class="details__grades">Best for grades <?php the_field('grade_range'); ?></p>
                            <p class="details__price">FREE</p>
                            <a class="details__button" href="#sign-up">Sign Up</a>
                        </div>
                    </section>
                    <iframe class="workshops__form" src="https://docs.google.com/forms/d/e/<?php the_field('google_form_id'); ?>/viewform?embedded=true" frameborder="0" width="100%" height="500" marginheight="0" marginwidth="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" loading="lazy"></iframe>
                    <h3 class="workshops__cancel-heading">Cancellation Policy</h3>
                    <p class="workshops__cancel-text">Our workshops are always 100% free - but be advised that canceling your student's registration within a week of the workshop incurs a $5 cancellation fee. Canceling within 24 hours of the workshop incurs a $10 cancellation fee. Not showing up without notifying us of cancellation in advance incurs a $20 cancellation fee. Because we never want money to be a barrier for students who wish to take advantage of our workshops, we'll cover the first $20 of cancellation fees you incur each calendar year. Cancellation fees prevent you from being able to sign up for workshops until they are paid.</p>
                <?php 
                }
                if(!$activeSignUp){ 
                    $activeSignUp = true; ?>
                    <img class="workshops__image" src="http://localhost/wp-content/uploads/2021/12/workshops.png" alt="workshops hero image">
                    <p class="workshops__overview">Mind Bubble's educational workshops provide engaging learning experiences in a variety of topics students aren't likely to encounter during their normal school day. We've offered workshops on everything from epidemiology to mathematics to poetry and more!</p>
                    <p class="workshops__cta">Mind Bubble is busy cooking up its next workshop! Check back here for more details soon!</p>
                <?php 
                }
                if(!$archiveHeading){
                    $archiveHeading = true; ?>
                    <section class="archive">
                        <h3 class="archive__heading">Past Workshops</h3>
                <?php
                }
                if($postNumber < 12 && $archiveState){ ?>
                    <a class="archive__image-slot" href="<?php the_permalink(); ?>">
                        <img class="archive__image" src="<?php the_field('image'); ?>" loading="lazy" alt="workshops archive image">
                    </a>
                    <p class="archive__title"><?php the_field('title'); ?></p>
                    <p class="archive__presenter">Presented By: <a class="archive__presenter-link" target="_blank" href="<?php the_field('presenter_link'); ?>"><?php the_field('presenter_name'); ?></a></p>
                    <p class="archive__date-time"><?php the_field('date'); ?>, <?php the_field('time'); ?></p>
                    <p class="archive__grades">Grades <?php the_field('grade_range'); ?></p>
                <?php
                }
            }
        ?>

        <?php
        }
        wp_reset_postdata();
    ?>
    </section>

</main>


<?php
get_footer();
?>