<?php

/**
 * Define the base path of the document root directory.
 * This constant represents the base directory for all relative paths.
 * Include key configuration files
 */

$requiredFiles = ['constants.php', 'nucleus.php', 'connect.php', 'install.php', 'upgrade.php', 'account.php'];

foreach ($requiredFiles as $file) {
   $filePath = $_SERVER['DOCUMENT_ROOT'] . '/platform/requires/' . $file;

   if (file_exists($filePath)) {
      require $filePath;
   } else {
      // Handle the error if the file is not found
      error_log("Required configuration file missing: $filePath");
      // Optionally display an error message or halt the script
      die("A required configuration file is missing. Please contact support.");
   }
}

require $_SERVER['DOCUMENT_ROOT'] . './assets/view/main.php';
