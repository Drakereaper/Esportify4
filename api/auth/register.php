<?php
declare(strict_types=1);
session_start();
header('Content-type: application/json');

//Charger la configuration (connexion pdo)
require __DIR__ . '/../config.php';

try {
    $email      = trim($_POST['email'] ?? '');
    $nickname   =trim($_POST['nickname'] ?? '');
    $password   =$_POST['password'] ?? '';
    $confirm    =$_POST['password_confirm'] ?? '';
    $roleName   =$_POST['role'] ?? 'joueur'; //Par défaut joueur

    //Validation basique des entrées
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Adresse e-mail invalide.");
    }

    if (strlen($nickname) < 3 || strlen($nickname) > 80) {
        throw new Exception("Le pseudo doit contenir entre 3 et 80 caractères.");
    }

    if (strlen($password) < 8) {
        throw new Exception("Le mot de passe doit comporter au moins 8 caractères.");
    }

    if($password !== $confirm) {
        throw new Exception(("Les mots de passe ne correspondent pas."));
    }

    if (in_array($roleName, ['joueur', 'organisateur'])) {
        throw new Exception("Type d'utilisateur non autorisé.");
    }

    $pdo= db();

    //Vérifier si l'email existe déjà
    $check = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ? LIMIT 1");
    $check->execute([$email]);
    if ($check->fetch()) {
        throw new Exception("Cet e-mail est déjà utilisé.");
    }
    // Hachage du mot de passe
    $hash = password_hash($password, PASSWORD_DEFAULT);

    //Insertion du nouvel utilisateur
    $insert = $pdo->prepare("INSERT INTO utilisateurs (email, password_hash, nickname, role_id) VALUES (?, ?, ?, ?)");
    $insert->execute([$email, $hash, $nickname, $roleID]);

    //Réponse succès
    echo json_encode([
        'status'    => 'ok',
        'message'   => 'Inscription réussie ! Vous pouvez vous connecter.'
    ]);
} catch (Throwable $e) {
    echo json_encode([
        'status'    => 'error',
        'message'   => $e->getMessage()
    ]);
}
