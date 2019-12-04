<?php
    include 'Article.php';
    include 'ArticleMatch.php';
    // include 'MonTrait.php';

    use \MonApp\Blog;

    try 
            {
                $article = new Blog\ArticleMatch("Leaaaaaaaaaaaa","1-3aaa","ceci est le contenu");
            } 
            catch (\Exception $e) 
            {
                echo 'Exception reçue : '.$e->getMessage().'<br>';
            }
    
    $article->testTrait();

    echo $article::DATE_CREATION_IMPRIMERIE."<br>";

    echo($article->getMaxLength());
    
    // print_r ($article);

    var_dump($article);

