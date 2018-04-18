<?php /* Template Name: Home Template */ get_header(); ?>


<?php 
    if ( has_post_thumbnail() ) {
        $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    }
?>

<main role="main" class="hbg" style="background-image: url('<?php echo $large_image_url[0]; ?>');">

	<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- <div class="row">
	<div class="col-lg-10 mx-auto"> -->
		<!-- article -->
		
		<div class="d-flex align-content-stretch flex-wrap" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>


		</div>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<!-- article -->
		<article>

			<h2>
				<?php _e( 'Something went wrong...Huh...', 'halcyon' ); ?>
			</h2>

		</article>
		<!-- /article -->

		<?php endif; ?>

		<!-- </div>
				</div> -->
	</section>
	<!-- /section -->

	<!-- footer -->
	<div class="text-center fixed-bottom">

		<!-- copyright -->
		<p>
			&copy;
			<?php echo date('Y'); ?> Copyright
			<?php bloginfo('name'); ?>.
			</br>
			<?php _e('Powered by', 'halcyon'); ?>
			<a href="//wordpress.org" title="WordPress">WordPress</a>
			<!-- <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>. -->
		</p>
		<!-- /copyright -->

	</div>
	<!-- /footer -->

</main>



</div>



</body>

</html>
