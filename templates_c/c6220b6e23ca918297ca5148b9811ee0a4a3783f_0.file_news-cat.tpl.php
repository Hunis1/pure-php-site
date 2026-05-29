<?php
/* Smarty version 5.8.0, created on 2026-05-29 15:36:28
  from 'file:news-cat.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a19884c8d5fc7_36841766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6220b6e23ca918297ca5148b9811ee0a4a3783f' => 
    array (
      0 => 'news-cat.tpl',
      1 => 1780058161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6a19884c8d5fc7_36841766 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<main>
    <div class="container">
        <h1 class="page-title"><?php echo $_smarty_tpl->getValue('h1');?>
</h1>
        <?php if (!( !$_smarty_tpl->hasVariable('cat_desc') || empty($_smarty_tpl->getValue('cat_desc')))) {?>
            <div class="category-desc text-holder"><?php echo $_smarty_tpl->getValue('cat_desc');?>
</div>
        <?php }?>
        <div id="page-sort" class="page-sort">
            <div class="sort-title">Сортировка</div>
            <form method="POST">
                <select id="sort" name="sort" data-selected=<?php echo $_smarty_tpl->getValue('selected');?>
>
                    <option value="by-date">По дате</option>
                    <option value="by-views">По количеству просмотров</option>
                </select>
                <input class="form-btn btn" type="submit" value="Применить">
            </form>
        </div>
        <div class="news">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('news'), 'news');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('news')->value) {
$foreach0DoElse = false;
?>
                <div class="news-item">
                    <div class="news-item__name"><?php echo $_smarty_tpl->getValue('news')['name'];?>
</div>
                    <a href="single-news.php?id=<?php echo $_smarty_tpl->getValue('news')['post_id'];?>
" class="btn">Подробнее</a>
                </div>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        <?php if (!( !$_smarty_tpl->hasVariable('pagination') || empty($_smarty_tpl->getValue('pagination')))&$_smarty_tpl->getValue('pagination') > 1) {?>
            <div class="pagination">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('pagination'), 'pag', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('pag')->value) {
$foreach1DoElse = false;
?>
                    <a href="news-cat.php?id=<?php echo $_smarty_tpl->getValue('cat_id');?>
&page=<?php echo $_smarty_tpl->getVariable('key')->preIncDec('++');?>
" class="pagination-item" data-page="<?php echo $_smarty_tpl->getValue('key');?>
"><?php echo $_smarty_tpl->getValue('key');?>
</a>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>
    </div>
</main>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
