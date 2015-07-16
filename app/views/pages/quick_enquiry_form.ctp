<style>
*       {margin:0;padding:0;}
</style>

<?php

$params = explode('/',$this->params['url']['url']);


//print_r($params);



?>

<iframe src="<?php echo SH_URL; ?>quick_enquiry_form<?php for($i = 1; $i < count($params) ; $i++){ echo '/'.$params[$i]; } ?>/flag:1" frameborder="0" scrolling="no" style="float:left; height:475px;  width:100%; overflow: auto;"></iframe>
