<?php
require_once("public/Hotel.php");
require_once("public/HotelRepository.php");
require_once("public/HotelView.php");

$template = file_get_contents("index.html");

$repository = new HotelRepository();
$hotels = $repository->getHotels();

$view = new HotelView();
$hotelsHtml = $view->render($hotels);

$pageContent = str_replace("{{HOTELS}}", $hotelsHtml, $template);

echo $pageContent;
