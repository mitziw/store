<?php

namespace Dtclass\Store;

use Dtclass\Store\StoreItem;


class ShippingService implements ShippingServiceInterface {

  /**
   * @var
   */
  private $name;


  /**
   * @var
   */
  private $weight;

  /**
   * ShippingService constructor.
   *
   * @param $name
   * @param StoreItem $weight
   */
  public function __construct($name, StoreItem $weight) {
    $this->name = $name;
    $this->weight = $weight;
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name) {
    $this->name = $name;
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
  public function getShippingCost() {
    return $this->name . ":  $" . $this->weight

  }

}