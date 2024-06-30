<?php
get_header();
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
        <?php
    endwhile;
else :
    ?>
    <p>No pages found.</p>
    <?php
endif;
get_footer();