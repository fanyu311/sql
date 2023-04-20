<?php
//permet de démarrer un session pour mémoriser des informations d'authentification
session_start();
// unset($_SERVER['PHP_AUTH_USER']);
$valid_passwords = array (
    // password carbonell
    "mario" => "74d39d8d7888022726298017c5010ca6",
    // password:1234
    // "admin" => "81dc9bdb52d04dc20036dbd8313ed055"
    "admin" => '$2y$10$YzPme5Sgdb.wMcuObnvEduMJPHA5qzrD.GjdJyxj7RniBU3Lk9l5e'
);
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
// grace a md5, il peut connaitre password 1234 egale le code md5
// $pass = md5($_SERVER['PHP_AUTH_PW']);
$pass_input = $_SERVER['PHP_AUTH_PW'];

$pass_db = $valid_passwords["admin"];

// $validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

$validated = (in_array($user, $valid_users)) && (password_verify($pass_input, $valid_passwords[$user]));

if (!$validated) {
  header('WWW-Authenticate: Basic realm="My Realm"');
  header('HTTP/1.0 401 Unauthorized');
  die ("Not authorized");
}

// If arrives here, is a valid user.
$_SESSION["user"] = $user;
echo "<p>Welcome $user.</p>";
echo "<p>Congratulation, you are into the system.</p>";
echo "<p>Votre mot_de_passe est en clair ! $pass_input </p>";

?>