<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'jquery.png', 'photoshop.png'];

echo $twig->render('single.html.twig', [
    'name' => 'kadvertisingandpromotions', 
    'namep' => 'K advertising & promotions',
    'website' => 'kadpromo.com', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'kad',
    
    't2' => $langlogo,
    'description' => 'A business website for a advertising and promotions company, to showcase their work and bring in new clients. This project was completed by writing structred and documented HTML, CSS and Javascript.'
]);
 ?>