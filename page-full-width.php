<?php

/*
 * Template Name:Full width page
 */


get_header(); ?>

  <div class="container-fluid">
	<div class="row">
	  <div class="col-sm-12" style="padding:0 0px;">
	  			<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

the_content();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	  </div>



	</div>
  </div>



<?php get_footer();