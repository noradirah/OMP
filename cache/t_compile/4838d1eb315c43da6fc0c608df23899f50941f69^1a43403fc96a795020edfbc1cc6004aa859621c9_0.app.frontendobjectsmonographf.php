<?php
/* Smarty version 3.1.39, created on 2024-03-01 15:36:59
  from 'app:frontendobjectsmonographf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65e1859b5b5781_12738929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a43403fc96a795020edfbc1cc6004aa859621c9' => 
    array (
      0 => 'app:frontendobjectsmonographf',
      1 => 1664910527,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/downloadLink.tpl' => 3,
  ),
),false)) {
function content_65e1859b5b5781_12738929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\inetpub\\wwwroot\\omp\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<div class="obj_monograph_full">

		<?php if ($_smarty_tpl->tpl_vars['currentPublication']->value->getID() !== $_smarty_tpl->tpl_vars['publication']->value->getId()) {?>
		<div class="cmp_notification notice">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "latestVersionUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"catalog",'op'=>"book",'path'=>$_smarty_tpl->tpl_vars['monograph']->value->getBestId()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.outdatedVersion",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value),'urlRecentVersion'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionUrl']->value ))),$_smarty_tpl ) );?>

		</div>
	<?php }?>

	<h1 class="title">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedFullTitle() ));?>

	</h1>

	<div class="row">
		<div class="main_entry">

						<div class="item authors">
				<h2 class="pkp_screen_reader">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authors"),$_smarty_tpl ) );?>

				</h2>

				<?php $_smarty_tpl->_assignInScope('authors', $_smarty_tpl->tpl_vars['publication']->value->getData('authors'));?>

								<?php if ($_smarty_tpl->tpl_vars['monograph']->value->getWorkType() == (defined('WORK_TYPE_EDITED_VOLUME') ? constant('WORK_TYPE_EDITED_VOLUME') : null) && count($_smarty_tpl->tpl_vars['editors']->value)) {?>
					<?php $_smarty_tpl->_assignInScope('authors', $_smarty_tpl->tpl_vars['editors']->value);?>
					<?php $_smarty_tpl->_assignInScope('identifyAsEditors', true);?>
				<?php }?>

								<?php if (count($_smarty_tpl->tpl_vars['authors']->value) < 5) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
						<div class="sub_item">
							<div class="label">
								<?php if ($_smarty_tpl->tpl_vars['identifyAsEditors']->value) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.editorName",'editorName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ))),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

								<?php }?>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
								<div class="value">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>

								</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['author']->value->getOrcid()) {?>
								<span class="orcid">
									<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>
" target="_blank">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getOrcid() ));?>

									</a>
								</span>
							<?php }?>
						</div>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

								<?php } else { ?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authors']->value, 'author', false, NULL, 'authors', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['total'];
?>
												<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {
if ($_smarty_tpl->tpl_vars['identifyAsEditors']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);?><span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.editorName",'editorName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ))),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);?><span class="label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorAffiliation", null);?><span class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorWithAffiliation",'name'=>$_smarty_tpl->tpl_vars['authorName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value),$_smarty_tpl ) );
} else { ?><span class="label"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>
</span><?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_authors']->value['last'] : null)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorListSeparator"),$_smarty_tpl ) );
}?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</div>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() != 'doi') {?>
					<?php continue 1;?>
				<?php }?>
				<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['monograph']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
				<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
					<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentPress']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
					<div class="item doi">
						<span class="label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.readerDisplayName"),$_smarty_tpl ) );?>

						</span>
						<span class="value">
							<a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>

							</a>
						</span>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						<?php if (!empty($_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('keywords'))) {?>
			<div class="item keywords">
				<h2 class="label">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedKeywords', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.keywords"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['translatedKeywords']->value),$_smarty_tpl ) );?>

				</h2>
				<span class="value">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('keywords'), 'keyword', false, NULL, 'keywords', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['keyword']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyword']->value) {
$_smarty_tpl->tpl_vars['keyword']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['total'];
?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyword']->value ));
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_keywords']->value['last'] : null)) {?>, <?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</span>
			</div>
			<?php }?>

						<div class="item abstract">
				<h2 class="label">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.synopsis"),$_smarty_tpl ) );?>

				</h2>
				<div class="value">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('abstract') ));?>

				</div>
			</div>

						<?php if (count($_smarty_tpl->tpl_vars['chapters']->value)) {?>
				<div class="item chapters">
					<h2 class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.chapters"),$_smarty_tpl ) );?>

					</h2>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chapters']->value, 'chapter');
$_smarty_tpl->tpl_vars['chapter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chapter']->value) {
$_smarty_tpl->tpl_vars['chapter']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('chapterId', $_smarty_tpl->tpl_vars['chapter']->value->getId());?>
							<li>
								<div class="title">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chapter']->value->getLocalizedTitle() ));?>

									<?php if ($_smarty_tpl->tpl_vars['chapter']->value->getLocalizedSubtitle() != '') {?>
										<div class="subtitle">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chapter']->value->getLocalizedSubtitle() ));?>

										</div>
									<?php }?>
								</div>
								<?php $_smarty_tpl->_assignInScope('chapterAuthors', $_smarty_tpl->tpl_vars['chapter']->value->getAuthorNamesAsString());?>
								<?php if ($_smarty_tpl->tpl_vars['authorString']->value != $_smarty_tpl->tpl_vars['chapterAuthors']->value) {?>
									<div class="authors">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chapterAuthors']->value ));?>

									</div>
								<?php }?>

																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType() != 'doi') {?>
										<?php continue 1;?>
									<?php }?>
									<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['chapter']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
									<?php if ($_smarty_tpl->tpl_vars['pubId']->value) {?>
										<?php $_smarty_tpl->_assignInScope('doiUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getResolvingURL($_smarty_tpl->tpl_vars['currentPress']->value->getId(),$_smarty_tpl->tpl_vars['pubId']->value) )));?>
										<div class="doi"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.readerDisplayName"),$_smarty_tpl ) );?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['doiUrl']->value;?>
</a></div>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pluck_files'][0], array( array('assign'=>"chapterFiles",'files'=>$_smarty_tpl->tpl_vars['availableFiles']->value,'by'=>"chapter",'value'=>$_smarty_tpl->tpl_vars['chapterId']->value),$_smarty_tpl ) );?>

								<?php if (count($_smarty_tpl->tpl_vars['chapterFiles']->value)) {?>
									<div class="files">

																				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publicationFormats']->value, 'format');
$_smarty_tpl->tpl_vars['format']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->do_else = false;
?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pluck_files'][0], array( array('assign'=>"pubFormatFiles",'files'=>$_smarty_tpl->tpl_vars['chapterFiles']->value,'by'=>"publicationFormat",'value'=>$_smarty_tpl->tpl_vars['format']->value->getId()),$_smarty_tpl ) );?>


											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubFormatFiles']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>

																								<?php $_smarty_tpl->_assignInScope('useFileName', false);?>
												<?php if (count($_smarty_tpl->tpl_vars['pubFormatFiles']->value) > 1) {?>
													<?php $_smarty_tpl->_assignInScope('useFileName', true);?>
												<?php }?>

												<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/downloadLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('downloadFile'=>$_smarty_tpl->tpl_vars['file']->value,'monograph'=>$_smarty_tpl->tpl_vars['monograph']->value,'publicationFormat'=>$_smarty_tpl->tpl_vars['format']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'useFilename'=>$_smarty_tpl->tpl_vars['useFileName']->value), 0, true);
?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</div>
								<?php }?>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Catalog::Book::Main"),$_smarty_tpl ) );?>


						<?php $_smarty_tpl->_assignInScope('hasBiographies', 0);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getData('authors'), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
					<?php $_smarty_tpl->_assignInScope('hasBiographies', $_smarty_tpl->tpl_vars['hasBiographies']->value+1);?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value) {?>
				<div class="item author_bios">
					<h2 class="label">
						<?php if ($_smarty_tpl->tpl_vars['hasBiographies']->value > 1) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiographies"),$_smarty_tpl ) );?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorBiography"),$_smarty_tpl ) );?>

						<?php }?>
					</h2>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publication']->value->getData('authors'), 'author');
$_smarty_tpl->tpl_vars['author']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography()) {?>
							<div class="sub_item">
								<div class="label">
									<?php if ($_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation()) {?>
										<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorName", null);
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
										<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "authorAffiliation", null);?><span class="affiliation"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedAffiliation() ));?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.authorWithAffiliation",'name'=>$_smarty_tpl->tpl_vars['authorName']->value,'affiliation'=>$_smarty_tpl->tpl_vars['authorAffiliation']->value),$_smarty_tpl ) );?>

									<?php } else { ?>
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getFullName() ));?>

									<?php }?>
								</div>
								<div class="value">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['author']->value->getLocalizedBiography() ));?>

								</div>
							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['citations']->value || $_smarty_tpl->tpl_vars['publication']->value->getData('citationsRaw')) {?>
				<div class="item references">
					<h2 class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>

					</h2>
					<div class="value">
						<?php if ($_smarty_tpl->tpl_vars['citations']->value) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['citations']->value, 'citation');
$_smarty_tpl->tpl_vars['citation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['citation']->value) {
$_smarty_tpl->tpl_vars['citation']->do_else = false;
?>
								<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['citation']->value->getCitationWithLinks() ));?>
</p>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
							<?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('citationsRaw') )));?>

						<?php }?>
					</div>
				</div>
			<?php }?>

		</div><!-- .main_entry -->

		<div class="entry_details">

						<div class="item cover">
				<?php $_smarty_tpl->_assignInScope('coverImage', $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('coverImage'));?>
				<img
					src="<?php echo $_smarty_tpl->tpl_vars['publication']->value->getLocalizedCoverImageThumbnailUrl($_smarty_tpl->tpl_vars['monograph']->value->getData('contextId'));?>
"
					alt="<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImage']->value['altText'] )))===null||$tmp==='' ? '' : $tmp);?>
"
				>
			</div>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pluck_files'][0], array( array('assign'=>'nonChapterFiles','files'=>$_smarty_tpl->tpl_vars['availableFiles']->value,'by'=>"chapter",'value'=>0),$_smarty_tpl ) );?>

			<?php if (count($_smarty_tpl->tpl_vars['nonChapterFiles']->value) || count($_smarty_tpl->tpl_vars['remotePublicationFormats']->value)) {?>
				<div class="item files">
					<h2 class="pkp_screen_reader">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.downloads"),$_smarty_tpl ) );?>

					</h2>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publicationFormats']->value, 'format');
$_smarty_tpl->tpl_vars['format']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['format']->value) {
$_smarty_tpl->tpl_vars['format']->do_else = false;
?>
						<?php $_smarty_tpl->_assignInScope('publicationFormatId', $_smarty_tpl->tpl_vars['format']->value->getId());?>

												<?php if ($_smarty_tpl->tpl_vars['format']->value->getRemoteUrl()) {?>
														<div class="pub_format_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationFormatId']->value ));?>
 pub_format_remote">
								<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['format']->value->getRemoteURL() ));?>
" target="_blank" class="remote_resource">
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['format']->value->getLocalizedName() ));?>

								</a>
							</div>

												<?php } else { ?>

														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pluck_files'][0], array( array('assign'=>'pubFormatFiles','files'=>$_smarty_tpl->tpl_vars['nonChapterFiles']->value,'by'=>"publicationFormat",'value'=>$_smarty_tpl->tpl_vars['format']->value->getId()),$_smarty_tpl ) );?>


														<?php if (count($_smarty_tpl->tpl_vars['pubFormatFiles']->value) == 1) {?>
								<div class="pub_format_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationFormatId']->value ));?>
 pub_format_single">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubFormatFiles']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
										<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/downloadLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('downloadFile'=>$_smarty_tpl->tpl_vars['file']->value,'monograph'=>$_smarty_tpl->tpl_vars['monograph']->value,'publication'=>$_smarty_tpl->tpl_vars['publication']->value,'publicationFormat'=>$_smarty_tpl->tpl_vars['format']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value), 0, true);
?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>

														<?php } elseif (count($_smarty_tpl->tpl_vars['pubFormatFiles']->value) > 1) {?>
								<div class="pub_format_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationFormatId']->value ));?>
">
									<span class="label">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['format']->value->getLocalizedName() ));?>

									</span>
									<span class="value">
										<ul>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubFormatFiles']->value, 'file');
$_smarty_tpl->tpl_vars['file']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
$_smarty_tpl->tpl_vars['file']->do_else = false;
?>
												<li>
													<span class="name">
														<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value->getLocalizedData('name') ));?>

													</span>
													<span class="link">
														<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/downloadLink.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('downloadFile'=>$_smarty_tpl->tpl_vars['file']->value,'monograph'=>$_smarty_tpl->tpl_vars['monograph']->value,'publication'=>$_smarty_tpl->tpl_vars['publication']->value,'publicationFormat'=>$_smarty_tpl->tpl_vars['format']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'useFilename'=>true), 0, true);
?>
													</span>
												</li>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
									</span><!-- .value -->
								</div>
							<?php }?>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['publication']->value->getData('datePublished')) {?>
				<div class="item date_published">
					<div class="sub_item">
						<h2 class="label">
							<?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value) > smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['dateFormatShort']->value)) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.forthcoming"),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.published"),$_smarty_tpl ) );?>

							<?php }?>
						</h2>
						<div class="value">
														<?php if ($_smarty_tpl->tpl_vars['firstPublication']->value->getID() === $_smarty_tpl->tpl_vars['publication']->value->getId()) {?>
								<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['firstPublication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>
</span>
														<?php } else { ?>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.updatedOn",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['firstPublication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatLong']->value),'dateUpdated'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['publication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatLong']->value)),$_smarty_tpl ) );?>
</span>
							<?php }?>
						</div>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['monograph']->value->getPublishedPublications()) > 1) {?>
						<div class="sub_item versions">
							<h2 class="label">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.versions"),$_smarty_tpl ) );?>

							</h2>
							<ul class="value">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['monograph']->value->getPublishedPublications()), 'iPublication');
$_smarty_tpl->tpl_vars['iPublication']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['iPublication']->value) {
$_smarty_tpl->tpl_vars['iPublication']->do_else = false;
?>
									<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "name", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.versionIdentity",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['iPublication']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatShort']->value),'version'=>$_smarty_tpl->tpl_vars['iPublication']->value->getData('version')),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
									<li>
										<?php if ($_smarty_tpl->tpl_vars['iPublication']->value->getId() === $_smarty_tpl->tpl_vars['publication']->value->getId()) {?>
											<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

										<?php } elseif ($_smarty_tpl->tpl_vars['iPublication']->value->getId() === $_smarty_tpl->tpl_vars['currentPublication']->value->getId()) {?>
											<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"catalog",'op'=>"book",'path'=>$_smarty_tpl->tpl_vars['monograph']->value->getBestId()),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
										<?php } else { ?>
											<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"catalog",'op'=>"book",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['monograph']->value->getBestId(),"version",$_smarty_tpl->tpl_vars['iPublication']->value->getId() ))),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
										<?php }?>
									</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					<?php }?>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['series']->value) {?>
				<div class="item series">
					<div class="sub_item">
						<h2 class="label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"series.series"),$_smarty_tpl ) );?>

						</h2>
						<div class="value">
							<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"catalog",'op'=>"series",'path'=>$_smarty_tpl->tpl_vars['series']->value->getPath()),$_smarty_tpl ) );?>
">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['series']->value->getLocalizedFullTitle() ));?>

							</a>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['series']->value->getOnlineISSN()) {?>
						<div class="sub_item">
							<h3 class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.manage.series.onlineIssn"),$_smarty_tpl ) );?>
</h3>
							<div class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['series']->value->getOnlineISSN() ));?>
</div>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['series']->value->getPrintISSN()) {?>
						<div class="sub_item">
							<h3 class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.manage.series.printIssn"),$_smarty_tpl ) );?>
</h3>
							<div class="value"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['series']->value->getPrintISSN() ));?>
</div>
						</div>
					<?php }?>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
				<div class="item categories">
					<h2 class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"catalog.categories"),$_smarty_tpl ) );?>

					</h2>
					<div class="value">
						<ul>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
								<li>
									<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"category",'path'=>$_smarty_tpl->tpl_vars['category']->value->getPath()),$_smarty_tpl ) );?>
">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() ));?>

									</a>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['publication']->value->getData('copyrightYear') && $_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('copyrightHolder')) {?>
				<div class="item copyright">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.copyrightStatement",'copyrightYear'=>$_smarty_tpl->tpl_vars['publication']->value->getData('copyrightYear'),'copyrightHolder'=>$_smarty_tpl->tpl_vars['publication']->value->getLocalizedData('copyrightHolder')),$_smarty_tpl ) ) ));?>

				</div>
			<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['publication']->value->getData('licenseUrl')) {?>
				<div class="item license">
					<h2 class="label">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>

					</h2>
					<?php if ($_smarty_tpl->tpl_vars['ccLicenseBadge']->value) {?>
						<?php echo $_smarty_tpl->tpl_vars['ccLicenseBadge']->value;?>

					<?php } else { ?>
						<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publication']->value->getData('licenseUrl') ));?>
">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.license"),$_smarty_tpl ) );?>

						</a>
					<?php }?>
				</div>
			<?php }?>

						<?php if (count($_smarty_tpl->tpl_vars['publicationFormats']->value)) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publicationFormats']->value, 'publicationFormat');
$_smarty_tpl->tpl_vars['publicationFormat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['publicationFormat']->value) {
$_smarty_tpl->tpl_vars['publicationFormat']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['publicationFormat']->value->getIsApproved()) {?>

						<?php $_smarty_tpl->_assignInScope('identificationCodes', $_smarty_tpl->tpl_vars['publicationFormat']->value->getIdentificationCodes());?>
						<?php $_smarty_tpl->_assignInScope('identificationCodes', $_smarty_tpl->tpl_vars['identificationCodes']->value->toArray());?>
						<?php $_smarty_tpl->_assignInScope('publicationDates', $_smarty_tpl->tpl_vars['publicationFormat']->value->getPublicationDates());?>
						<?php $_smarty_tpl->_assignInScope('publicationDates', $_smarty_tpl->tpl_vars['publicationDates']->value->toArray());?>
						<?php $_smarty_tpl->_assignInScope('hasPubId', false);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('pubIdType', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType());?>
							<?php if ($_smarty_tpl->tpl_vars['publicationFormat']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdType']->value)) {?>
								<?php $_smarty_tpl->_assignInScope('hasPubId', true);?>
								<?php break 1;?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

												<?php if (!$_smarty_tpl->tpl_vars['identificationCodes']->value && !$_smarty_tpl->tpl_vars['publicationDates']->value && !$_smarty_tpl->tpl_vars['hasPubId']->value && !$_smarty_tpl->tpl_vars['publicationFormat']->value->getPhysicalFormat()) {?>
							<?php continue 1;?>
						<?php }?>

						<div class="item publication_format">

														<?php if (count($_smarty_tpl->tpl_vars['publicationFormats']->value) > 1) {?>
								<h2 class="pkp_screen_reader">
									<?php $_smarty_tpl->_assignInScope('publicationFormatName', $_smarty_tpl->tpl_vars['publicationFormat']->value->getLocalizedName());?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"monograph.publicationFormatDetails",'format'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationFormatName']->value ))),$_smarty_tpl ) );?>

								</h2>

								<div class="sub_item item_heading format">
									<div class="label">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationFormat']->value->getLocalizedName() ));?>

									</div>
								</div>
							<?php } else { ?>
								<h2 class="pkp_screen_reader">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"monograph.miscellaneousDetails"),$_smarty_tpl ) );?>

								</h2>
							<?php }?>


														<?php if ($_smarty_tpl->tpl_vars['identificationCodes']->value) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['identificationCodes']->value, 'identificationCode');
$_smarty_tpl->tpl_vars['identificationCode']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['identificationCode']->value) {
$_smarty_tpl->tpl_vars['identificationCode']->do_else = false;
?>
									<div class="sub_item identification_code">
										<h3 class="label">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identificationCode']->value->getNameForONIXCode() ));?>

										</h3>
										<div class="value">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identificationCode']->value->getValue() ));?>

										</div>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>

														<?php if ($_smarty_tpl->tpl_vars['publicationDates']->value) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publicationDates']->value, 'publicationDate');
$_smarty_tpl->tpl_vars['publicationDate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['publicationDate']->value) {
$_smarty_tpl->tpl_vars['publicationDate']->do_else = false;
?>
									<div class="sub_item date">
										<h3 class="label">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationDate']->value->getNameForONIXCode() ));?>

										</h3>
										<div class="value">
											<?php $_smarty_tpl->_assignInScope('dates', $_smarty_tpl->tpl_vars['publicationDate']->value->getReadableDates());?>
																						<?php if ($_smarty_tpl->tpl_vars['publicationDate']->value->isFreeText() || count($_smarty_tpl->tpl_vars['dates']->value) == 1) {?>
												<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dates']->value[0] ));?>

											<?php } else { ?>
																								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dates']->value[0] ));?>
&mdash;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['dates']->value[1] ));?>

											<?php }?>
											<?php if ($_smarty_tpl->tpl_vars['publicationDate']->value->isHijriCalendar()) {?>
												<div class="hijri">
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.dateHijri"),$_smarty_tpl ) );?>

												</div>
											<?php }?>
										</div>
									</div>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>

														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
$_smarty_tpl->tpl_vars['pubIdPlugin']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('pubIdType', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType());?>
								<?php $_smarty_tpl->_assignInScope('storedPubId', $_smarty_tpl->tpl_vars['publicationFormat']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdType']->value));?>
								<?php if ($_smarty_tpl->tpl_vars['storedPubId']->value != '') {?>
									<div class="sub_item pubid <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationFormat']->value->getId() ));?>
">
										<h2 class="label">
											<?php echo $_smarty_tpl->tpl_vars['pubIdType']->value;?>

										</h2>
										<div class="value">
											<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['storedPubId']->value ));?>

										</div>
									</div>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

														<?php if ($_smarty_tpl->tpl_vars['publicationFormat']->value->getPhysicalFormat()) {?>
								<div class="sub_item dimensions">
									<h2 class="label">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"monograph.publicationFormat.productDimensions"),$_smarty_tpl ) );?>

									</h2>
									<div class="value">
										<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicationFormat']->value->getDimensions() ));?>

									</div>
								</div>
							<?php }?>
						</div>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Catalog::Book::Details"),$_smarty_tpl ) );?>


		</div><!-- .details -->
	</div><!-- .row -->

</div><!-- .obj_monograph_full -->
<?php }
}
