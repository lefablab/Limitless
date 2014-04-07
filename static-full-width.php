<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
	<div id="content1col">
		<div class="post">
			<article role="article">
				<header>
					<h1 class="title">
						<?php $plxShow->staticTitle(); ?>
					</h1>
				</header>
				<section>
					<?php $plxShow->staticContent(); ?>
				</section>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
</section>
</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>