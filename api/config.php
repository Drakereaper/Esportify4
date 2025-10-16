<?php
$envPath = dirname(__DIR__) . '/.env';
if(file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; //ignore les commentaires
        list($name, $value) = array_map('trim', explode('=', $line, 2));
        $_ENV[$name] = $value;
        putenv("$name=$value");
    }
}

$DB_HOST = getenv('DB_HOST');
$DB_NAME = getenv('DB_NAME');
$DB_USER = getenv('DB_USER');
$DB_PASS = getenv('DB_PASSWORD');
$DB_CHARSET = getenv('DB_CHARSET');

function db(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        global $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS, $DB_CHARSET;
        $dsn = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=$DB_CHARSET";

        $options = [
            PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES      => false,
        ];

        try {
            $pdo = new PDO($dsn, $DB_USER, $DB_PASS, $options);
        } catch (PDOException $e) {
            die(json_encode([
                'status' => 'error',
                'message' => 'Erreur de connexion à la base : ' . $e->getMessage()
            ]));
        }
    }
    return $pdo;
}