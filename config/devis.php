<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Offres de service de l'entreprise
    |--------------------------------------------------------------------------
    |
    | Quantites = nombres / m2
    |
    |   Prix unitaire = types_ouvrages + premier_type_materiel + deuxieme_type_materiel 
    |   + quantite de materiel de base + quantite de 
    |   materiel secondaire * nombre de m2 
    |
    |   TVA = Prix total x Montant de pourcentage tva/100
    |   Prix total = Prix hors taxe + tva
    \
     */

    'type_ouvrage' => [
        'ragréage' => 20,
        'pose_enduit_de_lissage_au_sol' => 12,
        'application_sous_couche_au_mur' => 8,
        'carrelage_sol' => 30,
        'pose_mosaique_au_mur' => 160,
        'pose_joints_de_carrelage' => 9
    ],

    'materiel_base' => [
        'céramique' => 30,
        'pierre_naturelle' => 40,
        'terres_cuites' => 50,
        'carreaux_de_terre' => 60
    ],
    
    'materiel_secondaire' => [
        'ciment_noir' => 5,
        'ciment_blanc' => 3
    ],

];
