<?php
/**
 * Template for displaying Category pages (displaying all the posts in the category,
 * or a message if no posts are found).
 *
 */

$cat = get_category( get_query_var( 'cat' ) );
$cat_slug = $cat->slug;
if ($cat_slug == 'blog') {
	get_header("blog");
} else {get_header();}
?>


		<section id="primary">
			<div id="content" role="main">
			
			
			<header class="entry-header">
				<?php if( is_category() ) { ?><h1 class="entry-title" id="cat_title"><?php single_cat_title(); ?></h1><?php } ?>
				<?php echo category_description($category_id); ?>
			</header>
	
			<?php if ( have_posts() ) : ?>

				

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that 
						 * will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
						//the_title();
						//the_excerpt();
					?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>