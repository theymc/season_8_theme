<?php /* Template Name: Home */

get_header(); ?>
	<section id="main">
      <h1>Upcoming Events</h1>
      <nav class="filters">
        <?php 
          wp_nav_menu(array(menu => 'Category Navigation')); 
        ?>
      </nav>
      <ul class="course_list">
			<?php
        $whichCat = get_query_var('cat');
        // Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'programs',
          'posts_per_page' => '-1',
          'order' => 'asc',
          'cat' => $whichCat
        );

        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post();
          ?>
				<li>
          <figure class="location">
            <?php if(the_field('banner_image') != ''){?>
            <img src="<?php the_field('banner_image'); ?>" alt="Space Photo" width="300" height="90" />
            <?php }else{ ?>
            <img src="http://placehold.it/300x90" />
            <?php } ?>
            <a href="<?php the_field('registration_link'); ?>" class="event_cta">Apply</a>
          </figure>
          <h3><?php the_title(); ?></h3>
          <span class="event details">
            <span class="event date"><?php the_field('start_date'); ?></span> <span class="event time"><?php the_field('event_time'); ?></span>
          </span>
          <p><?php the_excerpt(); ?></p>
          <?php

          // Find connected pages
          $connected = new WP_Query( array(
            'connected_type' => array('team_to_program'),
            'connected_items' => $post,
            'connected_orderby' => true,
            'connected_order' => asc,
            'nopaging' => true
          ) );

          // Display connected team

          while ( $connected->have_posts() ) : $connected->the_post();
            ?>
              <figure class="session_lead">
                <div class="frame">
                  <img src="<?php the_field('head_shot'); ?>" alt="<?php the_title(); ?>" width="68" height="68" />
                </div> <!-- .frame -->
                <h4><?php the_title(); ?></h4>
                <span class="pro_title"><?php the_field('tagline'); ?></span>
              </figure>
            
            <?php 
          endwhile;

          wp_reset_postdata(); // set $post back to original post
          ?>

          
          <div class="session_stats">
            <dl> 
              <dt>Spots</dt>
              <dd><?php the_field('spaces_available'); ?></dd>
            </dl>
            <dl>
              <dt>Cost</dt>
              <dd><?php the_field('cost'); ?></dd>
            </dl>
            <dl>
              <dt>Days to Go</dt>
              <dd>12</dd>
            </dl>
          </div>
          <section class="takeaways">
            <h3>Key Takeaways</h3>
            <?php the_field('takeaways'); ?>
            <a href="<?php the_field('registration_link'); ?>" title="Registration Link"><?php the_field('register_cta'); ?></a>
          </section>
        </li>

        
			<?php
					endwhile;
				endif;
			?>
    </section>
	

<?php get_footer(); ?>