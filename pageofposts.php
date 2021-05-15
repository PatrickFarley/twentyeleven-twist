<?php
/*
Template Name: PageOfPosts

-its possible that this template is not yet used
*/

get_header(); ?>

	

<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<div id="content" class="narrowcolumn">

<?php
$showposts = -1; // -1 shows all posts
$do_not_show_stickies = 1; // 0 to show stickies
   $args=array(
   'showposts' => $showposts,
   'caller_get_posts' => $do_not_show_stickies,
   );
$my_query = new WP_Query($args); 

?>

	<?php if( $my_query->have_posts() ) : ?>

		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<?php
			//necessary to show the tags 
			global $wp_query;
			$wp_query->in_the_loop = true;
			?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry »'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('« Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries »') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>