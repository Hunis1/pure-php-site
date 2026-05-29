{include file='header.tpl'}
<main>
    <div class="container">
        <h1 class="page-title">{$1}</h1>
        <div class="single-content">
            <div class="single-content__left">
                {if !empty($image)}
                    <div class="single-page-img">
                        <img src="{$image}" alt="single-image">
                    </div>
                {/if}
                {if $date}
                    <div class="content-date text-holder">
                        <div class="content-date__title">Дата публикации:</div>
                        <div class="content-date__value">{$date}</div>
                    </div>
                {/if}
                {if $description}
                    <div class="content-desc text-holder">{$description}</div>
                {/if}
                {if $text}
                    <div class="content-text text-holder">{$text}</div>
                {/if}
                <div class="content-bottom">
                    <button class="back-btn" onclick="window.history.back()">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 97.285 97.285" style="enable-background:new 0 0 97.285 97.285;" xml:space="preserve"><g><path d="M34.479,13.334L0.585,47.229c-0.781,0.781-0.781,2.046,0,2.828l33.894,33.896c0.781,0.78,2.047,0.78,2.828,0l9.031-9.028 c0.375-0.375,0.586-0.885,0.586-1.414c0-0.531-0.211-1.039-0.586-1.414L31.807,57.561h63.478c1.104,0,2-0.896,2-2V41.726 c0-1.104-0.896-2-2-2H31.807l14.532-14.533c0.75-0.75,0.75-2.078,0-2.828l-9.031-9.031c-0.375-0.375-0.884-0.586-1.414-0.586 C35.364,12.748,34.854,12.959,34.479,13.334z"/></g></svg>
                        Вернуться назад
                    </button>
                    {if $views}
                        <div class="content-views">
                            <div class="content-views__title">Количество просмотров:</div>
                            <div class="content-views__value">{$views}</div>
                        </div>
                    {/if}
                </div>
            </div>
            {if !empty($similars)}
                <div class="similars-holder">
                    <div class="similars-holder__title">Похожие новости</div>
                    <div class="similars">
                        {foreach $similars as $similar}
                            <a href="single-news.php?id={$similar.post_id}" class="similar-item">
                                {if !empty($similar.image_name)} 
                                    <div class="similar-image">
                                        <img src="/assets/images/{$similar.image_name}" alt="">
                                    </div>
                                {/if}
                                <div class="similar-right">
                                    <div class="similar-item__name">{$similar.name}</div>
                                    {if !empty($similar.published)}
                                        <div class="similar-item__date">{$similar.published|date_format:"%d-%m-%Y"}</div>
                                    {/if}
                                </div>
                            </a> 
                        {/foreach}
                    </div>
                </div>
            {/if}
        </div>
    </div>
</main>
{include file='footer.tpl'}