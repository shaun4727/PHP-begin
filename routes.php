<?php

// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/addNote' => 'controllers/notes/create.php'
// ];

$router->get('/','index.php');
$router->get('/about','about.php');
$router->get('/contact','contact.php');
$router->get('/notes','notes/index.php')->only('auth');
$router->get('/note','notes/show.php');
$router->get('/note/edit','notes/edit.php');
$router->get('/addNote','notes/create.php');
$router->post('/addNote','notes/store.php');
$router->delete('/note','notes/destroy.php');
$router->patch('/note','notes/update.php');

$router->get('/register','register/create.php')->only('guest');
$router->post('/register','register/store.php');

$router->get('/login','sessions/create.php')->only('guest');
$router->post('/sessions','sessions/store.php')->only('guest');
$router->delete('/logout','sessions/destroy.php')->only('auth');