<?php
if (post_password_required()) {
    return;
}
?>

<!-- Comment List Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">
            <?php echo get_comments_number(); ?> Comments
        </h4>
    </div>
    <div class="bg-white border border-top-0 p-4">
        <?php
        wp_list_comments(array(
            'style'      => 'div',
            'short_ping' => true,
            'callback'   => 'custom_comment_list'
        ));
        ?>
    </div>
</div>
<!-- Comment List End -->

<!-- Comment Form Start -->
<div class="mb-3">
    <div class="section-title mb-0">
        <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
    </div>
    <div class="bg-white border border-top-0 p-4">
        <?php
        comment_form(array(
            'fields' => array(
                'author' => '<div class="form-row"><div class="col-sm-6"><div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name" name="author" required>
                            </div></div>',
                'email'  => '<div class="col-sm-6"><div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div></div></div>',
                'url'    => '<div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website" name="url">
                            </div>',
            ),
            'comment_field' => '<div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea id="message" name="comment" cols="30" rows="5" class="form-control" required></textarea>
                                </div>',
            'submit_button' => '<div class="form-group mb-0">
                                    <input type="submit" value="Leave a comment" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                </div>',
        ));
        ?>
    </div>
</div>
<!-- Comment Form End -->

<?php
function custom_comment_list($comment, $args, $depth) {
    ?>
    <div class="media mb-4">
        <img src="<?php echo get_avatar_url($comment, array('size' => 45)); ?>" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
        <div class="media-body">
            <h6>
                <a class="text-secondary font-weight-bold" href=""><?php comment_author(); ?></a>
                <small><i><?php comment_date(); ?></i></small>
            </h6>
            <p><?php comment_text(); ?></p>
            <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => 'Reply', 'class' => 'btn btn-sm btn-outline-secondary'))); ?>
        </div>
    </div>
    <?php
}
?>