<?php
/* Smarty version 5.8.0, created on 2026-05-29 16:30:14
  from 'file:archive-news.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a1994e6afb891_08729372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7a83ba1789ac07891fc82ed9abddd3e5634de10' => 
    array (
      0 => 'archive-news.tpl',
      1 => 1780061402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6a1994e6afb891_08729372 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->getCompiled()->nocache_hash = '14995064266a1994e6ae5052_09799735';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
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
                    <div class="category-item__name"><?php echo $_smarty_tpl->getValue('cat')['name'];?>
</div>
                    <?php if (!( !true || empty($_smarty_tpl->getValue('cat')['posts']))) {?>
                    rtyu
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
    </div>
</main>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
