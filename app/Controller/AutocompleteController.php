<?php
class AutocompleteController extends AppController {
	
    public function fetch($model, $field, $query) {
		$this->layout = 'ajax';
       $this->loadModel($model);

       $results = $this->$model->find('all', array(
           'conditions'=>array(
               $model . "." . $field . " LIKE '%" . $query . "%'"
           )
       ));

       $this->set(compact('results'));

    }

}
?>