<?php
/* Smarty version 5.8.0, created on 2026-05-29 16:21:45
  from 'file:front-page.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1992e9a39e03_60760610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd458aa529719eb434d6728a4b2b31fa915188a90' => 
    array (
      0 => 'front-page.tpl',
      1 => 1780060904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a1992e9a39e03_60760610 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '8325906586a1992e9a07df2_52475898';
?>
<div class="primary">
    <div class="container">
        <h1 class="page-title">Заголовок страницы</h1>
        <?php if (!( !$_smarty_tpl->hasVariable('cats_array') || empty($_smarty_tpl->getValue('cats_array')))) {?>
            <div class="block-container">
                <h2 class="main-title">Категории статей</h2>
                <div class="cats">
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cats_array'), 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
                        <div class="category-item">
                            <div class="category-item__name"><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</div>
                            <?php if (!( !true || empty($_smarty_tpl->getValue('cat')['posts']))) {?>
                                <div class="category-posts">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cat')['posts'], 'post');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('post')->value) {
$foreach1DoElse = false;
?>
                                        <a href="single-news.php?id=<?php echo $_smarty_tpl->getValue('post')['post_id'];?>
" class="post-item"><?php echo $_smarty_tpl->getValue('post')['name'];?>
</a>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>
                            <a href="news-cat.php?id=<?php echo $_smarty_tpl->getValue('cat')['id'];?>
" class="btn">Все статьи</a>
                        </div>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
                <a href="/archive-news.php" class="btn">Все категории статей</a>
            </div>
        <?php }?>
    </div>
</div><?php }
}
