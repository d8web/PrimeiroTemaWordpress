<form role="search" method="GET" class="search-form" action="<?=esc_url(home_url("/"))?>">
    <input type="search" placeholder="Pesquisar..." name="s" value="<?php the_search_query() ?>"/>

    <input type="submit" class="ds_button_search" value="Buscar"/>
</form>