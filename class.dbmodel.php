<?php

class dbmodel
{
    public $db;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=elemental_dream_depot';
        $username = 'elementalroot';
        $password = 'elementalpassword';

        try {
            $this->db = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo $error_message;
            exit();
        }
    }

    function delete($roomNo)
    {
        $query = "DELETE FROM `rooms_details` WHERE room_number = :roomNo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomNo', $roomNo);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function insertShopper($name, $mobile, $email, $username, $password)
    {
        $query = "INSERT INTO `shoppers`(`name`, `mobile`, `email`, `username`, `password`) VALUES (:name, :mobile, :email, :username, :password)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function updateRoom($roomNo, $roomType, $roomBooked, $roomFeatured, $checkin, $checkout, $noOfPersons)
    {
        $query = "UPDATE `rooms_details` SET `room_type` = :roomType, `room_featured` = :roomFeatured, `room_booked` = :roomBooked, `check_in_date` = :checkin, `check_out_date` = :checkout, `room_capacity` = :noOfPersons WHERE `room_number` = :roomNo";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomNo', $roomNo);
        $stmt->bindParam(':roomType', $roomType);
        $stmt->bindParam(':roomFeatured', $roomFeatured);
        $stmt->bindParam(':roomBooked', $roomBooked);
        $stmt->bindParam(':checkin', $checkin);
        $stmt->bindParam(':checkout', $checkout);
        $stmt->bindParam(':noOfPersons', $noOfPersons);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function insertRoom($roomNo, $price, $roomType, $noOfPersons, $amenities, $checkinDate, $checkOutDate, $booking, $roomFeatured)
    {
        $query = "INSERT INTO `rooms_details`(`room_number`, `room_type`, `check_in_date`, `check_out_date`, `room_capacity`, `room_featured`) VALUES (:roomNo, :roomType, :checkinDate, :checkOutDate, :noOfPersons, :roomFeatured)";
         echo $query;
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':roomNo', $roomNo);
        $stmt->bindParam(':roomType', $roomType);
        $stmt->bindParam(':checkinDate', $checkinDate);
        $stmt->bindParam(':checkOutDate', $checkOutDate);
        $stmt->bindParam(':noOfPersons', $noOfPersons);
        $stmt->bindParam(':roomFeatured', $roomFeatured);
        $result = $stmt->execute();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function getUserByUsername($username)
{
    $query = "SELECT * FROM `shoppers` WHERE `username` = :username";
    
    $stmt = $this->db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

    // start room

}


?>