<?php

date_default_timezone_set('Asia/Kolkata');

$var = '20/04/2012';

// $var = $_POST['dob'];

$date = str_replace('/', '-', $var);

echo date('Y-m-d', strtotime($date));