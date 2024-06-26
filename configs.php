<?php
// config.php
require 'vendor/autoload.php';

define('BASE_URL', 'http://localhost/web_dav');

$uri = 'mongodb+srv://prihan:12345@cluster0.x3m6qzb.mongodb.net/?appName=Cluster0';

// Create a new client and connect to the server
$client = new MongoDB\Client($uri);

// You can add additional configuration or utility functions here if needed
