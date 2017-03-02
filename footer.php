<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

<footer class="footer">
	<div class="site-inner">
		<div id="colophon" class="site-footer" role="contentinfo">
			<div class="full-width display-inline-b text-center margin-top-50">
				<ul class="list-inline social">
					<?php
            if(get_theme_mod('header_fb', 'https://www.facebook.com/') ) {
                echo '<li><a href="'.get_theme_mod('header_fb').'"  target="_blank"><i class="fa fa-facebook"></i></a></li>';
            }
            if(get_theme_mod('header_tw', '1')) {
                echo '<li><a href="'.get_theme_mod('header_tw', 'https://twitter.com ').'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
            }
            if(get_theme_mod('header_li', '1')) {
                echo '<li><a href="'.get_theme_mod('header_li', 'https://linkedin.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_pint', '1')) {
                echo '<li><a href="'.get_theme_mod('header_pint', 'https://pinterest.com').'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
            }
            if(get_theme_mod('header_ins', '1')) {
                echo '<li><a href="'.get_theme_mod('header_ins', 'https://instagram.com').'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
            }
            if(get_theme_mod('header_dri', '1')) {
                echo '<li><a href="'.get_theme_mod('header_dri', 'https://dribbble.com').'" target="_blank"><i class="fa fa-dribbble"></i></a></li>';
            }
            if(get_theme_mod('header_plus', '1')) {
                echo '<li><a href="'.get_theme_mod('header_plus', 'https://plus.google.com').'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
            }
            if(get_theme_mod('header_you', '1')) {
                echo '<li><a href="'.get_theme_mod('header_you', 'https://youtube.com').'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
            }
            ?>
				</ul>
			</div>
			<div class="full-width display-inline-b text-center margin-top-30">
				<a href="/">Proudly powered by how to lose weight info</a>
			</div><!-- .site-info -->
		</div><!-- .site-footer -->
	</div>
</footer>

	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

<script>
jQuery(document).ready(function(){
  jQuery('#recent-posts-2 ul,.widget_recent_entries ul').bxSlider({
    mode: 'vertical',
    minSlides: 5,
  auto:true,
  autoHover:true,
  moveSlides: 1,
    slideMargin: 0,
  pager:false,
  nextText: '',
  prevText: ''
  });
});
</script>
</body>
</html>
