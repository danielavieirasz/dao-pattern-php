<?php

include_once("models/Car.php");

class CarDAO implements CarDAOInterface
{
    
    private $conn;

    public function __construct(PDO $conn){
        $this->conn = $conn;
    }

    public function findAll(){

    }

    public function create(Car $car) {

      var_dump($car);
      try{
        $query = "INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)";
        
        $stmt = $this->conn->prepare($query);

        $stmt->bindValue(":brand", $car->getBrand());
        $stmt->bindValue(":km", $car->getKm());
        $stmt->bindValue(":color", $car->getColor());
  
        $stmt->execute();
  
      }catch(\Exception $exception){
        var_dump($exception);
      }

      }
  
}
 
   