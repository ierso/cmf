<?php
/**
 * The template for displaying front page.
 *
 * This is the template that displays front page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package casemason
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container_12">

				<div class="grid_12">
					<div class="wrapper">
					  <div class="carousel">
					    <div class="inner">
					      <div class="slide active">
					        <h4>1</h4>
					      </div>
					      <div class="slide">
					        <h4>2</h4>
					      </div>
					      <div class="slide">
					      	<h4>3</h4>
					      </div>
					    </div>
					    <div class="arrow arrow-left"></div>
					    <div class="arrow arrow-right"></div>
					  </div>
					</div>
				</div>

			</div>
			
			<div class="container_12">
				<div class="grid_12">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
					
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
