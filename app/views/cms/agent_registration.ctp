<div class="row"> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        <p>
           Institute of Health and Nursing Australia (IHNA) is looking for Official Education Agents or Representatives to promote or market our Bridging Program (Initial Registration for Overseas Registered Nurses) in various countries. If your are interested in becoming the Official Education Agent or Representative of IHNA, please register by submitting your detail in the below form.
       </p>
       


       <h4 style="text-align: left; letter-spacing:-1px; margin-top: 10px;">Please complete the details below.</h4>
    
       
       
       
       <div style="text-align: left; letter-spacing: 3px; margin-top: 10px; color: #f00; margin-bottom: 10px; font-size: 8px;" id="resp">&nbsp;<?php  echo $session->flash(); ?></div>
       
       
       
        <form class="form-horizontal" action="<?php echo WEB_URL; ?>cms/agent_registration" method="post" enctype="multipart/form-data" name="AgentRegistration" id="AgentRegistration">
            
            <div class="form-group">
                <h3>Registration details</h3>
                <hr />
            </div>            
            
       <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Name of Organization <span>*</span></label>
    <div class="col-sm-5">
      <input name="data[AgentRegistration][org]" class="form-control" id="org" size="60" required />
    </div>
  </div>     
            
       <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Registered Company Name </label>
    <div class="col-sm-5">
       <input name="data[AgentRegistration][reg_company]" class="form-control" id="reg_company" size="60" />
    </div>
  </div>            

      
      <div class="form-group">
    <label for="topic" class="col-sm-3 control-label">Country  </label>
    <div class="col-sm-5">
      <input name="data[AgentRegistration][country]" class="form-control" id="country" size="60" />
    </div>
  </div>  
            
      <div class="form-group">
    <label for="topic" class="col-sm-3 control-label">Name of Registered Owner </label>
    <div class="col-sm-5">
      <input name="data[AgentRegistration][owner]" class="form-control" id="owner" size="60" />
    </div>
  </div>
            
            <div class="form-group">
            &nbsp;
            </div>
            
            <div class="form-group">
                <h3>Details of key contact person</h3>
                <hr />
            </div>
            
       <div class="form-group">
    <label for="name" class="col-sm-3 control-label">Name<span>*</span></label>
    <div class="col-sm-5">
      <input name="data[AgentRegistration][name]" class="form-control" id="name" size="60" required />
    </div>
  </div>     
            
       <div class="form-group">
    <label for="email" class="col-sm-3 control-label">Phone Number<span>*</span></label>
    <div class="col-sm-5">
       <input name="data[AgentRegistration][phone]" class="form-control" id="phone" size="60" required  />
    </div>
  </div>            

      
      <div class="form-group">
    <label for="topic" class="col-sm-3 control-label">Email  </label>
    <div class="col-sm-5">
      <input name="data[AgentRegistration][email]" class="form-control" id="email" size="60" type="email" />
    </div>
  </div>  
            
      <div class="form-group">
    <label for="topic" class="col-sm-3 control-label">Postal Address </label>
    <div class="col-sm-5">
        <textarea name="data[AgentRegistration][address]" class="form-control" id="address"></textarea>
    </div>
  </div>                
      
       

            
        
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-5">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
             
            
</form>        
    </div>
</div>