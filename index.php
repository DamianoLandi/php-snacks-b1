<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Snack 1</h2>
    <?php 
            $numb_array = [];
            while (count($numb_array) < 15){
                $random_num = rand(0 , 100);

                if (!in_array($random_num, $numb_array)){   
                    $numb_array[] = $random_num;
                }
                };
                foreach ($numb_array as $number){
                    echo "<p> $number </p>";
                };
    ?>
    <hr>

    <h2>Snack 2</h2>

    <?php

    $students = [
        [
            "Nome" => "Mario",
            "Cognome" => "Rossi",
            "Voti" => [
                7, 8, 5, 6
            ],
        ],
        [
            "Nome" => "Luigi",
            "Cognome" => "Verdi",
            "Voti" => [
                9, 8, 7, 8
            ],
        ],
        [
            "Nome" => "Sandro",
            "Cognome" => "Bianchi",
            "Voti" => [
                3, 5, 5, 7
            ],
        ],
        [
            "Nome" => "Gabriele",
            "Cognome" => "Azzurri",
            "Voti" => [
                7, 8, 5, 6
            ],
        ],
    ];

    function get_average($array){
        $sum = 0;
        foreach ($array as $item){
            $sum += $item;
        };
        return ($sum / count($array));
    };

    ?>
</body>
</html>