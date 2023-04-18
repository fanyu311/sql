//meme chose que search.php, just pour faire exercise
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
    <input type="text" name="ville">
    <input type="submit" value="Go">
</form>

//vient de fichier get.php
<?php
// si le nom de la ville est défini et n'est pas vide 
if( isset($_GET["ville"]) && !empty($_GET["ville"]) ){

    // ICI TOUT MON CODE POUR FAIRE MA CONNEXION ET MA REQUETE
    $ville =  htmlentities($_GET["ville"]);
    echo "Vous avez indiqué la ville:" .$ville;

    //vient de fichier pdo.php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "training";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    $query = "SELECT ville_nom FROM villes_france_free LIMIT 12";
    $stmt = $conn->prepare($query);
    $stmt->execute();
   // set the resulting array to associative
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($result as $k=>$v){
    
    echo "<p>" . $v["ville_nom"]. "</p>";
   }
//    echo "<pre>";
//    var_dump($result);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



} else {
    echo "veuillez indiquer la ville...";
}
?>
</body>
</html>