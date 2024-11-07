<?php

use database\Database;

class Validator
{
    public static function string(
        string $string, int $min = 1, int $max = PHP_INT_MAX
    ): bool
    {
        return strlen($string) >= $min && strlen($string) <= $max;
    }

    public static function integer(
        int $value, int $min = PHP_INT_MIN, int $max = PHP_INT_MAX
    ): bool
    {
        return $value >= $min && $value <= $max;
    }

    public static function email(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    //TODO переделать
    public static function emailIsUnique(string $email, Database $connection): bool
    {
        return empty($connection->query(
            query: "SELECT * FROM users WHERE email = :email",
            params: [':email' => $email]
        ));
    }
}