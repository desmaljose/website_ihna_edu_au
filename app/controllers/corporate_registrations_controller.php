<?php
class CorporateRegistrationsController extends AppController {

	var $name = 'CorporateRegistrations';

	function _index() {
		$this->CorporateRegistration->recursive = 0;
		$this->set('corporateRegistrations', $this->paginate());
	}

	function _view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid corporate registration', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('corporateRegistration', $this->CorporateRegistration->read(null, $id));
	}

	function add() {

            $this->layout = "about_layout";
            $this->set('page_title','Corporate Membership Registration'); 
            
		if (!empty($this->data)) {
			$this->CorporateRegistration->create();
			if ($this->CorporateRegistration->save($this->data)) {
				$this->Session->setFlash(__('Thanks for your intrest in us. One of our representative will get back to you shortly.', true));
				//$this->redirect(array('action' => 'index'));

                                

		$headers = "From: no-reply@ihna.edu.au\r\n";
		$headers.= "Reply-To: no-reply@ihna.edu.au\r\n";
		$headers.= "MIME-Version: 1.0\r\n";
		$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$email_address = $this->data['CorporateRegistration']['email'];
		$subject ='IHNA: Corporate Membership Registration Acknowledgement';
		$message = 'Dear '.$this->data['CorporateRegistration']['name'].",";
		$message.=' <p>Thank you for registering for IHNA\'s Corporate Membership which gives your nurses
		 access to our library of online professional development courses.</p>
		   <p>Your registration details are:</p>';
		   

		$message.= '<table  width="650" align="center" border="0" cellspacing="3" cellpadding="5" 
		style="border: 1px solid #4372CA;">
			<tr>
				<td colspan="2"  align="center" valign="middle" style="background-color:#4372ca;color:#FFF;">
				<h3>&nbsp;Corporate Membership Registration</h3></td>
			</tr>
			<tr>
				<td width="130"><strong>Your Name :</strong></td>
				<td width="500">' . $this->data['CorporateRegistration']['name'] . '</td>
			</tr>
			<tr>
				<td><strong>Your Email :</strong></td>
				<td>' . $this->data['CorporateRegistration']['email'] . '</td>
			</tr>
			<tr>
				<td><strong>Phone Number :</strong></td>
				<td>' . $this->data['CorporateRegistration']['phone'] . '</td>
			</tr>
			<tr>
				<td><strong>Company :</strong></td>
				<td>' . $this->data['CorporateRegistration']['company'] . '</td>
			</tr>
			<tr>
				<td><strong>Trading Name :</strong></td>
				<td>' . $this->data['CorporateRegistration']['trading_name'] . '</td>
			</tr>';	

			$message.='<tr>
				<td><strong>Number of Staff :</strong></td>
				<td>' . $this->data['CorporateRegistration']['nurses'] . '</td>
			</tr>';							
		$message.='</table>';
	   
     $message.='<p>(Registration is not complete until payment is finalised).<br><br>
                Comments: <br>
				Our e-learning coordinator will contact you shortly to discuss setup and administration of your membership portal.
				</p>
				<p>Kind regards,</p>
				<p>Institute of Health and Nursing Australia</p>';
		mail($email_address, $subject, $message, $headers);
                mail('ajith@mwttech.com', $subject, $message, $headers);
		
		
		

		$headers1 = "From: no-reply@ihna.edu.au\r\n";
		$headers1.= "Reply-To: no-reply@ihna.edu.au\r\n";
		$headers1.= "MIME-Version: 1.0\r\n";
		$headers1.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$email_address1="studentsupport@ihna.edu.au";


		$subject1 ='IHNA: Corporate Membership Registration';		
		$message1 = '<table width="650" align="center" border="0" cellspacing="3" cellpadding="5" style="border: 1px solid #4372CA;">
			<tr>
				<td colspan="2"  align="center" valign="middle" style="background-color:#4372ca;color:#FFF;">
				<h3>&nbsp;Corporate Membership Registration</h3></td>
			</tr>
			<tr>
				<td width="130"><strong>Name :</strong></td>
				<td width="500">' . $this->data['CorporateRegistration']['name'] . '</td>
			</tr>
			<tr>
				<td><strong>Email Id :</strong></td>
				<td>' . $this->data['CorporateRegistration']['email'] . '</td>
			</tr>
			<tr>
				<td><strong>Phone Number :</strong></td>
				<td>' . $this->data['CorporateRegistration']['phone'] . '</td>
			</tr>
			<tr>
				<td><strong>Company :</strong></td>
				<td>' . $this->data['CorporateRegistration']['company'] . '</td>
			</tr>
			<tr>
				<td><strong>Trading Name :</strong></td>
				<td>' . $this->data['CorporateRegistration']['trading_name'] . '</td>
			</tr>';	

			$message1.='<tr>
				<td><strong>Number of Staff :</strong></td>
				<td>' . $this->data['CorporateRegistration']['nurses'] . '</td>
			</tr>';							
		$message1.='</table>';
                
		mail($email_address1, $subject1, $message1, $headers1);
                
                mail('ajith@mwttech.com', $subject1, $message1, $headers1);

		
		mail('bijo@ihna.edu.au', $subject1, $message1, $headers1);


		mail('marketing@ihna.edu.au', $subject1, $message1, $headers1);

                
                
                                
                                
                                
			} else {
				$this->Session->setFlash(__('Error occured. Please, try again later.', true));
			}
		}
	}

	function _edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid corporate registration', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CorporateRegistration->save($this->data)) {
				$this->Session->setFlash(__('The corporate registration has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The corporate registration could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CorporateRegistration->read(null, $id);
		}
	}

	function _delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for corporate registration', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CorporateRegistration->delete($id)) {
			$this->Session->setFlash(__('Corporate registration deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Corporate registration was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function _admin_index() {
		$this->CorporateRegistration->recursive = 0;
		$this->set('corporateRegistrations', $this->paginate());
	}

	function _admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid corporate registration', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('corporateRegistration', $this->CorporateRegistration->read(null, $id));
	}

	function _admin_add() {
		if (!empty($this->data)) {
			$this->CorporateRegistration->create();
			if ($this->CorporateRegistration->save($this->data)) {
				$this->Session->setFlash(__('The corporate registration has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The corporate registration could not be saved. Please, try again.', true));
			}
		}
	}

	function _admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid corporate registration', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CorporateRegistration->save($this->data)) {
				$this->Session->setFlash(__('The corporate registration has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The corporate registration could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CorporateRegistration->read(null, $id);
		}
	}

	function _admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for corporate registration', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CorporateRegistration->delete($id)) {
			$this->Session->setFlash(__('Corporate registration deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Corporate registration was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
