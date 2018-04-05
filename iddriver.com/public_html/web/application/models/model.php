<?php
class model extends CI_Model {
	function test_get($data)
    {
		$query = $this->db->insert('job', $data); 
		 return $this->db->insert_id();
    }
	function insertOldWork($data)
    {
		if($data){
		$query = $this->db->insert('oldwork', $data);
		}
    }
	function insertCourseRegister($data)
    {
			$query = $this->db->insert('register', $data);
			return $this->db->insert_id();
    }
    function get_register_row($id){
    	$session = $this->session->all_userdata();//strat session]
    	$this->db->select(
    		'register.ID,
    		register.citizenid,
    		register.firstname,
    		register.lastname,
    		register.address,
    		register.email,
    		register.phonenumber,
    		register.mobilenumber,
    		register.picture,
    		register.pay_status,
    		register.branch,
    		register.train_branch,
    		course,course_name,
    		register.cost');
    	$this->db->where('register.ID',$id);
    	if(isset($session['ID'])){
	    	$this->db->join('course_admin','register.course=course_admin.ID');
	    }else{
	    	$this->db->join('course','register.course=course.ID');
	    }
    	
    	$query =$this->db->get('register');
    	//	echo "<pre>";
    	//	print_r($query->row_array());
    	//	exit;
    	return $query->row_array();
    }
    function get_register(){
    	$this->db->select('
    		register.ID,
    		register.firstname,
    		register.citizenid,
    		register.lastname,
    		register.address,
    		register.email,
    		register.phonenumber,
    		register.mobilenumber,
    		register.picture,
    		register.citizencopy,
    		register.pay_status,
    		register.branch,
    		register.train_branch,
    		register.cost,
    		register.register_time,
    		admin.name as staff_name,
    		course.course_name
    	');
    	$this->db->join('course','register.course=course.ID');
    	$this->db->join('admin','admin.ID=register.staff_id','left');
    	$this->db->order_by('admin.name DESC');
    	$query =$this->db->get('register');
    	return $query->result_array();
    }


    function get_staff_payment(){
    	
    	$this->db->select('
    		register.ID,
    		register.firstname,
    		register.citizenid,
    		register.lastname,
    		register.pay_status,
    		register.picture,
    		register.register_time,
    		register.branch,
    		course.course_name
    	');
    	$this->db->join('course','register.course=course.ID');
    	$this->db->where('staff_id',$this->session->userdata('ID'));
    	$this->db->order_by('register.ID DESC');
    	$query =$this->db->get('register');
    	//echo $this->db->last_query();
    	return $query->result_array();
    }

     function sum_staff_payment($id){
        
        $this->db->select('
            register.ID
        ');
        $this->db->join('course','register.course=course.ID');
        $this->db->where('staff_id',$id);
       
        $query =$this->db->count_all_results('register');
     //   echo $this->db->last_query();
     //   print_r($query);
       //exit;
        return   $query;
    }


    function get_payment_status($status){
    	
    	$this->db->select('
    		register.ID,
    		register.firstname,
    		register.citizenid,
    		register.lastname,
    		register.pay_status,
    		register.picture,
    		register.register_time,
    		register.branch,
    		register.train_branch,
    		register.invited_by,
    		course.course_name
    	');
    	$this->db->join('course','register.course=course.ID');
    	$this->db->where('pay_status',$status);
    	$this->db->order_by('register.ID DESC');
    	$query =$this->db->get('register');
    	return $query->result_array();
    }

    function get_payment(){
    	//$this->db->where('pay_status',0);
    	$this->db->select('
    		register.ID,
    		register.firstname,
    		register.citizenid,
    		register.lastname,
    		register.pay_status,
    		register.picture,
    		register.register_time,
    		register.branch,
    		register.train_branch,
    		register.cost,
    		register.invited_by,
    		course.course_name,
    		course.course_cost
    	');
    	$this->db->join('course','register.course=course.ID');
    	$this->db->order_by('register.ID DESC');
    	$query =$this->db->get('register');
    	//echo $this->db->last_query();
    	return $query->result_array();
    }

    public function getInviteRegister(){
		$query = $this->db->get('job_list');
		return $query->result_array();
	}

	function insertAlbum($data,$type)
    {
		if($type==1){
		$query = $this->db->insert('album', $data);
		}
		else if($type==2){
		$query = $this->db->insert('generation', $data);
		}
		return $this->db->insert_id();
    }
	function updateSlider($data)
    {
		$this->db->where('ID', $data);
		$this->db->update('slide', 1);
    }
	function insertImage($InData,$type)
    {
		if($type==1){
		$query = $this->db->insert('gallery', $InData);
		}
		else if($type==2){
		$query = $this->db->insert('generation_img', $InData);
		}
    }
	function getNews($id)
    {
		if($id!=null){
			$this->db->where('ID',$id);
		}
		$this->db->order_by('ID','desc');
		$query = $this->db->get('news');
		return $query->result_array();
    }
	function getArticle($id)
    {
		if($id!=null){
			$this->db->where('ID',$id);
		}
		$this->db->order_by('ID','desc');
		$query = $this->db->get('article');
		return $query->result();
    }
	function getGallery()
    {
    	$this->db->select('
    			gallery.ID,
    			gallery.albumID,
    			gallery.thumbnail,
    			album.name,
    		');
    	$this->db->join('album','album.ID = gallery.albumID');
		$query = $this->db->get('gallery');
		return $query->result();
    }
	function getAlbum()
    {
		//$this->db->where('type',0);
		$query = $this->db->get('album');
		return $query->result();
    }
	function getGeneration()
    {
		$query = $this->db->get('generation');
		return $query->result();
    }
	function getGenImage()
    {
		$query = $this->db->get('generation_img');
		return $query->result();
    }
	function getLogin()
    {
		$query = $this->db->get('admin'); 
		return $query->result();
    }
	function insertNews($data)
    {
		$query = $this->db->insert('news', $data);
    }
	function getSlide()
    {
		$query = $this->db->get('slide');
		return $query->result();
    }
    function getCourse(){
    	$session = $this->session->all_userdata();//strat session]
    	if(isset($session['ID'])){
			$query = $this->db->get('course_admin');
	    }else{
			$query = $this->db->get('course');
	    }
    	return $query->result_array();
    }
    function getCourseAdmin(){
    	$query = $this->db->get('course_admin');
    	return $query->result_array();
    }
    function get_job_register(){
    	$this->db->order_by('date','desc');
    	$query = $this->db->get('job');
    	return $query->result_array();
		}    
    function get_job_register_row($id){
    	$this->db->where('ID',$id);
		$this->db->order_by('ID','desc');
    	$query = $this->db->get('job');
    	return $query->row_array();
    }
    function get_job_register_oldwork($id){
    	$this->db->where('jobID',$id);
    	$query = $this->db->get('oldwork');
    	return $query->result_array();
    }
    public function get_slide()
    {
    	$this->db->where('status',1);
    	$query = $this->db->get('slide');
    	return $query->result();
    }
    public function deleteGallery($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('gallery'); 
    }
    public function deleteAlbum($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('album'); 
    }
    public function deleteGen($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('generation'); 
    }
    public function deleteGenImg($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('generation_img'); 
    }
    public function deleteGenAllImg($id)
    {
		$this->db->where('gen_id', $id);
		$this->db->delete('generation_img'); 
    }
    public function deleteGalleryAlbum($id)
    {
		$this->db->where('albumID', $id);
		$this->db->delete('gallery'); 
    }
    function deleteArticle($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('article'); 
    }
	function deleteNews($id)
    {
		$this->db->where('ID', $id);
		$this->db->delete('news');
	}
	function getCourseCost($id){
		$this->db->where('ID',$id);
		$query = $this->db->get('course');
		return $query->row('cost');
	}
	function getCourseByID($id){
    	$session = $this->session->all_userdata();//strat session]
		$this->db->where('ID',$id);
    	if(isset($session['ID'])){
			$query = $this->db->get('course_admin');
	    }else{
			$query = $this->db->get('course');
	    }
		return $query->result_array();
	}
	function getCourseCostAdmin($id){
		$this->db->where('ID',$id);
		$query = $this->db->get('course_admin');
		return $query->row('cost');
	}
	public function checkLogin($inData)
	{
		$this->db->where("username",$inData["username"]);
		$this->db->where("password",md5($inData["password"]));
		$query = $this->db->get("admin");
		return $query->result_array();
	}
		public function list_course()
	{
		$query = $this->db->get('course');
		return $query->result_array();
	}
	public function course_insert($list_data)
	{
		$this->db->insert('course', $list_data);
	}
	public function course_delete($list_data)
	{
		$this->db->where('ID',$list_data['ID']);
		$this->db->delete('course');
	}
	public function course_update($list_data)
	{
		$this->db->where('ID',$list_data['ID']);
		$this->db->update('course',$list_data);
	}
	public function course_where($course_id)
	{
		$this->db->where('ID',$course_id);
		$query = $this->db->get('course');
		return $query->result_array();
	}

	public function list_course_admin()
	{
		$query = $this->db->get('course_admin');
		return $query->result_array();
	}
	public function course_admin_insert($list_data)
	{
		$this->db->insert('course_admin', $list_data);
	}
	public function course_admin_delete($list_data)
	{
		$this->db->where('ID',$list_data['ID']);
		$this->db->delete('course_admin');
	}
	public function course_admin_update($list_data)
	{
		$this->db->where('ID',$list_data['ID']);
		$this->db->update('course_admin',$list_data);
	}
	public function course_admin_where($course_admin_id)
	{
		$this->db->where('ID',$course_admin_id);
		$query = $this->db->get('course_admin');
		return $query->result_array();
	}
	public function addjob($job){
		print_r($job);
		$this->db->insert('job_list', $job);
	}
	public function deletejob($job){
		$this->db->where('ID',$job);
		$this->db->delete('job_list');
	}	
	public function getjob(){
		$query = $this->db->get('job_list');
		return $query->result_array();
	}
	function update_register($register){
		if(isset($register['pay_status'])){
			$this->db->set('pay_status',$register['pay_status']);
		}
		if(isset($register['citizenid'])){
			$this->db->set('citizenid',$register['citizenid']);
		}
		if(isset($register['course'])){
			$this->db->set('course',$register['course']);
		}
		if(isset($register['firstname'])){
			$this->db->set('firstname',$register['firstname']);
		}
		if(isset($register['lastname'])){
			$this->db->set('lastname',$register['lastname']);
		}
		if(isset($register['address'])){
			$this->db->set('address',$register['address']);
		}
		if(isset($register['email'])){
			$this->db->set('email',$register['email']);
		}
		if(isset($register['phonenumber'])){
			$this->db->set('phonenumber',$register['phonenumber']);
		}
		$this->db->where('ID',$register['ID']);
		$this->db->update('register');
	}
	function get_course($id){
		$this->db->where('ID',$id);
			$query = $this->db->get('course');
		return $query->result_array();
	}
	public function set_edit_course_pageweb($qstr)	{
		if ($qstr['image']!='default-image.jpg') {
			$data = array(
				'course_name' => $qstr['course_name'],
				'course_desc' => $qstr['course_desc'],
				'image' => $qstr['image'],
				'status' => $qstr['status']
			);
		}
		else {
			$data = array(
				'course_name' => $qstr['course_name'],
				'course_desc' => $qstr['course_desc'],
				'status' => $qstr['status']
			);
		}
			$this->db->where('ID', $qstr['ID']);
			$this->db->update('course', $qstr);	
	}
	function get_course_admin($id){
		$this->db->where('ID',$id);
			$query = $this->db->get('course_admin');
		return $query->result_array();
	}
	public function set_edit_course_admin($qstr)	{
		$data = array(

			'course_name' => $qstr['course_name'],
			'course_desc' => $qstr['course_desc'],
			'status' => $qstr['status']

		);
		$this->db->where('ID', $qstr['ID']);
		$this->db->update('course_admin', $qstr);	
	}
	
	public function getBranchs() {
		$query = $this->db->select()
			->from('branch')
			->where('branch.status', 1)
			->get();
		return $query->result_array();
	}

	function getBranch_by_id($id){
		$this->db->where('id',$id);
		$query = $this->db->get('branch');

		return $query->row_array();
	}
	

	public function setBranch($qstr)	{
		if ($qstr['id'] == '')	{
			unset($qstr['id']);
			$this->db->insert('branch', $qstr);
		}
		else	{
			$data = array(
				'url' => $qstr['url'],
				'status' => $qstr['status']
			);
			$this->db->where('id', $qstr['id']);

			$this->db->update('branch', $qstr);
		}
	}

	public function setStatusBranch($qstr)	{
		$this->db->set('status', $qstr['status']);
		$this->db->where('id', $qstr['id']);
		$this->db->update('branch');
	}
	
	public function getImages($id) {
		$query = $this->db->select()
			->from('branch_image')
			->where('branch_image.branchId', $id)
			->where('branch_image.status', 1)
			->get();
		return $query->result_array();
	}

	public function setImage($qstr)	{
		if ($qstr['id'] == '')	{
			unset($qstr['id']);
			$this->db->insert('branch_image', $qstr);
		}
		else	{
			if ($qstr['image']!='default-image.jpg') {
				$data = array(
					'image' => $qstr['image'],
					'status' => $qstr['status']
				);
			}
			else {
				$data = array(
					'status' => $qstr['status']
				);
			}
			$this->db->where('id', $qstr['id']);
			$this->db->update('branch_image', $qstr);	
		}
	}

	public function setStatusImage($qstr)	{
		$this->db->set('status', $qstr['status']);
		$this->db->where('id', $qstr['id']);
		$this->db->update('branch_image');
	}

	public function getUrls()	{
		$query = $this->db->select()
			->from('linkvideo')
			->where('linkvideo.status', 1)
			->get();
		return $query->result_array();
	}

	public function setUrl($qstr)	{
		if ($qstr['id'] == '')	{
			unset($qstr['id']);
			$this->db->insert('linkvideo', $qstr);
		}
		else	{
			$data = array(
				'url' => $qstr['url'],
				'status' => $qstr['status']
			);
			$this->db->where('id', $qstr['id']);

			$this->db->update('linkvideo', $qstr);
		}
	}

	public function setStatusUrl($qstr)	{
		$this->db->set('status', $qstr['status']);
		$this->db->where('id', $qstr['id']);
		$this->db->update('linkvideo');
	}

	public function get_car_all()
	{
		$query = $this->db->select()
		->from('check_car')
		->get();
	return $query->result_array();
	}

	function get_car_by_id($id){
		$this->db->where('id',$id);
		$query = $this->db->get('check_car');

		return $query->row_array();
	}
	function get_course_id($id){
		$this->db->where('ID',$id);
			$query = $this->db->get('course');
		return $query->row_array();
	}

}
?>