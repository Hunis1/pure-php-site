<?php
/* Smarty version 5.8.0, created on 2026-05-28 14:50:39
  from 'file:C:/OSPanel/domains/pure-php.local/templates/archive-news.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a182c0f84ff35_74342336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e96257cde0a64069ea163db19e361c9b4016b3b2' => 
    array (
      0 => 'C:/OSPanel/domains/pure-php.local/templates/archive-news.tpl',
      1 => 1779875218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6a182c0f84ff35_74342336 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<main>
    <div class="container">
    <h1 class="page-title">Статьи</h1>
        <div class="cats">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('news_cats_array'), 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
                <div class="category-item">
                    <div class="category-item__name"><?php echo $_smarty_tpl->getValue('cat')->name;?>
</div>
                    <a href="news-cat.php?id=<?php echo $_smarty_tpl->getValue('cat')->id;?>
" class="btn">Все статьи</a>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</main>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
