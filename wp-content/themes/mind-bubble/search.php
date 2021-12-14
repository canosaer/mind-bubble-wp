<?php
    $searchBar = '
    
    '
?>

<?php
get_header();
?>

<main class="search-results">
    <section class="top">
        <h2 class="top__heading">Search Results</h2>
        <form role="search" method="get" action="http://localhost/" class="wp-block-search__button-inside wp-block-search__icon-button wp-block-search">
            <div class="wp-block-search__inside-wrapper">
                <input type="search" id="wp-block-search__input-1" class="wp-block-search__input" name="s" value="<?php echo get_query_var('s') ?>" placeholder=""  required />
                <button type="submit" class="wp-block-search__button has-icon">
                    <svg id="search-icon" class="search-icon" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path>
                    </svg>
                </button>
            </div>
        </form>

            <!-- //get_query_var('s')
            //RESULT
            //hyperlink raw
            //hyperlink formatted as title
            //date last modified
            //format like wikipedia -->

    </section>
    
    <section class="results">
        <?php
            $s=get_search_query();
            $args = array(
                's' =>$s
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) { ?>

                <ul class="results__list"> <?php
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();

                        $u_time = get_the_time('U'); 
                        $u_modified_time = get_the_modified_time('U');
                        $updated_date = get_the_date('F jS, Y'); 
                        $updated_time = get_the_time('h:i a'); 
                        if ($u_modified_time >= $u_time + 86400) { 
                            $updated_date = get_the_modified_time('F jS, Y');
                            $updated_time = get_the_modified_time('h:i a'); 
                        }
                        ?>
                        <li class="results__item">
                            <a class="results__raw-address" href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a>
                            <a class="results__link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p class="results__last-updated">Last updated <?php echo $updated_date; ?> at <?php echo $updated_time; ?></p>
                        </li>
                    <?php } ?>
                </ul> 
                <?php
            }
            else{
            ?>
                <h3 class="results__null-heading">No results found.</h3>
                <p class="results__null-text">Nothing matched your search criteria. Please try again with some different keywords.</p>
            <?php }
            wp_reset_postdata(); 
        ?>
    </section>

</main>

<?php
get_footer();
?>