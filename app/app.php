<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Car.php";

    session_start();

        if (empty($_SESSION['list_of_cars'])) {
                $_SESSION['list_of_cars'] = array();
            }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    // Home Page
    $app->get("/", function() use ($app) {

        return $app['twig']->render('cars.html.twig', array('cars' => Car::getAll()));
    });

    $app->post("/cars", function() use ($app) {
          $cars = new Car($_POST['make'], $_POST['image'], $_POST['price'], $_POST['miles'], $_POST['status']);
          $cars->save();
          return $app['twig']->render('created_car.html.twig', array('newcar' => $cars));
      });

          $app->post("/delete_cars", function() use ($app) {
          Car::deleteAll();
          return $app['twig']->render('delete_cars.html.twig');
      });

    return $app;
?>
