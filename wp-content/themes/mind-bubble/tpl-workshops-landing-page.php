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
                        <section class="workshop__info">
                        <!-- <h2 class="workshops-hero__title"><?php the_field('title'); ?></h2>
                            <a class="workshops__presenter" target="_blank" href="<?php the_field('presenter_link'); ?>"><?php the_field('presenter_name'); ?></a>
                            <a class="workshops__button" href="#">Sign Up</a> -->

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