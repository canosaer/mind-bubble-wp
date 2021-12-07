<?php
get_header();
?>

<section class="hero">
    <img class="hero__image" src="<?php the_field('hero_image'); ?>">
    <h1 class="hero__heading"><?php the_field('hero_heading'); ?></h1>
    <h2 class="hero__subheading"><?php the_field('hero_subheading'); ?></h2>
    <h3 class="hero__cta"><?php the_field('hero_cta'); ?></h3>
</section>

<?php echo do_shortcode('[upcomingevents number=3 url="https://calendar.google.com/calendar/ical/admin%40mindbubble.org/public/basic.ics"]'); ?>

<?php
get_footer();
?>