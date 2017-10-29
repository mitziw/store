<?php


namespace Dtclass\Store;

use Dtclass\Store\StoreItem;

class Book extends StoreItem {


  /**
   *
   * @var string
   */
  private $author;

  /**
   *
   * @var int
   */
  private $pages;

  /**
   * Book constructor.
   *
   * @param string $name
   * @param string $type
   * @param float $price
   * @param float $weight
   * @param string $author
   * @param int $pages
   */
  public function __construct(string $name, string $type, float $price, float $weight, string $author, int $pages) {
    parent::__construct($name, $type, $price, $weight);
    $this->author = $author;
    $this->pages = $pages;
  }

  /**
   *
   * @return string
   */
  public function getName() {
    $name = parent::getName();
    return $this->name;
  }
  /**
   *
   * @return string
   */
  public function getType() {
   $type = parent::getType();
    return $this->type;
  }

  /**
   *
   * @return float
   */
  public function getPrice() {
    $price = parent::getPrice();
    return "Price: $" . $this->price;
  }
  /**
   *
   * @return float
   */
  public function getWeight() {
   $weight = parent::getWeight();
    return $this->weight;
  }

  /**
   * @param string $author
   */
  public function setAuthor($author) {
    $this->author = $author;
  }

  /**
   * @return string
   */
  public function getAuthor() {
    return "Author: " . $this->author;
  }

  /**
   * @param int $pages
   */
  public function setPages($pages) {
    $this->pages = $pages;
  }

  /**
   * @return int
   */
  public function getPages() {
    return "Number of Pages: " . $this->pages;
  }




}