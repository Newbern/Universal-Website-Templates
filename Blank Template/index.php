<?php 
// Delete This in Production
$request = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// If the requested file exists (CSS, JS, images), serve it normally
if ($request && file_exists($request)) {
    return false;
}

// Default page if visiting "/"
$_GET['page'] = $request ?: 'home';





// Allowed Pages
$allowedPages = ['home', 'about', 'contact', 'facebook', 'services'];

// Getting current page
$page = $_GET['page'] ?? '';

// Validate Page
if (!in_array($page, $allowedPages)) {
    $page = 'home';
};

// Setting SEO Meta Tage with Page Specific Data
$SEO = "app/SEO/$page.html";

// Setting CSS File Path with Page Specific Data
$CSS = "app/styles/$page.css";

$shorten_url = "app/templates/$page";
// Checking to see if HTML File Exists, If Not then PHP
if (file_exists("$shorten_url.html")) {
    $HTML = "$shorten_url.html";
}
else if (file_exists("$shorten_url.php")) {
    $HTML = "$shorten_url.php";
} 
else {
    $HTML = "app/templates/404.html";
}

// Setting JavaScript File Path with Page Specific Data
$JavaScript = "app/controllers/$page.js";


// Including The Base Template
include('app/templates/base.php');