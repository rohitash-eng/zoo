<?php
namespace App\Controller\Admin;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Index Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class IndexController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('dashboard_layout');
        if(!$this->Auth->user('id')){
            return $this->redirect("/login");
        }
    }
}
