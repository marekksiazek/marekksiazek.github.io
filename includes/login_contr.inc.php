<?php

// declare(strict_types=1);

function isUserEmailWrong($result)
{
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function isUserPasswordWrong(string $user_pwd, string $hashedPwd)
{
    if (!password_verify($user_pwd, $hashedPwd)) {
        return true;
    } else {
        return false;
    }
}
