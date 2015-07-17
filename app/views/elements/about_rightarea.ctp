<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">

                  <!----------------------------language bar--------------------->   
                  
	<div class="language_bar">
            <div class="website_view">View website in<div id="google_translate_element" style="float: right;"></div> </div>
           
      <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: 
google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: 
false}, 'google_translate_element');
}
</script><script type="text/javascript" 
src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 


    </div> 
    
   <!----------------------------language bar---------------------> 

                <ul class="sidelist">
                    <?php foreach($submenus as $skey=>$sval){?>
                    <a href="<?php echo WEB_URL; ?><?php echo $sval['Cm']['seo_url']?>"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;"><?php echo $sval['Cm']['page_title'];?></li></a>
                    <?php }?>
                     <?php /*?><a href="<?php echo WEB_URL; ?>abouts/about-ihna"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;">About IHNA</li></a>
                     <a href="<?php echo WEB_URL; ?>abouts/ihna-vision-mission"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated fadeInUp animated" style="visibility: visible; animation-delay: 0.1s;">IHNA Vision, Mission & Values</li></a>
                     <a href="<?php echo WEB_URL; ?>abouts/board_of_studies"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;">Board of Studies</li></a>
                     <a href="<?php echo WEB_URL; ?>abouts/ihna-staff"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;">IHNA Staff</li></a>
                     <a href="<?php echo WEB_URL; ?>abouts/ihna-profile"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;">IHNA Profile</li></a>
                     <a href="<?php echo WEB_URL; ?>abouts/ihna-gallery"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;">IHNA Image Gallery</li></a>
                     <a href="<?php echo WEB_URL; ?>abouts/ihna_videogallery"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;">IHNA Video Gallery</li></a>
                     <a href="<?php echo WEB_URL; ?>abouts/message-from-ceo"><li data-wow-delay=".1s" data-animate="fadeInUp" class="wow triggerAnimation animated animated fadeInUp" style="visibility: visible; animation-delay: 0.1s;">CEO's Message</li></a>
                     <?php */?>
                </ul>

    
                
                <div class="toll-free col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">
                    <a href="javascript:$zopim.livechat.window.show()" title="Click Here to Chat with Our Support Staff">
                    <img class="img-responsive mar-auto" src="<?php echo WEB_URL; ?>ihna-images/live-chat.png"></a>
                </div>
                <div class="toll-free col-xs-12 col-sm-12 col-md-12 col-lg-12 wow triggerAnimation animated" data-animate="fadeInUp"  data-wow-delay=".1s">
                    <img class="img-responsive mar-auto" src="<?php echo WEB_URL; ?>ihna-images/tollfree.png">
                </div>
                
            </div>