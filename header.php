<?php if (is_404()) { header("HTTP/1.1 404 Not Found"); } ?>
<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/themes/my/js/blog.js"></script>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>
</head>

<body>

<div id="page">

<div id="logo">
<div id="header">
    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
    <div id="banner-head">
        <a href="http://shop-pro.jp" target="_blank"><img src="http://www.affiliate-b.com/upload_image/669-1188202026-3.gif"  style='border:none;'  alt="ショッピングカート" /></a><img src="http://track.affiliate-b.com/imp/e669V/D57646q/E8527Z" width="1" height="1" style='border:none;' />
    </div>
    <hr class="clear" />
</div>
</div>
<?php //include (TEMPLATEPATH . '/searchform.php'); ?>
<div id="menu">
<ul>
<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
<li><a href="<?php bloginfo('rss_url'); ?>">RSS</a></li>
<li><a href="<?php bloginfo('url'); ?>/mailform">お問い合わせ</a></li>
<li><a href="<?php bloginfo('url'); ?>/sitemap">記事一覧</a></li>
</ul>
</div>


