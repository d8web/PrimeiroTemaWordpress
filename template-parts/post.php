<article>

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

        <p>
            <?=get_the_date()?> | 
            <a href="<?=get_author_posts_url(get_the_author_meta("ID"))?>">
                <?=get_the_author()?>
            </a> | 
            <?=the_category(", ")?>
        </p>

        <p><?=the_excerpt() // Resumo do post?></p>

        <p>
            <?=comments_number("0 comentários", "1 comentário", "% comentários")?> | 
            <a href="<?=the_permalink()?>">Leia mais</a>
        </p>
    </div>

</article>