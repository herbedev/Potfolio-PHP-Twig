<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['login.png', 'home.png', 'addquote.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'jquery.png', 'asp.png'];

echo $twig->render('single.html.twig', [
    'name' => 'cns', 
    'namep' => 'Wholesale Grocer',
    'website' => 'Not launched yet', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'cns',
    't2' => $langlogo,
    'description' => 'This project included Moderinzing a a system that could not be used outside of
    internet explorer. It is now available on all major browsers and screen sizes. The technology
    used for this project was ASP.Net framework along with the Infragistics component library.'
]);
 ?>