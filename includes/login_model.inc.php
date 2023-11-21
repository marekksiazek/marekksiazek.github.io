<?php

declare(strict_types=1);

function getUser(object $mysqli, string $user_email)
{
    $query = "SELECT * FROM users WHERE user_email = (?)";
    $stmt = $mysqli->prepare($query);
    mysqli_stmt_bind_param($stmt, 's', $user_email);
    $stmt->execute();

    $result = $stmt->fetch();
    return $result;
}
