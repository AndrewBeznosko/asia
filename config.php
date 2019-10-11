<?php
$config = array (
    array(
          'crm_name' => 'Базовый',
          'form_view_name' => 'Базовый',
          'price' => 297,
          'price_rub' => 19700,
          'price_high' => 397,
          'price_rub_high' => 26500,
          ),
    array(
        'crm_name' => 'Стандартный',
        'form_view_name' => 'Стандарт',
        'price' => 597,
        'price_rub' => 39700,
        'price_high' => 797,
        'price_rub_high' => 53000,
        ),
    array(
        'crm_name' => 'VIP',
        'form_view_name' => 'VIP',
        'price' => 1597,
        'price_rub' => 106000,
        'price_high' => 2397,
        'price_rub_high' => 159700, 
        ),
    );

if (isset($_GET["get_price"])) {
    foreach ($config as $packet) {
        if ($packet["crm_name"] == $_GET["get_price"]) {
            header('Content-type: application/json');
            echo json_encode(array("price" => $packet["price"], "price_rub" => $packet["price_rub"]));
            break;
        }
    }
}

if (isset($_GET["get_price_high"])) {
    foreach ($config as $packet) {
        if ($packet["crm_name"] == $_GET["get_price_high"]) {
            header('Content-type: application/json');
            echo json_encode(array("price" => $packet["price_high"], "price_rub" => $packet["price_rub_high"]));
            break;
        }
    }
}

    else return $config;
