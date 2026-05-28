{include file='header.tpl'}
<main>
    <div class="container">
    <h1 class="page-title">{$h1}</h1>
        <div class="cats">
            {foreach from=$news item=news}
                <div class="category-item">
                    <div class="category-item__name">{$news.name}</div>
                    <a href="news-cat.php?id={$mews.id}" class="btn">Все статьи</a>
                </div>
            {/foreach}
        </div>
    </div>
</main>
{include file='footer.tpl'}