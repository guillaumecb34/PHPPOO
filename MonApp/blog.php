<?php

    include 'article.php';

    use \MonApp\Blog;

    $article = new Blog\Article("ceci est le tritre","ceci est le contenu");

    echo $article::DATE_CREATION_IMPRIMERIE."<br>";

    echo($article->getMaxLength());
    
    var_dump($article);
