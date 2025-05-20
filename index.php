<?php
include('components/header.component.php');


$pokemonList = [
    ["name" => "Pikachu", "img" => "img/23.png"],
    ["name" => "Jigglypuff", "img" => "img/22.png"],
    ["name" => "Bulbasaur", "img" => "img/24.png"],
    ["name" => "Vaporeon", "img" => "img/25.png"]
];
?>


<div class="collection-section">
    <h2>Your Pokemon Collection</h2>
    <div class="pokemon-grid">
        <?php foreach ($pokemonList as $poke): ?>
            <div class="poke-card">
                <img src="<?= $poke['img'] ?>" alt="<?= $poke['name'] ?>">
                <p><a href="Details.utils.php?pokemon=<?= urlencode($poke['name']) ?>"><?= $poke['name'] ?></a></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('components/footer.component.php'); ?>
