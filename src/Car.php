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

    $car1 = new Car("Ford F150", 25000, 0, "images/f150.jpg");
    $car2 = new Car("Mercedes", 56500, 0, "images/mercedes.jpg");
    $car3 = new Car("Lexus", 45000, 0, "images/lexus.jpg");
    $car4 = new Car("Porsche 911", 115000, 0, "images/porsche.jpg");
    $car5 = new Car("Ford", 32000, 55000, "images/ford.jpg", "used");
    $car6 = new Car("Toyota Celica", 32500, 23450, "images/toyota.jpg", "used");

    $cars = array($car1, $car2, $car3, $car4, $car5, $car6);

    $cars_matching_search = array();
    foreach ($cars as $car) {
      if ($car->price < $_GET["price"]) {
          array_push($cars_matching_search, $car);
      }
    }

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Dealership</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Dealership</h1>
        <p>Lorem ipsum dolor sit amet,</p>
      </div>  <!-- /JUMBOTRON -->

  <!-- Row: 1 -->
      <div class="row">
        <div class="col-sm-6">
            <h1>Your Car Dealership</h1>
            <ul>
              <?php
                  foreach ($cars_matching_search as $car) {
                    echo "<li> <img src='$car->image'></img>";
                    echo "<li>" . $car->make_model . "</li>";
                    echo "<ul>";
                        echo "<li>$" . $car->price . "</li>";
                        echo "<li> Miles: " . $car->miles . "</li>";
                        echo "<li>" . $car->status . "</li>";
                    echo "</ul>";
                  }
              ?>
            </ul>

        </div>  <!-- /col-sm-12 -->
      </div>  <!-- /Row -->

    </div>  <!-- /Container -->

  </body>
</html>
