<?php
// $prenom = 'Marc';
// $nom = 'Doe';
// $note1 = 10;
// $note2 = 20;

// echo "Bonjour $prenom $nom vous avez eu " . ($note1 + $note2)/2 ." de moyenne";

// $notes = [10, 20, 23, 56, 5];

// echo $notes[3];

$eleves = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];

$eleves['prenom'] = 'Jean' ;

echo $eleves['nom'] . ' '. $eleves['prenom'];

print_r($eleves['notes']);