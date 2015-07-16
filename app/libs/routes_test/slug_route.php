   <?php  class SlugRoute extends CakeRoute {
     
        function parse($url) {
            $params = parent::parse($url);
            if (empty($params)) {
                return false;
            }
            App::import('Model', 'Cm');
            $Cm = new Cm();
            $count = $Cm->find('count', array(
                'conditions' => array('Cm.seo_url LIKE ?' => $params['slug'] .'%'),
                'recursive' => -1
            ));
            if ($count) {
                return $params;
            }
            return false;
        }
     
    }
?>