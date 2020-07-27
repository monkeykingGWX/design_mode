<?php

namespace app\agency;


require '../../vendor/autoload.php';

$login = new Login();
$loginProxy = new LoginProxy($login);

$loginProxy->register('gwx', '111111');
$loginProxy->login('james', '111111111');