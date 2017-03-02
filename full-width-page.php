<?php
/*
 Template Name: Full Page
 */
get_header(); ?>

    <div id="primary" class="full-width">
        <main id="main" class="site-main" role="main">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php twentysixteen_post_thumbnail(); ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages( array(
                            'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
                            'after'       => '</div>',
                            'link_before' => '<span>',
                            'link_after'  => '</span>',
                            'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
                            'separator'   => '<span class="screen-reader-text">, </span>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->

                    <?php
                    edit_post_link(
                        sprintf(
                        /* translators: %s: Name of current post */
                            __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
                            get_the_title()
                        ),
                        '<footer class="entry-footer"><span class="edit-link">',
                        '</span></footer><!-- .entry-footer -->'
                    );
                    ?>

                </article><!-- #post-## -->
                <?php

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

                // End of the loop.
            endwhile;
            ?>

        </main><!-- .site-main -->

        <?php get_sidebar( 'content-bottom' ); ?>

    </div><!-- .content-area -->

<?php get_footer(); ?>