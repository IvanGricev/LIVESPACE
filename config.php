<?php
session_start();

try {
	$pdo = new PDO('mysql:dbname=livespace; host=localhost', 'root', '');
} catch (PDOException $e) {
	die($e->getMessage());
}

////////////////////////////////////////////////

function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
          <div class="alert alert-danger mb-3">
              <?=$_SESSION['flash']?>
          </div>
        <?php }
        unset($_SESSION['flash']);
    }
}

function check_auth(): bool
{
    return !!($_SESSION['user_email'] ?? false);
}

function Oflash(?string $message = null)
{
    if ($message) {
        $_SESSION['Oflash'] = $message;
    } else {
        if (!empty($_SESSION['Oflash'])) { ?>
          <div class="alert alert-danger mb-3">
              <?=$_SESSION['Oflash']?>
          </div>
        <?php }
        unset($_SESSION['Oflash']);
    }
}