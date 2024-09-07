<?php

/**
 * Load configuration files and return them as an associative array.
 * This function reads all configuration files and merges their contents into one array.
 * 
 * @return array Loaded configurations.
 */

function loadConfigurations(): array
{
    $configFiles = [
        '/database.ini',
        '/freekassa.ini',
        '/settings.ini',
        '/upgrades.ini',
        '/vkontakte.ini'
    ];

    $config = [];
    foreach ($configFiles as $file) {
        $filePath = CONFIGS . $file;
        if (file_exists($filePath)) {
            $parsedConfig = parse_ini_file($filePath, false);
            if ($parsedConfig !== false) {
                $config = array_merge($config, $parsedConfig);
            } else {
                error_log("Failed to parse configuration file: $filePath");
            }
        } else {
            error_log("Configuration file not found: $filePath");
        }
    }
    return $config;
}

/**
 * Get or set a configuration value with exception handling.
 * Automatically loads configurations on the first call.
 *
 * @param string|null $key The configuration key to retrieve or set. If null, the entire configuration array is returned.
 * @param mixed|null $value Optional. If provided, sets the configuration value.
 * @return mixed Returns the configuration value if no $value is provided, or the entire array if $key is null.
 * @throws Exception If the specified key is not found in the configuration.
 */

function config(string $key = null, $value = null)
{
    // Static variable to store configurations
    static $config = null;

    // Load configurations only once
    if ($config === null) {
        $config = loadConfigurations();
    }

    try {
        // If no key is provided, return the entire configuration array
        if ($key === null) {
            return $config;
        }

        // If no value is provided, retrieve the configuration value for the given key
        if ($value === null) {
            if (isset($config[$key])) {
                return _filter($config[$key]);
            } else {
                throw new Exception("Configuration key not found: $key");
            }
        }

        // Set a new configuration value for the given key
        $config[$key] = $value;
        return true;

    } catch (Exception $e) {
        // Log the error message
        error_log($e->getMessage());
        // Return null if the key is not found
        return null;
    }
}
