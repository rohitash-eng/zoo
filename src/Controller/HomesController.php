<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\Utility\Security;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\MailerAwareTrait;
use Cake\Core\Configure;
Configure::load('success_error_msg');


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class HomesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['login', 'signup','logout','results']);
        $this->viewBuilder()->layout('common_layout');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        //$users = $this->paginate($this->Users);

//        $this->set(compact('users'));
//        $this->set('_serialize', ['users']);
    }
	public function results() {
        //$users = $this->paginate($this->Users);

//        $this->set(compact('users'));
//        $this->set('_serialize', ['users']);
    }
}
