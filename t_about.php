<?php /* Template Name: About */
$tdir = get_bloginfo('template_directory');

get_header(); ?>
	<section id="main">
      <div class="inner">
        <h1>About</h1>
        <article>
        
        <?php
         // Conditionally display post content (based on whether or not your query returned any posts
          if(have_posts()):
            
            // While posts were returned, iterate through them all
            while(have_posts()):
            the_post();
            ?>
  				  <?php the_content(); ?>

  			<?php
  					endwhile;
  				endif;
  			?>
      </article>
    </div> <!-- Inner -->
  </section>

  <section id="location">
      <!-- <div class="inner">
        <h2>Location</h2>
        <dl>
          <dt>The YMC</dt>
          <dd>106 Front St. E. #200</dd>
          <dd>Toronto, ON  M5A 1E1</dd>
        </dl>
      </div> --> <!-- .inner -->
      <iframe width="100%" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=106+Front+St+E+%23200,+Toronto,+ON,+Canada&amp;aq=0&amp;oq=106+fron&amp;sll=40.697488,-73.979681&amp;sspn=0.730908,1.333466&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=106+Front+St+E+%23200,+Toronto,+Ontario+M5A+1E1,+Canada&amp;ll=43.649802,-79.37047&amp;spn=0.009316,0.02738&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
    </section>

    <div class="inner">
      <section id="team">
          <h2>Team</h2>
          <ul>
            <?php
            wp_reset_query();
            // Gather all of the parameters / filters to be used in your database query as an array of arguments
            $args = array(
              'post_type' => 'team',
              'posts_per_page' => '-1',
              'orderby' => 'menu_order',
              'order' => 'asc',
              'cat' => '6'
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
              <figure>
                <?php if(get_field('staff_head')){?>
                <img src="<?php the_field('staff_head'); ?>" alt="Space Photo" width="108" height="108" />
                <?php }else{ ?>
                <img src="<?php echo $tdir; ?>/assets/images/ymc_holder.png" width="108" height="108" />
                <?php } ?>
                <dl>
                  <dt><?php the_title(); ?></dt>
                  <dd><?php the_field('ymc_title'); ?></dd>
                </dl>
              </figure>
            </li>
            <?php
              endwhile;
            endif;
            ?>
          </ul>
      </section>

      <section id="social_media">
        <h2>Follow us on our favorite social media networks</h2>
        <ul>
          <li>
            <a href="http://facebook.com/theymc" target="_blank">
              <img src="<?php echo $tdir; ?>/assets/images/fb_button.png" alt="facebook" /> Like us on Facebook
            </a>
          </li>
          <li>
            <a href="http://twitter.com/theymc" target="_blank">
              <img src="<?php echo $tdir; ?>/assets/images/twitter_button.png" alt="facebook" /> Follow us on Twitter
            </a>
          </li>

        </ul>
      </section>

    </div> <!-- .inner -->

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