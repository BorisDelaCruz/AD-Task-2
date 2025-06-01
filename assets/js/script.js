const bulbaFacts = [
    "#001 in the National Pokédex – Bulbasaur is the very first Pokémon listed!",
    "Unique Typing – The only Gen 1 starter with dual Grass/Poison typing.",
    "Signature Bulb – The plant bulb on its back grows into a flower as it evolves.",
    "Versatile Moves – Learns both status and healing moves early.",
    "Evolution – Evolves into Ivysaur at level 16 and Venusaur at level 32.",
    "Anime Star – Ash’s Bulbasaur famously refused to evolve.",
    "Solar Beam – Can perform one of the most powerful Grass-type attacks.",
    "Name Origin – “Bulb” (plant bulb) + “saur” (Greek for lizard).",
    "Design – Based on a toad or dinosaur with a plant bulb on its back.",
    "Egg Groups – Can breed with both Grass and Monster Egg Groups."
];

function showRandomBulbaFact() {
    const factDiv = document.getElementById("bulba-fact");
    const randomFact = bulbaFacts[Math.floor(Math.random() * bulbaFacts.length)];
    factDiv.textContent = randomFact;
}

document.addEventListener("DOMContentLoaded", function() {
    // Show one random Bulbasaur move
    var btn = document.getElementById("bulba-moves-btn");
    var list = document.getElementById("bulba-moves-list");
    if(btn && list && window.bulbaMoves) {
        btn.addEventListener("click", function() {
            var moves = window.bulbaMoves;
            var randomMove = moves[Math.floor(Math.random() * moves.length)];
            list.textContent = randomMove;
            list.style.display = "block";
        });
    }

    const factBtn = document.getElementById("bulba-fact-btn");
    if (factBtn) {
        factBtn.addEventListener("click", showRandomBulbaFact);
    }

    var btn = document.getElementById("bulba-sound-btn");
    var audio = document.getElementById("bulba-audio");
    if(btn && audio) {
        btn.addEventListener("click", function() {
            audio.currentTime = 0;
            audio.play();
        });
    }
});