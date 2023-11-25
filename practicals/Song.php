<?php
// Song.php
namespace Practicals;
class Song {
    // Properties
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor to initialize the Song object
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter method for retrieving the title of the song
    public function getTitle() {
        return $this->title;
    }

    // Setter method for setting the title of the song
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter method for retrieving the artist of the song
    public function getArtist() {
        return $this->artist;
    }

    // Setter method for setting the artist of the song
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter method for retrieving the genre of the song
    public function getGenre() {
        return $this->genre;
    }

    // Setter method for setting the genre of the song
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter method for retrieving the tempo of the song
    public function getTempo() {
        return $this->tempo;
    }

    // Setter method for setting the tempo of the song
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}
?>

