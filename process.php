<?php

if (\array_key_exists('name', $_POST) === false ||
    \array_key_exists('email', $_POST) === false ||
    \array_key_exists('whatsapp', $_POST) === false)
{
    exit;
}

$name = \mb_strimwidth($_POST['name'], 0, 100);
$email = \mb_strimwidth($_POST['email'], 0, 100);
$whatsapp = \mb_strimwidth($_POST['whatsapp'], 0, 15);

\file_put_contents('../prodx.csv', \implode(',', [$name, $email, $whatsapp])."\n", FILE_APPEND);

header('Location: /obrigado');