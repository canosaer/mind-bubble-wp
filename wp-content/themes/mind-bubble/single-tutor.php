<?php
get_header();
?>

<main class="tutor-profile">
    <img class="tutor-profile__background" src="<?php bloginfo('template_url')?>/img/volunteer_profile_background.png">

    <section class="intro">
        <h2 class="intro__heading">
            <p class="intro__meet">Meet</p> 
            <p class="intro__first-name"><?php the_field('first_name'); ?></p>
        </h2>
        <p class="intro__with-since"><?php the_field('first_name'); ?> is a volunteer who became part of the Mind Bubble community in <?php the_field('with_since'); ?></p>
        <img class="intro__headshot" src="<?php the_field('headshot'); ?>" alt="tutor headshot">    
    </section>

    <section class="q-a">
        <p class="q-a__q q-a__q_1"><?php the_field('question_1'); ?></p>
        <p class="q-a__a q-a__a_1"><?php the_field('answer_1'); ?></p>
        <p class="q-a__q q-a__q_2"><?php the_field('question_2'); ?></p>
        <p class="q-a__a q-a__a_2"><?php the_field('answer_2'); ?></p>

        <?php
            if(get_field('question_3')){ ?>
                <p class="q-a__q q-a__q_3"><?php the_field('question_3'); ?></p>
                <p class="q-a__a q-a__a_3"><?php the_field('answer_3'); ?></p>
            <?php } 
        ?>

        <?php
            if(get_field('fun_fact')){ ?>
                <p class="q-a__fact-heading">Fun Fact</p>
                <p class="q-a__fun-fact"><?php the_field('fun_fact'); ?></p>
            <?php } 
        ?>       

    </section>

</main>

<?php
get_footer();
?>