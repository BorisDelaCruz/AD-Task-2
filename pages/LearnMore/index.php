<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn More</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Learn More About Bulbasaur</h1>
        <p>
            Bulbasaur stands out among all starter Pokémon, not just in Gen 1 but when compared to the starters of every generation. Here’s why Bulbasaur is a top pick:
        </p>
        <div class="gen-section">
            <h2>Generation 1 (Kanto)</h2>
            <ul>
                <li><strong>Bulbasaur</strong> has a type advantage against the first two Gyms (Rock and Water), making the early game much easier than Charmander or Squirtle.</li>
                <li>Access to status and healing moves gives Bulbasaur great versatility and survivability.</li>
            </ul>
        </div>
        <div class="gen-section">
            <h2>Generations 2-9 Comparison</h2>
            <ul>
                <li>Many Grass starters struggle with early-game Gyms or rivals, but Bulbasaur’s dual Grass/Poison typing gives it more resistances and offensive options.</li>
                <li>Compared to other Grass starters (like Chikorita, Treecko, Turtwig, Snivy, Chespin, Rowlet, Grookey, Sprigatito), Bulbasaur’s early access to healing and status moves makes it more beginner-friendly and strategic.</li>
                <li>Bulbasaur’s evolutionary line gains powerful moves and Mega Evolution, giving it long-term viability even in later generations.</li>
                <li>Unlike Fire or Water starters, Bulbasaur’s unique typing and move pool allow it to handle a wider variety of opponents, especially in the early game.</li>
                <li>Bulbasaur’s balanced stats make it less likely to be “outclassed” by rivals or wild Pokémon, a problem some other starters face in their respective games.</li>
            </ul>
        </div>
        <div class="gen-section">
            <h2>Summary</h2>
            <p>
                While every starter Pokémon has its strengths, Bulbasaur’s combination of early-game advantages, versatile movepool, and strong evolutions make it the best choice for new and experienced trainers alike—no matter which generation you compare!
            </p>
        </div>
        <div class="facts-section-with-bulba">
            <div class="gen-section">
                <h2>Fun Facts About Bulbasaur</h2>
                <div class="facts-grid">
                    <div class="bulba-card">
                        <strong>#001 in the National Pokédex</strong><br>
                        Bulbasaur is the very first Pokémon listed in the Pokédex!
                    </div>
                    <div class="bulba-card">
                        <strong>Unique Typing</strong><br>
                        The only Gen 1 starter with dual Grass/Poison typing.
                    </div>
                    <div class="bulba-card">
                        <strong>Signature Bulb</strong><br>
                        The plant bulb on its back grows into a flower as it evolves.
                    </div>
                    <div class="bulba-card">
                        <strong>Versatile Moves</strong><br>
                        Learns both status and healing moves early, making it great for new trainers.
                    </div>
                    <div class="bulba-card">
                        <strong>Evolution</strong><br>
                        Evolves into Ivysaur at level 16 and Venusaur at level 32.
                    </div>
                    <div class="bulba-card">
                        <strong>Anime Star</strong><br>
                        Ash’s Bulbasaur famously refused to evolve, showing loyalty and strength.
                    </div>
                    <div class="bulba-card">
                        <strong>Solar Beam</strong><br>
                        Can perform one of the most powerful Grass-type attacks.
                    </div>
                    <div class="bulba-card">
                        <strong>Name Origin</strong><br>
                        “Bulb” (plant bulb) + “saur” (Greek for lizard).
                    </div>
                    <div class="bulba-card">
                        <strong>Design</strong><br>
                        Based on a toad or dinosaur with a plant bulb on its back.
                    </div>
                    <div class="bulba-card">
                        <strong>Egg Groups</strong><br>
                        Can breed with both Grass and Monster Egg Groups.
                    </div>
                </div>
            </div>
        </div>
        <?php

$pokemon_terms = [
    "Starter Pokémon" => "A Pokémon given to trainers at the beginning of their journey.",
    "Type Advantage" => "When a Pokémon’s type is strong against another, dealing more damage.",
    "STAB" => "Same Type Attack Bonus; a move gets a power boost if it matches the user's type.",
    "Evolution" => "The process by which a Pokémon transforms into a different species, usually becoming stronger.",
    "Egg Group" => "Categories for Pokémon breeding; determines which Pokémon can breed together.",
    "Move Pool" => "The set of moves a Pokémon can learn by leveling up, TM/HM, or breeding.",
    "Status Move" => "A move that causes effects like sleep, paralysis, or stat changes instead of direct damage.",
    "HP" => "Hit Points; the amount of health a Pokémon has.",
    "Stat" => "Numerical values that determine a Pokémon’s power, speed, defense, etc.",
    "Pokédex" => "An electronic encyclopedia that records information about Pokémon species.",
    "Legendary Pokémon" => "Rare and powerful Pokémon that are typically unique and cannot breed.",
    "TM/HM" => "Technical Machine/Hidden Machine; items used to teach Pokémon new moves.",
    "Wild Pokémon" => "Pokémon that are not owned by a trainer and can be encountered in the wild.",
    "Trainer" => "A person who catches, trains, and battles with Pokémon."
];


echo "<p><strong>Definition of 'STAB':</strong> " . htmlspecialchars($pokemon_terms["STAB"]) . "</p>";

$pokemon_terms["Shiny Pokémon"] = "A rare Pokémon with alternate coloration.";


$pokemon_terms["Egg Group"] = "A classification for Pokémon breeding compatibility.";


unset($pokemon_terms["Stat"]);


echo '<div class="gen-section">';
echo '<h2>Pokémon Terms Dictionary</h2>';
echo '<div class="dictionary-grid">';
foreach ($pokemon_terms as $term => $desc) {
    echo '<div class="dictionary-card">';
    echo '<strong>' . htmlspecialchars($term) . '</strong>';
    echo '<div class="dictionary-desc">' . htmlspecialchars($desc) . '</div>';
    echo '</div>';
}
echo '</div>';
echo '</div>';
?>
        <a href="../../index.php" class="poke-btn">Back to Home</a>
    </div>

    <?php require_once __DIR__ . '/../../components/footer.php'; ?>
</body>
</html>