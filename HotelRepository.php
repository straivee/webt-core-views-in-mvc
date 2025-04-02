<?php

require_once("Hotel.php");

class HotelRepository {
    /**
     * Gibt eine Liste von Hotel-Objekten zurück
     * @return Hotel[]
     */
    public function getHotels(): array {
        return [
            new Hotel("The Venetian", "A luxury hotel with a Venice-inspired theme, offering gondola rides."),
            new Hotel("Bellagio", "Famous for its iconic fountains and world-class casino experience."),
            new Hotel("MGM Grand", "One of the largest hotels in the world, known for its entertainment and nightlife."),
            new Hotel("Caesars Palace", "A Roman Empire-themed luxury hotel with top-notch amenities.")
        ];
    }
}
