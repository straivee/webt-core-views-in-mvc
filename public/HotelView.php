<?php

require_once("Hotel.php");

class HotelView {
    /**
     * @param Hotel[] $hotels
     */
    public function render(array $hotels): string {
        $output = "";

        foreach ($hotels as $hotel) {
            $output .= <<<HTML
            <div class="hotel">
                <h2>{$hotel->getName()}</h2>
                <p>{$hotel->getDescription()}</p>
            </div>
            HTML;
        }

        return $output;
    }
}
