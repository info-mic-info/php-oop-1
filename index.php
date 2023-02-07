<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    
class Movie {
    public $title;
    public $publication_date;
    public $og_language;

    public function __construct($movie_title, $movie_publication_date, $movie_og_language){
        $this->title = $movie_title;
        $this->publication_date = $movie_publication_date;
        $this->og_language = $movie_og_language;
    }

    public function isItalian(){
        $lang = $this->og_language;
        $message = '';
        if ($lang == 'it'){
            $message = 'Il film è italiano';
        } else{
            $message = 'Il film non è italiano';
        }
        return $message;
    }
}


$lavitaebella = new Movie('La vita è bella', '1997', 'it');
$titanic = new Movie('Titanic', '1997', 'en');

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>
</head>

<body>
    <?php

        foreach($lavitaebella as $key=>$value){
            echo '<pre>';
            echo $value;
            echo '</pre>';
        };
        echo $lavitaebella->isItalian();

        echo '<br>';
        foreach($titanic as $key=>$value){
            echo '<pre>';
            echo $value;
            echo '</pre>';
        };
        echo $titanic->isItalian();
    ?>
</body>

</html>