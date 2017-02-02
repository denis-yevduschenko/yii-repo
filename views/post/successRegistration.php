<?php

use app\models\UserIdentity;

if($last_name){?>
    <p>Вы ввели фамилию: <b><?=$last_name?></b>.</p>
    <p>Вы ввели имя: <b><?=$first_name?></b>.</p>
    <p>Вы ввели емейл: <b><?=$email?></b>.</p>
    <p>Вы ввели ник: <b><?=$username?></b>.</p>
    <p>Вы ввели пароль: <b><?=$password?></b>.</p>
    <?php
        UserIdentity::registerUser($last_name, $first_name, $username, $email, $password);
    ?>
<?}?>
