<?php

class Functions {
    public static function connection(): PDO{
        $connexion = new PDO('mysql:dbname=' . Config::DB_NAME . ';host=' . Config::DB_HOST, Config::DB_USER, Config::DB_PASSWORD);
        $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

		return $connexion;
    }

    public static function view(string $file_name): string{
        return Config::VIEWS . '/' . $file_name . '.php';
    }

    public static function assets(string $file_name): string{
        return Config::BASE_URL . '/assets/' . $file_name;
    }

    public static function url(string $route) : string {
        return Config::BASE_URL . '/index.php?route=' . $route ;
    }

    public static function redirection(string $route) {
        return header("location" . Config::BASE_URL . '/index.php?route=' . $route );
    }

    public static function entrySafety($entry){
        $entry = trim($entry);
        $entry = htmlspecialchars($entry);
        echo $entry;
        
    }
}