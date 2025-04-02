<?php

require_once __DIR__ . '/vendor/autoload.php';

use Jerem\WebtCoreViewsInMvc\Model\HotelRepository;
use Jerem\WebtCoreViewsInMvc\View\HotelView;

$template = file_get_contents("index.html");

$repository = new HotelRepository();
$hotels = $repository->getHotels();

$view = new HotelView();
$hotelsHtml = $view->render($hotels);
$pageContent = str_replace("{{HOTELS}}", $hotelsHtml, $template);

echo $pageContent;
