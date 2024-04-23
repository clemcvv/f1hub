<?php 
include "fonctionsPHP/fonctionsGenerales.php";
include "fonctionsPHP/fonctionsPiloteEcurie.php";


include "fonctionsPHP/fonctionsNavigationBarre.php";

lienCss("CSS/nav.css");
navigationBarre();


$resultat = obtenirDonnees("SELECT  nomPilote, prenomPilote, imgDriver, championMonde, nomPays, imgDrapeauPays, 
                                    nomEcurie, imageEcurie, championConstructeur, logoEcurie
                            FROM Pilote pi 
                            INNER JOIN Pays pa ON pa.idPays = pi.idPays 
                            INNER JOIN Ecurie ec ON ec.idEcurie = pi.idEcurie 
                            ORDER BY nomEcurie");
                            
lienCss("CSS/piloteEcurie.css");
contenuEcurie($resultat);
?>
