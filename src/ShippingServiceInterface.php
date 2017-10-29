<?php

namespace Dtclass\Store;

use Dtclass\Store\StoreItem;

interface ShippingServiceInterface {
  /**
   * @param float $weight
   */
  public function getShippingCost(float $weight);

  /**
   * @return string
   */
  public function getName();
}