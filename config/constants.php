<?php
// ROLE slug and name constants
define('LENDER','LENDER');
define('LENDER_NAME','Lender');

if($_SERVER['HTTP_HOST'] =='34.194.97.185'){
        define('BASE_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/qa');
}else {
        define('BASE_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/fastclose');
}
