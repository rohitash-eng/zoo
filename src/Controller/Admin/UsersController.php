<?php
namespace App\Controller\Admin;

use App\Controller\UsersController as UC;
use Cake\Event\Event;

/**
 * Index Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends UC
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login', 'logout','forgotPassword']);
        $this->viewBuilder()->layout('common_admin_layout');
    }

    public function dashboard(){
        //$this->layout = 'common_admin_layout';
        //pr($this->Auth->user());die;
    }
}
