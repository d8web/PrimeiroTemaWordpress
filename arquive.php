<?php get_header(); ?>

    <section class="theme-content">
        <div class="container">

            <h1><?=the_archive_title() // Mostrar categoria filtrada?></h1>

            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post() ?>

                    <?php get_template_part("template-parts/post") ?>

                <?php endwhile ?>
            <?php endif ?>

            <div class="pagination">
                <div class="pag-back"><?=previous_posts_link("Anterior")?></div>
                <div class="pag-next"><?=next_posts_link("Próximo")?></div>
            </div>

        </div>
        <?php get_sidebar(); ?>
    </section>

<?php get_footer(); ?>