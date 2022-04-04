<?php  
require_once __DIR__. "/HighWay.php";

// //////// Création d'une classe finale, fille de la classe HighWay /////////// 
final class ResidentialWay extends HighWay
{
    // Méthode qui ajoute le véhicule aux tableau currentVehicles en fonction de leurs types ////////////////
    public function addVehicle(Vehicle $vehicle)
    {
        $this->setCurrentVehicles($vehicle);
    }
}