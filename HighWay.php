<?php  

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed; 

    public function __construct(int $nbLane, int $maxspeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxspeed;
    }
    
    /**
     * Get the value of currentVehicles
     */ 
    public function getCurrentVehicles()
    {  
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     */ 
    public function setCurrentVehicles($currentVehicle)
    {
        $this->currentVehicles[] = $currentVehicle;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

// ////////// Méthode abstraite à définir dans les classes fille //////////////
    abstract public function addVehicle(Vehicle $vehicle);
}
