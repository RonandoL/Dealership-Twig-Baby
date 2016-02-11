<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $status;
        private $image;

        function __construct($car_model, $car_price, $car_miles, $car_image, $car_status="new")
        {
          $this->make_model = $car_model;
          $this->price = $car_price;
          $this->miles = $car_miles;
          $this->image = $car_image;
          $this->status = $car_status;
        }

        function getModel()
        {
            return $this->make_model;
        }

        function getPrice()
        {
            return $this->price;
        }

        function getMiles()
        {
            return $this->miles;
        }

        function getImage()
        {
            return $this->image;
        }

        function getStatus()
        {
            return $this->status;
        }


    }



?>
