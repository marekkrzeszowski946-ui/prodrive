<?php
// Backend: zapis zgłoszeń do pliku tekstowego (w katalogu głównym projektu)
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8');
    $phone = htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8');

    $data = 'Data: ' . date('Y-m-d H:i:s') . " | Imię: $name | Tel: $phone | Email: $email\n";
    file_put_contents(dirname(__DIR__) . '/klienci.txt', $data, FILE_APPEND);
    $message = 'Zgłoszenie wysłane! Skontaktujemy się z Tobą.';
}
