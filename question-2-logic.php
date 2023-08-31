<?php

function isHasSpecialChar($word)
{
    /**
     * - [^a-zA-Z0-9-]: regex untuk mencocokkan kata yang memiliki karakter selain a-z, A-Z, 0-9, dan '-'
     * - (NOT)!(^[a-zA-Z0-9]*[?\.,]$): regex untuk mencocokkan kata yang memiliki kriteria:
     *  - [a-zA-Z0-9]*: karakter selain a-z, A-Z, 0-9, dan '-'
     *  - *[?\.,]$: huruf terakhir selain '?', '.', ','
     */
    if (preg_match('/[^a-zA-Z0-9-]/', $word) && !preg_match('/^[a-zA-Z0-9]*[?\.,]$/', $word)) {
        return true;
    } else {
        return false;
    }
}

function countWords($sentence)
{
    $words  = explode(" ", $sentence);
    $result = 0;
    foreach ($words as $word) {
        if (!isHasSpecialChar($word)) {
            $result++;
        }
    }
    return $result;
}