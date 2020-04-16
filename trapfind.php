<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'jquery.png', 'photoshop.png'];


echo $twig->render('single.html.twig', [
    'name' => 'trapfind', 
    'namep' => 'TrapFind',
    'website' => 'Completed', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'trapfind',
    't2' => $langlogo,
    'description' => 'A page designed to capture information about people are interested in attending a police seminar. It was developed by writing structured HTML, CSS and Javascript.']);

 ?>