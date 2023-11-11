<?php
require_once __DIR__.'/config.php';

$stmt = $pdo->prepare("UPDATE `orders` SET `dateD` = :dateD, `taken` = :taken, `emailV` = :emailV WHERE `id` = :id");
$stmt->execute([
  'dateD' => $_POST['dateD'],
  'taken' => isset($_POST['taken']) ? 1 : 0,
  'emailV'=> $_POST['emailV'],
  'id' => $_POST['id'],
]);
flash("Успешно изменено");
header('Location: admin.php');
