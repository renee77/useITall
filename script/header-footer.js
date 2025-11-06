const CLASSES = {
  INVISIBLE: 'invisible',
  ERROR: 'error'
};



// Selecteer het hamburger menu en de navigatie links
const hamburgerMenu = document.getElementById('hamburgerMenu');
const navLinks = document.getElementById('navLinks');

// Voeg een click event listener toe aan het hamburger menu
hamburgerMenu.addEventListener('click', () => {
    // Toggle de 'active' class op de navLinks
    navLinks.classList.toggle('active');
});

// Voor mobiel: toggle submenu bij click op dropdown
const dropdowns = document.querySelectorAll('.dropdownHeader');

dropdowns.forEach(dropdown => {
    const toggle = dropdown.querySelector('a');
    
    toggle.addEventListener('click', (e) => {
        // Alleen op mobiel (wanneer hamburger menu zichtbaar is)
        if (window.innerWidth <= 900) {
            e.preventDefault();
            dropdown.classList.toggle('active');
        }
    });
});

// zorg dat popups getoond worden bij activatie
document.querySelector('.login').addEventListener('click', () => openPopup('loginPopup'));
const newsletterForm = document.querySelector('#newsletterForm');
if(newsletterForm){
  newsletterForm.addEventListener('submit', event => {
    event.preventDefault();
    document.getElementById('newsletterEmail').value = '';
    openPopup('newsletterPopup');
});
}

// sluitpopups met muisklik of toetsenbord en zorg dat de trapFocus verwijderd wordt
// popup sluiten met muisklik
document.querySelectorAll('.close-btn').forEach(btn => {
  btn.addEventListener('click', event => {
    const popup = event.target.closest('.popup-overlay');
    if (popup) {
      deactivateFocusTrap(popup); 
      popup.classList.add(CLASSES.INVISIBLE);
    }
  });

  // popup sluiten met toetsenbord
  btn.addEventListener('keydown', event => {
    if (event.key === 'Enter' || event.key === ' ' || event.key === 'Escape') {
      event.preventDefault();
      const popup = event.target.closest('.popup-overlay');
      if (popup){
        deactivateFocusTrap(popup);
        popup.classList.add(CLASSES.INVISIBLE);
      }
    }
  });
});

// Login form validation
const loginForm = document.querySelector('#loginPopup form');
if (loginForm) {
  loginForm.addEventListener('submit', function(event) {
    event.preventDefault(); // Stop het versturen
    
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const userError = document.getElementById('userError');
    const passwordError = document.getElementById('passwordError');

    let isValid = true;
    
    // Valideer gebruikersnaam
    if (username.value.trim() === '') {
      // attribuut voor screenlezers om te laten weten dat er een error is
      username.setAttribute('aria-invalid', 'true');
      // maak de error zichtbaar
      userError.classList.remove(CLASSES.INVISIBLE);
      isValid = false;
    } else {
      username.setAttribute('aria-invalid', 'false');
      userError.classList.add(CLASSES.INVISIBLE);
    }
    
    // Valideer wachtwoord
    if (password.value.trim() === '') {
      // attribuut voor screenlezers om te laten weten dat er een error is
      password.setAttribute('aria-invalid', 'true');
      // maak de error zichtbaar
      passwordError.classList.remove(CLASSES.INVISIBLE);
      isValid = false;
    } else {
      password.setAttribute('aria-invalid', 'false');
      passwordError.classList.add(CLASSES.INVISIBLE);
    }

    // Als alles valid is, verstuur dan het form
    if (isValid) {
      
      // later komt hier backend verwerking die de velden verder verwerkt met ajax/fetch
      console.log('Login succesvol!');

      // leeg de velden handmatig omdat preventDefault() is gebruikt
      username.value="";
      password.value="";

      const loginPopup = document.getElementById('loginPopup');  // Pak de hele popup
      deactivateFocusTrap(loginPopup);                          // Zet focus trap uit
      loginPopup.classList.add(CLASSES.INVISIBLE);            // Verberg popup

      // laat de succes popup zien
      openPopup('successPopup');

      // zet class "loginTrue" op login logo
      document.getElementById("loginLogo").classList.add("loginTrue");
    }
  });

  // Verwijder foutmeldingen in een form bij typen nadat de gebruiker al een keer op login of submit heeft gedrukt
  
  // Selecteer alle input velden binnen het login formulier
  const inputs = loginForm.querySelectorAll('input');
  
  inputs.forEach(input => {

    // Voeg een event listener toe die luistert naar het 'input' event
    input.addEventListener('input', function() {

      // 'this' = verwijst naar het input veld waar de gebruiker in typt
      // Check of het veld niet leeg is
      // this.value = de huidige tekst in het input veld
      if (this.value.trim() !== '') {

        // Zet aria-invalid op 'false'
        // Dit vertelt screenreaders: "dit veld heeft GEEN fout meer"
        this.setAttribute('aria-invalid', 'false');

        // Vind het ID van het bijbehorende foutmelding element
        // this.getAttribute('aria-describedby') haalt de waarde op van aria-describedby
        const errorId = this.getAttribute('aria-describedby');

        // Zoek het foutmelding element in de HTML
        const errorElement = document.getElementById(errorId);

        // Als het foutmelding element bestaat, verberg het dan
        if (errorElement) {
          // .classList.add(CLASSES.INVISIBLE) = voeg de class 'invisible' toe
          errorElement.classList.add('invisible');
        }
      }

    });

  });
}

