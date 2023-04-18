<?php
// si le nom de la ville est défini et n'est pas vide 
if( isset($_GET["ville"]) && !empty($_GET["ville"]) ){
    // ICI TOUT MON CODE POUR FAIRE MA CONNEXION ET MA REQUETE
    echo "Vous avez indiqué la ville:" . htmlentities($_GET["ville"]);
} else {
    echo "veuillez indiquer la ville...";
}
?>
<form>
    <input type="text" name="ville">
    <input type="submit" value="Go">
</form>
