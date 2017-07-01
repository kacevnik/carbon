<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
					<?php woocommerce_content(); ?>
				</article>

		</div>
	</div>
</section>
<?php get_footer(); ?>