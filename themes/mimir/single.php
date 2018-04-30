<?php get_header(); ?>
<main role="main">
	<!-- section -->
	<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php 
if (has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
}
?>

		<!--Section: Post-->
		<section class="" style="
    overflow-x:  hidden;">

			<!--Grid row-->
			<div class="row ">

				<!--Featured Image-->
				<div class="card mb-4 mx-auto wow fadeInDown view" style=" z-index:1">



					<img src="<?php checkImageType('full', 'url');  ?>" class="img-fluid img-responsive z-depth-1" alt="Responsive image">


					<div class="mask flex-center rgba-stylish-strong wow fadeInDown">
						<h1 class="white-text font-weight-bold" style="font-size:4.5rem;"><?php the_title(); ?></h1>
					</div>
				</div>

				<!--/.Featured Image-->

				<!--Grid column-->
				<div class="col-md-8 mb-4 mx-auto" style=" z-index:2">




					<!--Card-->
					<div class="mb-4 wow fadeIn">



						<!--Card-->
						<div class="card mb-4 wow fadeIn">

							<!--Card content-->
							<div class="card-body">

								<p class="h1 my-4 text-center">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>
								</p>


								<!-- 			<blockquote class="blockquote">
					<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<footer class="blockquote-footer">Someone famous in
						<cite title="Source Title">Source Title</cite>
					</footer>
				</blockquote> -->

								<p class="h5 my-4 text-center">
									<span class="date">
										<?php the_time('F j, Y'); ?>
										<?php the_time('g:i a'); ?>
									</span>
									<span class="author">
										<?php _e( 'Published by', 'halcyon' ); ?>
										<?php the_author_posts_link(); ?>
									</span>

								</p>


								<div class="p-content mx-auto">
									<?php the_content(); // Dynamic Content ?>
								</div>


							</div>

						</div>
						<!--/.Card-->

						<!--Card-->
						<div class="card mb-4 wow fadeIn">

							<div class="card-header font-weight-bold">
								<span>About author</span>
								<span class="pull-right">
									<a href="">
										<i class="fa fa-facebook mr-2"></i>
									</a>
									<a href="">
										<i class="fa fa-twitter mr-2"></i>
									</a>
									<a href="">
										<i class="fa fa-instagram mr-2"></i>
									</a>
									<a href="">
										<i class="fa fa-linkedin mr-2"></i>
									</a>
								</span>
							</div>

							<!--Card content-->
							<div class="card-body">

								<?php  comments_template();  ?>

							</div>

						</div>
						<!--/.Card-->



					</div>
					<!--Grid column-->



				</div>
				<!--Grid row-->

		</section>
		<!--Section: Post-->






		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- Full Page Intro -->
			<div class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('<?php checkImageType('full', 'url');  ?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
				<!-- Mask & flexbox options-->
				<div class="mask rgba-white-light d-flex justify-content-center align-items-center">
					<!-- Content -->
					<div class="container">
						<!--Grid row-->
						<div class="row">
							<!--Grid column-->
							<div class="col-md-12 white-text text-center">
								<h1 class="display-3 mb-0 pt-md-5 pt-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">
									<!-- post title -->

									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_title(); ?>
									</a>

									<!-- /post title -->
								</h1>
								<!-- <h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 white-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Web developer & graphic designer</h5>
            <div class="wow fadeInDown" data-wow-delay="0.3s">
              <a class="btn btn-light-blue btn-lg">portfolio</a>
              <a class="btn btn-indigo btn-lg">About me</a>
            </div> -->
							</div>
							<!--Grid column-->
						</div>
						<!--Grid row-->
					</div>

					<!-- post details -->
					<span class="date">
						<?php the_time('F j, Y'); ?>
						<?php the_time('g:i a'); ?>
					</span>
					<span class="author">
						<?php _e( 'Published by', 'halcyon' ); ?>
						<?php the_author_posts_link(); ?>
					</span>
					<span class="comments">
						<?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'halcyon' ), __( '1 Comment', 'halcyon' ), __( '% Comments', 'halcyon' )); ?>
					</span>
					<!-- /post details -->

					<?php the_content(); // Dynamic Content ?>

					<?php the_tags( __( 'Tags: ', 'halcyon' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

					<p>
						<?php _e( 'Categorised in: ', 'halcyon' ); the_category(', '); // Separated by commas ?>
					</p>

					<p>
						<?php _e( 'This post was written by ', 'halcyon' ); the_author(); ?>
					</p>

					<?php /* edit_post_link(); */ // Always handy to have Edit Post Links available ?>




					<!-- Content -->
				</div>
				<!-- Mask & flexbox options-->
			</div>
			<!-- Full Page Intro -->








		</article>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<!-- article -->
		<article>

			<h1>
				<?php _e( 'Sorry, nothing to display.', 'halcyon' ); ?>
			</h1>

		</article>
		<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->


</main>

<script>
	new WOW().init();
</script>

<?php /* get_sidebar(); */ ?>

<?php get_footer(); ?>