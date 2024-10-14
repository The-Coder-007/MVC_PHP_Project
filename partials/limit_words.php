<?php
// Function to limit the sort_desc to a maximum of 25 words
function limit_words($text, $limit = 25) {
    $words = explode(' ', $text); // Break the string into an array of words
    if (count($words) > $limit) {
        $words = array_slice($words, 0, $limit); // Take the first 25 words
        return implode(' ', $words) . '...'; // Rejoin and add '...' at the end
    }
    return $text; // Return the original text if it's less than 25 words
}
?>