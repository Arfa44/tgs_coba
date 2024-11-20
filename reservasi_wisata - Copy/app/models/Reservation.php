<?php
// app/models/Reservation.php
require_once '../config/database.php';

class Reservation {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllReservation() {
        $query = $this->db->query("SELECT * FROM reservation");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($reservation_id) {
        $query = $this->db->prepare("SELECT * FROM reservation WHERE reservation_id = :reservation_id");
        $query->bindParam(':reservation_id', $reservation_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($reservation_id, $user_id, $destination_id, $tgl_reservasi, $status_pembayaran) {
        $query = $this->db->prepare("INSERT INTO reservation (reservation_id, user_id, destination_id, tgl_reservasi, status_pembayaran) VALUES (:reservation_id, ```php
:user_id, :destination_id, :tgl_reservasi, :status_pembayaran)");
        $query->bindParam(':reservation_id', $reservation_id);
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':destination_id', $destination_id);
        $query->bindParam(':tgl_reservasi', $tgl_reservasi);
        $query->bindParam(':status_pembayaran', $status_pembayaran);
        return $query->execute();
    }

    public function update($reservation_id, $data) {
        $query = "UPDATE reservation SET user_id = :user_id, destination_id = :destination_id, tgl_reservasi = :tgl_reservasi, status_pembayaran = :status_pembayaran WHERE reservation_id = :reservation_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':destination_id', $data['destination_id']);
        $stmt->bindParam(':tgl_reservasi', $data['tgl_reservasi']);
        $stmt->bindParam(':status_pembayaran', $data['status_pembayaran']);
        $stmt->bindParam(':reservation_id', $reservation_id);
        return $stmt->execute();
    }

    public function delete($reservation_id) {
        $query = "DELETE FROM reservation WHERE reservation_id = :reservation_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':reservation_id', $reservation_id);
        return $stmt->execute();
    }
}