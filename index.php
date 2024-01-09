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
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootsrap -->
    <!-- Il mio foglio di stile -->
    <link rel="stylesheet" href="style.css">
    <!-- Il mio foglio di stile -->
</head>

<body>

    <main class="container">
        <table class="table" id="ms_table">
            <thead>
                <tr>
                    <?php
                    // Stampare le intestazioni della tabella con i nomi delle chiavi dell'array
                    foreach (array_keys($hotels[0]) as $key) {
                        echo "<th scope=\"col\">" . ucfirst(str_replace('_', ' ', $key)) . "</th>";
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ciclo esterno per attraversare gli hotel
                foreach ($hotels as $hotel) {
                    echo "<tr>";
                    // Ciclo interno per attraversare le informazioni di ciascun hotel
                    foreach ($hotel as $value) {
                        echo "<td>" . ($value === true ? 'Sì' : ($value === false ? 'No' : $value)) . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

</body>

</html>