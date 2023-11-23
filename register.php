<?php

require_once 'includes/config_session.inc.php';
require_once 'includes/register_view.inc.php';

?>



<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;500;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/modalWindow.css">
    <title>Rejestracja - Kurs na opiekuna</title>
</head>

<body>

    <div class="modal" id="modal">
        <div class="modal_body">
            <div class="flex_wrap">
                <div class="form_wrap">
                    <form id="form" class="form" action="/includes/register.inc.php" method="post"
                        novalidate="novalidate">
                        <div class="text_wrap">
                            <div class="title">Witaj!</div>
                            <div class="subtitle">Stwórzmy Twoje konto</div>
                        </div>

                        <div class="image_container">
                            <img src="/assets/color1/icon/color1_icon_transparent_background.png" alt="logo"
                                class="logo_register_small">
                        </div>
                        <div class="input_wrap">
                            <div class="input-container ic1">
                                <input id="firstname" name="first_name" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="firstname" class="placeholder">Imię:</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" name="last_name" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">Nazwisko:</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="email" name="user_email" class="input" type="text" placeholder=" " />
                                <div class="cut cut-short"></div>
                                <label for="email" class="placeholder">Email:</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="password" name="user_pwd" class="input" type="password" placeholder=" " />
                                <div class="cut cut-short"></div>
                                <label for="password" class="placeholder">Hasło:</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="pesel" name="user_pesel" class="input" type="text" placeholder=" " />
                                <div class="cut cut-short"></div>
                                <label for="pesel" class="placeholder">Pesel:</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="phone" name="user_phone" class="input" type="tel" placeholder=" "
                                    pattern="[0-9]{9}" />
                                <div class="cut cut-short"></div>
                                <label for="phone" class="placeholder">Telefon: </label>
                            </div>

                            <button type="submit" class="submit">Zarejestruj i zapłać za kurs</button>
                        </div>
                    </form>
                </div>
                <div class="end_wrap">
                    <div class="img_wrap">
                        <img src="/assets/customcolor/full/customcolor_logo_transparent_background.png"
                            alt="logo_register" class="logo_register">
                    </div>
                    <div class="price_wrap">
                        <small>Cena kursu:</small>
                        <div class="cost">
                            <span class="cost_zloty">699</span>
                            <span class="cost_currency">zł</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <script src="scripts/validate.js" type="module" ></script> -->
</body>

</html>