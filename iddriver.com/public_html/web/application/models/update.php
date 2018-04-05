<?php
class update extends CI_Model {
	function swithSlider($data)
    {
		$this->db->update('slide',array('status' => 0));	
		for($i=0;$i<count($data);$i++){
			$this->db->where('ID',$data[$i]);
			$this->db->update('slide',array('status' => 1));	
	}
		return "success";
    }
	function editnews($data){
		$this->db->set('title',$data['title']);
		$this->db->set('description',$data['description']);
		if($data['image']!=''){
			$this->db->set('image',$data['image']);
		}
		$this->db->where('ID',$data['ID']);
		$this->db->update('news');
	}	
	function edit_article($data){
		$this->db->set('title',$data['title']);
		$this->db->set('description',$data['description']);
		if($data['image']!=''){
			$this->db->set('image',$data['image']);
		}
		$this->db->where('ID',$data['ID']);
		$this->db->update('article');
	}
}
?>