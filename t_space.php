<?php /* Template Name: Space */

get_header(); ?>
	<section id="main">
        <div class="inner">
            <h1>Co-working</h1>
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

            <div id="wufoo-x7x1x7">
            Fill out my <a href="http://markreale.wufoo.com/forms/x7x1x7">online form</a>.
            </div>
            <script type="text/javascript">var x7x1x7;(function(d, t) {
            var s = d.createElement(t), options = {
            'userName':'markreale', 
            'formHash':'x7x1x7', 
            'autoResize':true,
            'height':'1057',
            'async':true,
            'header':'show'};
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { x7x1x7 = new WufooForm();x7x1x7.initialize(options);x7x1x7.display(); } catch (e) {}};
            var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');</script>
            </article>
        </div><!-- .inner -->
    </section>


<?php get_footer(); ?>