<?php
// Template-Datei einlesen
$template = file_get_contents("index.html");

// Array mit Hotel-Daten
$hotels = [
    [
        "name" => "The Venetian",
        "description" => "A luxury hotel with a Venice-inspired theme, offering gondola rides."
    ],
    [
        "name" => "Bellagio",
        "description" => "Famous for its iconic fountains and world-class casino experience."
    ],
    [
        "name" => "MGM Grand",
        "description" => "One of the largest hotels in the world, known for its entertainment and nightlife."
    ],
    [
        "name" => "Caesars Palace",
        "description" => "A Roman Empire-themed luxury hotel with top-notch amenities."
    ]
];

// Dynamische HTML-Ausgabe für Hotels generieren
$hotelsContent = "";
foreach ($hotels as $hotel) {
    $hotelsContent .= <<<HOTEL
    <div class="hotel">
        <h2>{$hotel['name']}</h2>
        <p>{$hotel['description']}</p>
    </div>
    HOTEL;
}

// Platzhalter im Template ersetzen
$pageContent = str_replace("{{HOTELS}}", $hotelsContent, $template);

// Finalen HTML-Code ausgeben
echo $pageContent;
?>
