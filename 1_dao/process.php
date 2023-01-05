<?php

  include_once("db.php");
  include_once("dao/CarDAO.php");

  // Obtém as informaòes do Formulário
  $brand = $_POST["brand"];
  $km = $_POST["km"];
  $color = $_POST["color"];

  // Instancia o objeto Car
  $newCar = new Car();
  $newCar->setBrand($brand);
  $newCar->setKm($km);
  $newCar->setColor($color);

  // Persiste os dados no Banco
  $carDao = new CarDao($conn);
  $carDao->create($newCar);

  // Redireciona para a página de cadastro
  header("Location: index.php");