<?php
/* Smarty version 3.1.39, created on 2024-03-01 15:23:21
  from 'app:frontendpagesindexSite.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65e18269f353e3_20853298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51cfb9321c891ada9323e7942962579e7e4324d1' => 
    array (
      0 => 'app:frontendpagesindexSite.tp',
      1 => 1664910527,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_65e18269f353e3_20853298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="page_index_site">

	<?php if ($_smarty_tpl->tpl_vars['about']->value) {?>
		<div class="about_site">
			<?php echo $_smarty_tpl->tpl_vars['about']->value;?>

		</div>
	<?php }?>

	<div class="presses">
		<h2>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"context.contexts"),$_smarty_tpl ) );?>

		</h2>
		<?php if (!count($_smarty_tpl->tpl_vars['presses']->value)) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.noPresses"),$_smarty_tpl ) );?>

		<?php } else { ?>
			<ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['presses']->value, 'press');
$_smarty_tpl->tpl_vars['press']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['press']->value) {
$_smarty_tpl->tpl_vars['press']->do_else = false;
?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "url", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('press'=>$_smarty_tpl->tpl_vars['press']->value->getPath()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php $_smarty_tpl->_assignInScope('thumb', $_smarty_tpl->tpl_vars['press']->value->getLocalizedData('pressThumbnail'));?>
					<?php $_smarty_tpl->_assignInScope('description', $_smarty_tpl->tpl_vars['press']->value->getLocalizedDescription());?>
					<li<?php if ($_smarty_tpl->tpl_vars['thumb']->value) {?> class="has_thumb"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['thumb']->value) {?>
							<div class="thumb">
								<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value ));?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['pressesFilesPath']->value;
echo $_smarty_tpl->tpl_vars['press']->value->getId();?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thumb']->value['uploadName'],"url" ));?>
"<?php if ($_smarty_tpl->tpl_vars['thumb']->value['altText']) {?> alt="<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['thumb']->value['altText'] )))===null||$tmp==='' ? '' : $tmp);?>
"<?php }?>>
								</a>
							</div>
						<?php }?>

						<div class="body">
							<h3>
								<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value ));?>
" rel="bookmark">
									<?php echo $_smarty_tpl->tpl_vars['press']->value->getLocalizedName();?>

								</a>
							</h3>
							<?php if ($_smarty_tpl->tpl_vars['description']->value) {?>
								<div class="description">
									<?php echo $_smarty_tpl->tpl_vars['description']->value;?>

								</div>
							<?php }?>
							<ul class="links">
								<li class="view">
									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value ));?>
">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.pressView"),$_smarty_tpl ) );?>

									</a>
								</li>
							</ul>
						</div>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		<?php }?>
	</div>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
