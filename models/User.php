<?php
class User {
    private $id;
    private $fullName;
    private $email;
    private $role;
    private $state;

    public function __construct($id, $fullName, $email, $role, $state) {
        $this->id = $id;
        $this->fullName = $fullName;
        $this->email = $email;
        $this->role = $role;
        $this->state = $state;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }
    public function getFullname() {
        return $this->fullName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function getState() {
        return $this->state;
    }

    // Setter methods
    public function setId($id) {
        $id->id = $id;
    }
    public function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setState($state) {
        $state->state = $state;
    }
    
    
}
