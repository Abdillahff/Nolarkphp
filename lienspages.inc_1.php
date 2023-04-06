<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

 
           
            $pages = array("route.php", "cross.php", "piste.php", "enfants.php", "team.php", "Simulateur.php", "nous-contacter.php");
            $noms = array ("Route", "Cross", "Piste", "Enfants", "La team", "Similateur", "Nous contacter");
            $nbLiens = count($pages);
            for ($i=0; $i < $nbLiens; $i++) { 
            echo '<li><a href="', $pages[$i], '">', $noms[$i], '</a></li>';
            }
            