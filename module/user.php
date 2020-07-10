<?php


class user
{
    protected $username;
    protected $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    public function checkUserExists(mysqli $connect) {
        $checkUserQuery = "SELECT * FROM user WHERE username = '$this->username' AND password = '$this->password' LIMIT 1";
        $result = $connect->query($checkUserQuery);
        if ($result->num_rows > 0) {
            return true;
        }
        else
            return false;
    }
}