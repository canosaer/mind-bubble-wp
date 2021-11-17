<?php
/*
* Template Name: Service Landing Page
*/


get_header();
?>

<?php
    $serviceLandingArgs = array();
    $serviceLandingQ = new WP_Query( $serviceLandingArgs );
    if($serviceLandingQ->have_posts()){
        ?>
        <ul class="example">
        <?php


            while ($serviceLandingQ->have_posts()){
                $serviceLandingQ->the_post();
                ?>


                <?php
            }
        ?>
        </ul>
        <?php
    }
    wp_reset_postdata();
?>

<?php
get_footer();
?>