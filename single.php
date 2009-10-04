<?php get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postinfo">Posted by <?php the_author() ?> <?php the_time('Y年 m月 d日') ?>. <?php the_category(', ') ?> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/icons/tag_orange.png" alt="-" /></div>

			<div class="entry">
                <div style="margin-right: 0px; margin-left: auto; width: 336px;">
                <script type="text/javascript"><!--
                google_ad_client = "pub-9924508648745616";
                /* 336x280, 作成済み 09/08/05 */
                google_ad_slot = "3366334648";
                google_ad_width = 336;
                google_ad_height = 280;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
                </div>

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                <h3>[PR]</h3>
                <div style="margin: 0px; padding: 0px; width: 300px;">
                <script type="text/javascript"><!--
                google_ad_client = "pub-9924508648745616";
                /* 336x280, 作成済み 09/08/05 */
                google_ad_slot = "3366334648";
                google_ad_width = 336;
                google_ad_height = 280;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
                </div>

                <h3>人気記事トップ１０</h3>
                <p><?php popular_posts(5); ?>

                <h3>トラックバック</h3>
                <p><?php trackback_url(true); ?></p>

	<?php comments_template(); ?>
			</div>
		</div>


	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
    <hr class="clear" />

<?php get_sidebar(); ?>

<?php get_footer(); ?>


