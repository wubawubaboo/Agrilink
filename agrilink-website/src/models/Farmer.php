<?php
class Farmer {
    private $farmer_id;
    private $user_id;
    private $farm_name;
    private $location;
    private $contact_number;
    private $bio;

    public function __construct($farmer_id, $user_id, $farm_name, $location, $contact_number, $bio) {
        $this->farmer_id = $farmer_id;
        $this->user_id = $user_id;
        $this->farm_name = $farm_name;
        $this->location = $location;
        $this->contact_number = $contact_number;
        $this->bio = $bio;
    }

    public function getFarmerId() {
        return $this->farmer_id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getFarmName() {
        return $this->farm_name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getContactNumber() {
        return $this->contact_number;
    }

    public function getBio() {
        return $this->bio;
    }

    public function setFarmName($farm_name) {
        $this->farm_name = $farm_name;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setContactNumber($contact_number) {
        $this->contact_number = $contact_number;
    }

    public function setBio($bio) {
        $this->bio = $bio;
    }

    // Additional methods for database interactions can be added here
}
?>