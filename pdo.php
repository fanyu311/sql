<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "training";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  $stmt = $conn->prepare("SELECT ville_nom FROM villes_france_free LIMIT 12");
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

