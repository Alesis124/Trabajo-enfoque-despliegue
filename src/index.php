<?php
//conexión a MySQL
$host = getenv('DB_HOST') ?: 'mysql';
$dbname = getenv('DB_NAME') ?: 'app_db';
$user = getenv('DB_USER') ?: 'app_user';
$password = getenv('DB_PASSWORD') ?: 'user_password_456';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Conexión a MySQL exitosa</h1>";
    echo "<p>Base de datos: <strong>$dbname</strong></p>";
    
    //versión de MySQL
    $version = $pdo->query('SELECT VERSION()')->fetchColumn();
    echo "<p>Versión MySQL: <strong>$version</strong></p>";
    
    //tablas db
    $tables = $pdo->query("SHOW TABLES")->fetchAll(PDO::FETCH_COLUMN);
    if ($tables) {
        echo "<p>Tablas en la base de datos:</p><ul>";
        foreach ($tables as $table) {
            echo "<li>$table</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay tablas en la base de datos.</p>";
    }
    
} catch (PDOException $e) {
    echo "<h1>Error de conexión</h1>";
    echo "<p><strong>Mensaje:</strong> " . $e->getMessage() . "</p>";
    echo "<p><strong>Código:</strong> " . $e->getCode() . "</p>";
}

//info server
echo "<hr>";
echo "<h2>Información del servidor</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Servidor: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
?>
