<?php
class JobCategoriesController extends AppController {

	var $name = 'JobCategories';

	function admin_index() {
                $this->layout = 'admin';
                $this->checkPermissionAdmin();             
		$this->JobCategory->recursive = 0;
		$this->set('jobCategories', $this->paginate());
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid job category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobCategory', $this->JobCategory->read(null, $id));
	}

	function admin_add() {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();              
		if (!empty($this->data)) {
			$this->JobCategory->create();
			if ($this->JobCategory->save($this->data)) {
				$this->Session->setFlash(__('The job category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job category could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->JobCategory->find('list',array('conditions'=>'jcCatParent = 0'));
                $categories[0] = 'Root';
		$this->set(compact('categories'));                
	}

	function admin_edit($id = null) {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();             
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobCategory->save($this->data)) {
				$this->Session->setFlash(__('The job category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobCategory->read(null, $id);
		}
		$categories = $this->JobCategory->find('list',array('conditions'=>'jcCatParent = 0'));
                $categories[0] = 'Root';
		$this->set(compact('categories'));                   
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for job category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobCategory->delete($id)) {
			$this->Session->setFlash(__('Job category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
        function ajax_first_level_categories($id = null){
                $this->autoRender = false;
            
                $sub_categories = $this->JobCategory->find('all',array('fields'=>array('jcCatgId','jcCatgHeading'),'conditions'=>array('jcIsActiveCatg'=>'1','jcCatParent'=>$id)));
                $result = array();
                foreach($sub_categories as $row){
                    $result[] = $row['JobCategory'];
                }
//                echo '<pre>';
//                print_r($result);
                return json_encode($result);
        }
}
