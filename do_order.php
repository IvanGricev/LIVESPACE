<?php
require_once __DIR__.'/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $planet = $_POST['planet'];
    $tarif = $_POST["tarif"];
    $date = $_POST["date"];
    $planetL = $_POST["planetL"];
    $dateT = date('Y-m-d');
  
   if ($dateT >= $date) {
       Oflash("Дата полета не раньше" + $dateT + ".");
       header('Location: flight_fares.php');
       die;
   }
   if($planet == $planetL){
    Oflash("Планета вылета не может совпадать с планетой прилета.");
    header('Location: flight_fares.php');
    die;
   }
}

$stmt = $pdo->prepare("INSERT INTO `orders` (`email`, `planet`, `tarif`, `date`, `planetL`) VALUES (:email, :planet, :tarif, :date, :planetL)");
$stmt->execute([
    'email' => $email,
    'planet' => $planet,
    'planetL'=> $planetL,
    'tarif' => $tarif,
    'date' => $date,
]);

Oflash("Заказ прошел успешно");
// flash($email);

header('Location: flight_fares.php');
