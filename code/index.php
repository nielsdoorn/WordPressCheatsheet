<?php get_header(); ?>
<div id="cols">
	<div id="inhoud">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php the_content( 'Lees meer...'); ?>
		</div>
		<?php endwhile; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
