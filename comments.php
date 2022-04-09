<?php
    if ( post_password_required() ) {
        return;
    }
?>

<?php if(have_comments()): ?>
    <?php foreach($comments as $comment): ?>
        <div class="comment">
            <div class="comment-avatar"><?=get_avatar($comment, 80)?></div>
            <div class="comment-area">
                <strong><?=comment_author()?></strong> - <?=comment_date()?>
                <p><?=comment_text()?></p>
            </div>
        </div>
    <?php endforeach ?>

    <?php the_comments_pagination() // Paginação dos comentários ?>

<?php endif ?>

<?php comment_form([
    "comment_field" => "Comentário: <textarea name='comment'></textarea>",
    "fields" => [
        "author" => "Nome: <input type='text' name='author' placeholder='Digite seu nome'/>",
        "email" => "Email: <input type='email' name='email' placeholder='Digite seu email'/>",
        "url" => "Url: <input type='text' name='url' placeholder='Digite seu site'/>"
    ],
    "class_submit" => "ds_button",
    "label_submit" => "Enviar comentário",
    "title_reply" => "Deixe seu comentário"
]) // Formulário para adicionar comentários ?>