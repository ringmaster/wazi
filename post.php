<article id="post-<?php echo $content->id; ?>" class="post">

	<header>
		<h1><a href="<?php echo $content->permalink; ?>"><?php echo $content->title_out; ?></a></h1>
		<details>
			<summary>
				Created on <time datetime="<?php echo $content->pubdate->format('Y-m-d H:i:s'); ?>" pubdate><?php echo $content->pubdate->format(Options::get('dateformat') . ' ' . Options::get('timeformat')); ?></time>
				by <?php echo $content->author->username; ?>.
			</summary>
			<label>Published on: <time datetime="<?php echo $content->pubdate->format('Y-m-d H:i:s'); ?>" pubdate><?php echo $content->pubdate->format(Options::get('dateformat') . ' ' . Options::get('timeformat')); ?></time></label>
			<label>Created by: <?php echo $content->author->username; ?></label>
		</details>
	</header>

	<section class="content">
		<?php echo $content->content_out; ?>
	</section>

	<?php if($request->display_entry): ?>
	<section class="comments">
		<h1 id="comments">Comments</h1>
		<?php foreach($content->comments->moderated->comments as $comment): ?>
			<?php echo $theme->content($comment); ?>
		<?php endforeach; ?>
		<?php $post->comment_form()->out();	?>
	</section>
	<?php endif; ?>

</article>