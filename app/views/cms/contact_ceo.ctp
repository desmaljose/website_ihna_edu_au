<div class="row">                 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
		<h1 class=" wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">Contact CEO</h1><br />

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInLeft"  data-wow-delay=".1s">
        <!-- form goes here -->        
<?php           echo $form->create('contact_ceo',array('url'=>array('controller'=>'cms','action'=>'contact_ceo'),'class'=>'form-horizontal','id'=>'contactCEO','onSubmit'=>'return empty_validation()')); 
                echo $this->Form->input('name',array('type'=>'text','class'=>'form-control required','label'=>array('class'=>'col-sm-2 control-label'),
                                                        'div'=>array('class'=>'form-group'),'between'=>'<div class="col-sm-5">','after'=>'</div>') );
                echo $this->Form->input('email',array('type'=>'text','class'=>'form-control required','label'=>array('class'=>'col-sm-2 control-label'),
                                                        'div'=>array('class'=>'form-group'),'between'=>'<div class="col-sm-5">','after'=>'</div>') );
                echo $this->Form->input('phone',array('type'=>'text','class'=>'form-control required','label'=>array('class'=>'col-sm-2 control-label'),
                                                        'div'=>array('class'=>'form-group'),'between'=>'<div class="col-sm-5">','after'=>'</div>') );
                echo $this->Form->input('comments',array('type'=>'textarea','class'=>'form-control required','label'=>array('class'=>'col-sm-2 control-label'), 'rows'=>'3',
                                                        'div'=>array('class'=>'form-group'),'between'=>'<div class="col-sm-5">','after'=>'</div>') ); 
                echo $this->Form->Submit('Submit',array('div'=>array('class'=>'form-group'),'class'=>'btn btn-default','before'=>'<div class="col-sm-offset-2 col-sm-10">',
                                                                        'after'=>'</div>'));
                echo $this->Form->end(); ?>
        </div>
    </div>            
</div>

<script type="text/javascript">

//$(document).ready(function(){
//jQuery(document).ready(function($){
/*window.onload = function() {
    $('#contactCEO').submit(function(){
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var comments = $('#comments').val();

        if(name==''){
            alert('Please enter your name');
            $('#name').focus();
            return false;
        }
    });
//});
}*/

    function empty_validation(){
        if(document.getElementById('contact_ceoName').value==''){
            alert('Please enter your name');
            return false;
        }                                
        if(document.getElementById('contact_ceoEmail').value==''){
            alert('Please provide email address');
            return false;
        }
        var emailaddress = document.getElementById('contact_ceoEmail').value;
        if( !validateEmail(emailaddress)) { 
            alert('Please provide a valid email address');
            return false;
        }
        if(document.getElementById('contact_ceoComments').value==''){
            alert('Please enter your comments');
            return false;
        }          
        return true;
    }

    function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test( $email );
    }
</script>