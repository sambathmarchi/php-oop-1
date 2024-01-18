<?php
require __DIR__ . '/models/Movies.php';

$Movie1 = new Movie("Pacific Rim", "Sci-Fiction", "English");
$Movie2 = new Movie("Annabelle", "Horror", "English");
$Movie3 = new Movie("Titanic", "Drama, Historical", "English");



var_dump($Movie1);
echo $Movie1->getMoviedetails();
var_dump($Movie2);
echo $Movie2->getMoviedetails();
var_dump($Movie3);
echo $Movie3->getMoviedetails();