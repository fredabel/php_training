<?php

require dirname(__FILE__).'/../model/Users.php';



Class UsersController {

	public function users_instance(){

		return new Users;
	}

	public function users_list(){


		$data = $this->users_instance()->list();

		return json_encode($data);

	}

	public function store(){
		if($_REQUEST)
			$r = $_REQUEST;

		if($r['name'] == ""){
			echo 'Input name';
			die();
		}
		if($r['email'] == ""){
			echo 'Input email';
			die();
		}
		if($r['age'] == ""){
			echo 'Input age';
			die();
		}
			
			$data = $this->users_instance()->create($r);

		if ($data > 0) {
            $return = "Sucessfully Added";  
        }else{
        	$return = "Unsuccessful";
        } 	

        return $return;
	}

}

?>