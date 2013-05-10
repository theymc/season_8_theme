<?php get_header(); ?> <!-- This function calls upon any template called "header.php" and displays the content within it -->

		<div id="main_content">
			<h1>Search results for: <?php echo get_search_query(); ?></h1>

			<?php // This is the start of The Loop. It asks the database "Are there any posts?" If yes, then please display them

				if(have_posts()): // Do we have posts?
					while(have_posts()): // While we do have posts
						the_post();
			?>
				<article>

				<?php if ( has_post_thumbnail() ) :?>
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
				<?php endif; ?>

				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> <!-- Please display the title of the post -->
					<p>Written on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <?php the_author_posts_link() ?></p>
					<p>Categories: <?php the_category(', '); ?></p>
				</header>
			
				
				<?php the_excerpt(); ?> <!-- Please display the content of the post -->

				</article>

			<?php

					// echo('hello <br />');

					endwhile; // Thank you, database! See you again soon!
				endif;
			?>

			<?php posts_nav_link(); ?>
			
		</div>

		<?php get_sidebar(); ?> <!-- This function call any template called "sidebar.php" and will display its content -->

<?php get_footer(); ?> <!-- This function call any template called "footer.php" and will display its content -->