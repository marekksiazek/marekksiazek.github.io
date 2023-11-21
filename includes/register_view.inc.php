<?php

declare(strict_types=1);


function checkRegisterErrors()
{
    if (isset($_SESSION["errors_register"])) {
        $errors = $_SESSION["errors_register"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form_error">' . $error . '</p>';
        }


        unset($_SESSION["errors_register"]);
    }
}
