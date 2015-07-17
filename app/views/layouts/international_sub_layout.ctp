    
<script type="text/javascript" src="<?php echo WEB_URL;?>ihna-js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="<?php echo WEB_URL;?>ihna-js/scriptbreaker-multiple-accordion-1.js"></script>
<script language="JavaScript">
var $q = jQuery.noConflict();
$q(document).ready(function() {
    $q(".topnav").accordion({
        accordion:false,
        speed: 500,
        closedSign: '[+]',
        openedSign: '[-]'
    });
});

</script>    
<?php echo $this->element('common_header');?>
    
      <!-- END HEADER --> 
    <?php echo $this->element("banner_area")?>        
            <!-- Carousel
    ================================================== -->

<div id="contents">
    <div class="container">
        <div class="row">   
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9 ">  
            <?php echo $content_for_layout;?>

</div>
            
        
<?php echo $this->element('international_sub_rightarea');?>
        
            
    <div class="clear"></div>        
    </div>
</div>
<div class="clear"></div>
</div>        
        
        
        
        
            
        
        <!-- CONTENT WRAPPER
        ============================================= -->
        
        <div id="content_wrapper">

            <!-- FOOTER
            ============================================= -->
            <?php echo $this->element("common_footer")?>
            <!-- END FOOTER --> 
        </div>  <!-- END CONTENT WRAPPER -->            

<!-----------------------menu---------------------------->

     <?php echo $this->element('menu');?>

<!--------------------------menu----------------------->




    
        <!-- EXTERNAL SCRIPTS
        ============================================= -->               
        
        <script src="ihna-js/jquery-2.js" type="text/javascript"></script>
        <script src="ihna-js/main.js"></script> 
        <script src="ihna-js/bootstrap.js" type="text/javascript"></script> 
        <script src="ihna-js/modernizr.js" type="text/javascript"></script>
        <script src="ihna-js/jquery.js" type="text/javascript"></script>
        <script src="ihna-js/retina.js" type="text/javascript"></script>    
        <script src="ihna-js/jquery_002.js" type="text/javascript"></script>
        <script defer src="ihna-js/jquery_003.js" type="text/javascript"></script>  
        <script defer src="ihna-js/jquery_005.js" type="text/javascript"></script>  
        <script src="ihna-js/jquery_004.js" type="text/javascript"></script>
        <script src="ihna-js/owl.js" type="text/javascript"></script>   
        <script src="ihna-js/waypoints.js" type="text/javascript"></script>         
        <script src="ihna-js/custom.js" type="text/javascript"></script>
         <script src="ihna-js/wow.js"></script> 
         
        <script>
 //new WOW().init();
</script>
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        
        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
        <!--
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>-->    
    
<a style="display: none; position: fixed; z-index: 2147483647;" title="" href="#top" id="scrollUp"></a>

</body>
</html>