<?php

# Load all PHP files from the functions directory
try {
    foreach (glob(FUNCTIONS . '/*.php') as $file) {
        if (file_exists($file)) {
            require_once $file;
        }
    }
} catch (Exception $e) {
    # Handle exceptions related to file inclusion
    error_log('Error including function files: ' . $e->getMessage());
    echo 'An error occurred while loading function files.';
}

# Autoload PHP classes
spl_autoload_register(function ($class_name) {
    try {
        $file = CLASSES . '/' . $class_name . '.class.php';
        if (file_exists($file)) {
            require_once $file;
        } else {
            throw new Exception("Class file $file does not exist.");
        }
    } catch (Exception $e) {
        # Handle exceptions related to class autoloading
        error_log('Error loading class: ' . $e->getMessage());
        echo 'An error occurred while loading class files.';
    }
});