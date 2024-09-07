<?php

/**
 * Include the header template file.
 *
 * This function attempts to include the header template file from the specified path.
 * If the file does not exist, an error is logged.
 */

function includeHeader(): void
{
  $filePath = PLATFORM . '/requires/template/header.php';

  try {
    if (file_exists($filePath)) {
      require_once $filePath;
    } else {
      throw new Exception("Header file not found: $filePath");
    }
  } catch (Exception $e) {
    error_log($e->getMessage());
  }
}

/**
 * Include the footer template file and terminate script execution.
 *
 * This function attempts to include the footer template file from the specified path.
 * If the file does not exist, an error is logged. After including the footer,
 * the script execution is terminated.
 */

function includeFooter(): void
{
  $filePath = PLATFORM . '/requires/template/footer.php';

  try {
    if (file_exists($filePath)) {
      require_once $filePath;
    } else {
      throw new Exception("Footer file not found: $filePath");
    }
  } catch (Exception $e) {
    error_log($e->getMessage());
  }
  // Terminate script execution after including the footer
  exit;
}

/**
 * Include the sidebar template file.
 *
 * This function attempts to include the sidebar template file from the specified path.
 * If the file does not exist, an error is logged.
 */

function includeSidebar(bool $enabled = true): void
{
  // Skip including the sidebar if not enabled
  if (!$enabled) {
    return;
  }

  $filePath = PLATFORM . '/requires/template/sidebar.php';

  try {
    if (file_exists($filePath)) {
      require_once $filePath;
    } else {
      throw new Exception("Sidebar file not found: $filePath");
    }
  } catch (Exception $e) {
    error_log($e->getMessage());
  }
}