<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class course extends CI_Controller {

	public function list_course()
	{
		$list_course = $this->model->list_course();
		// echo "<Pre>";
		// print_r($list_course);
		// exit();
		## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_course).')'; 
		print_r($_GET['callback'].$json);
	}
	public function course_insert()
	{
		$data = $_GET['models'];
		$arr = json_decode($data);
		foreach($arr as $name)
		{
			$list_data = array(
				'course_cost' => $name->course_cost,
			);
			$return = $this->model->course_insert($list_data);
			$list_data = array(
				'course_cost' => $name->course_cost,
			);
		}
		## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_data).')'; 
		print_r($_GET['callback'].$json);
	}
	public function course_update()
	{
		$data = $_GET['models'];
		$arr = json_decode($data);
		foreach($arr as $name)
			$list_data = array(
				'ID' => $name->ID,
				'course_name' => $name->course_name,
				'course_cost' => $name->course_cost,
			);
			$return = $this->model->course_update($list_data);	


			## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_data).')'; 
		print_r($_GET['callback'].$json);
			
		}
	public function course_delete()
	{
			$data = $_GET['models'];
			$arr = json_decode($data);
			foreach($arr as $name)
			{
				$list_data = array(
				'ID' => $name->ID,
			);
				$this->model->course_delete($list_data);
			}
			## Return Value ##
			header('Content-Type: text/javascript; charset=utf8');
			$json = '('.json_encode($list_data).')'; 
			print_r($_GET['callback'].$json);
	}

	public function list_course_admin()
	{
		$list_course = $this->model->list_course_admin();
		// echo "<Pre>";
		// print_r($list_course);
		// exit();
		## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_course).')'; 
		print_r($_GET['callback'].$json);
	}
	public function course_admin_insert()
	{
		$data = $_GET['models'];
		$arr = json_decode($data);
		foreach($arr as $name)
		{
			$list_data = array(
				'course_cost' => $name->course_cost,
			);
			$return = $this->model->course_admin_insert($list_data);
			$list_data = array(
				'course_cost' => $name->course_cost,
			);
		}
		## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_data).')'; 
		print_r($_GET['callback'].$json);
	}
	public function course_admin_update()
	{
		$data = $_GET['models'];
		$arr = json_decode($data);
		foreach($arr as $name)
			$list_data = array(
				'ID' => $name->ID,
				'course_name' => $name->course_name,
				'course_cost' => $name->course_cost,
			);
			$return = $this->model->course_admin_update($list_data);	


			## Return Value ##
		header('Content-Type: text/javascript; charset=utf8');
		$json = '('.json_encode($list_data).')'; 
		print_r($_GET['callback'].$json);
			
		}
	public function course_admin_delete()
	{
			$data = $_GET['models'];
			$arr = json_decode($data);
			foreach($arr as $name)
			{
				$list_data = array(
				'ID' => $name->ID,
			);
				$this->model->course_admin_delete($list_data);
			}
			## Return Value ##
			header('Content-Type: text/javascript; charset=utf8');
			$json = '('.json_encode($list_data).')'; 
			print_r($_GET['callback'].$json);
	}

}

