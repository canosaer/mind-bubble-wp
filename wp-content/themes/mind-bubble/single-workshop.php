<?php
get_header();
?>

<main class="workshops workshops_single">
   <img class="workshops__image" src="<?php the_field('image'); ?>" alt="workshops hero image">
   <section class="workshops__info">
      <h2 class="workshops__description-heading">About the workshop</h2>
      <div class="workshops__description"><?php the_field('description'); ?></div>
      <div class="details">
            <h3 class="details__title"><?php the_field('title'); ?></h3>
            <p class="details__presenter">Presented By: <a class="details__presenter-link" target="_blank" href="<?php the_field('presenter_link'); ?>"><?php the_field('presenter_name'); ?></a></p>
            <p class="details__date-time"><?php the_field('date'); ?>, <?php the_field('time'); ?></p>
            <p class="details__grades">Best for grades <?php the_field('grade_range'); ?></p>
            <p class="details__price">FREE</p>
      </div>
   </section>
   <h3 class="workshops__volunteer-heading">Volunteer</h3>
   <p class="workshops__volunteer-text">If you're interested in sharing your knowledge and skills with young people - fill out a <a class="workshops__volunteer-link" href="http://localhost/volunteer/">volunteer application</a> to let us know! We're always looking for new workshop facilitators with exciting ideas!</p>
</main>

<?php
get_footer();
?>