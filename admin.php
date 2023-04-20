<?php
session_start();
// var_dump($_SESSION);
if(!isset($_SESSION['user'])) {
    echo "Vous n'êtes pas autorisé à être ici !";
} else {
    echo " Bienvenu l'ami !" . $_SESSION['user'];
}