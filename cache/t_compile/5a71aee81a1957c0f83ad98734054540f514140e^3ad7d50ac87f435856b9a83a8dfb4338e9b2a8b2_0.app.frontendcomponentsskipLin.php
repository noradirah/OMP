<?php
/* Smarty version 3.1.39, created on 2024-03-01 16:01:54
  from 'app:frontendcomponentsskipLin' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65e18b72a3ec15_11657559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ad7d50ac87f435856b9a83a8dfb4338e9b2a8b2' => 
    array (
      0 => 'app:frontendcomponentsskipLin',
      1 => 1664910527,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e18b72a3ec15_11657559 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="cmp_skip_to_content" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.skip.description"),$_smarty_tpl ) );?>
">
	<a href="#pkp_content_main"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.skip.main"),$_smarty_tpl ) );?>
</a>
	<a href="#siteNav"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.skip.nav"),$_smarty_tpl ) );?>
</a>
	<?php if (!$_smarty_tpl->tpl_vars['requestedPage']->value || $_smarty_tpl->tpl_vars['requestedPage']->value === 'index') {?>
		<?php if (!empty($_smarty_tpl->tpl_vars['spotlights']->value)) {?>
			<a href="#homepageSpotlights"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.skip.spotlights"),$_smarty_tpl ) );?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['numAnnouncementsHomepage']->value && count($_smarty_tpl->tpl_vars['announcements']->value)) {?>
			<a href="#homepageAnnouncements"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.skip.announcements"),$_smarty_tpl ) );?>
</a>
		<?php }?>
	<?php }?>
	<a href="#pkp_content_footer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.skip.footer"),$_smarty_tpl ) );?>
</a>
</div>
<?php }
}
