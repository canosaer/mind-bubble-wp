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
            'post_type' => 'Featured Programs',
            'posts_per_page' => -1,
            'orderby' => 'menu_order title',
            'order' => 'asc'
        );

        $featuredProgramsQ = new WP_Query( $featuredProgramsArgs );
        if($featuredProgramsQ->have_posts()){
            while ($featuredProgramsQ->have_posts()){
                $featuredProgramsQ->the_post();
                ?>
                    


                    
                <?php
            }
        }
        wp_reset_postdata();
    ?>

    <div class="width-fixer">
        <div class="program">
            <h3 class="program__heading">Free One-on-One Tutoring</h3>
            <p class="tutoring__intro-text">Meet with a volunteer tutor in-person or online and get individualized instruction in a fun, relaxed environment.</p>
            <a href="#" class="tutoring__card tutoring__card_tutors">
                <figure class="tutoring__image-slot">
                    <img class="tutoring__card-image" src="dist/img/tutor.jpg" loading="lazy" alt="professional young adult leaning against wall">
                </figure>
                <h4 class="tutoring__card-heading">Tutors</h4>
            </a>
            <a href="#" class="tutoring__card tutoring__card_grades">
                <figure class="tutoring__image-slot">
                    <img class="tutoring__card-image" src="dist/img/grades.jpg" loading="lazy" alt="kids of different ages">
                </figure>
                <p class="tutoring__card-heading">Grades 4-10:<span class="tutoring__card-text"> Get individualized support for academics, test prep, enrichment, and learning differences.</span></p>
            </a>
            <a href="#" class="tutoring__card tutoring__card_schedule">
                <figure class="tutoring__image-slot">
                    <img class="tutoring__card-image" src="dist/img/student.jpg" loading="lazy" alt="happy student raising hand">
                </figure>
                <h4 class="tutoring__card-heading">Schedule</h4>
            </a>
            <a class="tutoring__button" href="#">Learn more about Tutoring</a>
        </div>
	</div>
</section>

<?php echo do_shortcode('[upcomingevents number=3 url="https://calendar.google.com/calendar/ical/admin%40mindbubble.org/public/basic.ics"]'); ?>

<?php
get_footer();
?>