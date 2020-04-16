<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.png', 'form.png', 'form2.png', 'form3.png', 'contact.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'jquery.png', 'photoshop.png'];

echo $twig->render('single.html.twig', [
    'name' => 'nationalliens', 
    'namep' => 'National Liens',
    'website' => 'Closed', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'nl',
    
    't2' => $langlogo,
    'description' => 'A business website for a onboarding new clients. This project was completed by writing structred and documented HTML, CSS and Javascript.'
]);
 ?>