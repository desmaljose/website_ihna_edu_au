<?php
class JobApplicationsController extends AppController {

	var $name = 'JobApplications';
        var $uses = array('JobApplication','JobDetail',);

	function admin_index() {
                $this->layout = 'admin';
                $this->checkPermissionAdmin();               
		$this->JobApplication->recursive = 0;
		$this->set('jobApplications', $this->paginate());
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid job application', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobApplication', $this->JobApplication->read(null, $id));
	}

	function _add() {
		if (!empty($this->data)) {
			$this->JobApplication->create();
			if ($this->JobApplication->save($this->data)) {
				$this->Session->setFlash(__('The job application has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job application could not be saved. Please, try again.', true));
			}
		}
		$jobs = $this->JobApplication->Job->find('list');
		$this->set(compact('jobs'));
	}

	function admin_edit($id = null) {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();             
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job application', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
                    
                    
                    // COVER LETTER FILE UPLOAD
                        if($this->data['JobApplication']['jaCoverLetter_file']['name']!=''){
                            $unique_val = uniqid();
                            $filename1 = $this->data['JobApplication']['jaCoverLetter_file']['name'];
                            move_uploaded_file($this->data['JobApplication']['jaCoverLetter_file']['tmp_name'], "career/cover_letters/".$unique_val.'_'.$filename1);
                            $this->data['JobApplication']['jaCoverLetter'] = $unique_val.'_'.$filename1;
                        } 
                        
                    // RESUME FILE UPLOAD
                        if($this->data['JobApplication']['jaResume_file']['name']!=''){
                            $unique_val = uniqid();
                            $filename1 = $this->data['JobApplication']['jaResume_file']['name'];
                            move_uploaded_file($this->data['JobApplication']['jaResume_file']['tmp_name'], "career/resumes/".$unique_val.'_'.$filename1);
                            $this->data['JobApplication']['jaResume'] = $unique_val.'_'.$filename1;
                        } 
                        
                        
                        
                    
			if ($this->JobApplication->save($this->data)) {
				$this->Session->setFlash(__('The job application has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job application could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobApplication->read(null, $id);
		}
		$jobs = $this->JobDetail->find('list');
		$this->set(compact('jobs'));
	}

	function admin_delete($id = null) {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();             
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for job application', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobApplication->delete($id)) {
			$this->Session->setFlash(__('Job application deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job application was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
        
	function apply($id = null) {
            $this->layout = "about_layout";
            $this->set('page_title','Apply Job');
   
		if (!empty($this->params['form']['jaFirstName'])) {
                    
//                    echo '<pre>';
//                    print_r($this->params['form']);
                    //exit;
                    
                    // RESUME AND COVER LETTER FILE UPLOAD GOES HERE
                    
                    // COVER LETTER FILE UPLOAD
                        if($this->params['form']['jaCoverLetter_file']['name']!=''){
                            $unique_val = uniqid();
                            $filename1 = $this->params['form']['jaCoverLetter_file']['name'];
                            move_uploaded_file($this->params['form']['jaCoverLetter_file']['tmp_name'], "career/cover_letters/".$unique_val.'_'.$filename1);
                            $this->params['form']['jaCoverLetter'] = $unique_val.'_'.$filename1;
                        } 
                        
                    // RESUME FILE UPLOAD
                        if($this->params['form']['jaResume_file']['name']!=''){
                            $unique_val = uniqid();
                            $filename1 = $this->params['form']['jaResume_file']['name'];
                            move_uploaded_file($this->params['form']['jaResume_file']['tmp_name'], "career/resumes/".$unique_val.'_'.$filename1);
                            $this->params['form']['jaResume'] = $unique_val.'_'.$filename1;
                        }                          
                    
                   
			$this->JobApplication->create();
			if ($this->JobApplication->save($this->params['form'])) {
				$this->Session->setFlash(__('The job application has been send. Our recruitment team will contact you soon.', true));
			} else {
				$this->Session->setFlash(__('The job application could not be send now. Please, try again later.', true));
			}
                        
                        $this->redirect(array('controller'=>'jobDetails','action'=>'available'));
		}

		$this->set('jdDetailsId',$id);
	}
        
}
