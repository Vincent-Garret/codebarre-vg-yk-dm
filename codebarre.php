<?php
    include_once 'codebarre.class.php';



    $codebar = new CodeBar($_GET['codebarre']);
    $codebar->affiche();


    //$codebar->affiche("$codebar->getZoneNormale()" . "$codebar->partie1()" . "$codebar->getZoneCentrale()" . "$codebar->partie2()" . "$codebar->getZoneNormale()");
    // echo '"$codebar->getZoneNormale()" . "$codebar->partie1()" . "$codebar->getZoneCentrale()" . "$codebar->partie2()" . "$codebar->getZoneNormale()"';

    //echo "Voici votre code barre : " . "";

    //echo "Ca fonctionne mais pour le moment c'est en cours de dev' !"