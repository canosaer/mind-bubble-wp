<?php
get_header();
?>

<section class="service-hero">
    <div class="service-hero__price-info">
        <h1 class="service-hero__name"><?php the_field('service_name'); ?></h1>
        <p class="service-hero__price">$<?php the_field('starting_price'); ?></p>
    </div>
    <figure class="service-hero__image-slot">
        <img class="service-hero__image" src="<?php the_field('icon'); ?>">
    </figure>
</section>

<section class="service-description">
    <p class="service-description__text"><?php the_field('description'); ?></p>
</section>

<?php
get_footer();
?>