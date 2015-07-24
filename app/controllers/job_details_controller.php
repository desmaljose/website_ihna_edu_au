<?php
class JobDetailsController extends AppController {

	var $name = 'JobDetails';
        var $uses = array('JobDetail','JobCategory','JobProviderDetail');

	function admin_index() {
                $this->layout = 'admin';
                $this->checkPermissionAdmin();            
		$this->JobDetail->recursive = 0;
		$this->set('jobDetails', $this->paginate());
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid job detail', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobDetail', $this->JobDetail->read(null, $id));
	}

	function admin_add() {
            
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();
                
		if (!empty($this->data)) {
			$this->JobDetail->create();
			if ($this->JobDetail->save($this->data)) {
				$this->Session->setFlash(__('The job detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job detail could not be saved. Please, try again.', true));
			}
		}
		$providers = $this->JobProviderDetail->find('list');
		$categories = $this->JobCategory->find('list',array('conditions'=>'jcCatParent != 0'));
		$this->set(compact('providers', 'categories'));
                
	}

	function admin_edit($id = null) {
            
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();            
            
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job detail', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobDetail->save($this->data)) {
				$this->Session->setFlash(__('The job detail has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job detail could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobDetail->read(null, $id);
		}
		$providers = $this->JobProviderDetail->find('list');
		$categories = $this->JobCategory->find('list',array('conditions'=>'jcCatParent != 0'));
		$this->set(compact('providers', 'categories'));
                
	}

	function admin_delete($id = null) {
            	$this->layout = 'admin';
	 	$this->checkPermissionAdmin();            
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for job detail', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobDetail->delete($id)) {
			$this->Session->setFlash(__('Job detail deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job detail was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
        function available(){
                $this->layout = "about_layout";
                $this->set('page_title','Available Jobs');
                
                // FILTREATION GOES HERE
                $where = ' TRUE ';
                if(@$this->params['form']['keyword']!=''){
                    $where .= " AND ( jpJobTitle LIKE '%".$this->params['form']['keyword']."%' OR jpJobDescription LIKE '%".$this->params['form']['keyword']."%' )  ";
                }
                if(@$this->params['form']['location']!=''){
                    $where .= " AND jpJobLocation = '".$this->params['form']['location']."' ";
                }                 
                if(@$this->params['form']['sub_category']!=''){
                    $where .= " AND jdJobCategoryId = '".$this->params['form']['sub_category']."' ";
                } 
                if(@$this->params['form']['salary_from']!=''){
                    $where .= " AND jdSalary >= '".$this->params['form']['salary_from']."' ";
                }  
                if(@$this->params['form']['salary_to']!=''){
                    $where .= " AND jdSalary <= '".$this->params['form']['salary_to']."' ";
                }
                
                
		$this->JobDetail->recursive = 0;
		$this->set('jobDetails', $this->JobDetail->find('all',array('conditions'=>$where)) );

                
                
                
                // LOCATIONS
                $this->set('locations', array(1=>"VIC",2=>"WA",3=>"NSW") );
                
                // CATEGORIES
                $categories = $this->JobCategory->find('all',array('fields'=>array('jcCatgId','jcCatgHeading'),'conditions'=>array('jcIsActiveCatg'=>'1','jcCatParent'=>'0')));
                //print_r($categories);
                //exit;
                $this->set('categories', $categories);              
                
                
	}
        
	function description($id = null) {
                $this->layout = "about_layout";
                $this->set('page_title','Job Details');
		if (!$id) {
			$this->Session->setFlash(__('Invalid job detail', true));
			$this->redirect(array('controller' => 'courses','action' => 'index'));
		}
		$this->set('jobDetail', $this->JobDetail->read(null, $id));
	}        
        
}
