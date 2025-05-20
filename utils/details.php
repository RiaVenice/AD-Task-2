<?php
include('header.php');

// Pokémon data with image + details (dictionary)
$pokemonDetails = [
    "Pikachu" => [
        "Type" => "Electric",
        "Level" => 15,
        "Image" => "img/23.png"
    ],
    "Jigglypuff" => [
        "Type" => "Fairy",
        "Level" => 12,
        "Image" => "img/22.png"
    ],
    "Bulbasaur" => [
        "Type" => "Grass/Poison",
        "Level" => 10,
        "Image" => "img/24.png"
    ],
    "Vaporeon" => [
        "Type" => "Water",
        "Level" => 17,
        "Image" => "img/25.png"
    ]
];

// Function to show details (associative array)
function showPokemonCard($name, $details) {
    echo "<div class='collection-section'>";
    echo "<div class='poke-card'>";
    echo "<h2>$name</h2>";
    echo "<img src='{$details["Image"]}' alt='$name'>";
    echo "<p><strong>Type:</strong> {$details["Type"]}</p>";
    echo "<p><strong>Level:</strong> {$details["Level"]}</p>";
    echo "<a href='index.php'>Back to Collection</a>";
    echo "</div></div>";
}

// Get selected Pokémon 
$pokemon = $_GET['pokemon'] ?? '';

if (isset($pokemonDetails[$pokemon])) {
    showPokemonCard($pokemon, $pokemonDetails[$pokemon]);
} else {
    echo "<p style='text-align:center;'>Pokémon not found.</p>";
}

include('footer.php');
?>
