<?php

declare(strict_types=1);

function createUser(object $mysqli, string $first_name, string $last_name, string $user_email, string $user_pwd, string $user_pesel, string $user_phone)
{
    setUser($mysqli,  $first_name,  $last_name,  $user_email,  $user_pwd,  $user_pesel,  $user_phone);
};
