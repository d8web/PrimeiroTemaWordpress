<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // Função wp_head() chama os arquivos do cabeçalho do site, links, css, scripts, metatags, etc...
        wp_head();
    ?>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stayblue</title> -->
</head>
<body
    <?php 
        /**
         * Caso queiramos adicionar mais classes ao body
         * Basta colocar nos parâmetros da função body_class('class1 class2')
        */
        body_class();
    ?>
>
    
    <header>

        <div class="left-menu-ds">
            <?php if(has_custom_logo()): ?>
                <?php the_custom_logo() ?>
            <?php endif ?>
    
            <h1>
                <a href="<?=home_url("/")?>">
                    <?=bloginfo("name")// Mostrando nome do blog?>
                </a>
            </h1>
        </div>

        <?php if(has_nav_menu("primary")): ?>

            <?php wp_nav_menu([
                "theme_location"  => "primary",
                // Padrão do wordpress é criar o menu com ul, na chave container podemos mudar e dizer que o menu é um nav
                "container"       => "nav",
                // Alterar classe do menu
                "container_class" => "main_menu",
                // Adicionar classes ao menu de navegação, separados por vírgula
                "menu_class"      => "bg-dark teste",
                /**
                 * Fallback_cb estiver sem items adicionados, se definirmos como true
                 * O wordpress executará uma função que vai gerar um menu padrão 
                */
                "fallback_cb"     => false
            ]); ?>

        <?php endif ?>
    </header>