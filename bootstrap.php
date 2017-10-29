<?php

include 'vendor/autoload.php';

use Dtclass\Store\StoreItem;
use Dtclass\Store\SPUService;
use Dtclass\Store\ExFedService;
use Dtclass\Store\Shirt;
use Dtclass\Store\Book;

$storeitems = [];

$storeitems[] = new Book("A brief History of Time", "Book", 11.11, 0.712, "Steven Hawking",  212);
$storeitems[] = new Book("Goodnight Moon"
  , "Book"
  , 10.58
  , 0.65
  ,  "Margaret Wise Brown"
  ,  32
);
$storeitems[] = new Book("A Lord of the Rings"
  , "Book"
  , 29.07
  , 4.6
  , "J.R.R. Tolkien"
  , 1178
);
$storeitems[] = new Shirt("Spinal Tap T-Shirt"
  , "Shirt"
  , 16.06
  , 0.5
  , "X-Large"
);
$storeitems[] = new Shirt("Oxford Dress Shirt"
  , "Shirt"
  , 18.47
  , 0.837
  , "Medium"
);

//$shippingservices = [];
//$shippingservices[] = new SPUService();
//$shippingservices[] = new ExFedService();

