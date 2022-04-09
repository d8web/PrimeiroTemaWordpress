<div class="post_related_item">
    <?php if(has_post_thumbnail()): ?>
        <a href="<?=the_permalink()?>">
            <?php the_post_thumbnail("full", ["class" => "post_miniatura"]) ?>
        </a>
    <?php endif ?>
    
    <div class="post-right">
        <h2>
            <a href="<?=the_permalink()?>">
                <?=the_title()?>
            </a>
        </h2>

        <p><?=comments_number("0 comentários", "1 comentário", "% comentários")?></p>
        <a href="<?=the_permalink()?>">Leia mais</a>
    </div>
</div>