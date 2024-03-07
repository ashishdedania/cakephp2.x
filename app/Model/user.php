<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('SoftDelete', 'Model/Behavior');
App::uses('AppModel', 'Model');
/**
 * user Model
 *
 */
class user extends AppModel {

	public $actsAs = array('SoftDelete');

	public $validate = array(        
	);     

	public function beforeSave($options = array()) {
		if (!parent::beforeSave($options)) {
			return false;
		}
		if (isset($this->data[$this->alias]['password'])) {
			$hasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $hasher->hash($this->data[$this->alias]['password']);
		}
		return true;
	}
 	
	public function GetData($isAdmin) {
		 
		$conditions = array();
        $options = array(
            'conditions' => $conditions,
            'limit' => isset($_POST['length']) ? $_POST['length'] : 10,
            'offset' => isset($_POST['start']) ? $_POST['start'] : 0,
            'recursive' => -1 
        );

        $rResult = $this->find('all', $options);
		$iTotal = count($this->find('all'));
		$row = array(); 
		foreach ($rResult as $record) {
			$edit =  Router::url(['controller' => 'users', 'action' => 'edit',$record['User']['id']]);
			
			if($isAdmin == 1) {
				$link = '<a class="btn btn-success" href="'.$edit.'" role="button" target="_blank">Edit</a> <a data-id="'.$record['User']['id'].'" class="btn btn-danger ajax-button" href="#" role="button">Delete</a>';
			} else {
				$link = '';
			}
			
			$sdata = [
				$record['User']['firstname'],
				$record['User']['lastname'],
				$record['User']['contact_number'],
				$record['User']['email'],
				$record['User']['is_admin'] == 1? 'Admin':'User',
				$record['User']['address'],
				$record['User']['state'],
				$link
			];
            $row[] = $sdata;           
        }
		 
        $output = array(
			"draw" => isset($_POST['draw']) ? intval($_POST['draw']):1,
			"recordsTotal" => $iTotal,
			"recordsFiltered" => $iTotal,
			"data" => $row
		);

		return $output;
    }	
}
