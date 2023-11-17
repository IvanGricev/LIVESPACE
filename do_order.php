<?php
require_once __DIR__.'/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $addresP = $_POST['addresP'];
    $planet = $_POST['planet'];
    $tarif = $_POST["tarif"];
    $date = $_POST["date"];
    $dateT = date('Y-m-d');
    $planetL = $_POST("planetL");
  
   if ($dateT >= $date) {
       flash("Дата полета не раньше" + $dateT + ".");
       header('Location: flight_fares.php');
       die;
   }
   if($planet == $planetL){
    flash("Планета вылета не может совпадать с планетой прилета.");
    header('Location: flight_fares.php');
    die;
   }
}

$stmt = $pdo->prepare("INSERT INTO `orders` (`email`, `planet`, `tarif`, `date`, `planetL`) VALUES (:email, :planet, :tarif, :date, :planetL)");
$stmt->execute([
    'email' => $email,
    'planet' => $planet,
    'tarif' => $tarif,
    'date' => $date,
    'planetL'=> $planetL,
]);

flash("Заказ прошел успешно");
// flash($email);

header('Location: flight_fares.php');
