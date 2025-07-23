<?php

if ($_SERVER['REQUEST_URI'] == '/') {
    include 'pages/main.php';
} elseif ($_SERVER['REQUEST_URI'] == '/shop') {
   include 'pages/shop.php';
} else {
   include 'components/404.php';
}

