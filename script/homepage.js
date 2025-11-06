// Select each carousel with the classes .carousel.homepage
document.querySelectorAll('.carousel.homepage').forEach(carousel => {
  const track = carousel.querySelector('.carousel-track');   // container of all slides
  const items = carousel.querySelectorAll('.carousel-item'); // single slides
  const prev = carousel.querySelector('.previous');           // left button ‹
  const next = carousel.querySelector('.next');               // right button ›               

  // Indexing
  let currentIndex = 1;  // Start at the 'first real' slide (after the clone)
  const totalItems = items.length;

  // make clones from first and last item
  const firstClone = items[0].cloneNode(true);
  const lastClone = items[totalItems - 1].cloneNode(true);
  firstClone.classList.add('clone');
  lastClone.classList.add('clone');

  // add clones to the track
  track.appendChild(firstClone);
  track.insertBefore(lastClone, items[0]);

  // reset width and position 
  const allItems = track.querySelectorAll('.carousel-item');
  track.style.transform = `translateX(-${currentIndex * 100}%)`;

  //updateCarousel() determines how far the carousel should be moved and whether it happens with animation.
  //When animate = false, the transition is disabled.
  function updateCarousel(animate = true) {
    track.style.transition = animate ? 'transform 0.4s ease-in-out' : 'none';
    // By multiplying currentIndex by 100%, the script knows how far the track should move
    // The minus sign ensures that the track moves to the left (so the correct item appears in view)
    // This moves the entire track element in the X direction (horizontally), so it looks like the slides are shifting over each other
    track.style.transform = `translateX(-${currentIndex * 100}%)`;
  }

  next.addEventListener('click', () => {
    if (currentIndex >= allItems.length - 1) return; // security messure
    currentIndex++;
    updateCarousel();
  });

  prev.addEventListener('click', () => {
    if (currentIndex <= 0) return;
    currentIndex--;
    updateCarousel();
  });

  // As soon as the transition is completed, check if we are on a clone
  track.addEventListener('transitionend', () => {
    // Jump back to the correct slide without animation when on a clone
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
