<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
	
	public function __construct() 
    {
				parent::__construct();
        // print_r($this->session->userdata('is_logged_in'));
        // exit();
        if ($this->session->userdata('is_logged_in') != 1) {
            // Prevent infinite loop by checking that this isn't the login controller               
            if ($this->router->method != 'login' && $this->router->method != 'checklogin') 
            {   
				redirect('admin/login');
            }
        }   
    }

	public function index()
	{

		if($this->session->userdata('level')!=0){
			redirect('admin/register');
		}
		$data['page'] = "admin/news";
		$data['news'] = $this->model->getNews(null);
		$data['article'] = $this->model->getArticle(null);
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}

	


	public function news()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/news";
		$data['news'] = $this->model->getNews(null);
		$this->load->view('admin/admin',$data);
	}
	public function editnews(){
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		copy($imageupload,"img/uploads/".$imageupload_name);
		$data = array(
			'ID'=>$this->input->post('news_id'),
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'image' => $imageupload_name
		);
    echo '<pre>', print_r($data);exit();
		$this->update->editnews($data);
		redirect('admin/news');
	}
	public function article()
	{ 		
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/article";
		$data['article'] = $this->model->getArticle(null);
		$this->load->view('admin/admin',$data);
	}
	public function editarticle(){
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		copy($imageupload,"img/uploads/".$imageupload_name);
		$data = array(
			'ID'=>$this->input->post('article_id'),
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'image'=>$imageupload_name
		);
		$this->update->edit_article($data);
		redirect('admin/article');
	}
	public function slide()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/slide";
		$data['getAlbum'] = $this->model->getAlbum();
		$data['getGallery'] = $this->model->getGallery();
		$data['getGeneration'] = $this->model->getGeneration();
		$data['getGenImage'] = $this->model->getGenImage();
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	public function logout_web()
	{
		$this->session->sess_destroy();
		redirect('main/index');
	}
	public function course()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/course";
	  	$data['register']=$this->model->get_register();
	 //  	echo '<pre>';
		// print_r($data['register']);
		// exit();
		$this->load->view('admin/admin',$data);
	}		
	public function student()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/student";
	  	$data['register']=$this->model->get_register();
	 //  	echo '<pre>';
		// print_r($data['register']);
		// exit();
		$this->load->view('admin/admin',$data);
	}	
	public function edit_student()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$std_id=$this->uri->segment(3);
		$data['page'] = "admin/edit_student";
	  	$data['register']=$this->model->get_register_row($std_id);
		$this->load->view('admin/admin',$data);
	}
	public function update_student()
	{
		$this->model->update_register($this->input->post());
		redirect('admin/view_student/'.$this->input->post('ID'));
	}
	public function job_register()
	{		
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/job_register";
	  	$data['register']=$this->model->get_job_register();
	 //  	echo '<pre>';
		// print_r($data['register']);
		// exit();
		$this->load->view('admin/admin',$data);
	}
	public function view_job_register()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$id=$this->uri->segment(3);
		$data['page'] = "admin/view_job_register";
	  	$data['register']=$this->model->get_job_register_row($id);
			$data['old_work']=$this->model->get_job_register_oldwork($id);
		$this->load->view('admin/admin',$data);
	}
	public function user()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/user";
	  	$data['user']=$this->model->getLogin();
	 //  	echo '<pre>';
		// print_r($data['user']);
		// exit();
		$this->load->view('admin/admin',$data);
	}	
	public function view_student()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$std_id=$this->uri->segment(3);
		$data['page'] = "admin/view_student";
	  	$data['register']=$this->model->get_register_row($std_id);
		$this->load->view('admin/admin',$data);
	}
	public function album()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/album";
		$data['getAlbum'] = $this->model->getAlbum();
		$data['getGallery'] = $this->model->getGallery();
		$data['getGeneration'] = $this->model->getGeneration();
		$data['getGenImage'] = $this->model->getGenImage();
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}
	public function gen()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$data['page'] = "admin/gen";
		$data['getAlbum'] = $this->model->getAlbum();
		$data['getGallery'] = $this->model->getGallery();
		$data['getGeneration'] = $this->model->getGeneration();
		$data['getGenImage'] = $this->model->getGenImage();
		$data['slide'] = $this->model->getSlide();
		$this->load->view('admin/admin',$data);
	}
	public function login()
	{
		$this->load->view('login');
		
	}
	public function uploadimage()
	{
		$data['page'] = "uploadimage";
		$this->load->view('admin/admin',$data);
		
	}
	public function checklogin()
	{
		$inData = array("username" => $this->input->post("username"),
	 					"password" => $this->input->post("password")
	 						);
	 		$return_data = $this->model->checkLogin($inData);
	 		if(!empty($return_data)){
	 			$this->session->set_userdata('is_logged_in', 1);
	 		}
	 	if(isset($return_data[0])){
	 			$userdata = $return_data[0];
	 			$this->session->set_userdata($userdata);

			if($userdata['level']==0){
				redirect('admin/index');

			}elseif($userdata['level']==1){
				redirect('admin/dashboard');
			}
			elseif($userdata['level']==2){
				redirect('admin/payment');
			}elseif($userdata['level']==9){
				redirect('admin/networkmember');
			}
			
	 	}else{
			redirect('admin/login');
		}
	}
	public function uploadslide()
	{
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		$InData=null;
		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/slides/".$imageupload_name[$i]);
			$InData = array(
				'img_name' => $imageupload_name[$i]
			);
			$this->db->insert('slide', $InData);
		}

		redirect('admin/slide');
		
	}
	public function deleteslide()
	{
		$slide_id=$this->uri->segment(3);
		$this->db->where('ID',$slide_id);
		$this->db->delete('slide');
		redirect('admin/slide');
	}
	public function deleteGallery()
	{
		$id=$this->uri->segment(3);
		$this->model->deleteGallery($id);
		redirect('admin/album');
	}
	public function deleteAlbum()
	{
		$id=$this->uri->segment(3);
		$this->model->deleteAlbum($id);
		$this->model->deleteGalleryAlbum($id);
		redirect('admin/album');
	}
	public function deleteGenImg()
	{
		$id=$this->uri->segment(3);
		$this->model->deleteGenImg($id);
		redirect('admin/gen');
	}
	public function deleteGen()
	{
		$id=$this->uri->segment(3);
		$this->model->deleteGen($id);
		$this->model->deleteGenAllImg($id);
		redirect('admin/gen');
	}
	public function insert_article()
	{
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/uploads/".$imageupload_name[$i]);
			$data = array(
	           'title' => $this->input->post('title'),
	           'description' => $this->input->post('content'),
	           'image' => $imageupload_name[$i]
	        );
			$query = $this->db->insert('article', $data);
			redirect('admin/article/success');
		}
	}
	public function insert_news()
	{
		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];
		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/uploads/".$imageupload_name[$i]);
			$data = array(
	           'title' => $this->input->post('title'),
	           'description' => $this->input->post('content'),
	           'image' => $imageupload_name[$i]
	        );
			$query = $this->db->insert('news', $data);
			redirect('admin/news/success');
		}
	}
	
	
	public function delete_article()
	{
		$id=$this->uri->segment(3);
		$retid=$this->model->deleteArticle($id);
		redirect('admin/article');
		
	}	
	public function delete_news()
	{
		$id=$this->uri->segment(3); 
		$retid=$this->model->deleteNews($id);
		redirect('admin/news');
		
	}
	public function get_news(){
		$id=$this->input->post('id');
		$data=$this->model->getNews($id);
		echo json_encode($data);
	}	

	public function get_article(){
		$id=$this->input->post('id');
		$data=$this->model->getArticle($id);
		echo json_encode($data);
	}

	public function updateSlide()
	{
		$id=$this->input->post('status');
		$this->update->swithSlider($id);
		redirect('admin/slide/success');
			
	}
	public function insertGallery()
	{
		$addtype = $this->input->post('title');
		$type = $this->input->post('gallerytype');
		$data = array(
               'name' => $this->input->post('title'),
            );
		$albumID = $this->model->insertAlbum($data,$type);

		$imageupload = $_FILES['files']['tmp_name'];
		$imageupload_name = $_FILES['files']['name'];

		// echo "<pre>";
		// print_r($imageupload_name) ;
		// exit();

		for($i=0;$i<count($imageupload);$i++){
			copy($imageupload[$i],"img/gallery/".$imageupload_name[$i]);
			if($type==1){
			$InData = array(
				'thumbnail' => $imageupload_name[$i],
				'albumID' => $albumID
			);
			}
			else if($type==2){
				$InData = array(
				'image' => $imageupload_name[$i],
				'gen_id' => $albumID
			);
			}
			$this->model->insertImage($InData,$type);
		}
		if($type==1){
			redirect('admin/album/success');
		}else if($type==2){
			redirect('admin/gen/success');
		}
	}
	public function register_list()  
	{
		$data['page'] = "admin/staff_register";
		$data['course'] = $this->model->getCourseAdmin();
	  	$data['register']=$this->model->get_staff_payment();
		$this->load->view('index',$data);
	}



	public function register_all()  
	{
		$data['page'] = "admin/staff_register_all";
		$data['course'] = $this->model->getCourseAdmin();
	  	$data['register']=$this->model->get_staff_payment();
		$this->load->view('index',$data);
	}


	public function register()
	{
		$data['page'] = "register_new_process";
		$data['course'] = $this->model->getCourseAdmin();
	  	$data['register']=$this->model->get_staff_payment();
		$this->load->view('index',$data);
	}


		public function register_new_process()
	{
		$data['page'] = "register_new_process";
	//	$data['course'] = $this->model->getCourseAdmin();
	//  	$data['register']=$this->model->get_staff_payment();
		$this->load->view('index',$data);
	}


	public function job()
	{
		$data['page'] = "admin/job";
		$data['job'] = $this->model->getjob();
		$this->load->view('admin/admin',$data);
		
	}	
	public function insert_job()
	{
		$job = array('job'=>$this->input->post('job_name'));
		$this->model->addjob($job);
		redirect('admin/job');
		
	}
	public function delete_job()
	{
		$job_id=$this->uri->segment(3);
		$this->model->deletejob($job_id);
		redirect('admin/job');
		
	}	
	public function payment()
	{
		if($this->session->userdata('level')!=0 && $this->session->userdata('level')!=2){
			redirect('admin/login');
		}
		$data['page'] = "admin/payment";
	  	$data['register']=$this->model->get_payment();
		$this->load->view('admin/admin',$data);
		
	}
	public function staff_payment()
	{
		if($this->session->userdata('level')!=0 && $this->session->userdata('level')!=2){
			redirect('admin/login');
		}
		$data['page'] = "admin/staff_payment";
	  	$data['register']=$this->model->get_payment_status(1);
		$this->load->view('admin/admin',$data);
		
	}
	public function update_payment(){
		$id = $this->uri->segment(3);
		$payment = $this->uri->segment(4);
	//	$alertEmail = $this->uri->segment(5);
	//	$displayStaff = $this->uri->segment(6);
		$data = array('ID'=>$id,
					  'pay_status'=>$payment
					);
		$this->model->update_register($data);

		$user_register = $this->model->get_register_row($id);
 
 		if($user_register["branch"]=="สาขาบายพาส (ขอนแก่น)"){
			$send_mail = "contact@iddriver.com";
		}else if($user_register["branch"]=="สาขาขอนแก่น"){
			$send_mail = "id-school@iddriver.com";
		}else if($user_register["branch"]=="สาขาลำลูกกา (ปทุมธานี)"){
			$send_mail = "id-lumlukka@iddriver.com";
		}else if($user_register["branch"]=="สาขามหาสารคาม"){
			$send_mail = "id-mahasarakham@iddriver.com";
		}else{
			$send_mail = "contact@iddriver.com";
		}



		if($user_register["train_branch"]=="สาขาบายพาส (ขอนแก่น)"){
			$send_mail2 = "contact@iddriver.com";
		}else if($user_register["train_branch"]=="สาขาขอนแก่น"){
			$send_mail2 = "id-school@iddriver.com";
		}else if($user_register["train_branch"]=="สาขาลำลูกกา (ปทุมธานี)"){
			$send_mail2 = "id-lumlukka@iddriver.com";
		}else if($user_register["train_branch"]=="สาขามหาสารคาม"){
			$send_mail2 = "id-mahasarakham@iddriver.com";
		}else{
			$send_mail2 = "contact@iddriver.com";
		}
 
 

		$html="
        <p>คุณ   ". $user_register["firstname"]." ".$user_register["lastname"]."<p>
		<p>ได้ชำระเงินเรียบร้อยแล้ว กรุณาเข้าไปดูในระบบ <a href='".base_url()."/index.php/admin/'>กดตรงนี้</a></p>
		 
    	";
 	
		//$mail = $this->mail_model->send_email('[แจ้งชำระเงินแล้ว]  คุณ',$html,$send_mail);
		$mail = $this->mail_model->send_email('[แจ้งชำระเงินแล้ว สาขา]  คุณ',$html,$send_mail2);

		redirect('admin/payment');

	}
	public function excel()
	{

		$data['register']=$this->model->get_register();
		// echo "<pre>";
		// print_r($data['register']);
		// exit();
		$this->load->view('admin/excel',$data);
	}


	public function dashboard()
	{
		$session = $this->session->all_userdata();

		$data['member_name'] = $session['name'];
		$find_id = $session['ID'];
		$data['page'] = "network/dashboard";
		$data['member_child'] =$this->network_model->count_my_child($find_id);
		//echo $find_id;
		$this->load->view('index',$data);
	}


	public function networkmember()
	{
		$session = $this->session->all_userdata();
	 	$id = $this->uri->segment(3);
	 	if($id){
	 		$find_id = $id ;
	 		$data['child_name'] = $this->network_model->my_child_name($find_id);
	 	}else{
	 		
	 		$find_id =$session['ID'];
	 		$data['child_name'] ="";
	 		
	 	}

		 $data['member_name'] = $session['name'];
		
		$data['member_list'] = $this->network_model->my_child($find_id);
		$data['member_child'] =   $this->network_model->count_my_child($find_id);
		$data['page'] = "network/memberlist";	 
		$this->load->view('index',$data);
	}

	public function sharelink()
	{
		$data['page'] = "network/sharelink";	 
		$this->load->view('index',$data);
	}
 


	public function member_admin()
	{

		$this->network_model->my_child(37);
		$data['page'] = "admin/user";	 
		$this->load->view('admin/admin',$data);
	}



	public function member_network_summary()
	{

		$data["list_member"]= $this->user_model->list_member_network();
		$data['page'] = "admin/member_list_network";	 
		$this->load->view('admin/admin',$data);
	}
	public function edit_course()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$id=$this->uri->segment(3);
		$data['page'] = "admin/edit_course";
		// print_r($id);exit();
	  	$data['course']=$this->model->get_course($id);
		$this->load->view('admin/admin',$data);
	}	
	public function edit_course_pageweb()	{
		// $id=$this->uri->segment(3);
    $prop = array(
      'upload_path' => 'img/',
      'allowed_types' => 'jpg|jpeg|png|JPG|JPEG|PNG',
      'txt_upload' => 'file',
      'txt_unlink' => 'default-image.jpg',
      'default_file' => 0,
    );
    $file_name = $this->upload_file($prop);
		$qstr = array(
			'ID' => $this->input->post('ID'),
			'course_name' => $this->input->post('course_name'),
			'course_desc' => $this->input->post('course_desc'),
			'image' => $file_name,
			'status' => '1'
		);
		$this->model->set_edit_course_pageweb($qstr);
	
		redirect('admin/course');
	}
	public function edit_course_admin()
	{
		if($this->session->userdata('level')!=0){
			redirect('admin/login');
		}
		$id=$this->uri->segment(3);
		$data['page'] = "admin/edit_course_admin";
		// print_r($id);exit();
	  	$data['course']=$this->model->get_course_admin($id);
		$this->load->view('admin/admin',$data);
	}	
	public function edit_course_admin_set()	{
		$id=$this->uri->segment(3);
		$qstr = array(
			'ID' => $this->input->post('ID'),
			'course_name' => $this->input->post('course_name'),
			'course_desc' => $this->input->post('course_desc'),
			'status' => '1'
		);
		// print_r($qstr);exit();
		$this->model->set_edit_course_admin($qstr);
	
		redirect('admin/course');
	}
	public function getYoutube()
	{

	$data["url"]= $this->model->getUrls();
	$data['page'] = "admin/url";
	$this->load->view('admin/admin',$data);
}



