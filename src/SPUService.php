<?php

namespace Dtclass\Store;

use Dtclass\Store\StoreItem;
use Dtclass\Store\Shirt;
use Dtclass\Store\Book;
use Dtclass\Store\ShippingServiceInterface;

class SPUService implements ShippingServiceInterface {

  const SPU_COST = 2.50;

  /**
   * @var
   */
  private $name;


  /**
   * @var
   */
  private $weight;

  /**
   * SPUService constructor.
   *
   * @param $name
   * @param float $weight
   */
  public function __construct(float $weight) {
    $this->weight = $weight;
  }


  /**
   * @var string $name
   */
  public function setName() {
    $this->name = "SPU 3-day";
  }

  /**
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param mixed $weight
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
        return $this->getName() . ":  $" . round($this->weight * self::SPU_COST, 2);

    }


}