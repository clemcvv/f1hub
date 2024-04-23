<?php function contentCalendar($resultat,$resultatPassed){ ?>
            <!-- TITRE PRINCIPALE -->
            <h1>Calendrier 2024</h1>
        
            <!-- CALENDRIER CONTENU -->
            <div class="contentCalendar">

                <!--  ______________COURSES FUTURES______________ -->
                <?php 
                //variable pour changer la classe de la premiere course (premiere fois que l'on parcours la liste)
                $nextRace = true;
                //numRace commence à nombre de course déja passé + une (on affiche les course qui n'ont pas été courru en premier)
                $numRace = count($resultatPassed) + 1;
                //on parcours la listes des courses non effectué
                foreach($resultat as $result) { ?>

                    <!-- CONTENU LIGNE POUR L'IMG CIRCUIT-->
                    <div class="contentRow"> 

                        <!-- IMAGE DU CIRCUIT  -->
                        <img class="raceLogo" src="data:image/jpeg;base64,<?= base64_encode($result['imgCircuit']) ?>" alt="Schema circuit <?= $result['nomCircuit'] ?> "/>

                        <!-- LIGNE -->
                        <div class="row">

                            <!-- NUMERO DE LIGNE  (ajoute la class colorActu si c'est le premier parcours de la liste)  --> 
                            <p class="raceNum <?php if ($nextRace == true) {echo "colorActu";} ?>">
                                <?= $numRace."."?>
                            </p>

                            <!-- COURSE CONTENU -->
                            <div class="race">

                                <!-- IMAGE DRAPEAU -->
                                <img class="flag" src="data:image/jpeg;base64,<?= base64_encode($result['imgDrapeauPays']) ?>" alt="Drapeau du pays <?= $result['nomPays'] ?> "/>

                                <!-- NOM CIRCUIT (si premier parcours de liste mettre les classes colorActu et boldHunder) -->
                                <p class="raceName <?php if ($nextRace == true) {echo "colorActu boldHunder";} ?>"><?=$result['nomCircuit']?></p>

                                <!-- DATE COURSE -->
                                <div class="raceDate">
                                    <?php 
                                    //on recupere la date de la course et l'affiche sous la forme Jour/Mois en 3 lettres
                                    $date = date($result['DateCourse']); 
                                    ?>
                                    <p> <?php echo date("d/M", strtotime($date)) ?></p>
                                </div>
                            </div>
                            <!-- BARRE DE SEPARATION -->
                            <hr>
                        </div>
                    </div>
                <?php 
                //ajouter 1 lorsque l'on change de ligne. 
                $numRace++;
                //passer à faux pour ne pas mettre la classe colorActu aux autres lignes
                $nextRace=false;
                } ?>
                
                <!--  ______________COURSES PASSEES______________ -->
                <?php 
                //on parcours les courses deja effectué donc on part de la premiere course
                $numRaceP = 1;
                foreach($resultatPassed as $resultP) { ?>

                    <!-- CONTENU LIGNE POUR L'IMG CIRCUIT-->
                    <div class="contentRow"> 

                        <!-- IMAGE DU CIRCUIT  -->
                        <img class="raceLogo" src="data:image/jpeg;base64,<?= base64_encode($resultP['imgCircuit']) ?>" alt="Schema circuit <?= $resultP['nomCircuit'] ?> "/>
                        
                        <!-- LIGNE avec class colorPassed en plus-->
                        <div class="row colorPassed">

                            <!-- NUMERO DE LIGNE avec class colorPassed en plus --> 
                            <p class="raceNum colorPassed"><?= $numRaceP."." ?></p>

                            <!-- COURSE CONTENU -->
                            <div class="race" >

                                <!-- IMAGE DRAPEAU -->
                                <img class="flag" src="data:image/jpeg;base64,<?= base64_encode($resultP['imgDrapeauPays']) ?>" alt="Drapeau du pays <?= $resultP['nomPays'] ?> "/>

                                <!-- NOM CIRCUIT -->
                                <p class="raceName"><?=$resultP['nomCircuit']?></p>

                                <!-- DATE COURSE -->
                                <div class="raceDate">
                                    <?php
                                    //on recupere la date de la course et l'affiche sous la forme Jour/Mois en 3 lettres
                                    $date = date($resultP['DateCourse']); ?>
                                    <p> <?php echo date("d/M", strtotime($date)) ?></p>
                                </div>
                            </div>
                            <!-- BARRE DE SEPARATION -->
                            <hr>
                        </div>
                    </div>
                <?php
                //ajouter 1 lorsque l'on change de ligne. 
                $numRaceP++; 
                } ?>
                
        </div>

<?php } ?>