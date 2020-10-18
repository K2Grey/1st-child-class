<?php

require_once 'Car.php';

class Truck extends Car
{
    /**
     * @var int
     */
    private $storageCapacity;

    /**
     * @var int
     */
    private $fillingLevel = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setStorageCapacity($storageCapacity);
    }

    /**
     * @return string
     */
    public function isFull(): string {
        if ($this->fillingLevel < $this->storageCapacity) {
            return 'in filling';
        }
        return 'full';
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        if ($storageCapacity >= 0) {
            $this->storageCapacity = $storageCapacity;
        }
    }

    /**
     * @return int
     */
    public function getFillingLevel(): int
    {
        return $this->fillingLevel;
    }

    /**
     * @param int $fillingLevel
     */
    public function setFillingLevel(int $fillingLevel): void
    {
        if ($fillingLevel <= $this->storageCapacity) {
            $this->fillingLevel = $fillingLevel;
        }
    }
}
