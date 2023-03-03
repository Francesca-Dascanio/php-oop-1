<?php

// Definisco classe 
class Movie {

    // Variabili di istanza -> private sulla base dei dati necessari da validare per permettere all'utente ricerca
    private $title;
    private $genre;
    private $director;
    private $cast;
    public $year;
    public $duration;
    public $description;
    public $vote;

    // Funzione speciale -> costruttore
    function __construct(string $title, array $genre, string $director, string $cast, int $year, string $duration, int $vote, string $description = 'None') {
        // Non dovrebbe esserci $_title? Dà errore.
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->cast = $cast;
        $this->year = $year;
        $this->duration = $duration;
        $this->vote = $vote;
        $this->description = $description;
    }

    // Metodi -> per ciascuna variabile private creo una funzione setter e una funzione getter
    // Metodi per title
    public function setTitle ($title) {
        if (isset($title)) {
            $this->title = $title;
        }
        else {
            echo 'Error';
        }
    }
    public function getTitle () {
       return $this->title;
    }

    // Metodi per genre
    public function setGenre ($genre) {
        if (is_string($genre) && strlen($genre) > 3) {
            $this->genre = $genre;
        }
        else {
            echo 'Error';
        }
    }
    public function getGenre () {
       return $this->genre;
    }

    // Metodi per director
    public function setDirector ($director) {
        if (is_string($director) && strlen($director) > 3) {
            $this->director = $director;
        }
        else {
            echo 'Error';
        }
    }
    public function getDirector () {
       return $this->director;
    }

    // Metodi per cast
    public function setCast ($cast) {
        if (is_string($cast) && strlen($cast) > 3) {
            $this->cast = $cast;
        }
        else {
            echo 'Error';
        }
    }
    public function getCast () {
       return $this->cast;
    }

    public function RenderHTML () {
        return '<h5 class="card-title"'.
                $this->title.
                'h5/>';
       }   
}

// Definisco oggetto 1
$rambo = new Movie ('Rambo',['action', 'crime', 'romantic'], 'Ted Kotcheff', 'Sylvester Stallone, Richard Crenna', 1982, '196 minuti', 2);

// Definisco oggetto 2
$pulpFiction = new Movie ('Pulp Fiction', ['drama', 'pulp', 'romantic'], 'Quentin Tarantino', 'Uma Thurman, John Travolta, Harvey Keitel', 1994, '199 minuti', 5, 'Si incrociano le strade di personaggi legati al crimine. Un pugile che mente a un capo banda, due sicari che discutono massaggi ai piedi e panini, una coppia che rapina una caffetteria e altri danno vita a un dramma criminale comico quanto brutale.');

?>


<!-- Stampo in pagina 2 oggetti -->
<!-- <?php 
echo '<h2>Movie 1:</h2>';
var_dump($rambo);

echo '<h2>Movie 2:</h2>';
var_dump($pulpFiction);

?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movies</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center my-3">
                            Movies
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card d-flex" style="width: 18rem;">
                            <div class="card-body">
                                <!-- Title -->
                                <h5 class="card-title">
                                    <?php
                                        echo $rambo->getTitle();
                                    ?>
                                </h5>
                                <!-- Director -->
                                <h6 class="card-subtitle mb-2 text-muted">
                                    <?php
                                        echo $rambo->getDirector();
                                    ?>
                                </h6>
                                <!-- Year | Duration | vote-->
                                <div>
                                    <span>
                                        Year: 
                                        <?php
                                            echo $rambo->year;
                                        ?>
                                    </span>
                                    <span>
                                        | Duration:
                                        <?php
                                            echo $rambo->duration;
                                        ?>
                                    </span>
                                    <span>
                                        | Vote:
                                        <?php
                                            echo $rambo->vote;
                                        ?>
                                    </span>
                                </div>

                                <!-- Genre con ciclo foreach -->
                                <div>
                                    <span>
                                        Genre:
                                    </span>
                                    <ul>
                                        <?php
                                            foreach ($rambo->getGenre() as $singleGenre) {
                                                echo '<li>'.$singleGenre.'</li>';
                                            }
                                        ?>
                                    </ul>
                                </div>

                                <!-- Cast con ciclo foreach -->
                                <div>
                                    <span>
                                        Cast:
                                    </span>
                                    <span>
                                        <?php
                                            echo $rambo->getCast();
                                        ?>
                                    </span>
                                </div>
                    
                                <!-- Description -->
                                <div>
                                    <div>
                                        Description:
                                    </div>
                                    <p class="card-text">
                                        <?php
                                            echo $rambo->description;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>