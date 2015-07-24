<?php
class JobProviderDetailsController extends AppController {

	var $name = 'JobProviderDetails';

	function admin_index() {
                $this->layout = 'admin';
                $this->checkPermissionAdmin();               
		$this->JobProviderDetail->recursive = 0;
		$this->set('jobProviderDetails', $this->paginate());
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid job provider detail', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobProviderDetail', $this->JobProviderDetail->read(null, $id));
	}

	function admin_add() {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();            
		if (!empty($this->data)) {
                    
                    // Logo FILE UPLOAD
                        if($this->data['JobProviderDetail']['jpCompanyLogo_file']['name']!=''){
                            $unique_val = uniqid();
                            $filename1 = $this->data['JobProviderDetail']['jpCompanyLogo_file']['name'];
                            move_uploaded_file($this->data['JobProviderDetail']['jpCompanyLogo_file']['tmp_name'], 'career/logo/'.$unique_val.'_'.$filename1);
                            $this->data['JobProviderDetail']['jpCompanyLogo'] = $unique_val.'_'.$filename1;
                        }
                    
			$this->JobProviderDetail->create();
			if ($this->JobProviderDetail->save($this->data)) {
				$this->Session->setFlash(__('The job provider detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job provider detail could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();             
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job provider detail', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
                    

                        // Logo FILE UPLOAD
                        if($this->data['JobProviderDetail']['jpCompanyLogo_file']['name']!=''){
                            $unique_val = uniqid();
                            $filename1 = $this->data['JobProviderDetail']['jpCompanyLogo_file']['name'];
                            move_uploaded_file($this->data['JobProviderDetail']['jpCompanyLogo_file']['tmp_name'], 'career/logo/'.$unique_val.'_'.$filename1);
                            $this->data['JobProviderDetail']['jpCompanyLogo'] = $unique_val.'_'.$filename1;
                        }
                        
                        
			if ($this->JobProviderDetail->save($this->data)) {
				$this->Session->setFlash(__('The job provider detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job provider detail could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobProviderDetail->read(null, $id);
		}
	}

	function admin_delete($id = null) {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();             
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for job provider detail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobProviderDetail->delete($id)) {
			$this->Session->setFlash(__('Job provider detail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job provider detail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
