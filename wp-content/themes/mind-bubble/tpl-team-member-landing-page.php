<?php
/*
* Template Name: Team Member Landing Page
*/


get_header();
?>

<section class="team-landing">
    <h1 class="team-landing__heading">Team</h1>
    <div class="team-landing__card-display">

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

</section>

<?php
get_footer();
?>