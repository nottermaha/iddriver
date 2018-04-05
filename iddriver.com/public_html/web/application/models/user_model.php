<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model {

	
	public function list_staff()
	{
		$this->db->select('
			ID,
			name,
			branch,
			username,
			level,

			');
		$query = $this->db->get('admin');
		return $query->result_array();
	}



	public function list_member_network()
	{
		$this->db->select('
			ID,
			name,
			branch,
			username,
			level,


			');
		$query = $this->db->get('admin');
		$rs = $query->result_array();
		$outData=array();
		$i=0;

		foreach ($rs as $key ) {
			$outData[$i]['ID'] = $key['ID'];
			$outData[$i]['name'] = $key['name'];
			$outData[$i]['username'] = $key['username'];
			$outData[$i]['parent_name'] = $this->network_model->find_parent($key['ID']);
			$outData[$i]['total_child'] =  $this->network_model->count_my_child($key['ID']);
		 	$i++;
		}
		return $outData;
	}


	public function staff_insert($list_data)
	{
		$this->db->insert('admin', $list_data);
	}
	public function staff_delete($list_data)
	{
		$this->db->where('ID',$list_data['ID']);
		$this->db->delete('admin');
	}
	public function staff_update($list_data)
	{
		$this->db->where('ID',$list_data['ID']);
		$this->db->update('admin',$list_data);
	}
	public function staff_where($staff_id)
	{
		$this->db->where('ID',$staff_id);
		$query = $this->db->get('admin');
		return $query->result_array();
	}

	public function network_member_insert($list_data,$member_id)
	{

		$rs=$this->db->insert('admin', $list_data);
		$this->db->select_max('ID');
		$query = $this->db->get('admin');
		//echo $this->db->last_query();
		$find_id = $query->result_array();
		//echo $find_id[0]["ID"];
		//echo $member_id;
		$data = array(	"parent_member_id"=>$member_id,
						"child_member_id"=>$find_id[0]["ID"],
						"member_status"=>1,
						"date_time"=>date("Y-m-d H:i:s"));
		$rs=$this->db->insert('member_mapping', $data);
		//exit;
	}
}
