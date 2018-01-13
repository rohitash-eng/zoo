<?php

namespace App\Model\Validation;

use Cake\Validation\Validator;

class CustomValidator extends Validator {

    public function __construct() {
        parent::__construct();
    }
    public static function validText($value, $context) {
        if (preg_match('/^[a-zA-Z ]+$/', $value)) {
            return true;
        } else {
            return 'Special characters and numbers not allowed';
        }
    }
    public static function phone($value) {
        if (preg_match('/^[0-9]{10}$/', $value)) {
            return true;
        } else {
            return 'Please provide valid phone no.';
        }
    }
    public static function zip($value) {
        if (preg_match('/^[0-9]{5,6}$/', $value)) {
            return true;
        } else {
            return 'Please provide valid zip code.';
        }
    }
    public static function validAddress($value) {
        if (preg_match('/^[a-z0-9\-,#.\s ]*$/i', $value)) {
            return true;
        } else {
            return 'Please provide valid  address.';
        }
    }
}
