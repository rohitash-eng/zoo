<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\Mailer\MailerAwareTrait;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class CmsPagesController extends AppController
{
    use MailerAwareTrait;
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['aboutUs','faq','termAndConditions','privacyPolicy','contactUs','errorPage']);
    }
    /************ These are cms pages *****************/
    public function aboutUs()
    {
        $this->viewBuilder()->layout('static_pages_layout');
        $result = $this->CmsPages->get_data('about_us');
        $this->set('title', $result->title);
        $this->set(compact('result'));
        $this->set('_serialize', ['result']);
    }
    public function faq()
    {
        $this->viewBuilder()->layout('static_pages_layout');
        $result = $this->CmsPages->get_data('faq');
        $this->set('title', $result->title);
        $this->set(compact('result'));
        $this->set('_serialize', ['result']);
    }
    public function termAndConditions()
    {
        $this->viewBuilder()->layout('static_pages_layout');
        $result = $this->CmsPages->get_data('term_and_conditions');
        $this->set('title', $result->title);
        $this->set(compact('result'));
        $this->set('_serialize', ['result']);
    }
    public function privacyPolicy()
    {
        $this->viewBuilder()->layout('static_pages_layout');
        $result = $this->CmsPages->get_data('privacy_policy');
        $this->set('title', $result->title);
        $this->set(compact('result'));
        $this->set('_serialize', ['result']);
    }
    public function contactUs()
    {
        $this->viewBuilder()->layout('static_pages_layout');
        if ($this->request->is('post')) {
            $this->Users = TableRegistry::get('Users');
            $user = $this->Users->get_user_detail('role',ADMIN);
            $link =  Router::url( $this->base, true );
            $link = "<a href='".$link."' target='_blank' style='line-height: 40px;text-decoration: none;width: 130px; height: 42px; float: left; text-align:center; background-color: #5a6770; font-size: 15px; color: #ffffff; cursor: pointer; border: 0px; border-radius: 50px; margin-bottom: 50px;'>Login</a>";
            $options = array('name' => ucfirst($this->request->data['name']),'link'=>$link,'email' =>$this->request->data['email'],'phone'=>$this->request->data['phone'],'message'=>$this->request->data['message'],'admin_name' =>ucfirst($user->firstname).' '.ucfirst($user->lastname));
            $subject = array('subject' => $this->request->data['subject']);
            $obj = $this->CommonFunction->create_email_template_content('contact_us',$options,$subject);
            $this->getMailer('User')->send('common_mail', [$user->email,$obj]);
            $this->Flash->success(__('Your email has been sent successfully. Admin will contact you shortly.Thanks'));
        }
        $this->set('title', 'Contact Us');
    }
    /************ These are cms pages *****************/
    function errorPage(){
        $this->viewBuilder()->layout('error_page');
    }
}
