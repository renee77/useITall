<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UseITall</title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/community.css">
    <link rel="stylesheet" href="/style/homepage.css">
    <link rel="stylesheet" href="/style/over-ons.css">
    <link rel="stylesheet" href="/style/recipe.css">
    <link rel="stylesheet" href="/style/header-footer.css">
    <link rel="stylesheet" href="/style/Lidmaatschap.css">
    <link rel="stylesheet" href="/style/webshop.css">
    <link rel="stylesheet" href="/style/contact.css">
    <link rel="stylesheet" href="/style/faq.css">
    
</head>
<body>
    <header>
        <div class="header-container">
            <nav>
                <div id="hamburgerMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="index.php" class="logo-link"><img src="/assets/logo-donker-groen.png" class="logo"
                        alt="logo van useITall"></a>
                <div id="navLinks">
                    <a href="/index.php">Home</a>
                    <div class="dropdownHeader">
                        <a href="/webshop.php">Webshop</a>
                        <div class="dropdown-menuHeader">
                            <a href="#">Categorieën</a>
                            <a href="#">Productpagina</a>
                        </div>
                    </div>
                    <a href="/recipe.php">Recepten</a>
                    <a href="/faq.php">FAQ's</a>
                    <a href="/community.php">Community</a>
                    <a href="/lidmaatschap.php">Abonnementen</a>
                    <a href="/contact.php">Contact</a>
                    <a href="/over-ons.php">Over ons</a>
                </div>
            </nav>
            <div id="login">
                <button class="dark-button login" aria-label="Log in bij je account">Login</button>
                <img src="/assets/account_circle_50dp_FFFFFF_FILL0_wght400_GRAD0_opsz48.svg" id="loginLogo"
                    alt="login logo">
            </div>
            <div id="loginPopup" class="popup-overlay invisible" role="dialog" aria-modal="true"
                aria-labelledby="login-title" aria-describedby="login-desc">
                <div class="popup-content">
                    <!-- the &times; is html for the close-button x  -->
                    <!-- The span element is not focusable by keyboard navigation by default.
                      By adding tabindex 0, you make it accessible with the Tab key. 
                      This is needed because the element serves as an interactive element, in this case a close button. -->
                    <span class="close-btn" aria-label="venster sluiten" role="button" tabindex="0">&times;</span>
                    <h2 id="login-title">Inloggen</h2>
                    <p id="login-desc" class="invisible">Vul hieronder je gegevens in om toegang te krijgen tot je account.
                    </p>
                    <form>
                        <label for="username">Gebruikersnaam:</label>
                        <input type="text" id="username" name="username" required aria-required="true"
                            aria-describedby="userError" aria-invalid="false">
                        <span id="userError" class="error invisible" role="alert">Gebruikersnaam is verplicht</span>
                        <label for="password">Wachtwoord:</label>
                        <input type="password" id="password" name="password" required aria-required="true"
                            aria-describedby="passwordError" aria-invalid="false">
                        <span id="passwordError" class="error invisible" role="alert">Wachtwoord is verplicht</span>
                        <button type="submit" id="login-btn" class="dark-button">Login</button>
                    </form>
                </div>
            </div>
            <div id="successPopup" class="popup-overlay invisible" role="dialog" aria-modal="true">
                <div class="popup-content">
                    <span class="close-btn" aria-label="venster sluiten" role="button" tabindex="0">&times;</span>
                    <h2>U bent ingelogd!</h2>
                    <img src="/assets/logo-donker-groen.png" alt="donker groen logo useITall">
                </div>
            </div>
            
        </div>
            
    </header>