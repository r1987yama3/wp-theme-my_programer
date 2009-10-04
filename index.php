<?php get_header(); ?>

<div class="narrowcolumn">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
			
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postinfo">Posted by <?php the_author() ?> <?php the_time('Y年 m月 d日') ?> 
				<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/comments.png" alt="-" /> 
<?php edit_post_link('Edit post', '', ''); ?></div>

				<div class="entry"><?php the_content('続きを読む'); ?></div>
			</div>
            <div class="ad_post">
            <?php include( "./wp-content/themes/my/ad_post.php" ); ?>
            </div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
