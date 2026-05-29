<?php
/* Smarty version 5.8.0, created on 2026-05-29 14:29:17
  from 'file:single-news.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a19788d574460_04699797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6a1757a085a8647f52e163835abf793a110cf44' => 
    array (
      0 => 'single-news.tpl',
      1 => 1780054156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_6a19788d574460_04699797 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\pure-php.local\\templates';
$_smarty_tpl->renderSubTemplate('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<main>
    <div class="container">
        <h1 class="page-title"><?php echo $_smarty_tpl->getValue('h1');?>
</h1>
        <div class="single-content">
            <div class="single-content__left">
                <?php if (!( !$_smarty_tpl->hasVariable('image') || empty($_smarty_tpl->getValue('image')))) {?>
                    <div class="single-page-img">
                        <img src="<?php echo $_smarty_tpl->getValue('image');?>
" alt="single-image">
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('date')) {?>
                    <div class="content-date text-holder">
                        <div class="content-date__title">Дата публикации:</div>
                        <div class="content-date__value"><?php echo $_smarty_tpl->getValue('date');?>
</div>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('description')) {?>
                    <div class="content-desc text-holder"><?php echo $_smarty_tpl->getValue('description');?>
</div>
                <?php }?>
                <?php if ($_smarty_tpl->getValue('text')) {?>
                    <div class="content-text text-holder"><?php echo $_smarty_tpl->getValue('text');?>
</div>
                <?php }?>
                <div class="content-bottom">
                    <button class="back-btn" onclick="window.history.back()">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 97.285 97.285" style="enable-background:new 0 0 97.285 97.285;" xml:space="preserve"><g><path d="M34.479,13.334L0.585,47.229c-0.781,0.781-0.781,2.046,0,2.828l33.894,33.896c0.781,0.78,2.047,0.78,2.828,0l9.031-9.028 c0.375-0.375,0.586-0.885,0.586-1.414c0-0.531-0.211-1.039-0.586-1.414L31.807,57.561h63.478c1.104,0,2-0.896,2-2V41.726 c0-1.104-0.896-2-2-2H31.807l14.532-14.533c0.75-0.75,0.75-2.078,0-2.828l-9.031-9.031c-0.375-0.375-0.884-0.586-1.414-0.586 C35.364,12.748,34.854,12.959,34.479,13.334z"/></g></svg>
                        Вернуться назад
                    </button>
                    <?php if ($_smarty_tpl->getValue('views')) {?>
                        <div class="content-views">
                            <div class="content-views__title">Количество просмотров:</div>
                            <div class="content-views__value"><?php echo $_smarty_tpl->getValue('views');?>
</div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <?php if (!( !$_smarty_tpl->hasVariable('similars') || empty($_smarty_tpl->getValue('similars')))) {?>
                <div class="similars-holder">
                    <div class="similars-holder__title">Похожие новости</div>
                    <div class="similars">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('similars'), 'similar');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('similar')->value) {
$foreach0DoElse = false;
?>
                            <a href="single-news.php?id=<?php echo $_smarty_tpl->getValue('similar')['post_id'];?>
" class="similar-item">
                                <?php if (!( !true || empty($_smarty_tpl->getValue('similar')['image_name']))) {?> 
                                    <div class="similar-image">
                                        <img src="/assets/images/<?php echo $_smarty_tpl->getValue('similar')['image_name'];?>
" alt="">
                                    </div>
                                <?php }?>
                                <div class="similar-right">
                                    <div class="similar-item__name"><?php echo $_smarty_tpl->getValue('similar')['name'];?>
</div>
                                    <?php if (!( !true || empty($_smarty_tpl->getValue('similar')['published']))) {?>
                                        <div class="similar-item__date"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('similar')['published'],"%d-%m-%Y");?>
</div>
                                    <?php }?>
                                </div>
                            </a> 
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</main>
<?php $_smarty_tpl->renderSubTemplate('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
