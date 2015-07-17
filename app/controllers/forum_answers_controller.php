<?php
class ForumAnswersController extends AppController {

	var $name = 'ForumAnswers';
        var $uses = array('ForumAnswer','ForumQuestion' );

	function index($question_id = null) {
            
                $this->layout = 'about_layout';
                $this->set('page_title', 'FAQ Answers');
                
                $this->paginate['conditions'] = array(
                    'ForumAnswer.question_id' => $question_id,
                    'ForumAnswer.a_approval' => 1
                );                
                
		$this->ForumAnswer->recursive = 0;
		$this->set('forumAnswers', $this->paginate());
                
                $this->set('forumQuestion', $this->ForumQuestion->findById($question_id) );
                
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum answer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumAnswer', $this->ForumAnswer->read(null, $id));
	}

	function add() {
            
            // This is ajax buddy
            $this->autoRender = false;
            
		if (!empty($this->data)) {
			$this->ForumAnswer->create();
			if ($this->ForumAnswer->save($this->data)) {
				echo 'Thanks for your intrest in us. One of our representative will go through the query and publish the details shortly.';
			} else {
				echo 'Error occured while sending your details. Please try later.';
			}
		}

	}

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumAnswer->save($this->data)) {
				$this->Session->setFlash(__('The forum answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum answer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumAnswer->read(null, $id);
		}
		$forumQuestions = $this->ForumAnswer->ForumQuestion->find('list');
		$this->set(compact('forumQuestions'));
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumAnswer->delete($id)) {
			$this->Session->setFlash(__('Forum answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum answer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function _admin_index() {
		$this->ForumAnswer->recursive = 0;
		$this->set('forumAnswers', $this->paginate());
	}

	function _admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum answer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumAnswer', $this->ForumAnswer->read(null, $id));
	}

	function _admin_add() {
		if (!empty($this->data)) {
			$this->ForumAnswer->create();
			if ($this->ForumAnswer->save($this->data)) {
				$this->Session->setFlash(__('The forum answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum answer could not be saved. Please, try again.', true));
			}
		}
		$forumQuestions = $this->ForumAnswer->ForumQuestion->find('list');
		$this->set(compact('forumQuestions'));
	}

	function _admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum answer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumAnswer->save($this->data)) {
				$this->Session->setFlash(__('The forum answer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum answer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumAnswer->read(null, $id);
		}
		$forumQuestions = $this->ForumAnswer->ForumQuestion->find('list');
		$this->set(compact('forumQuestions'));
	}

	function _admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumAnswer->delete($id)) {
			$this->Session->setFlash(__('Forum answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum answer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
