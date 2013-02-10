<?php
	class Crud extends DataAccessHandler{
		public function __construct(){
			parent::__construct();
		}
		
		public function read($id = null){
			if(is_null($id)){
				$results = $this->queryDB($this->selectAllQuery);
			}
			else{
				$results = $this->queryDB($this->selectOneQuery, $id);
			}

			return $this->buildEntities($results);
		}

		public function delete($entities){
			foreach ($entities as $entity) {
				$this->updateDB($this->deleteQuery, $entity->getID());
			}
		}

		public function update($entities){
			foreach ($entities as $entity) {
				$this->updateDB($this->updateQuery, $entity->toArray());
			}
		}

		public function insert($entities){
			foreach ($entities as $entity) {
				$this->updateDB($this->insertQuery, $entity->toArray());
			}
		}
	}
?>