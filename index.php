<?php
$section = $_GET['section'] ?? 'home';

switch ($section) {
    case 'home':
        include 'templates/home.php';
        break;
    case 'about':
        include 'templates/about.php';
        break;
    case 'services':
        include 'templates/services.php';
        break;
    case 'packages':
        include 'templates/packages.php';
        break;
    case 'our-works':
        include 'templates/our-works.php';
        break;
    case 'contact':
        include 'templates/contact.php';
        break;
    default:
        include 'templates/404.php';
        break;
}
?>
