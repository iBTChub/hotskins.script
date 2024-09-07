<?php

// Define the base path for required files
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/platform/requires/');

// Include key configuration files
$requiredFiles = [
    'nucleus.php',
    'connect.php',
    'install.php',
    'upgrade.php',
    'account.php'
];

foreach ($requiredFiles as $file) {
    $filePath = BASE_PATH . $file;
    
    if (file_exists($filePath)) {
        require $filePath;
    } else {
        // Handle the error if the file is not found
        error_log("Required configuration file missing: $filePath");
        // Optionally display an error message or halt the script
        die("A required configuration file is missing. Please contact support.");
    }
}
