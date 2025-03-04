<?php
require_once 'config.php';
// Get the requested URL from the 'url' query parameter
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';

// Define available routes (URL => corresponding PHP file)
$routes = [
    '' => 'pages/home.php',          // Home route
    'contact' => 'pages/contact.php',          // contact route
    'register' => 'pages/register.php',    // register page route
    'login' => 'pages/login.php', // login page route
    'blog' => 'pages/blog.php', // blog page route
    'admin' => 'pages/admin/dashboard.php', // admin page route
    'user' => 'pages/user/dashboard.php', // user page route
];

// Check if the URL matches a route
if (array_key_exists($url, $routes)) {
    require $routes[$url];  // Load the appropriate file for the route
} else {
    // If no route matches, show a 404 page
    require 'pages/error_404.php';
}
?>