<?php
namespace MonApp\Blog;


final class ArticleMatch extends Article{
    private $score;

    public function getScore() :string
        {
            return $this->score;
        }

    public function setScore(string $score) :void 
        {
            $this->score = $score;
        }

    public function __construct(string $title, string $score, string $content)
        {
        parent::__construct($title, $content);
        $this->setScore($score);
    }

}