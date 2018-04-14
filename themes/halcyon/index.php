<?php get_header(); ?>

        <div class="col-xs-12 col-md-6 col-lg-10">
                <!-- section -->
                <div class="container-fluid">

                    <h1><?php _e('Latest Posts', 'html5blank'); ?></h1>

        <?php get_template_part('loop'); ?>

        <?php get_template_part('pagination'); ?>

        <?php /* get_sidebar(); */ ?>

                </div>
                <!-- /section -->

        </div>
    </div>

</div>


<?php get_footer(); ?>



