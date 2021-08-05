<?php
  // require db connection
  require "../database/_connection.php";
  
  // require products
  require "product.php";

//Db controller object

  $db = new Dbcontroller();

//product object

  $product = new products($db);

  // print_r($product->ProgetData());

?>