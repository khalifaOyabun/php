<?php
// # variables et affichage
//     $nom = "BEYE";
//     $prenom = "Khalifa Ababacar";
//     // echo $nom;

//     $note1 = 10;
//     $note2 = 15;
//     $moyenne = ($note1 + $note2) / 2;

//     // echo 'Bonjour ' . $prenom . ' ' . $nom . "\n" . ' vous avez une moyenne de ' . $moyenne . "\n";
//     // echo "$prenom $nom \n vous avez une moyenne de $moyenne";

// # tableaux à une dimension

//     $notes = [10, 20];
//     $notess = array(10, 20);
//     // echo $notes[1] . "\n";
//     // echo $notess[1];

// # matrices & tableaux à plusieurs dimensions

//     $eleve = ['khalifa', 'Beye', [12,10,2000], [18]];
//     // echo $eleve[2][1];

// # tableaux associatifs

//     $eleve = [
//         "nom" => "Beye",
//         "prenom" => "Khalifa",
//         "notes" => [12,15,10]
//     ];
//     // echo $eleve["prenom"] . "\n";
//     // echo $eleve["notes"][2];
//     // print_r($eleve);

// # les conditions

//     // $note = readline("Entrez votre note : ");
//     if ($note >= 10) {
//         // echo "Bravo vous avez la moyennne";
//     } else {
//         // echo "Dommage vous n'avez pas la moyenne";
//     }

//     // $action = readline("Entrez votre action : (1: attaquer, 2: défendre, 3: passer) ");

//     switch ($action) {
//         case 1:
//             // echo "J'attaque";
//         break;
//         case 2:
//             // echo "Je défends";
//         break;
//         case 3:
//             // echo "Je passe";
//         break;
        
//         default:
//             // echo "Commande inconnue";
//         break;
//     }

# Les boucles

// Demande à l'utilisateur de rentrer une note ou de taper "fin"
// chaque note est sauvegardée dans un tableau
// à la fin on affiche le tableau de note sous forme de liste

// $noteSaisie = readline("Saisir une note: ");
// $notes[] = $noteSaisie;


// while($noteSaisie !== "fin") {
//     $noteSaisie = readline("Saisir une note: ");
    
//     if ($noteSaisie !== "fin") {
//         $notes[] = $noteSaisie;    
//     } else {
//         echo "fin de saisie\n";
//         foreach ($notes as $note) {
//             echo "- $note \n";
//         }        
//     }
// }

// On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin
// On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert
// $nouveauCreneau = "o";
// $heureOuverture = null;
// $heureFermeture = null;
// while ($nouveauCreneau == "o") {
//     $nouveauCreneau = readline("Voulez vous rajouter un nouveau créneau? (o/n) : ");
    
//     if ($nouveauCreneau === "o") {
        
//         $heureOuverture = readline("heure d'ouveture du magasin? : ");
//         $heureFermeture = readline("heure de fermeture du magasin? : ");

//         if (($heureOuverture > 24 || $heureFermeture > 24) || ($heureOuverture <= 0 || $heureFermeture <= 0)) {
//             echo "Saisir une heure normale \n";
//         } elseif ($heureOuverture > $heureFermeture) {
//             echo "L'heure de l'ouverture du magasin doit être inférieur à l'heure de fermeture du magasin \n";
//         }  
        
//     }
//     elseif(($nouveauCreneau === "n") && ($heureOuverture !== null && $heureFermeture !== null)) {
//         $heureSaisie = readline("Saisir une heure de visite: ");
        
//         if (($heureOuverture <= $heureSaisie) && ($heureSaisie < $heureFermeture)) {
//             echo "Le magasin est ouvert vous pouvez venir";
//             break;
//         } else {
//             echo "Le magasin est fermé. Revenez demain";
//             break;
//         }
//     } elseif(($nouveauCreneau === "n") && ($heureOuverture == null && $heureFermeture == null)) {
//         echo "Au revoir";
//         break;
//     } else {
//         echo "Commande inconnue !";
//     }
// }

include "functions.php";
var_dump(myfunc("c'est bon?"));
?>