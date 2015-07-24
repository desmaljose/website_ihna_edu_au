<div class="row"> 
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        
        <p>
           Welcome to the registration portal for the Institute of Health and Nursing Australia’s Corporate Training Membership for Hospitals and Clinics.
       </p>
       
<hr />

       <h3 style="text-align: left; letter-spacing:-1px; margin-top: 10px;">Please complete the details below.</h3>
       <hr>
       
       
       
       <div style="text-align: left; letter-spacing: 3px; margin-top: 10px; color: #f00; margin-bottom: 10px; font-size: 8px;" id="resp">&nbsp;<?php  echo $session->flash(); ?></div>
       
       
       
        <form class="form-horizontal" action="<?php echo WEB_URL; ?>corporate_registrations/add" method="post" enctype="multipart/form-data" name="CorporateRegistration" id="CorporateRegistration">
            
       <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name <span>*</span></label>
    <div class="col-sm-5">
      <input name="data[CorporateRegistration][name]" class="form-control" id="name" size="60" required />
    </div>
  </div>     
            
       <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email </label>
    <div class="col-sm-5">
       <input name="data[CorporateRegistration][email]" class="form-control" id="email" size="60" type="email" />
    </div>
  </div>            

      
      <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Phone </label>
    <div class="col-sm-5">
      <input name="data[CorporateRegistration][phone]" class="form-control" id="phone" size="60" />
    </div>
  </div>  
            
      <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Company </label>
    <div class="col-sm-5">
      <input name="data[CorporateRegistration][company]" class="form-control" id="company" size="60" />
    </div>
  </div>  
            
      <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Trading name </label>
    <div class="col-sm-5">
      <input name="data[CorporateRegistration][trading_name]" class="form-control" id="trading" size="60" />
    </div>
  </div>              
      
      <div class="form-group">
    <label for="topic" class="col-sm-2 control-label">Number of Staff </label>
    <div class="col-sm-5">
      <select name="data[CorporateRegistration][nurses]" id="nurses" class="form-control">
                <option value="0">Select number of staff</option>
                <option value="0-10" >0-10</option>
                <option value="10-20" >10-20</option>
                <option value="30-40" >30-40</option>
                <option value="40-50" >40-50</option>
                <option value="50-100" >50-100</option>
                <option value="101-200" >101-200</option>
                <option value="201-300" >201-300</option>
                <option value="301-400" >301-400</option>
                <option value="401-500" >401-500</option>
                <option value="501-1000" >501-1000</option>
                <option value="1001-1500" >1001-1500</option>
                
              </select>
    </div>
  </div>       

            
        
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
             
            
</form>        
    </div>
</div>