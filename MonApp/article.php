<?php
    namespace MonApp\Blog;

    abstract class Article 
    {   
        use MonTrait;

        private $title;
        private $content;
        CONST DATE_CREATION_IMPRIMERIE = "1450" ;
        static private $maxLength = 1000;

        

        public function getMaxLength() :int
        {
            return self::$maxLength;
        }

        public function getTitle() :string 
        {
            return $this->title;
        }

        public function getContent() :string 
        {
            return $this->content;
        }

        public function setContent(string $content) :void 
        {
            $this->content = $content;
        }
        

        public function setTitle(string $title) :void 
        {
            if (strlen($title) < 5)
            {
                throw new \Exception("Titre trop court");
            } 
            $this->title = $title;
        }


        public function __construct(string $title, string $content){
            $this->setTitle($title);
            $this->setContent($content);
        }
    }

    Trait MonTrait
    {
        function testTrait(){
            echo "test trait";
        }
    }






