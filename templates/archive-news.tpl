{include file='header.tpl'}
<main>
    <div class="container">
    <h1 class="page-title">Статьи</h1>
        <div class="cats">
            {foreach $news_cats_array as $cat}
                <div class="category-item">
                    <div class="category-item__name">{$cat.name}</div>
                    {if !empty($cat.posts)}
                        <div class="category-posts">
                            {foreach $cat.posts as $post}
                                <a href="single-news.php?id={$post.post_id}" class="post-item">{$post.name}</a>
                            {/foreach}
                        </div>
                    {/if }
                    <a href="news-cat.php?id={$cat.id}" class="btn">Все статьи</a>
                </div>
            {/foreach}
        </div>
    </div>
</main>
{include file='footer.tpl'}