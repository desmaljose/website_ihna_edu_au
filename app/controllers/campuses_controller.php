<?php
class CampusesController extends AppController {

	var $name = 'Campuses';

	function index() {
		$this->Campus->recursive = 0;
		$this->set('campuses', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid campus', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campus', $this->Campus->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Campus->create();
			if ($this->Campus->save($this->data)) {
				$this->Session->setFlash(__('The campus has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.', true));
			}
		}
		$campusTypes = $this->Campus->CampusType->find('list');
		$states = $this->Campus->State->find('list');
		$this->set(compact('campusTypes', 'states'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid campus', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Campus->save($this->data)) {
				$this->Session->setFlash(__('The campus has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Campus->read(null, $id);
		}
		$campusTypes = $this->Campus->CampusType->find('list');
		$states = $this->Campus->State->find('list');
		$this->set(compact('campusTypes', 'states'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for campus', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campus->delete($id)) {
			$this->Session->setFlash(__('Campus deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Campus was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Campus->recursive = 0;
		$this->set('campuses', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid campus', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('campus', $this->Campus->read(null, $id));
	}
	function image_gallery()
{
	$url = $this->params['url']['url'];
	echo $url;
	exit;
	$this->loadModel('Cm');
	$cms = $this->Cm->find('first',array('conditions'=>array('Cm.seo_url'=>$url)));
	if($cms['Cm']['parent_id']==2)
	$this->layout = "about_layout";
	$this->set('meta_keywords',$cms['Cm']['meta_keyword']);
	$this->set('meta_description',$cms['Cm']['meta_desc']);
	$this->set('meta_title',$cms['Cm']['meta_title']);
	$this->set('page_title',$cms['Cm']['page_title']);
 	$this->set('page_content',$cms['Cm']['page_content']);
}
	function admin_add() {
		if (!empty($this->data)) {
			$this->Campus->create();
			if ($this->Campus->save($this->data)) {
				$this->Session->setFlash(__('The campus has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.', true));
			}
		}
		$campusTypes = $this->Campus->CampusType->find('list');
		$states = $this->Campus->State->find('list');
		$this->set(compact('campusTypes', 'states'));
	}


	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid campus', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Campus->save($this->data)) {
				$this->Session->setFlash(__('The campus has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The campus could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Campus->read(null, $id);
		}
		$campusTypes = $this->Campus->CampusType->find('list');
		$states = $this->Campus->State->find('list');
		$this->set(compact('campusTypes', 'states'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for campus', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Campus->delete($id)) {
			$this->Session->setFlash(__('Campus deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Campus was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
