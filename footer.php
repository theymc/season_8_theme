</section>
<?php $tdir = get_bloginfo('template_directory'); ?>
<footer class="site">
  <section class="support">
    <div class="support_inner">
    <h2>Sponsors</h2>
    <ul>
    	<?php wp_reset_query();
    	// Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'supporters',
          'posts_per_page' => '-1',
          'cat' => '4',
          'order' => 'asc'
        );
        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post()
        ?> 
         <li>
        <a href="<?php the_field('url'); ?>">
          <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>" />
        </a>
      </li>
		<?php
			endwhile;
		endif;
		?>
    </ul>
    <h2>Co-Working Family</h2>
    <ul>
      <?php wp_reset_query();
      // Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'supporters',
          'posts_per_page' => '-1',
          'cat' => '9',
          'order' => 'asc'
        );
        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post()
        ?> 
         <li>
        <a href="<?php the_field('url'); ?>" target="_blank">
          <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>" />
        </a>
      </li>
    <?php
      endwhile;
    endif;
    ?>
    </ul>
    <h2>Associations</h2>
    <ul>
      <?php wp_reset_query();
    	// Gather all of the parameters / filters to be used in your database query as an array of arguments
        $args = array(
          'post_type' => 'supporters',
          'posts_per_page' => '-1',
          'cat' => '5',
          'order' => 'asc'
        );
        // Run query_posts function with your array of arguments
        query_posts($args);

        // Conditionally display post content (based on whether or not your query returned any posts
        if(have_posts()):
          
          // While posts were returned, iterate through them all
          while(have_posts()):
          the_post()
        ?> 
         <li>
        <a href="<?php the_field('url'); ?>">
          <img src="<?php the_field('logo'); ?>" alt="<?php the_title(); ?>" />
        </a>
      </li>
		<?php
			endwhile;
		endif;
		?>
    </ul>
    </div> <!-- .support_inner -->
  </section>
  <div class="widgets twitter">
    <div class="twitter_inner">
      <h2><img src="<?php echo $tdir; ?>/assets/images/twitter_icon.png" alt="Twitter" />Latest Tweets</h2>
      <ul>
        <?php dynamic_sidebar('Footer'); ?>
      </ul>
    </div> <!-- .twitter_inner -->
  </div>

  <p>
    <span>&copy; 2013 The YMC</span> 
    <span>200-106 Front Street East, Toronto, Ontario, Canada  M5A 1E1</span>
  </p>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo $tdir; ?>/assets/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
<script src="<?php echo $tdir; ?>/assets/js/plugins.js"></script>
<script src="<?php echo $tdir; ?>/assets/js/main.js"></script>

</body>
</html>