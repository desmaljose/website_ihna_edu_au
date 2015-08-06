<!DOCTYPE html>
<!-- Keno - Flexible and Responsive HTML5 Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class=" js no-touch" lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
        <!-- Basic -->
        <meta charset="utf-8">
        
        <meta name="title" content="<?php echo $meta_title; ?>" />
        <meta name="keywords" content="<?php echo $meta_keywords; ?>" />
        <meta name="description" content="<?php echo $meta_description; ?>" />
        <title><?php echo $page_title; ?></title> 
        
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   
        
        <link rel="shortcut icon" href="<?php echo WEB_URL;?>ihna-images/favicon.png" type="image/favicon">
            
        <!-- Libs CSS -->
        <link href="<?php echo WEB_URL;?>ihna-css/bootstrap.css" rel="stylesheet"> 
        <link href="<?php echo WEB_URL;?>ihna-css/font-awesome.css" rel="stylesheet">    
        <link href="<?php echo WEB_URL;?>ihna-css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo WEB_URL;?>ihna-css/flexslider.css" rel="stylesheet">
        <link href="<?php echo WEB_URL;?>ihna-css/owl.css" rel="stylesheet"> 
        
        <!-- On Scroll Animations -->
        <link href="<?php echo WEB_URL;?>ihna-css/animate.css" rel="stylesheet">
        <!-- Template CSS -->
        <link href="<?php echo WEB_URL;?>ihna-css/style.css" rel="stylesheet">
        <link href="<?php echo WEB_URL;?>ihna-css/responsive.css" rel="stylesheet"> 

        <!-- Responsive CSS -->
    
         <link href="<?php echo WEB_URL;?>ihna-css/carousel.css" rel="stylesheet">
         <link href="<?php echo WEB_URL;?>ihna-css/menustyle.css" rel="stylesheet">
        <link href="<?php echo WEB_URL;?>ihna-css/reset.css" rel="stylesheet">
                                
                                
         <!-- Google Fonts -->	
		<link href="<?php echo WEB_URL;?>ihna-css/css.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   
            
   <script type="text/javascript" >
    function checksearchkey(searchkey)
    {
        //$("#err").html("Please provide a valid search key.");
        if(searchkey=='')
        {
            $("#err").html("Please provide a valid search key.");
            //$('#alert').modal('show');
            document.frmSearchCourse.txtCourseSearch.value='';
            document.frmSearchCourse.txtCourseSearch.focus();
            return false;
        }else{
            document.frmSearchCourse.submit();
        }   
    }
    </script>
     <!--Start of Zopim Live Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
    $.src='//v2.zopim.com/?2Af9MvzmHpJH1StJkTyulADrSE4nq09C';z.t=+new Date;$.
    type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
    </script>
    <!--End of Zopim Live Chat Script-->             
    <script type="text/javascript">     
        $zopim(function() {
       // $zopim.livechat.theme.setColor('#267EC5');
         $zopim.livechat.theme.setColor('#D9780C');
        $zopim.livechat.theme.reload(); // apply new theme settings
        });     
    </script>
    <script type="text/javascript">
    $zopim(function(){
    /*$zopim.livechat.departments.filter('Students Support');*/
    $zopim.livechat.departments.filter('Course Enquiry');
    });
    </script> 
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-21898443-4', 'auto');
      ga('send', 'pageview');
    
    </script> 
    
    
    <script type="text/javascript">
		function searchCourse(){
			if(document.courseSearch.course.value==''){
				alert("Please enter course name");
			}else{
				document.courseSearch.submit();
			}
		}
	</script>



    </head>
  
    
