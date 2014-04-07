<?php if (!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html>

<!-- Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Adapté à PluXml par Fab'Lab
http://www.le-fab-lab.com
Même licence d'utilisation. -->

<html lang="<?php $plxShow->defaultLang() ?>">
<head>
<meta charset="<?php $plxShow->charset('min'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<?php $plxShow->meta('author') ?>
<?php $plxShow->templateCss(); ?>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css" media="screen" />
<link rel="stylesheet" media="screen and (max-width: 640px)" href="<?php $plxShow->template(); ?>/smallscreen.css" type="text/css" />
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/print.css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />
<!--[if lt IE 9]>
<script src="<?php $plxShow->template(); ?>/js/html5ie.js"></script>
<script src="<?php $plxShow->template(); ?>/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="top">
<!-- Menu de navigation -->
	<div id="menu-wrapper">
		<nav role="navigation">
			<div id="menu">
				<ul>
					<?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
					<?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
				</ul>
			</div>
		</nav>
	</div>
	<!-- Entête avec nom site + slogan -->
	<div id="wrapper">
		<header role="banner">
		<div id="header-wrapper">
			<div id="header">
				<div id="logo">
					<h1>
					<?php $plxShow->mainTitle('link'); ?>
					</h1>
					<p>
					<?php $plxShow->subTitle(); ?>
					</p>
				</div>
			</div>
		</div>
		</header>
		<!-- Début du reste de la page (hors footer) -->
		<div id="page">
				<div id="page-bgtop">
					<div id="page-bgbtm">