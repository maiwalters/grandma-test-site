<?php get_header(); ?>
<div class="page">
	<div class="content">
	

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
			</div> 
			<div class="my-sidebar">
				<div class="the-logo">
			<?php
			the_custom_logo()	
			?>
			</div>
			
		
			<?php get_sidebar(); ?>
		</div>
		</div>

<?php get_footer(); ?>