<?php

// Database class
class db
{
    // PDO object
    private static $pdo = null;

    // SQL statement
    private static $statement = null;

    // Connect to the database using PDO
    public static function connect($showError = true)
    {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO('mysql:host=' . config('DB_HOST') . ';dbname=' . config('DB_NAME') . ';charset=utf8', config('DB_USER'), config('DB_PASS'), [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'"]);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            } catch (PDOException $e) {
                if ($showError) {
                    echo 'Database connection error<br><br>';
                    echo 'Error details:<br>' . htmlspecialchars($e->getMessage());
                    echo '<hr>';
                }
                return null;
            }
        }

        return self::$pdo;
    }

    // Fetch a single row from the database
    public static function fetchRow($query, $params = [])
    {
        if (self::connect(false)) {
            self::$statement = self::$pdo->prepare($query);
            self::$statement->execute($params);

            return self::$statement->fetch(PDO::FETCH_ASSOC);
        }

        return null;
    }

    // Fetch all rows from the database
    public static function fetchAllRows($query, $params = [])
    {
        if (self::connect(false)) {
            self::$statement = self::$pdo->prepare($query);
            self::$statement->execute($params);

            return self::$statement->fetchAll(PDO::FETCH_ASSOC);
        }

        return [];
    }

    // Fetch a single column from the database
    public static function fetchColumn($query, $params = [])
    {
        if (self::connect(false)) {
            self::$statement = self::$pdo->prepare($query);
            self::$statement->execute($params);

            return self::$statement->fetchColumn();
        }

        return null;
    }

    // Insert a row into the database
    public static function insert($query, $params = [])
    {
        if (self::connect(false)) {
            self::$statement = self::$pdo->prepare($query);

            return self::$statement->execute($params) ? self::$pdo->lastInsertId() : 0;
        }

        return 0;
    }

    // Update or delete a row in the database
    public static function updateOrDelete($query, $params = [])
    {
        if (self::connect(false)) {
            self::$statement = self::$pdo->prepare($query);

            return self::$statement->execute($params);
        }

        return false;
    }

    // Execute SQL queries from a file
    public static function executeSqlFile($filePath)
    {
        if (!file_exists($filePath)) {
            return 0;
        }

        $fileContent = file_get_contents($filePath);
        $queries = explode(';', $fileContent);

        foreach ($queries as $query) {
            $query = trim($query);
            if (!empty($query)) {
                self::updateOrDelete($query);
            }
        }

        return 1;
    }
}
