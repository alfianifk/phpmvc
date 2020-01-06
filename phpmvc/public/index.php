<?php

if ( !session_id() ) session_start();

//memanggil seluruh file dari app
//bootstraping
require_once '../app/init.php';

//instansiasi Class App

$app = new App;