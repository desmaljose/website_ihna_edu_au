<style>
*       {margin:0;padding:0;}
iframe  {float:left; min-height:500px;  width:100%;}
</style>

<?php

$params = explode('/',$this->params['url']['url']);


//print_r($params);



?>

<iframe src="http://10.10.30.60/studentportal/application_form<?php for($i = 1; $i < count($params) ; $i++){ echo '/'.$params[$i]; } ?>" frameborder="0" id="appIframe"></iframe>


