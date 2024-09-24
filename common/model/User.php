<?php
class User
{
    public static function login($username, $password)
    {
        // Giả sử cho 1 mảng người dùng để check
        $users = [
            ["username" => "admin", "password" => "123abc", "role" => "admin"],
            ["username" => "client", "password" => "123123", "role" => "client"]
        ];

        foreach ($users as $user) {
            if ($user["username"] === $username && $user["password"] === $password) {
                return $user;
            }
        }
        return null;
    }
}
