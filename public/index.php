<?php
require '../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader);
$products = ['Casques', 'Micros', 'Claviers', 'Laptops', 'Souris', 'Ecrans'];
echo $twig->render('index.html.twig', ['products'=>$products]);
