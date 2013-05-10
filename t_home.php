<?php /* Template Name: Home */
$tdir = get_bloginfo('template_directory');
get_header(); ?>
	<section id="main">
        <section id="upcoming" class="courses">
      <h1>Upcoming Events</h1>
      <a href="mailto:info@theymc.com" title="Got an idea?" target="_blank">Got an idea for a talk? Let us know!</a>
      <nav class="filters">
        <?php 
          wp_nav_menu(array(menu => 'Category Navigation')); 
        ?>
      </nav>

      <ul class="course_list">
			<?php
        // Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'programs',
          'posts_per_page' => '-1',
          'orderby' => 'menu_order',
          'order' => 'asc'
        );

        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post();
          
          $eventStart = get_field('official_start');
          $currTime = time() * 1000;

          if($currTime < $eventStart){


            ?>
        <li>
          <figure class="location">
            <?php if(get_field('banner_image') != ''){?>
            <img src="<?php the_field('banner_image'); ?>" alt="Space Photo" width="300" height="86" />
            <?php }else{ ?>
            <img src="<?php echo $tdir; ?>/assets/images/ymc_holder.png" />
            <?php } ?>
            <a href="<?php the_field('registration_link'); ?>" class="event_cta"><?php the_field('register_cta'); ?></a>
          </figure>
          <h3><?php the_title(); ?></h3>
          <span class="event details">
            <span class="event date"><?php the_field('start_date'); ?></span> <span class="event time"><?php the_field('event_time'); ?></span>
          </span>
          <?php the_excerpt(); ?>
          <?php if(get_field('more_details') != ''){?>
                      <a class="learnmore" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            Learn more
          </a>
          <?php } ?>

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
                  <img src="<?php the_field('head_shot'); ?>" alt="<?php the_title(); ?>" width="64" height="64" />
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
              <dt>Seats</dt>
              <dd><?php the_field('spaces_available'); ?></dd>
            </dl>
            <dl>
              <dt>Cost</dt>
              <dd><?php the_field('cost'); ?></dd>
            </dl>
            <!-- <dl>
              <dt>Days to Go</dt>
              <dd><?php the_field('cost'); ?></dd>
            </dl> -->
          </div>
          <section class="takeaways">
            <a href="<?php the_field('registration_link'); ?>" title="Registration Link">
            <h3>Key Takeaways</h3>
            <?php the_field('takeaways'); ?>
            <span><?php the_field('register_cta'); ?></span>
            </a>
          </section>
        </li>

        
      <?php
            } /* End time check */
          endwhile;
        endif;
      ?>
    </ul>
</section> <!-- // #upcoming -->
    <!-- in progress -->
    <section id="in_progress" class="courses">
    <h1>In Progress</h1>
    <nav class="filters">
        <?php 
          wp_nav_menu(array(menu => 'Category Navigation')); 
        ?>
      </nav>
      <ul class="course_list">
            <?php
        // Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'programs',
          'posts_per_page' => '-1',
          'orderby' => 'menu_order',
          'order' => 'asc'
        );

        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post();
          
          $eventStart = get_field('official_start');
          $currTime = time() * 1000;

          if($eventStart == ""){


            ?>
        <li>
          <figure class="location">
            <?php if(get_field('banner_image') != ''){?>
            <img src="<?php the_field('banner_image'); ?>" alt="Space Photo" width="300" height="86" />
            <?php }else{ ?>
            <img src="<?php echo $tdir; ?>/assets/images/ymc_holder.png" />
            <?php } ?>
            <a href="<?php the_field('registration_link'); ?>" class="event_cta"><?php the_field('register_cta'); ?></a>
          </figure>
          <h3><?php the_title(); ?></h3>
          <span class="event details">
            <span class="event date"><?php the_field('start_date'); ?></span> <span class="event time"><?php the_field('event_time'); ?></span>
          </span>
          <?php the_excerpt(); ?>
          <?php if(get_field('more_details') != ''){?>
                      <a class="learnmore" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            Learn more
          </a>
          <?php } ?>

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
                  <img src="<?php the_field('head_shot'); ?>" alt="<?php the_title(); ?>" width="64" height="64" />
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
              <dt>Seats</dt>
              <dd><?php the_field('spaces_available'); ?></dd>
            </dl>
            <dl>
              <dt>Cost</dt>
              <dd><?php the_field('cost'); ?></dd>
            </dl>
            <!-- <dl>
              <dt>Days to Go</dt>
              <dd><?php the_field('cost'); ?></dd>
            </dl> -->
          </div>
          <section class="takeaways">
            <a href="<?php the_field('registration_link'); ?>" title="Registration Link">
            <h3>Key Takeaways</h3>
            <?php the_field('takeaways'); ?>
            <span><?php the_field('register_cta'); ?></span>
            </a>
          </section>
        </li>

        
      <?php
            } /* End time check */
          endwhile;
        endif;
      ?>
    </ul>
</section> <!-- // #in_progress -->

<section id="past_events" class="courses">
    <h1>Past Events</h1>
    <nav class="filters">
        <?php 
          wp_nav_menu(array(menu => 'Category Navigation')); 
        ?>
      </nav>
      <ul class="course_list">
            <?php
        // Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'programs',
          'posts_per_page' => '-1',
          'orderby' => 'menu_order',
          'order' => 'asc'
        );

        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post();
          
          $eventStart = get_field('official_start');
          $currTime = time() * 1000;

          if(($currTime >= $eventStart) && ($eventStart != "")){


            ?>
        <li>
          <figure class="location">
            <?php if(get_field('banner_image') != ''){?>
            <img src="<?php the_field('banner_image'); ?>" alt="Space Photo" width="300" height="86" />
            <?php }else{ ?>
            <img src="<?php echo $tdir; ?>/assets/images/ymc_holder.png" />
            <?php } ?>
            <a href="<?php the_field('registration_link'); ?>" class="event_cta"><?php the_field('register_cta'); ?></a>
          </figure>
          <h3><?php the_title(); ?></h3>
          <span class="event details">
            <span class="event date"><?php the_field('start_date'); ?></span> <span class="event time"><?php the_field('event_time'); ?></span>
          </span>
          <?php the_excerpt(); ?>
          <?php if(get_field('more_details') != ''){?>
                      <a class="learnmore" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            Learn more
          </a>
          <?php } ?>

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
                  <img src="<?php the_field('head_shot'); ?>" alt="<?php the_title(); ?>" width="64" height="64" />
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
              <dt>Seats</dt>
              <dd><?php the_field('spaces_available'); ?></dd>
            </dl>
            <dl>
              <dt>Cost</dt>
              <dd><?php the_field('cost'); ?></dd>
            </dl>
            <!-- <dl>
              <dt>Days to Go</dt>
              <dd><?php the_field('cost'); ?></dd>
            </dl> -->
          </div>
          <section class="takeaways">
            <a href="<?php the_field('registration_link'); ?>" title="Registration Link">
            <h3>Key Takeaways</h3>
            <?php the_field('takeaways'); ?>
            <span><?php the_field('register_cta'); ?></span>
            </a>
          </section>
        </li>

        
      <?php
            } /* End time check */
          endwhile;
        endif;
      ?>
    </ul>

</section> <!-- // #past_events -->

    </section>

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