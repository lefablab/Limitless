<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
	<div id="content">
		<!-- on liste les derniers articles publiés -->
		<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
		<div class="post">
			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">
				<header>
					<h2 class="title">
						<?php $plxShow->artTitle('link'); ?>
					</h2>
					<p class="meta">
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> -
						<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				</header>
				<div class="entry">
					<section>
			  		<?php $plxShow->artChapo(); ?>
					</section>
				</div>
				<footer>
					<p class="classement">
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>
			</article>
		</div>
		<?php endwhile; ?>

		<div class="rss">
			<?php $plxShow->artFeed('rss',$plxShow->catId()); ?>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
</section>
</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>