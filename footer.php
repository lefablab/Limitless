<?php if (!defined('PLX_ROOT')) exit; ?>

<!--on ferme ce qui a été ouvert plus haut -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>

<footer role="contentinfo">
<div id="footer">
		<p>
			<?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?>
		</p>
		<p id="menu-footer">
			<?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>">PluXml</a>
		        <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> | <a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a><br />
			Design by <a href="http://www.freecsstemplates.org/" rel="nofollow" target="_blank" title="Auteur du design initial de ce site adapté à PluXml">FreeCSSTemplates.org</a> | <a href="<?php echo $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a>
			<?php $plxShow->httpEncoding() ?>
		</p>
</div>
</footer>
<!-- end #footer -->
</body>
</html>