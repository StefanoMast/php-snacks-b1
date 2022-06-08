<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>

<body>
<!--
[*] Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
    Ogni array avrà:
[*] una squadra di casa e una squadra ospite
[*] punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
[*] Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
-->
        <?php
        $matches = [
            [
                "team_first" => "Squadra 1",
                "team_first_points" => 99,
                "team_second" =>  "Squadra 2",
                "team_second_points" => 97,
            ],
            [
                "team_first" => "Squadra 3",
                "team_first_points" => 83,
                "team_second" =>  "Squadra 4",
                "team_second_points" => 21,
            ],
            [
                "team_first" => "Squadra 5",
                "team_first_points" => 53,
                "team_second" =>  "Squadra 6",
                "team_second_points" => 65,
            ],
            [
                "team_first" => "Squadra 7",
                "team_first_points" => 12,
                "team_second" =>  "Squadra 8",
                "team_second_points" => 34,
            ],
        ];

        $matches_length = count($matches);
        ?>

        <?php for ($i = 0; $i < $matches_length; $i++) { ?>
            <h2>
                <?php
                echo $matches[$i]["team_first"] . " - " . $matches[$i]["team_second"] .
                    " | " . $matches[$i]["team_first_points"] . "-" . $matches[$i]["team_second_points"]
                ?>
            </h2>
        <?php } ?>
</body>
</html>