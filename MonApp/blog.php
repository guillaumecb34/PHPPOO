<?php
    include 'Article.php';
    include 'ArticleMatch.php';

    use \MonApp\Blog;

    $article = new Blog\ArticleMatch("Le Barça surclasse le Réal","1-3","ceci est le contenu");

    echo $article::DATE_CREATION_IMPRIMERIE."<br>";

    echo($article->getMaxLength());
    
    // print_r ($article);

    var_dump($article);

