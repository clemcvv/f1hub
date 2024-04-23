<?php 
include "fonctionsPHP/fonctionsGenerales.php";
include "fonctionsPHP/fonctionsCalendrier.php";

include "fonctionsPHP/fonctionsNavigationBarre.php";

lienCss("CSS/nav.css");
navigationBarre();

$dateActuelle = date("Y-m-d");

$resultat = obtenirDonnees("SELECT nomPays,imgDrapeauPays,nomCircuit,imgCircuit,DateCourse 
                            FROM pays p
                            INNER JOIN course c ON p.idPays=c.idPays
                            INNER JOIN datecourse d ON d.idcourse = c.idCourse
                            WHERE DateCourse > '$dateActuelle' 
                            ORDER BY DateCourse ASC");

$resultatPassed = obtenirDonnees("SELECT nomPays,imgDrapeauPays,nomCircuit,imgCircuit,DateCourse 
                                    FROM pays p
                                    INNER JOIN course c ON p.idPays=c.idPays
                                    INNER JOIN datecourse d ON d.idcourse = c.idCourse
                                    WHERE DateCourse < '$dateActuelle' 
                                    ORDER BY DateCourse DESC");
                            
lienCss("CSS/calendrier.css");
contentCalendar($resultat,$resultatPassed);
?>