<!--Comments-->



<?php if (have_comments()) : ?>

<div class="card card-comments mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">
        <?php comments_number(); ?>
    </div>
    <div class="card-body">

        <?php wp_list_comments('type=comment&callback=halcyoncomments'); // Custom callback in functions.php ?>


    </div>
</div>

<?php elseif (! comments_open() && ! is_page() && post_type_supports(get_post_type(), 'comments') ) : ?>

<p>
    <?php _e('Comments are closed here.', 'halcyon'); ?>
</p>

<?php endif; ?>

<?php 
$comments_args = array(
    // change the title of send button 
    'label_submit'=>'Send',
    // remove "Text or HTML to be displayed after the set of comment fields"
    'comment_notes_after' => '',
    'class_submit' => 'btn btn-outline-success btn-md',
    // redefine your own textarea (the comment body)
    'comment_field' => '
    
                    <div class="form-group">
                        <label for="comment">' . _x('Comment', 'noun') . '</label>
                        <textarea class="form-control" id="comment" name="comment" aria-required="true" rows="5"></textarea>
                    </div>',
);
?>
<!--Reply-->
<div class="card mb-3 wow fadeIn">
    <div class="card-header font-weight-bold">Leave a reply</div>
    <div class="card-body">
        <?php comment_form($comments_args); ?>
        <!--/.Comments-->
    </div>
</div>
<!--/.Reply-->






</div>
