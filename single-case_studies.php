<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<div class="row">
  <div class="column">

    <?php while ( have_posts() ) : the_post();

$services = get_field('services');
$client = get_field('client');
$link = get_field('site_link'); ?>

	<article class="case-study">
		<aside class=case-study-sidebar">
			<h2><?php the_title(); ?></h2>
			<h5><?php echo $services; ?></h5>
			<h6>Client: <?php echo $client; ?></h6>

				<?php the_content(); ?>
			<?php endwhile; ?>

				<p><strong><a href="<php echo $link; ?>">Site Link</a></strong></p>
			</aside>
  </div>

   <div class="column">
   
 <?php while ( have_posts() ) : the_post();

$image_1 = get_field('image_1');
$image_2 = get_field('image_2');
$image_3 = get_field('image_3'); ?>

			<div class="case-study-images">
			<?php if($image_1) { ?>
				<img src="<?php echo $image_1; ?>" />
			<?php } ?>
			<?php if($image_2) { ?>
				<img src="<?php echo $image_2; ?>" />
			<?php } ?>
			<?php if($image_3) { ?>
				<img src="<?php echo $image_3; ?>" />
			<?php } ?>
			</div>

		</article>
			<?php endwhile; // end of the loop. ?>   
  </div>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>