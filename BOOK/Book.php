<?php

    class Book{
        #iside class

        #properties
        private $title;
        private $author;
        private $content;
        private $year_published;
        private $page;
        private $price;

        public $isbn;
        var $glossary;

        #constructor
        public function __construct($new_title,$new_price){
            $this->title = $new_title;
            $this->price = $new_price;
        }

        #methods
        public function showTitle()
        {
            echo "Title" . $this->title . "<br>";
            $this->totalPage();
        }

        public function totalPagee()
        {
            $x=15;

            if(this->page < 5 || $this->page > 1){
                $total_page = $x * this->page;
            }

            while(3>1){
                echo "Display";
            }


            return $total_page;
        }

        # setter - set the value of
        public function setTitle($title)
        {
            $this->title = $title;
        }

        public function setPrice($price)
        {
            $this->price = $price;
        }

        public function getPrice()
        {
           return  $this->price;
        }


        # getter - retrieve the value
        public function getTitle()
        {
           return  $this->title;
        }
        

    }

    // #outside class


    // #create an object
    // $math = new Book;
    // $physics = new Book;

    // # use setter
    // $math->setTitle("Geometry");
    // $physics->setTitle("Momentum");

    // # use getter
    // echo "Math title:" . $math->getTitle() . "<br>";
    // echo "Physic Title:" . $physics->getTitle() . "<br>";
    // echo "<hr>";


?>