<?php
/*
* Template Name: Calendar Page
*/


get_header();
?>

<main class="calendar">

    <?php
        while (have_posts()) : the_post(); ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php
        endwhile;
    ?>

<iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=America%2FNew_York&mode=AGENDA&showCalendars=0&src=YWRtaW5AbWluZGJ1YmJsZS5vcmc&color=%23039BE5" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

</main>

<?php
get_footer();
?>