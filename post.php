<article id="post-<?php echo $content->id; ?>" class="post" itemscope itemtype="http://schema.org/BlogPosting">

	<header>
		<h1 itemprop="name"><a href="<?php echo $content->permalink; ?>" itemprop="url"><?php echo $content->title_out; ?></a></h1>
		<div class="metadata">
			<p class="pubdata">
				<?php
				_e('Created on %1$s by %2$s.', array(
					'<time datetime="' . $content->pubdate->format('Y-m-d\TH:i:s\Z') . '" pubdate itemprop="datePublished">' . $content->pubdate->format(Options::get('dateformat') . ' ' . Options::get('timeformat')) . '</time>',
					'<span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name">' . $content->author->username . '</span></span>',
				));
				?>
			</p>
			<p itemprop="keywords" class="tags">
				<?php _e('Categorised under: %1$s', array(Format::tag_and_list($content->tags, ', ', ', and '))); ?>
			</p>
		</div>
	</header>

	<section class="content" itemprop="articleBody">
		<?php echo $content->content_out; ?>
	</section>

	<?php if($request->display_entry): ?>
	<section class="comments" itemprop="comment">
		<h1 id="comments">Comments</h1>
		<?php foreach($content->comments->moderated->comments as $comment): ?>
			<?php echo $theme->content($comment); ?>
		<?php endforeach; ?>
		<?php $post->comment_form()->out(); ?>
	</section>
	<?php endif; ?>

</article>
