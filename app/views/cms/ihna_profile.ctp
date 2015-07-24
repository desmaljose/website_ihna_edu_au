<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInRight"  data-wow-delay=".1s">
    <?php echo $content_for_layout;?>
                        <form id="profile" name="profile" method="post" onsubmit="return profileDownload()"> 
                            <div class="bor qck-enq-1 pull-left">
                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><p>Name <span class="optional">*</span></p></div>
                                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9"><input class="col-xs-12 col-sm-12 col-md-8 col-lg-8" 
                                type="text" name="nameTxt" id="nameTxt"></div>

                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><p>E-mail <span class="optional">*</span></p></div>
                                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9"><input  class="col-xs-12 col-sm-12 col-md-8 col-lg-8" 
                                 type="text" name="emailTxt" id="emailTxt" ></div>
                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><p>Organization</p></div>
                                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9"><input  class="col-xs-12 col-sm-12 col-md-8 col-lg-8" 
                                type="text" name="orglTxt" id="orglTxt" ></div>
                                <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3"><p>Enter Security No. <span class="optional">*</span></p></div>
                                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9"><span class="securecaptcha"><?php echo $secureno; ?></span><input style="margin-left:10px" type="text" maxlength="6" size="5" id="capt" class="txtBorder" name="capt"></div>
                                <input id="submitbtn" class="col-xs-12 col-sm-4 col-md-3 col-lg-3 mar-auto blue-search" type="submit" name="Submit" value="Submit">                            
                                
                        </div>  
                        </form>                                        
                    </div>       