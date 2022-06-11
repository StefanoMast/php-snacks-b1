<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>


<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<?php
$keys = array_keys($posts);
var_dump($keys);
var_dump($posts[$keys[0]][0]["title"]);

for ($i = 0; $i < count($keys); $i++) { 
    $current_key = $keys[$i];
    echo "<h2>" . $current_key . "</h2>";
    $current_key_posts = $posts[$current_key];
    for ($j=0; $j < count($current_key_posts); $j++) { 
        $current_post = $current_key_posts[$j];
        echo "<h3>" . $current_post["title"] . "</h3>";
        echo "<p>" . $current_post["author"] . "</p>";
        echo "<p>" . $current_post["text"] . "</p>";
    }
}
?>
</body>
</html>