<?php

declare(strict_types=1);

function getUserEmail(object $mysqli, string $user_email)
{
    $query = "SELECT user_email FROM users WHERE user_email = (?)";
    $stmt = $mysqli->prepare($query);
    mysqli_stmt_bind_param($stmt, 's', $user_email);
    $stmt->execute();

    $result = $stmt->fetch();
    return $result;
};

function setUser(object $mysqli, string $first_name, string $last_name, string $user_email, string $user_pwd, string $user_pesel, string $user_phone)
{
    $query = "INSERT INTO users (first_name, last_name, user_email, user_pwd, user_pesel, user_phone) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedPwd = password_hash($user_pwd, PASSWORD_BCRYPT, $options);

    mysqli_stmt_bind_param($stmt, 'ssssdd',  $first_name,  $last_name,  $user_email,  $hashedPwd,  $user_pesel,  $user_phone);
    $stmt->execute();
}
