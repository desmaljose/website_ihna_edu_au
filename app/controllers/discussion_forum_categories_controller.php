<?php
class DiscussionForumCategoriesController extends AppController {

	var $name = 'DiscussionForumCategories';

	function index() {
		$this->DiscussionForumCategory->recursive = 0;
		$this->set('discussionForumCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discussion forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discussionForumCategory', $this->DiscussionForumCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DiscussionForumCategory->create();
			if ($this->DiscussionForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum category could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discussion forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DiscussionForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DiscussionForumCategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discussion forum category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DiscussionForumCategory->delete($id)) {
			$this->Session->setFlash(__('Discussion forum category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discussion forum category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->DiscussionForumCategory->recursive = 0;
		$this->set('discussionForumCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discussion forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discussionForumCategory', $this->DiscussionForumCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->DiscussionForumCategory->create();
			if ($this->DiscussionForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum category could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discussion forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DiscussionForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DiscussionForumCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discussion forum category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DiscussionForumCategory->delete($id)) {
			$this->Session->setFlash(__('Discussion forum category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discussion forum category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
