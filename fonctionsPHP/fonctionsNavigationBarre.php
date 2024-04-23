<?php  
function navigationBarre() { ?>

        <!-- BARRE NAVIGATION -->
        <header class="header"> 

            <!-- CONTENT LOGO -->
            <div class="logo"> 
                <a href="#"> <!-- renvoie vers la page default  -->
                    <img src="IMG/imgIcon/logoF1HUBmin.png" alt=""> <!-- source du logo -->
                </a>
            </div>
            <!-- CONTENT MENU  -->
            <div class="navigation"> 
                <input type="checkbox" class="toggle-menu"> <!-- bouton menu en checkbox qui sera invisible sous le hamburger -->
                
            <div class="hamburger"></div> <!-- logo -->

                <ul class="menu"> <!-- liste menu -->
                    <li><a class="pad" href="calendrier.php">Calendrier</a></li>
                    <li><a class="pad"  href="piloteEcurie.php">Pilotes/Ecuries</a></li>
                    <li><a class="pad"  href="#">Circuits</a></li>
                    <li><a class="pad"  href="#">Quelle est ton écuries ?</a></li>
                    <li><a class="pad"  href="#">Histoire F1</a></li>
                    <li><a class="logoPad" href="#"> <img class="imgAccount" src="IMG/imgIcon/AccountlogoRed.png" alt=""> </a> <li>
                </ul>
            </div>

        </header>
<?php }; ?>


