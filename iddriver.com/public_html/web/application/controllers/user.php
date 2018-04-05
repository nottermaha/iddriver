<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Controller {

	public function list_user()
	{
		$list_user = $this->user_model->list_staff();
		// echo "<Pre>";
		// print_r($list_user);
		// exit();
		## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_user).')'; 
		print_r($_GET['callback'].$json);
	}


	public function list_network_user()
	{
		$list_user = $this->user_model->list_member_network();
		// echo "<Pre>";
		// print_r($list_user);
		// exit();
		## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_user).')'; 
		print_r($_GET['callback'].$json);
	}


	public function user_insert()
	{
		$data = $_GET['models'];
		$arr = json_decode($data);
		foreach($arr as $name)
		{
			$pass = $name->password;
			$list_data = array(
				'name' => $name->name,
				'username' => $name->username,
				'level' => $name->level,
				'branch' => $name->branch,
				'password' => md5($pass),
			);
			$return = $this->user_model->staff_insert($list_data);
			$list_data = array(
				'name' => $name->name,
				'username' => $name->username,
				'level' => $name->level,
				'branch' => $name->branch,
			);
		}
		## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_data).')'; 
		print_r($_GET['callback'].$json);
	}
	public function user_update()
	{
		$data = $_GET['models'];
		$arr = json_decode($data);
		foreach($arr as $name)

		if(!isset($name->password)){
			$list_data = array(
				'ID' => $name->ID,
				'name' => $name->name,
				'username' => $name->username,
				'level' => $name->level,
				'branch' => $name->branch,
			);
			$return = $this->user_model->staff_update($list_data);	
		} 
		else {
			$pass = $name->password;
			$list_data = array(
				'ID' => $name->ID,
				'name' => $name->name,
				'username' => $name->username,
				'level' => $name->level,
				'branch' => $name->branch,
				'password' => md5($pass),
			);
			$return = $this->user_model->staff_update($list_data);	
		}

			## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_data).')'; 
		print_r($_GET['callback'].$json);
			
		}
	public function user_delete()
	{
			$data = $_GET['models'];
			$arr = json_decode($data);
			foreach($arr as $name)
			{
				$list_data = array(
				'ID' => $name->ID,
			);
				$this->user_model->staff_delete($list_data);
			}
			## Return Value ##
			header('Content-Type: text/javascript; charset=utf8');
			$json = '('.json_encode($list_data).')'; 
			print_r($_GET['callback'].$json);
	}

}

