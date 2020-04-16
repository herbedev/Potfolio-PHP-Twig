<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['step1.png', 'step2.png', 'car.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'jquery.png', 'photoshop.png'];


echo $twig->render('single.html.twig', [
    'name' => 'leadgenerationflow', 
    'namep' => 'Lead Generation Flow',
    'website' => 'Private', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'ia',
    
    't2' => $langlogo,
    'description' => 'This project was designed to be the main funnel for lead generation campaigns, It out performed many other versions and was developed by writing structrued HTML, CSS, Javascript and PHP.']);

 ?>