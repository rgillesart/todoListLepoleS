<?php
require_once(__DIR__ . '/../../config/function.php');
require_once(__DIR__ . '/../Models/User.php');

$user = new User;
$myUserList = $user->getUserList();
print_r($myUserList);

require_once(__DIR__ . '/../Views/home.view.php');
