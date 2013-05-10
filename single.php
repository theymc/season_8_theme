<?php get_header(); ?>
	<div id="main">
		<div id="main_content">
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

				<header class="single">
					<h1><?php the_title(); ?></h1> <!-- Please display the title of the post -->
					<!-- 
						<p>Written on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <?php the_author_posts_link() ?></p>
						<p>Categories: <?php the_category(', '); ?></p>
					-->
				</header>

				<?php the_content(); ?> <!-- Please display the content of the post -->

				</article>
				<nav class="single">
					<?php previous_post_link(); ?> -- <?php next_post_link(); ?>
				</nav>
				
				<?php // comments_template(); 
				?>


			<?php

					// echo('hello <br />');

					endwhile; // Thank you, database! See you again soon!
				endif;
			?>

		</div>

		<?php	// get_sidebar(); 
		?> <!-- This function call any template called "sidebar.php" and will display its content -->
	</div>
<?php get_footer(); ?> <!-- This function call any template called "footer.php" and will display its content -->