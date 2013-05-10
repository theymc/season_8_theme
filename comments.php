<div id="comments">

	<?php if(have_comments()) : ?>
	
		<h2>Comments</h2>
		
		<ol>
			<?php wp_list_comments('reverse_top_level=true'); ?>
		</ol>
		
	<?php else: ?>
	
		<h2>Sorry, no comments.</h2>
		
	<?php endif; ?>
	
	<?php comment_form(); ?>
</div>