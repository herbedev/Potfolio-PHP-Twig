<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.png', 'category.png', 'single-post.png', 'search-new.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'php.png', 'wordpress.png'];

echo $twig->render('single.html.twig', [
    'name' => 'spaceinvaderone', 
    'namep' => 'SpaceInvaderOne',
    'website' => 'SpaveInvader.One', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'spaceinvader',
    't2' => $langlogo,
    'description' => 'This project is one of my favorites as the author provides amazing content with
                        easy to follow video tutorials, and I can say I spent countless hours watching them. I jumped at
                        the chance to create a website for him and I think it came out quite nice. The site is a
                        Wordpress blog that utililzes custom post fields to automate post creation on Youtube Post.']);

 ?>