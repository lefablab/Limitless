<?php
include(dirname(__FILE__).'/header.php');
?>

<section>
	<div id="content">
		<div class="post">
			<article role="article">
				<header>
					<h1 class="title">
						<?php $plxShow->lang('ERROR'); ?>
					</h1>
				</header>
				<section>
					<p>
						<?php $plxShow->erreurMessage(); ?>
					</p>
				</section>
			</article>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<?php include(dirname(__FILE__).'/sidebar.php'); ?>
</section>

</div>
<?php include(dirname(__FILE__).'/footer.php'); ?>