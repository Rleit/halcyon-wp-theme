<?php get_header(); ?>

<div class="row full-width-row">
        <div class="col-md-12">
                <!-- section -->
                <div class="container-fluid">

                        <h1>
                                <?php _e('Latest Posts', 'halcyon'); ?>
                        </h1>

                        <?php get_template_part('loop'); ?>

                        <?php get_template_part('pagination'); ?>

                        <!--  <?php /* get_sidebar(); */ ?> -->


                </div>
        </div>

        <?php get_footer(); ?>
