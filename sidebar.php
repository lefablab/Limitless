<?php if(!defined('PLX_ROOT')) exit; ?>

<div id="sidebar">
	<aside role="complementary">
		<ul>
			<li>
				<h2>
					<?php $plxShow->lang('CATEGORIES'); ?>
				</h2>
				<ul>
				<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
				</ul>
			</li>
			<li>
				<h2>
					<?php $plxShow->lang('LATEST_ARTICLES'); ?>
				</h2>
			</li>
			<li>
				<ul>
					<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
				</ul>
			</li>
			<li>
				<h2>
					<?php $plxShow->lang('LATEST_COMMENTS'); ?>
				</h2>
				<ul>
					<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
				</ul>
			</li>
			<li>
				<h2>
					<?php $plxShow->lang('ARCHIVES'); ?>
				</h2>
				<ul>
					<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
				</ul>
			</li>
			<li>
				<div class="rss"><a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
					<?php $plxShow->lang('ARTICLES'); ?></a>
				</div>
				<div class="rss"><a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
					<?php $plxShow->lang('COMMENTS'); ?></a>
				</div>
			</li>
			<!--Utile pour démo mais nécessite plugin MySkinSelect <li>
				<h2>Changer de thème.</h2>
				<?php eval($plxShow->callHook('MySkinSelect')) ?>
			</li>-->
		</ul>
	</aside>
</div>