// hover over login logo laat zien of er ingelogd is
const loginLogo = document.getElementById("loginLogo");
if(loginLogo){
  loginLogo.addEventListener("mouseenter", () =>
  {
    if(loginLogo.classList.contains("loginTrue")){
      openPopup('successPopup');

      // zorg dat de popup weer verdwijnt na 2 sec
      setTimeout(() => {
        const successPopup = document.getElementById('successPopup');
        deactivateFocusTrap(successPopup);
        successPopup.classList.add(CLASSES.INVISIBLE);
      }, 2000);
    
    }
  });
}

// contact button footer linkt naar contact.php
var contactBtn = document.querySelector('.light-button.contact');
    if (contactBtn) {
        contactBtn.addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
    }


//FUNCTIES

//zorg dat focus binnen element zoasl popup blijft -> dit draagt bij aan toegankelijkheid
function getFocusableElements(container) {
  // Alle selectors voor focusbare elementen
  const focusableSelectors = [
    'a[href]',                    // Links met href
    'button:not([disabled])',     // Buttons die niet disabled zijn
    'input:not([disabled])',      // Inputs die niet disabled zijn
    '[tabindex]:not([tabindex="-1"])' // Elementen met tabindex (behalve -1)
  ].join(', ');
  
  // Vind alle elementen en return als array
  return Array.from(container.querySelectorAll(focusableSelectors));
}

// Toon popup en focus op de sluitknop
function openPopup(popupId) {
  const popup = document.getElementById(popupId);
  popup.classList.remove(CLASSES.INVISIBLE);

  // focus op de sluitknop binnen deze popup
  const closeBtn = popup.querySelector('.close-btn');
  if (closeBtn) closeBtn.focus();

  //Activeer focus trap zodat de focus binnen de popup blijft
  activateFocusTrap(popup);
}

function activateFocusTrap(popup) {
  // Vind alle focusbare elementen in de popup
  const focusableElements = getFocusableElements(popup);
  
  // Als er geen focusbare elementen zijn, stop dan
  if (focusableElements.length === 0) return;
  
  // Onthoud het eerste en laatste element
  const firstElement = focusableElements[0];
  const lastElement = focusableElements[focusableElements.length - 1];
  
  // Maak een functie die Tab-navigatie onderschept bij de popups 
  // oude notatie van deze arrow function is "function trapFocus(e){...}" 
  // e staat voor event
  const trapFocus = (e) => {
    // Alleen reageren op Tab-toets
    if (e.key !== 'Tab') return;
    
    // Shift+Tab op EERSTE element
    if (e.shiftKey && document.activeElement === firstElement) {
      e.preventDefault(); // Stop normale Tab gedrag
      lastElement.focus(); // Spring naar LAATSTE element
    } 
    // Tab op LAATSTE element
    else if (!e.shiftKey && document.activeElement === lastElement) {
      e.preventDefault(); // Stop normale Tab gedrag
      firstElement.focus(); // Spring naar EERSTE element
    }
    // Alle andere situaties: laat Tab normaal werken
  };
  
  // Stap 4: Activeer de trap
  popup.addEventListener('keydown', trapFocus);
  
  // Stap 5: Onthoud de functie zodat we hem later kunnen verwijderen
  popup.trapFocusHandler = trapFocus;
}

// ruim de trapFocus op bij het sluiten van de popups
function deactivateFocusTrap(popup) {
  if (popup.trapFocusHandler) {
    popup.removeEventListener('keydown', popup.trapFocusHandler);
    popup.trapFocusHandler = null; // Vergeet de referentie
  }
}
