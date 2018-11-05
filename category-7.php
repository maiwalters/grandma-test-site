
<div class="page">
	<div class="content">
	<div class="head">

<?php get_header(); ?>
<div class="banner">
<p><span>II Timothy 3:16 says, “All Scripture is God-breathed and is useful for teaching, rebuking, correcting and training…”</span></p>
</div>

<div class="home-text-inner">
<p>The foundation for the Grandma’s Child is to monthly promote Christian characteristics in the lives of our grandchildren. I have selected 12 to 15 positive Christian characteristics from Scripture and using the New American Standard Bible, the Open Bible Edition’s Study Notes, have written a short study on what the Bible says about each characteristic. This ministry is meant to help grandparents and teachers understand what to teach their loved ones regarding Godly lives.
</p>
</div>
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
			<img src="http://localhost/wp/wp-content/uploads/2017/11/friends-e1512051377314.png">
			</div>
			
		
			<?php get_sidebar(); ?>
		</div> 
			</div>
			
		</div>
