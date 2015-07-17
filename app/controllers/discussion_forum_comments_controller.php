<?php
class DiscussionForumCommentsController extends AppController {

	var $name = 'DiscussionForumComments';
        var $uses = array('DiscussionForumComment','DiscussionForum' );

	function _index() {
		$this->DiscussionForumComment->recursive = 0;
		$this->set('discussionForumComments', $this->paginate());
	}
        
	function index($question_id = null) {
            
                $this->layout = 'about_layout';
                $this->set('page_title', 'FAQ Answers');
                
                $this->paginate['conditions'] = array(
                    'DiscussionForumComment.discussion_forum_id' => $question_id,
                    'DiscussionForumComment.status' => 1
                );                
                
		$this->DiscussionForumComment->recursive = 0;
		$this->set('forumAnswers', $this->paginate());
                
                $this->set('forumQuestion', $this->DiscussionForum->findById($question_id) );
                
	}        

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discussion forum comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discussionForumComment', $this->DiscussionForumComment->read(null, $id));
	}

	function _add() {
		if (!empty($this->data)) {
			$this->DiscussionForumComment->create();
			if ($this->DiscussionForumComment->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum comment could not be saved. Please, try again.', true));
			}
		}
		$discussionForums = $this->DiscussionForumComment->DiscussionForum->find('list');
		$this->set(compact('discussionForums'));
	}
        
	function add() {
            
            // This is ajax buddy
            $this->autoRender = false;
            
		if (!empty($this->data)) {
			$this->DiscussionForumComment->create();
			if ($this->DiscussionForumComment->save($this->data)) {
				echo 'Thanks for your intrest in us. One of our representative will go through the query and publish the details shortly.';
			} else {
				echo 'Error occured while sending your details. Please try later.';
			}
		}

	}        

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discussion forum comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DiscussionForumComment->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DiscussionForumComment->read(null, $id);
		}
		$discussionForums = $this->DiscussionForumComment->DiscussionForum->find('list');
		$this->set(compact('discussionForums'));
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discussion forum comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DiscussionForumComment->delete($id)) {
			$this->Session->setFlash(__('Discussion forum comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discussion forum comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function _admin_index() {
		$this->DiscussionForumComment->recursive = 0;
		$this->set('discussionForumComments', $this->paginate());
	}

	function _admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discussion forum comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discussionForumComment', $this->DiscussionForumComment->read(null, $id));
	}

	function _admin_add() {
		if (!empty($this->data)) {
			$this->DiscussionForumComment->create();
			if ($this->DiscussionForumComment->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum comment could not be saved. Please, try again.', true));
			}
		}
		$discussionForums = $this->DiscussionForumComment->DiscussionForum->find('list');
		$this->set(compact('discussionForums'));
	}

	function _admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discussion forum comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DiscussionForumComment->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DiscussionForumComment->read(null, $id);
		}
		$discussionForums = $this->DiscussionForumComment->DiscussionForum->find('list');
		$this->set(compact('discussionForums'));
	}

	function _admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discussion forum comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DiscussionForumComment->delete($id)) {
			$this->Session->setFlash(__('Discussion forum comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discussion forum comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
