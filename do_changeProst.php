<?php
require_once __DIR__.'/config.php';
//$email = $_POST['email'];
//`email` = :email,
$stmt = $pdo->prepare("UPDATE `orders` SET `approved` = :approved");
$stmt->execute([
  //'email' => $_POST['email'],
  'approved' => isset($_POST['approved']) ? 1 : 0,
]);
flash("Успешно изменено");
header('Location: admin.php');
