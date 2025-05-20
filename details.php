<?php
include('components/header.component.php');

// Pokémon data with image + details (dictionary)
$pokemonDetails = [
    "Pikachu" => [
        "Type" => "Electric",
        "Level" => 15,
        "Image" => "assets/img/23.png"
    ],
    "Jigglypuff" => [
        "Type" => "Fairy",
        "Level" => 12,
        "Image" => "assets/img/22.png"
    ],
    "Bulbasaur" => [
        "Type" => "Grass/Poison",
        "Level" => 10,
        "Image" => "assets/img/24.png"
    ],
    "Vaporeon" => [
        "Type" => "Water",
        "Level" => 17,
        "Image" => "assets/img/25.png"
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

include('components/footer.component.php');
?>
