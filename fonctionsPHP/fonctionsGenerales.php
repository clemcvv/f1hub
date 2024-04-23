<?php
// Se connecter à la base de données
function connexion(){
    try{
        $dsn = 'mysql:host=localhost;port=3306;dbname=f1hub';
        $connect = new PDO($dsn, 'root', '', array(PDO::ATTR_PERSISTENT => true));
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode d'erreur PDO exception
        return $connect;
    } catch(PDOException $e){
        die("Erreur : ". $e->getMessage());
    }
}

// Fonction pour récupérer les données et les stocker dans un tableau
function obtenirDonnees($requete){
    $connexion = connexion();
    $query = $requete;
    
    $statement = $connexion->query($query);
    $resultats = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $resultats;
}
?>

<?php function debutHtml($titre) { ?>
    <!DOCTYPE html>
    <html lang="fr" >
    <head>
      <meta charset="UTF-8">
      <title> <?php echo $titre; ?> </title>
    </head>
    <body>
<?php } ?>


<?php function lienCss($chemin){ ?>
    <link rel="stylesheet" href=<?= $chemin ?> >
    <?php }; 
?>



<?php function finHtml() { ?>
        </body>
    </html>
<?php } ?>