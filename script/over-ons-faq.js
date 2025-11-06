// Functie voor het animeren / laten oploppen van de cijfers op de pagina
function initCijfers() {
  const cijfers = document.querySelectorAll(".cijfer-waarde"); // Pak alle cijfers die geanimeerd moeten worden
  cijfers.forEach((el) => {
    const totaal = parseInt(el.dataset.totaal); // Kijken naar het data-attribuut
    let huidige = 0;
    const duur = 2000,
      stapTijd = 20,
      stap = totaal / (duur / stapTijd); // Snelheid van de animatie
    const itv = setInterval(() => {
      // Interval, getal telkens beetje verhogen
      huidige += stap;
      if (huidige >= totaal) {
        // Verhoogd tot het einde, nu stoppen
        huidige = totaal;
        clearInterval(itv);
      }
      el.textContent = Math.floor(huidige).toLocaleString("nl-NL");
    }, stapTijd);
  });
}

// Functie voor het open en dichtklappen van de FAQs
function initFAQ() {
  const items = document.querySelectorAll(".faq-item");
  items.forEach((item) => {
    const btn = item.querySelector(".faq-vraag");
    if (!btn) return;
    btn.addEventListener("click", () => {
      // Klik openen, rest sluiten
      items.forEach((i) => {
        if (i !== item) i.classList.remove("actief");
      });
      item.classList.toggle("actief");
    });
  });
}

// Zoekfunctie voor de FAQs
(() => {
  const zoek = document.getElementById("faq-zoeken");
  const items = [...document.querySelectorAll(".faq-item")];
  if (!zoek) return;
  zoek.addEventListener("input", () => {
    const q = zoek.value.trim().toLowerCase();
    items.forEach((it) => {
      const txt = it.textContent.toLowerCase();
      it.style.display = txt.includes(q) ? "" : "none"; // Alles wat niet matcht met wat is ingevoerd verbergen
    });
  });
})();

// Alles uitvoeren zodra de pagina is geladen
const runAll = () => {
  initCijfers();
  initFAQ();
};

// Als DOM nog niet klaar is ff wachten
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", runAll);
} else {
  runAll();
}
