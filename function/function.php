<?php

function connection(): PDO{
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME , USER, PASSWORD);
    return $conn;
}

function view(string $file_name): string{
    return VIEWS . '/' . $file_name . '.php';
}

function assets(string $file_name): string{
    return BASE_URL . '/assets/' . $file_name;
}