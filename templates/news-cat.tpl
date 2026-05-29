{include file='header.tpl'}
<main>
    <div class="container">
        <h1 class="page-title">{$h1}</h1>
        {if !empty($cat_desc)}
            <div class="category-desc text-holder">{$cat_desc}</div>
        {/if}
        <div id="page-sort" class="page-sort">
            <div class="sort-title">Сортировка</div>
            <form method="POST">
                <select id="sort" name="sort" data-selected={$selected}>
                    <option value="by-date">По дате</option>
                    <option value="by-views">По количеству просмотров</option>
                </select>
                <input class="form-btn btn" type="submit" value="Применить">
            </form>
        </div>
        <div class="news">
            {foreach from=$news item=news}
                <div class="news-item">
                    <div class="news-item__name">{$news.name}</div>
                    <a href="single-news.php?id={$news.post_id}" class="btn">Подробнее</a>
                </div>
            {/foreach}
        </div>
        {if !empty($pagination) & $pagination > 1}
            <div class="pagination">
                {foreach $pagination as $key => $pag}
                    <a href="news-cat.php?id={$cat_id}&page={++$key}" class="pagination-item" data-page="{$key}">{$key}</a>
                {/foreach}
            </div>
        {/if}
    </div>
</main>
{include file='footer.tpl'}