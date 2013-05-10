<?php get_header(); ?>
	<div id="main">
		<div id="main_content">
			<?php 
				if(have_posts()):
					while(have_posts()):
						the_post();
			?>
				<article>
				
				<header>
					<h1><?php the_title(); ?></h1>
				</header>

				<?php the_content(); ?>

				</article>

			<?php
					endwhile;
				endif;
			?>
		</div>

		<?php 
		// get_sidebar(); 
		?>
	</div>
<?php get_footer(); ?>