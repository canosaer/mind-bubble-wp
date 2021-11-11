<?php
get_header();
?>

<section class="team-member">
    <h1 class="team-member__name"><?php the_field('name'); ?></h1>
    <p class="team-member__title"><?php the_field('job_title'); ?></p>
    <p class="team-member__email"><?php the_field('email'); ?></p>
    <p class="team-member__phone"><?php the_field('phone'); ?></p>
    <p class="team-member__linkedin"><?php the_field('linkedin'); ?></p>
    <p class="team-member__twitter"><?php the_field('twitter'); ?></p>
    <p class="team-member__bio"><?php the_field('bio'); ?></p>
    <img class="team-member__headshot" src="<?php the_field('headshot'); ?>">
</section>

<?php
get_footer();
?>