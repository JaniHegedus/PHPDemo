<?php
    class Book
    {
        var $title;
        var $author;
        var $pages;

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title): void
        {
            $this->title = $title;
        }

        /**
         * @return mixed
         */
        public function getAuthor()
        {
            return $this->author;
        }

        /**
         * @param mixed $author
         */
        public function setAuthor($author): void
        {
            $this->author = $author;
        }

        /**
         * @return mixed
         */
        public function getPages()
        {
            return $this->pages;
        }

        /**
         * @param mixed $pages
         */
        public function setPages($pages): void
        {
            $this->pages = $pages;
        }

        /**
         * @param $title
         * @param $author
         * @param $pages
         */
        public function __construct($title, $author, $pages)
        {
            echo "New Book Created<br>";
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }

    }
    class Books
    {
        var $title;
        var $author;
        var $pages;

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title): void
        {
            $this->title = $title;
        }

        /**
         * @return mixed
         */
        public function getAuthor()
        {
            return $this->author;
        }

        /**
         * @param mixed $author
         */
        public function setAuthor($author): void
        {
            $this->author = $author;
        }

        /**
         * @return mixed
         */
        public function getPages()
        {
            return $this->pages;
        }

        /**
         * @param mixed $pages
         */
        public function setPages($pages): void
        {
            $this->pages = $pages;
        }

        /**
         */
        public function __construct()
        {
            echo "New Book Created<br>";
        }

    }

    $book = new Book("Lord of the Rings","Tolkien",900);
    $book0 = new Books();
    $book0->title ="Lord of the Beers";
    $book0->author ="Radics Péter";
    $book0->pages = 69420;
    echo "<br>";
    echo $book->author;
    echo "<br>";
    echo $book->title;
    echo "<br>";
    echo $book->pages;
    echo "<br>";
    echo $book0->author;
    echo "<br>";
    echo $book0->title;
    echo "<br>";
    echo $book0->pages ;

    include "header.php"
?>
