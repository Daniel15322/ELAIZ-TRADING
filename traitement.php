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



  if(isset($_POST["ok"])){
    /*var_dump($_POST);*/
   $nom = $_POST["nom"];
    $email = $_POST["email"];
    $messagev = $_POST["messagev"];
    echo $nom ,"<br>";
    echo $email ,"<br>";
    echo $messagev ,"<br>";


    $sql = ("INSERT INTO contact (nom , email, messagev) VALUES  (:nom, :email, :messagev)");
    $stmt = $bdd->prepare($sql);
    

    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':messagev',$messagev);
        $stmt->execute();
    echo "Message enregistré";
}

?>
