<?php

function ds_theme_styles() {

    // Adicionando css ao tema
    /**
     * O primeiro parâmetro é o nome do css
     * O segundo é uma função que retorna a url do template, em seguida concatenamos com o diretório do arquivo css. 
    */
    wp_enqueue_style("theme_css", get_template_directory_uri()."/assets/css/theme.css");

    // Adicionando js ao tema
    /**
     * Adicionando script
     * O primeiro parâmetro é o nome do script.
     * O segundo parâmetro é a função do wordpress que retorna a url do template, get_template_directory_uri().
     * Concatenamos o diretório do arquivo depois da função get_template_directory_uri().
     * O terceiro parâmetro é o que vai ser carregado antes do script. 
     * O quarto parâmetro é uma string com a versão do script ex: 1.0, 1.1, 2.0, mas pode ser uma string vazia.
     * E por fim o último parâmetro indica se o script será carregado no inicio[head] ou no fim da página.
     * True significa que vai ser carregado no fim da página, false no head da página
    */
    wp_enqueue_script("theme_js", get_template_directory_uri()."/assets/js/app.js", ["jquery"], "1.0", true);

}

// Habilitando menu no wordpress
function ds_after_setup() {

    // Habilitando miniatura dos posts [thumnbails]
    add_theme_support("post-thumbnails");

    // Habilitando suporte ao título personalidado
    add_theme_support("title-tag");

    // Habilitando logo personalizada
    add_theme_support("custom-logo");

    // Registrar menu
    register_nav_menu("primary", __("Primary Menu", "stayblue"));
}

// Habilitando sidebar
function ds_widgets() {

    register_sidebar([
        "name"          => __("Meu primeiro sidebar", "stayblue"),
        // Id segue o padrão para não dar conflito com classes ou ids do wordpress.
        // A primeira letra é a letra inicial do nome do author.
        // A segunda letra é a primeira letra do nome do tema.
        "id"            => "ds_sidebar",
        "description"   => __("Sidebar para o tema", "stayblue"),

        "before_title"  => "<h4 class='widget_title'>",
        "after_title"   => "</h4>",

        // "before_widget" => '<div id="%1$s" class="widget %2$s">',
        // "after_widget"  => '</div>'
    ]);

}