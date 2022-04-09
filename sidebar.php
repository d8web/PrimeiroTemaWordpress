<aside>
    <?php if(is_active_sidebar("ds_sidebar")): ?>
        <?php get_search_form(); ?>
        <?php dynamic_sidebar("ds_sidebar"); ?>
    <?php endif; ?>
</aside>