<?php
    include_once "model/Product.php";
    include_once "service/ProductManager.php";

    use service\ProductManager;
    use model\Product;

    $productManager = new ProductManager();
    $productManager->add(new Product("Laptop"));
    $productManager->add(new Product("Mobile"));

    $products = $productManager->getProducts();
    foreach ($products as $product) {
        echo $product->getName() . "<br/>";
    }