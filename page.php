<?php get_header(); ?>
<section>
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
					<h1><?php the_title(); // заголовок ?></h1>
					<?php the_content(); // контент ?>
				</article>
			<?php endwhile; // конец цикла ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>