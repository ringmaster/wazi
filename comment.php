<article class="comment" id="comment-<?php echo $content->id; ?>" itemscope itemtype="http://schema.org/UserComments">
	<details class="comment-meta">
		<summary itemprop="description">Comment by <?php echo $content->name; ?> on <a href="<?php echo $content->post->permalink; ?>#comment-<?php echo $content->id; ?>" title="<?php _e('Link to this comment'); ?>"><time datetime="<?php echo $content->date->format('Y-m-d H:i:s'); ?>" pubdate><?php $content->date->out('M j, Y h:ia'); ?></time></a>.</summary>
		<div class="comment-avatar"><img src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo md5($content->email); ?>&size=50&default=<?php Site::out_url('theme', '/images/gravatar.png'); ?>"></div>
		<div class="comment-author" itemprop="creator"><?php echo $content->name; ?></div>
		<div class="comment-date"><time datetime="<?php echo $content->date->format('Y-m-d H:i:s'); ?>" pubdate itemprop="commentTime"><?php $content->date->out('M j, Y h:ia'); ?></time></div>
		<div class="comment-url"><a href="<?php echo $content->post->permalink; ?>#comment-<?php echo $content->id; ?>" title="<?php _e('Link to this comment'); ?>" itemprop="commentTime"><?php echo $content->post->permalink; ?>#comment-<?php echo $content->id; ?></a></div>
		<?php if ( $content->status != Comment::STATUS_APPROVED ) : ?>
		<div class="comment-moderated"><?php _e('In moderation'); ?></div>
		<?php endif; ?>
	</details>
	<div class="comment-content" itemprop="commentText"><?php echo $content->content_out; ?></div>
</article>