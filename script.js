document.addEventListener("DOMContentLoaded", () => {
    const emojis = ['🍓','🎀','🐱','🍰','🌸','💖','🎀','🍓','🐱','🍰','🌸','💖','🐾','🧸','🐾','🧸'];
    const board = document.getElementById("game-board");
    const shuffled = emojis.sort(() => 0.5 - Math.random());
    let flippedCards = [];
    let matched = 0;

    shuffled.forEach((emoji, i) => {
        const card = document.createElement("div");
        card.className = "card";
        card.dataset.index = i;
        card.dataset.emoji = emoji;
        card.innerHTML = "";
        board.appendChild(card);

        card.addEventListener("click", () => {
            if (flippedCards.length < 2 && !card.classList.contains("flipped")) {
                card.classList.add("flipped");
                card.innerHTML = emoji;
                flippedCards.push(card);
                if (flippedCards.length === 2) {
                    const [first, second] = flippedCards;
                    if (first.dataset.emoji === second.dataset.emoji) {
                        matched += 1;
                        flippedCards = [];
                        if (matched === emojis.length / 2) {
                            setTimeout(() => alert("Parabéns! Você venceu!"), 300);
                        }
                    } else {
                        setTimeout(() => {
                            first.classList.remove("flipped");
                            second.classList.remove("flipped");
                            first.innerHTML = "";
                            second.innerHTML = "";
                            flippedCards = [];
                        }, 800);
                    }
                }
            }
        });
    });
});
