<div class="sidebar-content">
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
			<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div class="sidebar-module">
		<h4>Archives</h4>
			<ol class="list-unstyled">
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ol>
	</div>
	<div class="sidebar-module">
		<h4>Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Amazon</a></li>
			<li><a href="#">Email</a></li>
		</ol>
	</div>
	</div>
