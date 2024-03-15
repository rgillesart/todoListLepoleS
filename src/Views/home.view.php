<?php

require_once(__DIR__ . '/../Controllers/HomeController.php');
require_once(__DIR__ . "/Parts/head.php");
?>
<h1>Hello 👌</h1>
<?php
foreach ($myUserList as $user) {
?>
    <p><?= $user->pseudo ?></p>
    <p><?= $user->email ?></p>
    <p><?= $user->id ?></p>
<?php
}
require_once(__DIR__ . "/parts/footer.php");
?>