<?php

/**
 * Define the root path of the document root directory.
 * This constant represents the base directory for all relative paths.
 */

define('ROOT', $_SERVER['DOCUMENT_ROOT']);

/**
 * Define the platform path relative to the root directory.
 * This constant specifies the path to the platform directory where application files are located.
 */

define('PLATFORM', ROOT . '/platform');

/**
 * Define the path to the configuration files directory.
 * This constant specifies the directory where configuration files are located.
 */

define('CONFIGS', PLATFORM . '/configs');

/**
 * Define the path to the functions directory.
 * This constant specifies the directory where utility functions are stored.
 */

define('FUNCTIONS', PLATFORM . '/functions');

/**
 * Define the path to the classes directory.
 * This constant specifies the directory where PHP class files are located.
 */

define('CLASSES', PLATFORM . '/classes');

/**
 * Define the path to the libraries directory.
 * This constant specifies the directory where external libraries and dependencies are stored.
 */

define('LIBRARIES', PLATFORM . '/libraries');

/**
 * Define the path to the requires directory.
 * This constant specifies the directory where required files and scripts are stored.
 */

define('REQUIRES', PLATFORM . '/requires');