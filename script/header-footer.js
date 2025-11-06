const CLASSES = {
  INVISIBLE: 'invisible',
  ERROR: 'error'
};


// Select the hamburger menu and the navigation links
const hamburgerMenu = document.getElementById('hamburgerMenu');
const navLinks = document.getElementById('navLinks');

// Add a click event listener to the hamburger menu
hamburgerMenu.addEventListener('click', () => {
    // Toggle the 'active' class on the navLinks
    navLinks.classList.toggle('active');
});

// For mobile: toggle submenu when clicking on dropdown
const dropdowns = document.querySelectorAll('.dropdownHeader');

dropdowns.forEach(dropdown => {
    const toggle = dropdown.querySelector('a');
    
    toggle.addEventListener('click', (e) => {
        // Only on mobile (when hamburger menu is visible)
        if (window.innerWidth <= 900) {
            e.preventDefault();
            dropdown.classList.toggle('active');
        }
    });
});

// Make sure popups are displayed on activation
document.querySelector('.login').addEventListener('click', () => openPopup('loginPopup'));
const newsletterForm = document.querySelector('#newsletterForm');
if(newsletterForm){
  newsletterForm.addEventListener('submit', event => {
    event.preventDefault();
    document.getElementById('newsletterEmail').value = '';
    openPopup('newsletterPopup');
});
}

// Close popups with mouse click or keyboard and make sure the trapFocus is removed
// Close popup with mouse click
document.querySelectorAll('.close-btn').forEach(btn => {
  btn.addEventListener('click', event => {
    const popup = event.target.closest('.popup-overlay');
    if (popup) {
      deactivateFocusTrap(popup); 
      popup.classList.add(CLASSES.INVISIBLE);
    }
  });

  // Close popup with keyboard
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
    event.preventDefault(); // Stop sending
    
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const userError = document.getElementById('userError');
    const passwordError = document.getElementById('passwordError');

    let isValid = true;
    
    // Validate username
    if (username.value.trim() === '') {
      // attribute for screen readers to indicate that there is an error
      username.setAttribute('aria-invalid', 'true');
      // make error visible
      userError.classList.remove(CLASSES.INVISIBLE);
      isValid = false;
    } else {
      username.setAttribute('aria-invalid', 'false');
      userError.classList.add(CLASSES.INVISIBLE);
    }
    
    // password validation
    if (password.value.trim() === '') {
      // attribute for screen readers to indicate that there is an error
      password.setAttribute('aria-invalid', 'true');
      // make error visible
      passwordError.classList.remove(CLASSES.INVISIBLE);
      isValid = false;
    } else {
      password.setAttribute('aria-invalid', 'false');
      passwordError.classList.add(CLASSES.INVISIBLE);
    }

    // if all valid send form
    if (isValid) {
      
      // later, backend processing will come here that will further process the fields with ajax/fetch
      console.log('Login succesvol!');

      // clear the fields because preventDefault() is used
      username.value="";
      password.value="";

      const loginPopup = document.getElementById('loginPopup');  // Get popup
      deactivateFocusTrap(loginPopup);                          // turn focustrap off
      loginPopup.classList.add(CLASSES.INVISIBLE);            // hide popup

      //show succes  popup
      openPopup('successPopup');

      // set class "loginTrue" on login logo
      document.getElementById("loginLogo").classList.add("loginTrue");
    }
  });

  // Remove error messages in a form when typing after the user has already clicked login or submit
  // Select all input fields within the login form
  const inputs = loginForm.querySelectorAll('input');
  
  inputs.forEach(input => {

    // Add an event listener that listens to the 'input' event
    input.addEventListener('input', function() {

      // 'this' = refers to the input field the user is typing in
      // Check if the field is not empty
      // this.value = the current text in the input field
      if (this.value.trim() !== '') {

        // Set aria-invalid to 'false'
        // This tells screen readers: "this field NO LONGER has an error"
        this.setAttribute('aria-invalid', 'false');

        // Find the ID of the associated error message element
        // this.getAttribute('aria-describedby') retrieves the value of aria-describedby
        const errorId = this.getAttribute('aria-describedby');

        // Find error element within the html
        const errorElement = document.getElementById(errorId);

        // if the is an error element, then hide it
        if (errorElement) {
          // .classList.add(CLASSES.INVISIBLE) = add class 'invisible' 
          errorElement.classList.add('invisible');
        }
      }

    });

  });
}

// hover over login logo shows if logged in
const loginLogo = document.getElementById("loginLogo");
if(loginLogo){
  loginLogo.addEventListener("mouseenter", () =>
  {
    if(loginLogo.classList.contains("loginTrue")){
      openPopup('successPopup');

      // make sure the popup disappears again after 2 sec
      setTimeout(() => {
        const successPopup = document.getElementById('successPopup');
        deactivateFocusTrap(successPopup);
        successPopup.classList.add(CLASSES.INVISIBLE);
      }, 2000);
    
    }
  });
}

// contact button in the footer links to contact.php
var contactBtn = document.querySelector('.light-button.contact');
    if (contactBtn) {
        contactBtn.addEventListener('click', function() {
            window.location.href = 'contact.php';
        });
    }


//FUNCTIONS

// ensure focus stays within the element such as a popup -> this contributes to accessibility
function getFocusableElements(container) {
  // All selectors for focusable elements
  const focusableSelectors = [
    'a[href]',                    // Links with href
    'button:not([disabled])',     // Buttons not disabled 
    'input:not([disabled])',      // Inputs not disabled 
    '[tabindex]:not([tabindex="-1"])' // Elements with tabindex (except -1)
  ].join(', ');
  
  // Find all elements and return as array
  return Array.from(container.querySelectorAll(focusableSelectors));
}

// show popup and focus on close button
function openPopup(popupId) {
  const popup = document.getElementById(popupId);
  popup.classList.remove(CLASSES.INVISIBLE);

  // focus on close button
  const closeBtn = popup.querySelector('.close-btn');
  if (closeBtn) closeBtn.focus();

  //Activate focus trap, focus will stay within popup 
  activateFocusTrap(popup);
}

function activateFocusTrap(popup) {
  // Find all focusable elements in the popup
  const focusableElements = getFocusableElements(popup);
  
  // If there are no focusable elements, stop
  if (focusableElements.length === 0) return;
  
  // Remember first and last element
  const firstElement = focusableElements[0];
  const lastElement = focusableElements[focusableElements.length - 1];
  
  // Make a function that intercepts Tab navigation in popups
  // old notation of this arrow function is "function trapFocus(e){...}"
  // e stands for event
  const trapFocus = (e) => {
    // Only respond to Tab key
    if (e.key !== 'Tab') return;
    
    // Shift+Tab on first element
    if (e.shiftKey && document.activeElement === firstElement) {
      e.preventDefault(); // Stop normal Tab behaviour
      lastElement.focus(); // jump to last element
    } 
    // Tab on LAST element
    else if (!e.shiftKey && document.activeElement === lastElement) {
      e.preventDefault(); // Stop normal Tab behaviour
      firstElement.focus(); // jump to FIRST element
    }
    // All other occurances: let Tab have default behaviour
  };
  
  // Stap 4: activate  trap
  popup.addEventListener('keydown', trapFocus);
  
  // Stap 5: Remember the function so we can remove it later
  popup.trapFocusHandler = trapFocus;
}

// clean up the trapFocus when closing popups
function deactivateFocusTrap(popup) {
  if (popup.trapFocusHandler) {
    popup.removeEventListener('keydown', popup.trapFocusHandler);
    popup.trapFocusHandler = null; // forget reference
  }
}
