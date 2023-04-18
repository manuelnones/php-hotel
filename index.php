<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4 . ' km'
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2 . ' km'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1 . ' km'
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5 . ' km'
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50 . ' km'
    ],

];
?>

<style>
    h1 {
        margin: auto;
        width: 200px;
    }

    table {
        border-collapse: collapse;
        display: inline-block;
    }

    td,
    th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    th {
        color: darkblue;

    }
</style>


<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>

<body>
    <h1>Hotel</h1>

    <?php
    foreach ($hotels as $hotel) {
        echo "<hr>";

        foreach ($hotel as $key => $contentKey) {

            if ($key != 'parking') {
                echo "<table style= color: red>
                        <tr>
                            <th>{$key}</th>
                        </tr>
                        <tr>
                            <td>{$contentKey}</td>
                        </tr>
                    </table>";

            } else {
                if ($hotel['parking'] == true) {
                    echo "<table>
                            <tr>
                                <th>{$key}</th>
                            </tr>
                            <tr>
                                <td> disponibile </td>
                            </tr>
                        </table>";
                } else {
                    echo "<table>
                            <tr>
                                <th>{$key}</th>
                            </tr>
                            <tr>
                                <td> non disponibile </td>
                            </tr>
                        </table>";
                }
            }
        }
    }
    ?>

</body>

</html>