<?php
    class Car
    {
        public $make_model;
        public $price;
        public $miles;
        public $status;
        public $image;

        // Object Constructor: runs automatically when making Car object
          // an argument for each property, creates new cars with 1 line of code
        function __construct($make_model, $price, $miles, $image, $status="new")
        {
          $this->make_model = $make_model;
          $this->price = $price;
          $this->miles = $miles;
          $this->image = $image;
          $this->status = $status;
        }
    }



?>
