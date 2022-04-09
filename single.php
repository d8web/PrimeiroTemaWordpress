<?php get_header(); ?>

    <section class="theme-content">
        <div class="container">
            
            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post() ?>

                    <article>
                        <div class="single-post">

                            <h2><?=the_title()?></h2>
                            
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail("full") ?>
                            <?php endif ?>
    
                            <p>
                                <?=get_the_date()?> | 
                                <a href="<?=get_author_posts_url(get_the_author_meta("ID"))?>">
                                    <?=get_the_author()?>
                                </a> | 
                                <?=the_category(", ")?>
                            </p>
    
                            <p><?=the_content() // Post completo?></p>
    
                            <p><?=comments_number("0 comentários", "1 comentário", "% comentários")?></p>
                            
                            <hr>
                                <h3>Posts relacionados</h3>
                                
                                <?php
                                    $categories = get_the_category();

                                    $ds_query = new WP_Query([
                                        "posts_per_page" => 3,
                                        "post__not_in" => [ $post->ID ],
                                        "cat" => $categories[0]->term_id
                                    ]);

                                    if($ds_query->have_posts()) {
                                        while($ds_query->have_posts()) {
                                            $ds_query->the_post();

                                            get_template_part("template-parts/related_post");
                                        }

                                        wp_reset_postdata(); // Remover requisição dos posts relacionados
                                    }
                                ?>
                            <div style="clear: both;"></div>
                            <hr>
                            
                            <?php if(comments_open()): ?>
                                <?php comments_template() ?>
                            <?php endif ?>

                        </div>
                    </article>

                <?php endwhile ?>
            <?php endif ?>

            <div class="pagination">
                <div class="pag-back"><?=previous_post_link('%link', 'Post Anterior')?></div>
                <div class="pag-next"><?=next_post_link('%link', 'Próximo Post')?></div>
            </div>

        </div>
        <?php get_sidebar(); ?>
    </section>

<?php get_footer(); ?>