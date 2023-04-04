<?php

function convertGenre($novel) {
    $genreNotFormatted = '';
    foreach($novel->genres->sortBy(['name', 'asc']) as $genre) {
        $genreNotFormatted .= $genre->name . ', ';
    }
    $genreFormatted = rtrim($genreNotFormatted, ', ');
    return $genreFormatted;
}