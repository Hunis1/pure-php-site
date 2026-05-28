<?php
/* Smarty version 5.8.0, created on 2026-05-27 12:21:22
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a16b792538733_88225822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed81eb851fc6c6eb51ed5b65291d9bb0a8b62bd' => 
    array (
      0 => 'index.tpl',
      1 => 1779873675,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:front-page.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6a16b792538733_88225822 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '15386487606a16b792522656_63374454';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<main id="primary"><?php $_smarty_tpl->renderSubTemplate('file:front-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></main>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
