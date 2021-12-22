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
                    <iframe class="workshops__form" src="https://docs.google.com/forms/d/e/<?php the_field('google_form_id'); ?>/viewform?embedded=true" frameborder="0" width="100%" height="500" marginheight="0" marginwidth="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                  
                <?php 
                }
                if(!$activeSignUp){ 
                    $activeSignUp = true; ?>
                    <img class="workshops__image" src="http://localhost/wp-content/uploads/2021/12/workshops.png" alt="workshops hero image">
                    <p class="workshops__overview">Mind Bubble's educational workshops provide engaging learning experiences in a variety of topics students aren't likely to encounter during their normal school day. We've offered workshops on everything from epidemiology to mathematics to poetry and more!</p>
                    <p class="workshops__cta">Mind Bubble is busy cooking up its next workshop! Check back here for more details soon!</p>
                <?php 
                } ?>
                
                
            <?php //render "past workshops" only if archiveState = true
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