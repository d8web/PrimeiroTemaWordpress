<?php get_header(); ?>

    <section class="theme-content">
        <div class="container">
            
            <?php while(have_posts()): ?>
                <?php the_post() ?>

                <article>
                    <div class="single-post">

                        <h2><?=the_title()?></h2>

                        <p><?=the_content() // Post completo?></p>
                        
                        <hr>
                        
                        <?php if(comments_open()): ?>
                            <?php comments_template() ?>
                            <p><?=comments_number("0 comentários", "1 comentário", "% comentários")?></p>
                        <?php endif ?>

                    </div>
                </article>

            <?php endwhile ?>

        </div>
        <?php get_sidebar(); ?>
    </section>

<?php get_footer(); ?>