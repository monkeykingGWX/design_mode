<?php

namespace app\iterator;

require '../../vendor/autoload.php';

$users = new UserList();
$users->addUsers(new User('james', '36', 'player'));
$users->addUsers(new User('jay', '42', 'singer'));
$users->addUsers(new User('sinwa', '33', 'driver'));
$users->addUsers(new User('liming', '76', 'farmer'));

foreach ($users as $user) {
    echo $user->getDesc();
}