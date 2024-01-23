<?php

// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/addNote' => 'controllers/notes/create.php'
// ];

$router->get('/','controllers/index.php');
$router->get('/about','controllers/about.php');
$router->get('/contact','controllers/contact.php');
$router->get('/notes','controllers/notes/index.php')->only('auth');
$router->get('/note','controllers/notes/show.php');
$router->get('/note/edit','controllers/notes/edit.php');
$router->get('/addNote','controllers/notes/create.php');
$router->post('/addNote','controllers/notes/store.php');
$router->delete('/note','controllers/notes/destroy.php');
$router->patch('/note','controllers/notes/update.php');

$router->get('/register','controllers/register/create.php')->only('guest');
$router->post('/register','controllers/register/store.php');