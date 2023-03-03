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
}

// Definisco oggetto 1
$rambo = new Movie ('Rambo',['action', 'crime', 'romantic'], 'Ted Kotcheff', 'Sylvester Stallone, Richard Crenna', 1982, '196 minuti', 2);

// Definisco oggetto 2
$pulpFiction = new Movie ('Pulp Fiction', ['drama', 'pulp', 'romantic'], 'Quentin Tarantino', 'Uma Thurman, John Travolta, Harvey Keitel', 1994, '199 minuti', 5, 'Si incrociano le strade di personaggi legati al crimine. Un pugile che mente a un capo banda, due sicari che discutono massaggi ai piedi e panini, una coppia che rapina una caffetteria e altri danno vita a un dramma criminale comico quanto brutale.');

?>


<!-- Stampo in pagina 2 oggetti -->
<?php 
echo '<h2>Movie 1:</h2>';
var_dump($rambo);

echo '<h2>Movie 2:</h2>';
var_dump($pulpFiction);

?>