<?php
    class Game{
        public $title;
        public $price;
        public $image;
        public $producer;

        public function __construct($title, $price, $image, $producer)
        {
            $this->title = $title;
            $this->price = $price;
            $this->image = $image;
            $this->producer = $producer;
        }
    }
?>