<body style="overflow: visible;">
    
        <!-- PRELOAD ANIMATION
        ============================================= -->
                
        <div style="display: none;" id="preloader">
            <div style="display: none;" id="status"></div>
        </div>  
    
        <!-- HEADER
        ============================================= -->
        <header id="header">        
            <div class="navbar navbar-fixed-top">   
                <div class="container">
                    <div class="row">
                    
                    <!-- Navigation Bar -->
                    <div class="navbar-header col-md-12 col-lg-12 col-sm-12" >                  
                        <!-- Responsive Menu -->
                    <div class="col-md-5 col-lg-4 col-sm-4 pull-left logo_hdr" >    
                        <!-- Logo Image -->
                        <a class="navbar-brand" href="<?php echo WEB_URL; ?>"><img class="mob-logo" src="<?php echo WEB_URL; ?>ihna-images/logo1.png" alt="logo" role="banner"><img class="pad-logo"  src="<?php echo WEB_URL; ?>ihna-images/logo.png" alt="logo" role="banner"></a>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-8 pull-left">
                        <!--<div class="support">IHNA Live Support</div tollwrap toll-mob>-->
                        <!--  <div class="tollwrap ">-->
                        <!--<div class="toll">1800 22 52 83</div>
                        <div class="mail"><a href="#" style="color:#444">enquiry@ihna.edu.au</a></div>      --> 
                        <!--</div>-->
                        
                </div>      
                    </div>  <!-- End Navigation Bar -->
                    
                    </div>
                </div>    <!-- End container -->
            </div>      <!-- End navbar fixed top  -->      
        
        <a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span></a>
        </header>   <!-- END HEADER --> 
                            
 
        
            <!-- Carousel
    ================================================== -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item bg bg1 active">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="banner-title">The leading healthcare education provider in Australia, focused on delivering an extensive range of educational programs​
</h1>
<!--<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
            </div>
        </div>
    </div>
    <div class="item bg bg2">
        <div class="container">
            <div class="carousel-caption">
                <h1 class="banner-title">Courses in Nursing,  Health and Community Services, Skill Sets and Professional Development Programs </h1>
            </div>
        </div>
    </div>
    <div class="item bg bg3">
        <div class="container">
            <div class="carousel-caption">
                <h1 class="banner-title">Healthcare courses in Australia, from a fast-growing, dynamic, and quality-driven institution committed to continuous improvement</h1>
                </div>
            </div>
        </div>
</div>

</div>  

<?php

if($popper == 0){

?>
<!---------------------------------POPUP advertisement START--------------->

<link rel="stylesheet" href="<?php echo WEB_URL;?>ihna-css/popup.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script src="<?php echo WEB_URL;?>js/popup.js"></script>
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
  <a href="#" class="close agree"> <img class="close_popup" src="<?php echo WEB_URL;?>ihna-images/popup_close.png" /></a>
    <div id="lorem">
    <img src="<?php echo WEB_URL;?>ihna-images/ihm-popup.png" />
    
            <h2><b>Announcing Postgraduate courses from IHM </b><br/> 
            <small>(IHNA’s higher education division)</small></h2>
            <ul>
            <li>Diploma of Nursing</li>
            <li>Graduate Diploma in Nursing ( Specialisation - Paediatric Nursing )</li>
            </ul>
	<a href="https://www.ihm.edu.au/" target="_blank" class="signup-menu">Sign up Now!</a>
    </div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
<!---------------------------------POPUP Advertisement END--------------->   
<?php

}

