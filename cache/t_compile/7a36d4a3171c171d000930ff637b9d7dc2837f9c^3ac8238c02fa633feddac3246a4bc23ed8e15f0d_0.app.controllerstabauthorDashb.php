<?php
/* Smarty version 3.1.39, created on 2024-03-01 15:26:19
  from 'app:controllerstabauthorDashb' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65e1831b433164_44515204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ac8238c02fa633feddac3246a4bc23ed8e15f0d' => 
    array (
      0 => 'app:controllerstabauthorDashb',
      1 => 1664910527,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:authorDashboard/submissionEmails.tpl' => 1,
  ),
),false)) {
function content_65e1831b433164_44515204 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['submission']->value->getStageId() >= (defined('WORKFLOW_STAGE_ID_PRODUCTION') ? constant('WORKFLOW_STAGE_ID_PRODUCTION') : null)) {?>
	<?php $_smarty_tpl->_subTemplateRender("app:authorDashboard/submissionEmails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('submissionEmails'=>$_smarty_tpl->tpl_vars['productionEmails']->value), 0, false);
?>

	<!-- Display queries grid -->
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'queriesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.queries.QueriesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>(defined('WORKFLOW_STAGE_ID_PRODUCTION') ? constant('WORKFLOW_STAGE_ID_PRODUCTION') : null),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"queriesGrid",'url'=>$_smarty_tpl->tpl_vars['queriesGridUrl']->value),$_smarty_tpl ) );?>


	<!-- Display galleys grid -->
	<?php if ($_smarty_tpl->tpl_vars['canAccessProductionStage']->value) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'representationsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.catalogEntry.PublicationFormatGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>(defined('WORKFLOW_STAGE_ID_PRODUCTION') ? constant('WORKFLOW_STAGE_ID_PRODUCTION') : null),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>uniqid("formatsGridContainer"),'url'=>$_smarty_tpl->tpl_vars['representationsGridUrl']->value),$_smarty_tpl ) );?>

	<?php }
} else { ?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.stageNotInitiated"),$_smarty_tpl ) );?>

<?php }
}
}
