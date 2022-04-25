<?php
require_once './Vehicle.php';
require_once 'LightableInterface.php';

class Truck extends Vehicle implements LightableInterface
{
    private int $storageCapacity;
    private int $load = 0;

// //////////// constructor /////////////////

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct( $color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

// //////////// getters /////////////////

    public function getLoad(): int{
        return $this->load;
    }

    public function getStorageCapacity(): int{
        return $this->storageCapacity;
    }


// //////////// setters /////////////////

    public function setStorageCapacity(int $storageCapacity): void{
        $this->storageCapacity = $storageCapacity;
    }
    
    public function setLoad(int $load): void{
         $this->load = $load;
    }

// /////////////// Method that returns the load status //////////////////

    public function isFull(int $load) :string
    {
       return $load < $this->storageCapacity ? "in filling" : "full";
    }
}

