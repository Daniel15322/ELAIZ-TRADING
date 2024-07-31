<?php
  $servername = "localhost";
  $username = "root";

  try{
      $bdd = new PDO("mysql:host=$servername;dbname=blc",$username);
      $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

  }
  catch(PDOException $e){
    echo "Erreur :".$e->getMessage();
  }

  if(isset($_POST["envoyer"])){
    /*var_dump($_POST);*/
   $nom = $_POST["nom"];
   $postnom = $_POST["postnom"];
   $prenom = $_POST["prenom"];
   $genre = $_POST["genre"];
   $lnaissance = $_POST["lnaissance"];
   $datenaissance = $_POST["datenaissance"];
   $email = $_POST["email"];
    echo $nom ,"<br>";
    echo $postnom ,"<br>";
    echo $lnaissance ,"<br>";

    $sql = ("INSERT INTO users (nom , postnom, prenom, genre, lnaissance, datenaissance, email) VALUES  (:nom, :postnom,:prenom,:genre,:lnaissance,:datenaissance,:email)");
    $stmt = $bdd->prepare($sql);
    

    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':postnom',$postnom);
    $stmt->bindParam(':prenom',$prenom);
    $stmt->bindParam(':genre',$genre);
    $stmt->bindParam(':lnaissance',$lnaissance);
    $stmt->bindParam(':datenaissance',$datenaissance);
    $stmt->bindParam(':email',$email);
        $stmt->execute();
    echo "INSCRIPTION REUSSIE";
  }

?>
