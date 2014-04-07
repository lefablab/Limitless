<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
	<div id="content">
		<div class="post">
			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">
				<header>
					<h1 class="title">
						<?php $plxShow->artTitle(''); ?>
					</h1>
					<p class="meta">
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				<!--le chapeau de l'article-->
				<div class="entry">
					<div class="chapo">
						<?php $plxShow->artChapo(false,false); ?>
					</div>
				</div>
				</header>
				<section>
					<?php $plxShow->artContent(false); ?>
				</section>
				<footer>
					<p class="classement">
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>
			</article>
			<p>
				<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
			</p>
			<?php include(dirname(__FILE__).'/commentaires.php'); ?>
		</div>
		<div style="clear: both;">&nbsp;</div>
		</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
</section>
</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>