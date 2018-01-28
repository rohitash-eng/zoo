<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * CmsPages Controller
 *
 * @property \App\Model\Table\CmsPagesTable $CmsPages
 */
class CmsPagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('dashboard_layout');
        $cmsPages = $this->paginate($this->CmsPages);

        $this->set(compact('cmsPages'));
        $this->set('_serialize', ['cmsPages']);
    }

    /**
     * View method
     *
     * @param string|null $id Cms Page id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cmsPage = $this->CmsPages->get($id, [
            'contain' => []
        ]);

        $this->set('cmsPage', $cmsPage);
        $this->set('_serialize', ['cmsPage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('dashboard_layout');
        $cmsPage = $this->CmsPages->newEntity();
        if ($this->request->is('post')) {
            $cmsPage = $this->CmsPages->patchEntity($cmsPage, $this->request->data);
            if ($this->CmsPages->save($cmsPage)) {
                $this->Flash->success(__('The cms page has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cms page could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cmsPage'));
        $this->set('_serialize', ['cmsPage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cms Page id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('dashboard_layout');
        $cmsPage = $this->CmsPages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cmsPage = $this->CmsPages->patchEntity($cmsPage, $this->request->data);
            if ($this->CmsPages->save($cmsPage)) {
                $this->Flash->success(__('The cms page has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cms page could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cmsPage'));
        $this->set('_serialize', ['cmsPage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cms Page id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cmsPage = $this->CmsPages->get($id);
        if ($this->CmsPages->delete($cmsPage)) {
            $this->Flash->success(__('The cms page has been deleted.'));
        } else {
            $this->Flash->error(__('The cms page could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
