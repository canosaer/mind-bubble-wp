<?php
/*
* Template Name: Service Landing Page
*/


get_header();
?>

<section class="service-landing">
    <h1 class="service-landing__heading">Services</h1>
    <div class="service-landing__card-display">

    <?php
        $serviceLandingArgs = array(
            'post_type' => 'service',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'asc'
        );

        $serviceLandingQ = new WP_Query( $serviceLandingArgs );
        if($serviceLandingQ->have_posts()){
        ?>
            <?php
                while ($serviceLandingQ->have_posts()){
                    $serviceLandingQ->the_post();
                    ?>
                        <a class="card" href="<?php echo get_the_permalink(); ?>">
                            <img class="card__image" src="<?php the_field('icon'); ?>">
                            <div class="card__text-display">
                                <h2 class="card__heading"> <?php the_field('service_name'); ?> </h2>
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

</section>



<?php
get_footer();
?>