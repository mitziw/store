<?php

namespace Dtclass\Store;

use Dtclass\Store\StoreItem;


class Shirt extends StoreItem {

  /**
   * @var string
   */
  private $size;

  /**
   * Shirt constructor.
   *
   * @param string $name
   * @param string $type
   * @param float $price
   * @param float $weight
   * @param string $size
   */
  public function __construct(string $name, string $type, float $price, float $weight, string $size) {
    parent::__construct($name, $type, $price, $weight);
    $this->size = $size;
  }


  /**
   *
   * @return string
   */
  public function getName() {
   // $name = parent::getName();
    return $this->name;
  }
  /**
   *
   * @return string
   */
  public function getType() {
   // $type = parent::getType();
    return $this->type;
  }

  /**
   *
   * @return float
   */
  public function getPrice() {
  //  $price = parent::getPrice();
    return "Price: $" . $this->price;
  }
  /**
   *
   * @return float
   */
  public function getWeight() {
  //  $weight = parent::getWeight();
    return $this->weight;
  }

  /**
   * @param string $size
   */
  public function setSize($size) {
    $this->size = $size;
  }

  /**
   * @return string
   */
  public function getSize() {
    return "Size: " . $this->size;
  }

}