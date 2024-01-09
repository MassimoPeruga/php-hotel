<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>

    <main>
        <ol>
            <?php
            // Ciclo esterno per attraversare gli hotel
            foreach ($hotels as $hotel) {
                // Inizia la lista non ordinata per ogni hotel
                echo '<li><ul>';

                // Ciclo interno per attraversare le informazioni di ciascun hotel
                foreach ($hotel as $key => $value) {
                    // Aggiunge ogni informazione come elemento di lista
                    echo '<li>' . ucfirst(str_replace('_', ' ', $key)) . ': ' . ($key === 'parking' ? ($value ? 'Yes' : 'No') : $value) . '</li>';
                }

                // Chiude la lista non ordinata per ogni hotel
                echo '</ul><hr></li>';
            }
            ?>
        </ol>
    </main>

</body>

</html>