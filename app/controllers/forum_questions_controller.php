<?php
class ForumQuestionsController extends AppController {

	var $name = 'ForumQuestions';
        var $uses = array('ForumQuestion','ForumCategory');

	function index($course_id = null, $category_id = null) {
                
                $this->layout = 'about_layout';
                $this->set('page_title', 'FAQ');
                
		$this->ForumQuestion->recursive = 0;
                if (!empty($this->data['ForumQuestion']['search'])) {

                    $this->paginate['conditions'] = array(
                        'ForumQuestion.course_id' => $course_id,
                        'ForumQuestion.forum_category' => $category_id,
                        'ForumQuestion.view' => 1,
                        'ForumQuestion.topic LIKE ' => "%{$this->data['ForumQuestion']['search']}%"
                    );
                    $this->set('search', $this->data['ForumQuestion']['search']);
                    
                }else{
                    $this->paginate['conditions'] = array(
                        'ForumQuestion.course_id' => $course_id,
                        'ForumQuestion.forum_category' => $category_id,
                        'ForumQuestion.view' => 1,
                    );

                }
		$this->set('forumQuestions', $this->paginate());


                
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum question', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumQuestion', $this->ForumQuestion->read(null, $id));
	}

	function add() {
            
            // This is ajax buddy
            
            $this->autoRender = false;
            
		if (!empty($this->data)) {
                    
//                    echo '<pre>';
//                    print_r($this->data);
//                    exit;
                    
			$this->ForumQuestion->create();
			if ($this->ForumQuestion->save($this->data)) {
                            
                            echo 'Thanks for your intrest in us. One of our representative will go through the query and publish the answers shortly.';
                            
			} else {
                                echo 'Error occured while sending your details. Please try later.';
			}
		}

	}

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumQuestion->save($this->data)) {
				$this->Session->setFlash(__('The forum question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum question could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumQuestion->read(null, $id);
		}
		$forumCategories = $this->ForumQuestion->ForumCategory->find('list');
		$this->set(compact('forumCategories'));
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumQuestion->delete($id)) {
			$this->Session->setFlash(__('Forum question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
                $this->layout = 'admin';
                $this->checkPermissionAdmin();              
		$this->ForumQuestion->recursive = 0;
		$this->set('forumQuestions', $this->paginate());
	}

	function _admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum question', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumQuestion', $this->ForumQuestion->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ForumQuestion->create();
			if ($this->ForumQuestion->save($this->data)) {
				$this->Session->setFlash(__('The forum question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum question could not be saved. Please, try again.', true));
			}
		}
		$forumCategories = $this->ForumQuestion->ForumCategory->find('list');
		$this->set(compact('forumCategories'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumQuestion->save($this->data)) {
				$this->Session->setFlash(__('The forum question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum question could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumQuestion->read(null, $id);
		}
		$forumCategories = $this->ForumQuestion->ForumCategory->find('list');
		$this->set(compact('forumCategories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumQuestion->delete($id)) {
			$this->Session->setFlash(__('Forum question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
