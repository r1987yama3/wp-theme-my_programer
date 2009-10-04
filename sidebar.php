	<div id="sidebar">
    <div id="left_side">
		<ul>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

            <li><h2>最近の投稿</h2>
                <ul>
                <?php wp_get_archives('type=postbypost&limit=10'); ?>
                </ul>
            </li>

			<li><h2>月間アーカイブ</h2>
				<ul>
				<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
				</ul>
			</li>

<?php if(is_home()): ?>
           <li><h2>人気の記事</h2>
            <?php popular_posts();?>
            </li>
<?php endif; ?>

            <li><h2>カテゴリー</h2>
            <ul>
            <?php wp_list_categories("show_count=1&title_li="); ?>
            </ul>
            </li>

            <li><h2>タグクラウド</h2>
            <?php wp_tag_cloud('smallest=8&largest=22'); ?>
            </li>

			<?php /* If this is the frontpage */ if ( is_home() || is_page() ) { ?>
				<?php get_links_list(); ?>

				<li><h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>
<?php endif; ?>
		</ul>
        </div>
        <div id="right_side">
            <ul>
                <li><h2>[PR]</h2>
                <script type="text/javascript"><!--
                google_ad_client = "pub-9924508648745616";
                /* 160x600, 作成済み 09/08/03 */
                google_ad_slot = "6052918075";
                google_ad_width = 160;
                google_ad_height = 600;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script></li>

                <li><!-- Amazon オススメ商品リンク -->
                <SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.co.jp/widgets/q?ServiceVersion=20070822&MarketPlace=JP&ID=V20070822/JP/1987yama3-22/8001/a3e9f26b-ded1-4586-8c90-1f892f761347"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.co.jp/widgets/q?ServiceVersion=20070822&MarketPlace=JP&ID=V20070822%2FJP%2F1987yama3-22%2F8001%2Fa3e9f26b-ded1-4586-8c90-1f892f761347&Operation=NoScript">Amazon.co.jp ウィジェット</A></NOSCRIPT>
                </li>


<?php if(is_home()): ?>
                <li>
                <script type="text/javascript"><!--
                google_ad_client = "pub-9924508648745616";
                /* 160x600, 作成済み 09/08/18 */
                google_ad_slot = "2631011465";
                google_ad_width = 160;
                google_ad_height = 600;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
                </li>
<?php endif; ?>
            </ul>
        </div>
        <hr class="clear" />
	</div>
