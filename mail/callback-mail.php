<?php
session_start();
$win = "true";

// Если существует переменная POST, то
if ($_POST) {
    $name = $_POST['Name'];	
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    
    // Данные корзины от Tilda
    $cart_total = isset($_POST['Cart-Total']) ? $_POST['Cart-Total'] : '';
    $cart_quantity = isset($_POST['Cart-Quantity']) ? $_POST['Cart-Quantity'] : '';
    $cart_items = isset($_POST['Cart-Items']) ? $_POST['Cart-Items'] : '';
    
    $subject = '=?utf-8?B?' . base64_encode("Заказ с сайта bookartshop.ru") . '?=';

    $message = "
        Клиент: " . $name . "\n
        Email: " . $email . "\n
        Телефон: " . $phone . "\n\n
        ЗАКАЗ:\n
        Количество товаров: " . $cart_quantity . "\n
        Сумма заказа: " . $cart_total . "\n
        Товары:\n" . $cart_items;

    mail("vasilyev-r@mail.ru, sidorov-vv3@mail.ru", $subject, $message);

    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light">Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

get_header(); ?>