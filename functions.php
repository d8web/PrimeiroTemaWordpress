<?php

// Incluir outros arquivos
// get_template_directory(), retorna a pasta do tema
require get_template_directory()."/inc/ds_footer_functions.php";
require get_template_directory()."/inc/setup.php";

/**
 * Adicionando hooks
 * Padrão da função add_action("nome do parâmetro", "nome da função")
 * Obs: O nome da função geralmente segue um padrão.
 * A primeira letra é a letra inicial do nome do author.
 * A segunda letra a letra inicial do nome do tema seguido de um _ e o nome da função.
 * Ex: Nome do tema = Dracula, nome do author = Fernando, o nome da função seria fd_nomedafunção
 * Esse padrão é para não ter conflito com nomes de outras funções do wordpress
*/
add_action("shutdown", "ds_fim");

// Adicionando hook de estilo[css] e script[js]
add_action("wp_enqueue_scripts", "ds_theme_styles");

// Adicionando hook de suporte a menus do wordpress
add_action("after_setup_theme", "ds_after_setup");

// Adicionando hook de suporte ao sidebar e adicionar widgets ao tema
add_action("widgets_init", "ds_widgets");