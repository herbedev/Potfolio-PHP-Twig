

<?php
require __DIR__ . '/vendor/autoload.php';
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader);

$imgpath = ['home.png', 'apartments.png', 'edit.png', 'editworkorder.png', 'editenant.png', 'pdf.png'];
$langlogo = ['html5.png', 'css3.png', 'javascript.png', 'bootstrap.png', 'jquery.png', 'rails.png'];

echo $twig->render('single.html.twig', [
    'name' => 'brookridge', 
    'namep' => 'Property Management Tool',
    'website' => 'Private', 
    'services' => 'Design & Desvelopment', 
    'imgpath' => $imgpath,
    'imgdir' => 'br',
    't2' => $langlogo,
    'description' => 'This project is a custom Property Management tool, that was built with Ruby on Rails. The Brookridge Management tool tracks Buildings, Apartments, Tenants, Workorders and even has a secure PDF upload that utilizes url signing from a secure cloud bucket. The app is deployed by container on the Google Kubernetes Engine, which features autoscaling pods based on the use of the application. A few screen shots are below.
  ']);

 ?>