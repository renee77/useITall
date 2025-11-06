// Selecteer elke carousel met de klassen .carousel.homepage
document.querySelectorAll('.carousel.homepage').forEach(carousel => {
  const track = carousel.querySelector('.carousel-track');   // De container van alle slides
  const items = carousel.querySelectorAll('.carousel-item'); // Alle individuele slides
  const prev = carousel.querySelector('.previous');           // Linkerknop ‹
  const next = carousel.querySelector('.next');               // Rechterknop ›               

  // Indexering
  let currentIndex = 1;  // Start bij de 'eerste echte' slide (na de kloon)
  const totalItems = items.length;

  // Maak klonen van eerste en laatste item
  const firstClone = items[0].cloneNode(true);
  const lastClone = items[totalItems - 1].cloneNode(true);
  firstClone.classList.add('clone');
  lastClone.classList.add('clone');

  // Voeg de klonen toe aan het track
  track.appendChild(firstClone);
  track.insertBefore(lastClone, items[0]);

  // Zet breedte en positie opnieuw
  const allItems = track.querySelectorAll('.carousel-item');
  track.style.transform = `translateX(-${currentIndex * 100}%)`;

   //updateCarousel() bepaalt hoeveel de carrousel verschoven moet worden én of dat met animatie gebeurt.
   // Wanneer animate = false, wordt de overgang uitgeschakeld
  function updateCarousel(animate = true) {
    track.style.transition = animate ? 'transform 0.4s ease-in-out' : 'none';
    //Door currentIndex te vermenigvuldigen met 100% weet het script hoe ver de track moet schuiven
    // De - zorgt ervoor dat de track naar links schuift (waardoor het juiste item in beeld komt)
    //Hiermee verschuif je het hele track‑element in de X‑richting (horizontaal), Zo lijkt het alsof de slides over elkaar schuiven
    track.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  next.addEventListener('click', () => {
    if (currentIndex >= allItems.length - 1) return; // Beveiliging
    currentIndex++;
    updateCarousel();
  });

  prev.addEventListener('click', () => {
    if (currentIndex <= 0) return;
    currentIndex--;
    updateCarousel();
  });

  // Zodra de overgang is afgerond, check of we op kloon staan
  track.addEventListener('transitionend', () => {
    // Spring zonder animatie terug naar juiste slide wanneer op kloon komt
    if (allItems[currentIndex].classList.contains('clone') && currentIndex === allItems.length - 1) {
      currentIndex = 1;
      updateCarousel(false);
    }
    if (allItems[currentIndex].classList.contains('clone') && currentIndex === 0) {
      currentIndex = allItems.length - 2;
      updateCarousel(false);
    }
  });
});
