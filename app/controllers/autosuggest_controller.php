<?php
class AutosuggestController extends AppController {

	var $name     = 'Autosuggest';
	var $uses     = array();

function homesearch() 
{
	$this->autoRender = false;
        $db = ConnectionManager::getDataSource("smsihna");
        
            // ALL COURSE NAMES FOR PREDICTIVE SEARCH
            $qry = " SELECT DISTINCT c.id, c.course_name FROM courses c "
                           . " INNER JOIN course_categories cc "
                           . " INNER JOIN course_overviews co "  
                           . " ON c.course_category_id = cc.id "
                           . " AND c.id = co.course_id "
                           . " AND cc.enable = 1 "
                           . " AND c.enable = 1 "
                           . " AND c.course_name LIKE '%{$this->params['url']['term']}%'"
                           . " AND co.web_display = 1 "
                           . " AND co.overview_title_id = 1 ";


            $result = $db->query($qry);
    
            $display_json = array();
            $json_arr = array();

            foreach($result as $row){

                $json_arr["id"]  =  $row['c']['id'];
                $json_arr["value"]  =  $row['c']['course_name'];
                $json_arr["label"]  =  $row['c']['course_name'];
                array_push($display_json, $json_arr);
                
            }
        
        return json_encode($display_json);
	
}
	
}
?>