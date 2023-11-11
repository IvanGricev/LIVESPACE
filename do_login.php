<?php

require_once __DIR__.'/config.php';

// Проверяем наличие пользователя с указанным юзернеймом
$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = :email");
$stmt->execute(['email' => $_POST['email']]);
if (!$stmt->rowCount()) {
    flash('Пользователь с такими данными не зарегистрирован');
    header('Location: textpaje.php');
    die;
}
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Проверяем пароль
if (password_verify($_POST['password'], $user['password'])) {
    // Проверяем, не нужно ли использовать более новый алгоритм или другую алгоритмическую стоимость
    // при смене хеширования
    if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
        $newHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('UPDATE `users` SET `password` = :password WHERE `email` = :email');
        $stmt->execute([
            'email' => $_POST['email'],
            'password' => $newHash,
        ]);
    }
    $_SESSION['user_id'] = $user['email'];
    
    if($user['admin'] == 1){ 
        header('Location: admin.php'); 
    }

    else{
       header('Location: index.php');
       flash("Успешно авторизованы");
    } 
    die;
}

flash('Пароль неверен');
header('Location: login.php');