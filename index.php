<?php

  include 'bootstrap.php';

use Dtclass\Store\SPUService;
use Dtclass\Store\ExFedService;
use Dtclass\Store\StoreItem;
use Dtclass\Store\Shirt;
use Dtclass\Store\Book;

?>
<html><head><title>BitWisdom Shop</title>
    </head><body>


        <h1>BitWisdom Shop</h1>
        <?php ?>
        <?php foreach ($storeitems as $i => $storeitem): ?>
                    <h2><?php print $storeitem->getName(); ?></h2>
            <div><?php print $storeitem->getPrice(); ?></div>
          <?php if ($storeitem->getType() === "Shirt"): ?>
             <div><?php print $storeitem->getSize(); ?></div>
           <?php  elseif ($storeitem->getType() === "Book"): ?>
             <div><?php print $storeitem->getAuthor(); ?></div>
             <div><?php print $storeitem->getPages(); ?></div>
           <?php endif; ?>

        <strong>Shipping</strong>
                            <div><?php  print (new SPUService())->getShippingCost($storeitem->getWeight()); ?></div>
                            <div><?php // print $shippingservices[1]->getShippingCost($storeitem->getWeight()); ?></div>
        <?php endforeach; ?>

</body>
</html>