<?php
class SettingsController extends AppController {

	var $name = 'Settings';
	var $helpers = array('Session','Html', 'Form');
	var $components = array('Session');
	
	function admin_index() {
			 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	
		$this->Setting->recursive = 0;
		$this->set('settings', $this->paginate());
	}

	function admin_view($id = null) {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
	
		if (!$id) {
			$this->Session->setFlash(__('Invalid setting', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('setting', $this->Setting->read(null, $id));
	}

	function admin_add() {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
			
		if (!empty($this->data)) {
			$this->Setting->create();
			if ($this->Setting->save($this->data)) {
				$this->Session->setFlash(__('The setting has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
			
	 $this->layout= 'admin';
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid setting', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Setting->save($this->data)) {
				$this->Session->setFlash(__('The setting has been saved', true));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The setting could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Setting->read(null, $id);
		}
	}

	function admin_delete($id = null) {
	 $this->layout = 'admin';
	 $this->checkPermissionAdmin();
			
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for setting', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Setting->delete($id)) {
			$this->Session->setFlash(__('Setting deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Setting was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>