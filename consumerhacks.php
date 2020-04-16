<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.png', 'single.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'php.png', 'bootstrap.png', 'jquery.png', 'photoshop.png'];

echo $twig->render('single.html.twig', [
    'name' => 'consumerhacks', 
    'namep' => 'ConsumerHacks',
    'website' => 'Completed', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'consumerhacks',
    't2' => $langlogo,
    'description' => 'This project was an ad driven blog, that introduced users to the begining of lead generation funnels. The technologies used for this project were HTML, CSS, JavaScript and PHP. ']);

 ?>