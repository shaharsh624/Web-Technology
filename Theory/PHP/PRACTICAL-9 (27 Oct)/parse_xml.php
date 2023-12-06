<?php
// Load and parse the XML file
$xml = simplexml_load_file('data.xml');

// Check if the XML was loaded successfully
if ($xml === false) {
    die('Failed to load XML data.');
}

// Output the information
echo '<h1>Book Information</h1>';
foreach ($xml->book as $book) {
    echo '<div class="book">';
    echo '<h2>Title: ' . $book->title . '</h2>';
    echo '<p>Author: ' . $book->author . '</p>';
    echo '<p>Genre: ' . $book->genre . '</p>';
    echo '<p>Published: ' . $book->published . '</p>';
    echo '</div>';
}
