<?php
$tdir = get_bloginfo('template_directory');
get_header(); ?>
	<div id="main">
		<div id="main_content">
			<?php
       

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post();
          ?>
				<article>
				  <h1><span><?php the_title(); ?></span> <a href="<?php the_field('registration_link'); ?>" class="event_cta"><?php the_field('register_cta'); ?></a></h1>
          <?php the_content(); ?>
				

          <?php

            // Find connected pages
            $connected = new WP_Query( array(
            'connected_type' => 'module_to_program',
            'connected_items' => $post,
            'nopaging' => true
            // 'connected_orderby' => $meta_key,
            // 'connected_order' => 'asc'
            ) );

            if ( $connected->have_posts() ) :

            // Display connected pages
            echo '<h2>Topics:</h2><ul>';

            while ( $connected->have_posts() ) : $connected->the_post();
            ?>
              <li>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
              </a>
              </li>
            <?php endwhile; ?>
            <?php endif; ?>

            </ul>
            <?php
            wp_reset_postdata(); // set $post back to original post
            endwhile;
            endif;
          ?>
          <?php

            // Find connected pages
            $connected = new WP_Query( array(
            'connected_type' => 'team_to_program',
            'connected_items' => $post,
            'nopaging' => true
            ) );

            // Display connected pages
            echo '<h3>Instructors</h3><ul>';

            while ( $connected->have_posts() ) : $connected->the_post();
            ?>
            <li>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_title(); ?>
            </a>
            </li>
            <?php 
            endwhile;

            wp_reset_postdata(); // set $post back to original post
          ?>
          </article>
		</div>
	</div>
	<section class="newsletter">
      <div id="wufoo-m7x3w7">
      Fill out my <a href="http://markreale.wufoo.com/forms/m7x3w7">online form</a>.
      </div>
      <script type="text/javascript">var m7x3w7;(function(d, t) {
      var s = d.createElement(t), options = {
      'userName':'markreale', 
      'formHash':'m7x3w7', 
      'autoResize':true,
      'height':'260',
      'async':true,
      'header':'show'};
      s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
      s.onload = s.onreadystatechange = function() {
      var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
      try { m7x3w7 = new WufooForm();m7x3w7.initialize(options);m7x3w7.display(); } catch (e) {}};
      var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
      })(document, 'script');</script>
    </section>

    <section class="about">
      <figure class="ymc_alt_logo">
        <img src="<?php echo $tdir; ?>/assets/images/ymc_logo_alt.png" alt="YMC Logo" width="203" height="145" />
        <figcaption>
          <p>
          The YMC's mandate is to make technology learning resources available to everyone everywhere regardless of geography, age, gender, background, future-ground, or anything else that could distinguish human beings apart.
          </p>
        </figcaption>
      </figure>
    </section>

<?php get_footer(); ?>