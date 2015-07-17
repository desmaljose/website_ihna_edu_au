<?php
class ModulesController extends AppController {

	var $name = 'Modules';
	var $helpers    = array('Session','Html', 'Form', 'Common','Ajax');	
	function index() {
		//$this->layout = 'admin';
                $this->paginate = array(
            'fields' => array('Module.*'),
			'conditions'=>array('Module.enable'=>1),
            'limit' => 20);
		$this->set('limit',20);
		$modules = $this->Paginate('Module');
		$this->set(compact('modules'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid module', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('module', $this->Module->read(null, $id));
	}

	function add() {
		$this->layout = 'admin';
	
	$this->checkPermissionAdmin();
	/* newly added code start */
		$mod_id = "10";
		$this->set('mod_id',$mod_id);
		$act = "add";
		$this->checkPageViewPermission($mod_id,$act);
		$mod = $this->Module->find('list',array('conditions'=>array('parent_id'=>0,'enable'=>1),'fields'=>array('id','module_name')));
		$this->set('mod',$mod);
		/* newly added code end */
		if (!empty($this->data)) {
			$this->Module->create();
			if($this->data['Module']['parent_id']=="")
			$this->data['Module']['parent_id'] = 0;
			
			if ($this->Module->save($this->data)) {
				$this->Session->setFlash(__('The module has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Module->User->find('list',array('fields'=>array('id','username')));
		$this->set(compact('users'));
	}

	function edit($id = null) {
			$this->layout = 'admin';
			$this->checkPermissionAdmin();
			/* newly added code start */
		$mod_id = "10";
		$this->set('mod_id',$mod_id);
		$act = "edit";
		$this->checkPageViewPermission($mod_id,$act);
		/* newly added code end */

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid module', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Module->save($this->data)) {
				$this->Session->setFlash(__('The module has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The module could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Module->read(null, $id);
		}
			$mod = $this->Module->find('list',array('conditions'=>array('parent_id'=>0,'enable'=>1),'fields'=>array('id','module_name')));
		$this->set('mod',$mod);
		$users = $this->Module->User->find('list',array('fields'=>array('id','username')));
		$this->set(compact('users'));
	}
    function getModulename($id)
	{
		$module = $this->Module->find('first',array('conditions'=>array('id'=>$id)));
		$name = $module['Module']['module_name'];
		return $name;
	}
	function delete($id = null) {
		/* newly added code start */
		$mod_id = "10";
		$this->set('mod_id',$mod_id);
		$act = "delete";
		$this->checkPageViewPermission($mod_id,$act);
		/* newly added code end */
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for module', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Module->delete($id)) {
			$this->Session->setFlash(__('Module deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Module was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
}
