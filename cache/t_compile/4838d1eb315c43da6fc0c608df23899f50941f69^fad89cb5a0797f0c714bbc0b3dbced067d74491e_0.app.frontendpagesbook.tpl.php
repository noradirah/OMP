<?php
/* Smarty version 3.1.39, created on 2024-03-01 15:36:59
  from 'app:frontendpagesbook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65e1859b1ec420_44850921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad89cb5a0797f0c714bbc0b3dbced067d74491e' => 
    array (
      0 => 'app:frontendpagesbook.tpl',
      1 => 1664910527,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/objects/monograph_full.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_65e1859b1ec420_44850921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>$_smarty_tpl->tpl_vars['publishedSubmission']->value->getLocalizedFullTitle()), 0, false);
?>

<div class="page page_book">
		<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/monograph_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('monograph'=>$_smarty_tpl->tpl_vars['publishedSubmission']->value), 0, false);
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Catalog::Book::Footer::PageFooter"),$_smarty_tpl ) );?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