?>
        
        <!-- CONTENT WRAPPER
        ============================================= -->
        
        <div id="content_wrapper">
            <div class=" homewrap mobicon col-sm-12 col-md-12 col-xs-12">
                
                
                <?php echo $form->create('Search',array('name'=>'courseSearch','url'=>'/courses/search_result'));?>
                    <div class="search-box">
                        <span id="err" style="color: #FF0000 !important; padding: 20px; width: 100px;">&nbsp;</span>
                        <div class="course-search">
                            <input type="text" name="data[Search][search_text]" id="course" placeholder="Search course here" />
                            <img src="<?php echo WEB_URL; ?>ihna-images/search-btn.png" style="cursor: pointer;" onclick="searchCourse();" />
                        </div>
                        <div id="log" style="width: 800px; overflow: auto;"></div>
                    </div>
                
              <?php echo $form->end(); ?>                                


                    <div class="search">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <a href="<?php echo WEB_URL;?>courses"><div class="box-btn">
                                <h1>Courses</h1>
                                <h3>Pick the right course</h3> 
                            </div> </a>                                                 
                        </div>
                        
                       <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <a href="<?php echo WEB_URL;?>students">
                                    <div class="box-btn ">
                                <h1>Students</h1>
                                <h3>Resources for students</h3>
                            </div></a>                                              
                        </div>
                        
                       <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <a href="<?php echo WEB_URL;?>international"><div class="box-btn ">
                                <h1>International</h1>
                                <h3>Our international courses</h3>  
                            </div></a>                        
                        </div>                      
                    </div>
                
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="mar-top con-info mar-auto col-xs-12 col-sm-12 col-md-12 col-lg-12">Tollfree: 1800 22 52 83&nbsp;&nbsp;|&nbsp;&nbsp; Mail: enquiry@ihna.edu.au</div>
                    </div>                                                  
                </div>
                
            <!-- FOOTER

            ============================================= -->
            <?php echo $this->element('home_footer')?>
  <!-- END FOOTER --> 
                  


<!-----------------------menu---------------------------->

     <?php echo $this->element('menu');?>

<!--------------------------menu----------------------->


    
        <!-- EXTERNAL SCRIPTS
        ============================================= -->               
        
        <script src="<?php echo WEB_URL; ?>ihna-js/jquery-2.js" type="text/javascript"></script>
        <script src="<?php echo WEB_URL; ?>ihna-js/main.js"></script> 
        <script src="<?php echo WEB_URL; ?>ihna-js/bootstrap.js" type="text/javascript"></script> 
        <script src="<?php echo WEB_URL; ?>ihna-js/modernizr.js" type="text/javascript"></script>
        <script src="<?php echo WEB_URL; ?>ihna-js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo WEB_URL; ?>ihna-js/retina.js" type="text/javascript"></script>    
        <script src="<?php echo WEB_URL; ?>ihna-js/jquery_002.js" type="text/javascript"></script>
        <script defer src="<?php echo WEB_URL; ?>ihna-js/jquery_003.js" type="text/javascript"></script>  
        <script defer src="<?php echo WEB_URL; ?>ihna-js/jquery_005.js" type="text/javascript"></script>  
        <script src="<?php echo WEB_URL; ?>ihna-js/jquery_004.js" type="text/javascript"></script>
        <script src="<?php echo WEB_URL; ?>ihna-js/owl.js" type="text/javascript"></script>   
        <script src="<?php echo WEB_URL; ?>ihna-js/waypoints.js" type="text/javascript"></script>         
        <script src="<?php echo WEB_URL; ?>ihna-js/custom.js" type="text/javascript"></script>
         <script src="<?php echo WEB_URL; ?>ihna-js/wow.js"></script> 
         
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
   
     </div>  <!-- END CONTENT WRAPPER -->  
<a style="display: none; position: fixed; z-index: 2147483647;" title="" href="#top" id="scrollUp"></a>


<!-- For auto suggest -->

  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
<style>
.ui-autocomplete-loading {
  background: white url("<?php echo WEB_URL;?>img/ui-anim_basic_16x16.gif") right center no-repeat;
}
</style>

  <script>
  $(function() {
    function log( message ) {
      //$( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
    }
 
    $( "#course" ).autocomplete({
      source: "<?php echo WEB_URL;?>/autosuggest/homesearch",
      minLength: 2,
      select: function( event, ui ) {
        log( ui.item ?
          "Selected: " + ui.item.value + " aka " + ui.item.id :
          "Nothing selected, input was " + this.value );
      }
    });
  });
  </script>
  
<!-- Auto suggest ends -->



</body></html>
