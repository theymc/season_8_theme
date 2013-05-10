<?php get_header(); ?>
	<div id="main">
		<div id="main_content">
			<header class="archive">
				<h1>The Latest</h1>
		</header>

			<?php
				if(have_posts()):
					while(have_posts()):
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
					<!-- 
						<p>Written on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <?php the_author_posts_link() ?></p>
						<p>Categories: <?php the_category(', '); ?></p>
					-->
				</header>
			
				
				<?php the_excerpt(); ?> <!-- Please display the content of the post -->

				</article>

			<?php

					// echo('hello <br />');

					endwhile; // Thank you, database! See you again soon!
				endif;
			?>

			<nav class="archive">
				<?php posts_nav_link(); ?>
			</nav>
		</div>

		<?php // get_sidebar(); 
		?>
	</div>
	

<?php get_footer(); ?>