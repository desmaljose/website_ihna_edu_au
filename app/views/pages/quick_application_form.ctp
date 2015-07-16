<style>
*       {margin:0;padding:0;}
iframe  {float:left; min-height:400px;  width:100%;}
.password:hover{ background:none !important;}
</style>

<?php

$params = explode('/',$this->params['url']['url']);


//print_r($params);



?>
<script type="text/javascript">
   function resizeIframe(iframe) {
   
    iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
  }
</script>
<iframe src="http://10.10.30.60/studentportal/quick_application_form<?php for($i = 1; $i < count($params) ; $i++){ echo '/'.$params[$i]; } ?>" frameborder="0" id="appIframe" onload="resizeIframe(this)"></iframe>


