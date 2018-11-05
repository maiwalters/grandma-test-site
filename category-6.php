
<div class="page">
	<div class="content">
	<div class="head">

<?php get_header(); ?>
</div>

<div class="blog-text">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( 'content', get_post_format() );
  
				endwhile; endif; 
			?>
			</div> 
			<div class="my-sidebar">
				<div class="the-logo">
			<img src="http://localhost/wp/wp-content/uploads/2017/11/cropped-reader-2.png">
			</div>
			
		
			<?php get_sidebar(); ?>
		</div>
			</div>
			
		</div>
