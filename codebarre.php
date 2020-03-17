<?php
    include_once 'codebarre.class.php';



    $codebar = new Codebar ();

    echo '"$codebar->getZoneNormale()" . "$codebar->partie1()" . "$codebar->getZoneCentrale()" . "$codebar->partie2()" . "$codebar->getZoneNormale()"';

    echo "Voici votre code barre : " . "";