<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class network_model extends CI_Model {

	
	public function my_child($parent_id)
	{
		//$parent_id=37;

		//$this->db->where('parent_member_id',$parent_id);
	//	$query = $this->db->get('member_mapping');
		//echo $this->db->last_query();

		$this->db->where('parent_member_id',$parent_id);
		$this->db->where('member_status',1);
		$this->db->select('*');
		$this->db->from('member_mapping');
		$this->db->join('admin', 'admin.ID = member_mapping.child_member_id');

		$query = $this->db->get();
		return $query->result_array();

	}

	public function count_my_child($parent_id)
	{
		//$parent_id=37;

		//$this->db->where('parent_member_id',$parent_id);
	//	$query = $this->db->get('member_mapping');
		//echo $this->db->last_query();

		$this->db->where('parent_member_id',$parent_id);
		$this->db->where('member_status',1);
		$this->db->select('*');
		$this->db->from('member_mapping');
		$this->db->join('admin', 'admin.ID = member_mapping.child_member_id');

		//$query = $this->db->get();
		return   $this->db->count_all_results();

	}
 

	public function my_child_name($parent_id)
	{
		//$parent_id=37;

		//$this->db->where('parent_member_id',$parent_id);
	//	$query = $this->db->get('member_mapping');
		//echo $this->db->last_query();

		$this->db->where('ID',$parent_id);
		$query = $this->db->get('member_mapping');
		$rs= $query->result_array();
		 
		$outData = @$rs[0]['name'];
		return   	$outData;
	}


	public function find_parent($parent_id)
	{


		$this->db->where('child_member_id',$parent_id);
		$query = $this->db->get('member_mapping');
		$rs= $query->result_array();
 
		if(@$rs[0]){
			return $this->get_name($rs[0]['parent_member_id']);
		}else{
			return "-";
		}
		//exit;
		//return   	$outData;
	}


		public function get_name($parent_id)
	{
 
		$this->db->where('ID',$parent_id);
		$query = $this->db->get('admin');
		$rs= $query->result_array();
		 
		$outData = $rs[0]['name'];
		return   	$outData;
	}
	 
}
