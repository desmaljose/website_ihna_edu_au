<?php
class DiscussionForumsController extends AppController {

	var $name = 'DiscussionForums';
        var $uses = array('DiscussionForum','DiscussionForumCategory');

	function _index() {
		$this->DiscussionForum->recursive = 0;
		$this->set('discussionForums', $this->paginate());
	}
        
	function index($course_id = null, $category_id = null) {
            
                
                $this->layout = 'about_layout';
                $this->set('page_title', 'FAQ');
                
		$this->DiscussionForum->recursive = 0;
                if (!empty($this->data['DiscussionForum']['search'])) {

                    $this->paginate['conditions'] = array(
                        'DiscussionForum.course_id' => $course_id,
                        'DiscussionForum.discussion_forum_category_id' => $category_id,
                        'DiscussionForum.enable' => 1,
                        'DiscussionForum.question_flag' => 2,
                        'DiscussionForum.question LIKE ' => "%{$this->data['DiscussionForum']['search']}%"
                    );
                    $this->set('search', $this->data['DiscussionForum']['search']);
                    
                }else{
                    $this->paginate['conditions'] = array(
                        'DiscussionForum.course_id' => $course_id,
                        'DiscussionForum.discussion_forum_category_id' => $category_id,
                        'DiscussionForum.enable' => 1,
                        'DiscussionForum.question_flag' => 2,
                    );

                }
		$this->set('forumQuestions', $this->paginate());


                
	}        

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discussion forum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discussionForum', $this->DiscussionForum->read(null, $id));
	}

	function _add() {
		if (!empty($this->data)) {
			$this->DiscussionForum->create();
			if ($this->DiscussionForum->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum could not be saved. Please, try again.', true));
			}
		}
		$discussionForumCategories = $this->DiscussionForum->DiscussionForumCategory->find('list');
		$this->set(compact('discussionForumCategories'));
	}
        
	function add() {
            
            // This is ajax buddy
            
            $this->autoRender = false;
            
		if (!empty($this->data)) {
                    
//                    echo '<pre>';
//                    print_r($this->data);
//                    exit;
                    
			$this->DiscussionForum->create();
			if ($this->DiscussionForum->save($this->data)) {
                            
                            echo 'Thanks for your intrest in us. One of our representative will go through the query and publish the answers shortly.';
                            
			} else {
                                echo 'Error occured while sending your details. Please try later.';
			}
		}

	}        

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discussion forum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DiscussionForum->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DiscussionForum->read(null, $id);
		}
		$discussionForumCategories = $this->DiscussionForum->DiscussionForumCategory->find('list');
		$this->set(compact('discussionForumCategories'));
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discussion forum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DiscussionForum->delete($id)) {
			$this->Session->setFlash(__('Discussion forum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discussion forum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function _admin_index() {
		$this->DiscussionForum->recursive = 0;
		$this->set('discussionForums', $this->paginate());
	}

	function _admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid discussion forum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('discussionForum', $this->DiscussionForum->read(null, $id));
	}

	function _admin_add() {
		if (!empty($this->data)) {
			$this->DiscussionForum->create();
			if ($this->DiscussionForum->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum could not be saved. Please, try again.', true));
			}
		}
		$discussionForumCategories = $this->DiscussionForum->DiscussionForumCategory->find('list');
		$this->set(compact('discussionForumCategories'));
	}

	function _admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid discussion forum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DiscussionForum->save($this->data)) {
				$this->Session->setFlash(__('The discussion forum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The discussion forum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DiscussionForum->read(null, $id);
		}
		$discussionForumCategories = $this->DiscussionForum->DiscussionForumCategory->find('list');
		$this->set(compact('discussionForumCategories'));
	}

	function _admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for discussion forum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DiscussionForum->delete($id)) {
			$this->Session->setFlash(__('Discussion forum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Discussion forum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
