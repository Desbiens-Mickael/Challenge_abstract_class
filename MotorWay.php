<?php  
require_once __DIR__. "/HighWay.php";

// //////// Création d'une classe finale, fille de la classe HighWay /////////// 
final class MotorWay extends HighWay
{
    // Méthode qui ajoute le véhicule aux tableau currentVehicles en fonction de leurs types ////////////////
    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Truck || $vehicle instanceof Car){
            $this->setCurrentVehicles($vehicle);
        }
    }
}