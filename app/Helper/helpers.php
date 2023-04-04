<?php

function convertGenre($novel) {
    $genreNotFormatted = '';
    foreach($novel->genres as $genre) {
        $genreNotFormatted .= $genre->name . ', ';
    }
    $genreFormatted = rtrim($genreNotFormatted, ', ');
    return $genreFormatted;
}