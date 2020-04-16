<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.jpg'];
$langlogo = ['photoshop.png'];


echo $twig->render('single.html.twig', [
    'name' => 'finewine', 
    'namep' => 'FineWine',
    'website' => 'Completed', 
    'services' => 'Design', 
    'imgpath' => $imgpath,
    'imgdir' => 'sfw',
    't2' => $langlogo,
    'description' => 'Design of a eCommerce site. Used Adobe Photoshop. ']);

 ?>