<?php
class captcha extends CI_Model {
	function check_captcha(){
		$expiration = time()-7200; // Two hour limit
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);  

		// Then see if a captcha exists:
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();

		if ($row->count == 0)
		{
		    return 0;
		}
		else{
			return 1;
		}
	}
	function captcha_create(){
		$this->load->helper('captcha');
		$vals = array(
		    'img_path'   => FCPATH.'/captcha/',
		    'img_url'    => base_url().'captcha/',
		    'font_path'  => './fonts/thai/supermarket-webfont.ttf',
		    'img_width'  => 300,
		    'img_height' => 50,
		    'word_length'   => 8,
        	'font_size'     => 32,
		    );
		$cap = create_captcha($vals);
		$data = array(
		    'captcha_time'  => $cap['time'],
		    'ip_address'    => $this->input->ip_address(),
		    'word'   => $cap['word']
		    );
		$query = $this->db->insert_string('captcha', $data);
		$this->db->query($query);
		echo $cap['image'];
	}
		function captcha_reload(){
		$this->load->helper('captcha');
		$vals = array(
		    'img_path'   => FCPATH.'/captcha/',
		    'img_url'    => base_url().'captcha/',
		    'font_path'  => './fonts/thai/supermarket-webfont.ttf',
		    'img_width'  => 300,
		    'img_height' => 50,
		    'word_length'   => 8,
        	'font_size'     => 32,
		    );
		$cap = create_captcha($vals);
		$data = array(
		    'captcha_time'  => $cap['time'],
		    'ip_address'    => $this->input->ip_address(),
		    'word'   => $cap['word']
		    );
		$query = $this->db->insert_string('captcha', $data);
		$this->db->query($query);
		return $cap['image'];
	}
}
   
?>