<?php
class PolicydocumentsController extends AppController {

	var $name = 'Policydocuments';
        var $uses = array();
        
	function listing() {          
            $this->layout = 'about_layout';
            $this->set('page_title','Policies, Links and Forms');
        }
        
        function policy($id = null){

            $this->layout = 'blank';
            $this->set('id',$id);
                       
        }
 

}