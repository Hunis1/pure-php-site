<div class="primary">
    <div class="container">
        <h1 class="page-title">Заголовок страницы</h1>
        {if !empty($cats_array)}
            <div class="block-container">
                <h2 class="main-title">Категории статей</h2>
                <div class="cats">
                    {foreach $cats_array as $cat}
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
                <a href="/archive-news.php" class="btn">Все категории статей</a>
            </div>
        {/if}
    </div>
</div>