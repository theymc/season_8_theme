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
            <aside>
            <figure>
              <?php 
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                the_post_thumbnail();
              } 
              ?>
            </figure>
            <dl>
              <dt>On the Web</dt>
              <?php if(get_field('website') != ''){?>
              <dd>
                Website: <a href="<?php the_field('website'); ?>">
                  <?php the_field('website'); ?>
                </a>
              </dd>
              <?php } ?>
              <?php if(get_field('linkedin') != ''){?>
              <dd>
                LinkedIn: <a href="<?php the_field('linkedin'); ?>">
                  <?php the_field('linkedin'); ?>
                </a>
              </dd>
              <?php } ?>
              <?php if(get_field('twitter') != ''){?>
              <dd>
                Twitter: <a href="http://twitter.com/<?php the_field('twitter'); ?>" title="Twitter Link" rel="external">
                  @<?php the_field('twitter'); ?>
                </a>
              </dd>
              <?php } ?>
              <?php if(get_field('facebook') != ''){?>
              <dd>
                Facebook: <a href="http://facebook.com/<?php the_field('facebook'); ?>">
                  http://facebook.com/<?php the_field('facebook'); ?>
                </a>
              </dd>
              <?php } ?>
              <?php if(get_field('googleplus') != ''){?>
              <dd>
                G+: <a href="<?php the_field('googleplus'); ?>">
                  <?php the_field('googleplus'); ?>
                </a>
              </dd>
              <?php } ?>
            </dl>
            </aside>
            <section class="main_bio">
                <h1><?php the_title(); ?></h1>
                <h2>
                  <?php the_field('tagline'); ?>
                </h2>
                <h3>Specialties: <?php the_field('specialties'); ?></h3>
                <?php the_content(); ?>

            </section>

            

				</article>

 
			<?php
					endwhile;
				endif;
			?>
    </ul>
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