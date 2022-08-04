<pre>
<?php

// Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre.
$book = 
[
    "Title" => "To Kill A Mockingbird",
    "Author" => "H.Lee",
    "Year" => 1960,
    "Genre" => "Novel, thriller",
];

// Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas. Minimum 3.
$books =
[
    [
        "Title" => "The Great Gatsby",
        "Author" => "F.S.Fitzgerald",
        "Year" => 1925,
        "Genre" => "Novel, fiction",
    ],
    [
        "Title" => "1984",
        "Author" => "G.Orwell",
        "Year" => 1949,
        "Genre" => "Sci-fi",
    ],
    [
        "Title" => "Moby-Dick",
        "Author" => "H.Melville",
        "Year" => 1851,
        "Genre" => "Adventure novel",
    ],
];

// Išvesti visus knygų masyvo elementus su var_dump.
print_r($book);
print_r($books);

// Išvesti visų visų knygų metų vidurkį.
$average = array_sum(array_column($books, "Year")) / count($books);
$average = round($average, 0);

echo "<br>";
print_r($average);
?>
</pre>