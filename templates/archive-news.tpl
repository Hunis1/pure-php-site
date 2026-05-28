{include file='header.tpl'}
<main>
    <div class="container">
    <h1 class="page-title">Статьи</h1>
        <div class="cats">
            {foreach from=$news_cats_array item=cat}
                <div class="category-item">
                    <div class="category-item__name">{$cat->name}</div>
                    <a href="news-cat.php?id={$cat->id}" class="btn">Все статьи</a>
                </div>
            {/foreach}
        </div>
    </div>
</main>
{include file='footer.tpl'}