<?php /* Template Name: About Us Template */ get_header(); ?>


<?php 
if (has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
}
?>

<main role="main" class="ab-us ">

    <section>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="container-fluid">
            <div class="row full-width-row">
                <div class="col-md-5" style="margin-top:7.5rem;">

                    <div class="  " id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

                        <?php the_content(); ?>

                    </div>

                </div>

                <div class="col-md-7 ab-us-feature z-depth-1 " style="background-image:url('<?php echo $large_image_url[0]; ?>'); ">

                    <!-- <img class="img-fluid img-responsive" src=""> </img> -->
                </div>
            </div>

        </div>









        <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

        <!-- article -->
        <article>

            <h2>
                <?php _e('Something went wrong...Huh...', 'halcyon'); ?>
            </h2>

        </article>
        <!-- /article -->

        <?php endif; ?>

        <!-- </div>
                </div> -->
    </section>
    <!-- /section -->



</main>





</div>




        <?php get_footer(); ?>
