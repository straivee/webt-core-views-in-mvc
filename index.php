<?php
require_once("Hotel.php");
require_once("HotelRepository.php");
require_once("HotelView.php");

$template = file_get_contents("index.html");

$repository = new HotelRepository();
$hotels = $repository->getHotels();

$view = new HotelView();
$hotelsHtml = $view->render($hotels);

$pageContent = str_replace("{{HOTELS}}", $hotelsHtml, $template);

echo $pageContent;
