<?php

function conectarDB(): mysqli {
    $host = getenv("DB_HOST") ?: "localhost";
    $user = getenv("DB_USER") ?: "root";
    $password = getenv("DB_PASSWORD") ?: "root";
    $database = getenv("DB_DATABASE") ?: "bienesraices_crud";

    $db = new mysqli($host, $user, $password, $database);

    if ($db->connect_error) {
        echo "Error no se pudo conectar";
        exit;
    } else {
        return $db;
    }
}
