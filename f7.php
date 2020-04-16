<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.png', 'blog.png', 'blog2.png', 'blog-single.png', 'cap.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'php.png', 'wordpress.png'];
$videos = ['video'];

echo $twig->render('single.html.twig', [
    'name' => 'frontier7', 
    'namep' => 'Frontier 7',
    'website' => 'Closed', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'f7',
    't2' => $langlogo,
    'videos' => $videos,
    'description' => '#']);

 ?>