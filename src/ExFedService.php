<?php

namespace Dtclass\Store;

use Dtclass\Store\StoreItem;
use Dtclass\Store\ShippingServiceInterface;

class ExFedService implements ShippingServiceInterface {

    const EXFED_COST = 2.50;

    /**
     * @var string
     */
    private $name;


    /**
     * @var float
     */
    private $weight;

    /**
     * ExFedService constructor.
     *
     * @param $name
     * @param StoreItem $weight
     */
    public function __construct(StoreItem $weight) {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @var string $name
     */
    public function setName() {
        $this->name = "ExFed Overnight";
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return float $weight
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function getShippingCost(float $weight) {
        return $this->name . ":  $" . round($this->weight * self::EXFED_COST, 2);

    }

}