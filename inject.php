<pre>
<?php

    require_once "config.php";

    $capteur = (isset($_GET['capteur'])) ? $_GET['capteur'] : null;
    $comptes = 0;
    if ($capteur === 'entree') $comptes = 1;
    if ($capteur === 'sortie') $comptes = -1;
    echo("capteur $capteur, comptes $comptes\n");

    if($comptes){
        
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$conn->connect_error){
            echo("connection db réussite...\n");
        
            $result = $conn->query("UPDATE `jauge` SET `compteur` = `compteur` + $comptes");
            if(!$result) echo($conn->error);
            else echo('données enregistrées avec succès\n');
            $conn->close();
        }

    else die ("erreur de connexion à la base de données");  

    }
?>
</pre>