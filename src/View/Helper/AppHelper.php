<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;

class AppHelper extends Helper {

    public $currency = 'USD';

    function meta_tags() {
        // DEAFULT ARE DASHBOARD META TAGS AS CLIENT PROVIDE US START
        $meta_tags['page_title'] = "Zooooooo - My Ad spacing Saling";
        $meta_tags['meta_copy_write'] = "Zoo copy write";
        $meta_tags['meta_desc'] = "Zoo desc";
        $meta_tags['meta_keywords'] = "Zoo meta keyword";
        return $meta_tags;
    }

    function get_coutry_code() {
        $coutry_code_list = array('+1' => '+1');
        return $coutry_code_list;
    }

    function ucr_detail($user_id = null, $role = null) {
        $this->Users = TableRegistry::get('Users');
        $result = array();
        if ($role == BORROWER)
            $result = $this->Users->find('all', ['conditions' => ['Users.role' => $role, 'Users.id' => $user_id], 'contain' => ['Countries', 'States']])
                    ->first();
        if ($role == TC)
            $result = $this->Users->find('all', ['conditions' => ['Users.role' => $role, 'Users.id' => $user_id], 'contain' => ['Countries', 'States', 'Companies']])
                    ->first();
        if ($role == LENDER)
            $result = $this->Users->find('all', ['conditions' => ['Users.role' => $role, 'Users.id' => $user_id], 'contain' => ['Countries', 'States', 'Companies']])
                    ->first();
        return $result;
    }

    function get_adrress_in_format($obj = null) {
        $address = '';
        if (isset($obj->address) && $obj->address != '') {
            $address = isset($obj->address) ? ucfirst($obj->address) : '';
        }
        if (isset($obj->city) && $obj->city != '') {
            $address .= isset($obj->city) ? ' ' . $obj->city . ', ' : '';
        }
        if (isset($obj->state->state_name) && $obj->state->state_name != '') {
            $address .= isset($obj->state->state_name) ? $obj->state->state_name . ', ' : '';
        }
        if (isset($obj->country->nic_name) && $obj->country->nic_name != '') {
            $address .= isset($obj->country->nic_name) ? $obj->country->nic_name : '';
        } else {
            $address = rtrim($address, ", ");
        }
        if ($address == '')
            $address = 'N/A';
        $address .= ' ' . $obj->zip_code;
        return $address;
    }

    function get_date_in_format($date = null) {
        if ($date == null || $date == '0000-00-00') {
            return 'N/A';
        }
        return date("M j, Y", strtotime($date));
    }

    function get_time_in_format($time = null) {
        if ($time == null) {
            return 'N/A';
        }
        return date("g:i A", strtotime($time));
    }

    /**     * */
    function phoneFormat($number = null, $code = null) {
        return preg_replace('/^\+1(\d{3})(\d{3})(\d{4})$/i', '$1-$2-$3', $code . $number);
    }

    function convert_time($email, $date) {
        $timezone = '';
        $timezone = trim($timezone['User']['timezone']);
        $dt = new DateTime($date);
        $tz = new DateTimeZone($timezone); // or whatever zone you're after
        $dt->setTimezone($tz);
        return $dt->format('M j, Y | g:i A');
    }

}
