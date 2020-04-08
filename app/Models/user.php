<?php

namespace App\Models;
require 'vendor/autoload.php';

class User {
    public $first_name;
    public $last_name;
    public $full_name;
    public $email;

    public function setFirstName($firstName) {
        $this->first_name = trim($firstName);
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setLastName($lastName) {
        $this->last_name = trim($lastName);
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getFullName() {
        return "$this->first_name $this->last_name";
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
}