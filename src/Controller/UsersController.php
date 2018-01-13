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
class UsersController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['logout', 'signup']);
        $this->viewBuilder()->layout('common_layout');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function login() {
        if($this->Auth->User('id')){
            return $this->redirect($this->Auth->redirectUrl());
        }
        $msg = Configure::read('Msg');
        if ($this->request->is('post')) {
            $user = $this->Users->newEntity($this->request->data, ['validate' => 'Login']);
            if (empty($user->errors())) {
                $user = $this->Auth->identify();
                if ($user && $user['status'] == 1) {
                    $this->Auth->setUser($user);
                    $this->Flash->success($msg['loginSuccess']);
                    return $this->redirect('/myprofile');
                } else {
                    $this->Flash->error($msg['emailNotVerify']);
                    return $this->redirect('/login');
                }
            } else {
                $user->errors($user->errors());
            }
        }
        $user = $this->Users->newEntity();
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function index() {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function myprofile() {
        
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function signup() {
        if($this->Auth->User('id')){
            return $this->redirect($this->Auth->redirectUrl());
        }
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
//            pr($user);die;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been registered.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The user could not be registered. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
