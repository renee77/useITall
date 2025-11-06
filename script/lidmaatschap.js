//Lidmaatschap.js

(() => {
  // Pop-up (aanmelden)

  // Elementen die ik gebruik in de pop-up
  const overlay  = document.getElementById('signupModal'); // hele overlay van de pop-up
  const closeBtn = overlay ? overlay.querySelector('.js-close-signup') : null; // sluitknop
  const openBtns = document.querySelectorAll('.membership-card_action .js-open-signup'); // alle "Kies"-knoppen in de kaarten

  // Onderdelen in de pop-up zelf
  const titleEl    = document.getElementById('signup-title');
  const descEl     = document.getElementById('signup-desc');
  const hiddenPlan = document.getElementById('signup-plan');
  const firstInput = document.getElementById('signup-name');

  // Kleine helperfunctie om eerste letter hoofdletter te maken
  const cap = s => s ? s.charAt(0).toUpperCase() + s.slice(1) : s;

  // Wanneer je op een "Kies"-knop klikt opent de pop-up
  openBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const plan = (btn.getAttribute('data-plan') || 'basis').toLowerCase(); 
      // haalt plan-type van de knop

      // Tekst en verborgen input worden aangepast aan gekozen plan
      if (hiddenPlan) hiddenPlan.value = plan;
      if (titleEl) titleEl.textContent = `Aanmelden – ${cap(plan)}`;
      if (descEl) descEl.textContent  = 'Vul je gegevens in om je aanmelding te voltooien.';

      // Laat de pop-up zien
      if (overlay) overlay.classList.remove('is-hidden');

      // Focus automatisch op het eerste invoerveld
      setTimeout(() => firstInput?.focus(), 0);
    });
  });

  // Sluiten van de pop-up via de sluitknop
  const close = () => overlay?.classList.add('is-hidden');
  closeBtn?.addEventListener('click', close);

  // Klik buiten het venster sluit de pop-up ook
  overlay?.addEventListener('click', (e) => {
    if (e.target === overlay) close();
  });

  // Als je op de Escape-toets drukt, sluit de pop-up ook
  document.addEventListener('keydown', (e) => {
    if (overlay && !overlay.classList.contains('is-hidden') && e.key === 'Escape') close();
  });

  // Formulierverwerking (testversie, geen echte backend)
  document.getElementById('signup-form')?.addEventListener('submit', (e) => {
    e.preventDefault(); // voorkomt dat de pagina herlaadt
    alert('Bedankt! Je aanmelding is ontvangen.'); // laat melding zien
    close(); // sluit daarna de pop-up
  });

  // Pricing toggle (maand/jaar)
  
  // pricing toggle 
  const switchEl  = document.getElementById('billingSwitch'); // toggle element
  const priceEls  = Array.from(document.querySelectorAll('.price_amount'));  // bedragen
  const periodEls = Array.from(document.querySelectorAll('.price_period'));  // maand of /jaar

  // Als er geen switch is wordt niks gedaan
  if (!switchEl || priceEls.length === 0) return;

  // Prijstabellen (links-rechts: Basis, Plus, Premium)
  const MONTHLY = [44.99, 67.99, 75.99]; // maand bedragen
  const YEARLY  = [539.88, 815.88, 911.88]; // jaar bedragen

  // Getallen automatisch als eurobedragen weer te geven (NL)
  const fmt = new Intl.NumberFormat('nl-NL', {
    style: 'currency',
    currency: 'EUR',
    minimumFractionDigits: 2
  });

  // functie: prijzen + periode
  function render(isYearly) {
    priceEls.forEach((el, i) => {
      if (isYearly) {
        const y = YEARLY[i];
        el.textContent = fmt.format(y);        
        if (periodEls[i]) periodEls[i].textContent = '/jaar';
      } else {
        const m = MONTHLY[i];
        el.textContent = fmt.format(m);
        if (periodEls[i]) periodEls[i].textContent = '/maand';
      }
    });
  }

  // Zorgt dat de juiste prijzen direct zichtbaar zijn bij het laden van de pagina
  render(switchEl.checked);

  // Event (wat er gebeurt: verandert alle bedragen naar jaar of maand)
  switchEl.addEventListener('change', () => render(switchEl.checked));
})();