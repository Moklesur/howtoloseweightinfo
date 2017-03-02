<?php
/*
 Template Name: Blog Page
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="col-md-12">
                        <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                            <span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
                        <?php endif; ?>

                        <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
<?php twentysixteen_post_thumbnail(); ?>
                        <div class="blog-content">
                            <?php 
                                if(is_single()) :
                                the_content();
                              else:
                                //return $excerpt;
                                the_excerpt();
                              endif;
                          //twentysixteen_excerpt(); 
                          ?>
               <a href="<?php the_permalink(); ?>" class="read-more margin-top-10">Read More</a>
                        </div><!-- .entry-content -->

                        <div class="blog-tag-fix">
                            <?php //twentysixteen_entry_meta(); 
                          
                            edit_post_link(
                                sprintf(
                                /* translators: %s: Name of current post */
                                    __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
                                    get_the_title()
                                ),
                                '<span class="edit-link">',
                                '</span>'
                            );
                            ?>
                        </div><!-- .entry-footer -->
                    </div>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>