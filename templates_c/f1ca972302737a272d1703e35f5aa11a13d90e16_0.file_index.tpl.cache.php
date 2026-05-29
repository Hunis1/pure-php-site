<?php
/* Smarty version 5.8.0, created on 2026-05-28 14:51:38
  from 'file:C:/OSPanel/domains/pure-php.local/templates/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a182c4a4a3b55_55547479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1ca972302737a272d1703e35f5aa11a13d90e16' => 
    array (
      0 => 'C:/OSPanel/domains/pure-php.local/templates/index.tpl',
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
function content_6a182c4a4a3b55_55547479 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '4811105576a182c4a47e824_72932806';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<main id="primary"><?php $_smarty_tpl->renderSubTemplate('file:front-page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?></main>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
