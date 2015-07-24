<?php
class ForumCategoriesController extends AppController {

	var $name = 'ForumCategories';

	function _index() {
		$this->ForumCategory->recursive = 0;
		$this->set('forumCategories', $this->paginate());
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumCategory', $this->ForumCategory->read(null, $id));
	}

	function _add() {
		if (!empty($this->data)) {
			$this->ForumCategory->create();
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
	}

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumCategory->read(null, $id);
		}
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumCategory->delete($id)) {
			$this->Session->setFlash(__('Forum category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->ForumCategory->recursive = 0;
		$this->set('forumCategories', $this->paginate());
	}

	function _admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forumCategory', $this->ForumCategory->read(null, $id));
	}

	function _admin_add() {
		if (!empty($this->data)) {
			$this->ForumCategory->create();
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
	}

	function _admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid forum category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForumCategory->save($this->data)) {
				$this->Session->setFlash(__('The forum category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forum category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForumCategory->read(null, $id);
		}
	}

	function _admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for forum category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForumCategory->delete($id)) {
			$this->Session->setFlash(__('Forum category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Forum category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
