<?php function contenuEcurie($resultats) { ?>

    <h1><p>Pilotes et écuries</p></h1>

    <?php 
    // Diviser le tableau en sous-tableaux de deux éléments chacun
    $sousTableaux = array_chunk($resultats, 2);

    // Boucler sur les sous-tableaux
    foreach($sousTableaux as $sousTableau) { 
        $resultat = $sousTableau[0]
        ?>

        <!-- CONTENU ECURIE GRILLE -->
        <div class="contentEcurie">
        <!-- les images sont encodées en Hexa dans la base le code : (src="data:image/jpeg;base64,</?php base64_encode(IMAGE) ?>")
             permet de le convertir-->
            <!-- LOGO ENORME SUR GRILLE -->       
            <img class="bigLogo" src="data:image/png;base64,<?= base64_encode($resultat['logoEcurie']) ?>" alt="Gros logo de l'ecurie <?= $resultat['nomEcurie'] ?> "/>
               
            <!-- TITRE ECURIE -->
            <div id="t" class="titreEcurie"<?php $resultat['nomEcurie'] ?> >
                    <p><h2><?= $resultat['nomEcurie'] ?></h2> <img class="minLogoTitle" src="data:image/jpeg;base64,<?= base64_encode($resultat['logoEcurie']) ?>" alt="Logo de l'ecurie <?= $resultat['nomEcurie'] ?> "/></p>
                </div>

                <!-- IMAGE VOITURE -->
                <div id="f">
                    <img class="imgCar" src="data:image/jpeg;base64,<?= base64_encode($resultat['imageEcurie']) ?>" alt="Monoplace de l'ecurie <?= $resultat['nomEcurie'] ?> "/>

                    <?php 
                        //afficher le nombre de champion du monde et la coupe si et seulement si il est superieur à zero
                        if( $resultat['championConstructeur']!=0 ){ ?>
                            <!-- CONTENU COUPE NUM -->
                            <div class="numCopaCar"> 
                                    <!-- image coupe et nombre champion du monde -->
                                    <p><img src="IMG/imgIcon/copaLogo.png" alt="logo d'un trophée"><?= $resultat['championConstructeur'] ?></p>  
                            </div>
                        <?php } ?>
                </div>

            <?php 
            /*boucler les elements du sous tableau (2 fois car les sous tableaux sont de taille 2 car 2 pilotes max par écurie)
            permet d'afficher les deux pilotes dans le meme content */
            foreach($sousTableau as $resultat) { ?>

                <!-- CONTENU PILOTE -->
                <div class="contentPilote">

                    <!-- CONTENU IMG LEGENDE -->
                    <figure class="pilote">

                        <!-- CONTENU COUPE NUMERO IMAGE PILOTE-->
                        <div class="piloteCopa">

                        <?php 
                        //afficher le nombre de champion du monde et la coupe si et seulement si il est superieur à zero
                        if( $resultat['championMonde']!=0 ){ ?>
                            <!-- CONTENU COUPE NUM -->
                            <div class="copaNum"> 
                                    <!-- image coupe et nombre champion du monde -->
                                    <p><img src="IMG/imgIcon/copaLogo.png" alt="logo d'un trophée"><?= $resultat['championMonde'] ?></p>  
                            </div>
                        <?php } ?> 

                            <!-- IMAGE PILOTE -->
                            <img class="imgPilote" src="data:image/jpeg;base64,<?= base64_encode($resultat['imgDriver']) ?>" alt="Photo de profil du pilote <?= $resultat['prenomPilote'] ?> <?= $resultat['nomPilote'] ?> "/>
                        </div>

                        <!-- LEGENDE DE L'IMAGE -->
                        <figcaption class="legendPilote"> 
                            <!-- Texte prenom et nom du pilote suivis de son drapeau -->
                            <p><?= $resultat['prenomPilote'] ." ". $resultat['nomPilote']  ?></p> 
                            <img src="data:image/jpeg;base64,<?= base64_encode($resultat['imgDrapeauPays']) ?>" alt="Drapeau du pays <?= $resultat['nomPays'] ?>" />

                        </figcaption>
                    </figure>
                </div>
            <?php } ?>
        </div>

         <!-- LIGNE SEPARATION -->
        <hr>
    <?php }
}
?>




