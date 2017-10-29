<?php


namespace Dtclass\Store;


class StoreItem {

  /**
   *
   * @var string
   */
  protected $name;

  /**
   * @var string
   */
  protected $type;

  /**
   * @var float
   */
  protected $price;

  /**
   * @var float
   */
  protected $weight;


  /**
   * StoreItem constructor.
   *
   * @param $name
   * @param $type
   * @param $price
   * @param $weight
   */
  public function __construct(string $name, string $type, float $price, float $weight) {
    $this->name = $name;
    $this->type = $type;
    $this->price = $price;
    $this->weight = $weight;
  }

  /**
   * @param string $name
   */
  public function setName($name) {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param string $type
   */
  public function setType($type) {
    $this->type = $type;
  }

  /**
   * @return string
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @param float $price
   */
  public function setPrice($price) {
    $this->price = $price;
  }

  /**
   * @return float
   */
  public function getPrice() {
    return $this->price;
  }

  /**
   * @param float $weight
   */
  public function setWeight($weight) {
    $this->weight = $weight;
  }

  /**
   * @return float
   */
  public function getWeight() {
    return $this->weight;
  }


}