public function setYoutube()	{
	$qstr = array(
		'id' => $this->input->post('urlId'),

		'url' => $this->input->post('url'),

		'status' => '1'
	);

	$this->model->setUrl($qstr);

	redirect('admin/getYoutube');
}



public function setStatusYoutube()
	{

	$id = $this->uri->segment(3);
	$qstr = array(

		'id' => $id,

		'status' => '0'
	);

	$this->model->setStatusUrl($qstr);

	redirect('admin/getYoutube');

}



	function upload_file($prop)
	{
		$config['upload_path'] = $prop['upload_path'];
				$config['allowed_types'] = $prop['allowed_types'];
				$config['file_name'] = date("YmdHis");
				
				$this->load->library('upload');
				$this->upload->initialize($config);

				if ($this->upload->do_upload($prop['txt_upload'])) {
						$data = $this->upload->data();
						$file_name = $data['file_name'];  
						// echo "<pre>", print_r($data);
						if ($data['file_name'] != NULL && $prop['txt_unlink'] != '0' && $prop['txt_unlink'] !='' && $prop['txt_unlink'] != $prop['default_file']) {
								unlink($prop['upload_path'].$prop['txt_unlink']);
						}
				}else {
						//echo $this->upload->display_errors();
						$file_name = ($prop['txt_unlink'] != NULL)? $prop['txt_unlink'] : '0';
				}
				return $file_name;
	}
	
	  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */