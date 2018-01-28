<?php
// ROLE STatus
define('PENDING','PENDING');
define('LENDER_NAME','Lender');
// ROLE STatus

// ROLE Role
define('ADMIN','ADMIN');
define('USER','USER');
// ROLE Role
if($_SERVER['HTTP_HOST'] =='34.194.97.185'){
        define('BASE_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/qa');
}else {
        define('BASE_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/fastclose');
}
