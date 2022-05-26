<aside class="menu">
    <div class="menu__reviews">
        <span class="menu__reviews_span" data-href="https://proweb.uz/">
            <i class="far fa-chevron-right"></i>
        </span>
        <span class="menu__reviews_text">Оставить отзыв</span>
    </div>
    <ul class="menu__list">
        <?foreach ( $pages_link as $name => $info) : ?>
            <li>
                <a href="/?route=<?= $name?>" class="menu__list-link">
                    <i class="<?= $info['icon']; ?>"></i>
                    <?= $info['title']; ?>
                </a>
            <li>
            <? endforeach; ?>
        </ul>
</aside>
