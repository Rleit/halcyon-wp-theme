        <!--Comments-->
        

    
	<?php if (have_comments()) : ?>
	
        <div class="card card-comments mb-3 wow fadeIn">
            <div class="card-header font-weight-bold"><?php comments_number(); ?></div>
            <div class="card-body">

			<?php wp_list_comments('type=comment&callback=halcyoncomments'); // Custom callback in functions.php ?>
                

            </div>
		</div>
		
		<?php elseif (! comments_open() && ! is_page() && post_type_supports(get_post_type(), 'comments') ) : ?>

    <p><?php _e('Comments are closed here.', 'halcyon'); ?></p>

<?php endif; ?>

<?php comment_form(); ?>
        <!--/.Comments-->

        <!--Reply-->
        <div class="card mb-3 wow fadeIn">
            <div class="card-header font-weight-bold">Leave a reply</div>
            <div class="card-body">

                <!-- Default form reply -->
                <form>

                    <!-- Comment -->
                    <div class="form-group">
                        <label for="replyFormComment">Your comment</label>
                        <textarea class="form-control" id="replyFormComment" rows="5"></textarea>
                    </div>

                    <!-- Name -->
                    <label for="replyFormName">Your name</label>
                    <input type="email" id="replyFormName" class="form-control">

                    <br>

                    <!-- Email -->
                    <label for="replyFormEmail">Your e-mail</label>
                    <input type="email" id="replyFormEmail" class="form-control">


                    <div class="text-center mt-4">
                        <button class="btn btn-info btn-md" type="submit">Post</button>
                    </div>
                </form>
                <!-- Default form reply -->



            </div>
        </div>
        <!--/.Reply-->






</div>
