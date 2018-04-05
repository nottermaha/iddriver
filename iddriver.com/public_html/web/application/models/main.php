<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main extends CI_Controller {
	public function __construct() 
	{
        parent::__construct();
        $this->load->library("mpdf/mpdf"); //โหลด Library โฟล์เดอร์ mpdf ตามด้วยชื่อไฟล์ mpdf ไม่    //ต้องมี .php นะครับ  
    }
	public function index()
	{
		$data['page'] = "indexcontent";
		$data['news'] = $this->model->getNews(null);
		$data['article'] = $this->model->getArticle(null);
		$data['slide'] = $this->model->getSlide();
		// echo "<pre>";
		// print_r($data);
		$this->load->view('index',$data);
	}
	public function contact()
	{
		$data['page'] = "contact";
		$this->load->view('index',$data);
	}
	public function typography()
	{
		$data['page'] = "typography";
		$this->load->view('index',$data);
	}	
	public function gallery()
	{
		$data['page'] = "gallery";
		$data['images'] = $this->model->getGallery();
		$data['album'] = $this->model->getAlbum();
		// echo "<pre>";
		// print_r($data);
		$this->load->view('index',$data);
	}	
	public function generation()
	{
		$data['page'] = "generation";
		$data['album'] = $this->model->getGeneration();
		$data['images'] = $this->model->getGenImage();
		$this->load->view('index',$data);
	}	
	public function autocheck()
	{
		$data['page'] = "autocheck";
		$this->load->view('index',$data);
	}
	public function editSlide()
	{
		$data['page'] = "slide";
		$data['slide'] = $this->model->getSlide();
		$this->load->view('index',$data);
	}	
	public function register()
	{
		$data['page'] = "register";
		$data['course'] = $this->model->getCourse();
		$this->load->view('index',$data);
	}
	
	public function register_success()
	{
		$data['page'] = "register_success";
		$this->load->view('index',$data);
	}
	public function job()
	{
		$data['page'] = "job";
		$this->load->view('index',$data);
	}	
	public function upload()
	{
		$this->load->view('upload_form');
	}
	public function news()
	{
		$ID=$this->uri->segment(3);
		$data['page'] = "news";
		$data['content'] = $this->model->getNews($ID);
		
		$this->load->view('index',$data);
	}
	public function getnews()
	{
		$ID=$this->uri->segment(3);
		$content = $this->model->getNews2($ID);
		//print_r($ID);
		echo $content;
		//$this->load->view('index',$data);
	}
	public function article()
	{
		$ID=$this->uri->segment(3);
		$data['page'] = "article";
		$data['content'] = $this->model->getArticle($ID);
		
		$this->load->view('index',$data);
	}
	public function add_register()
	{
		$data = array(
			'course'=> $this->input->post('course'),
			'citizenid'=> $this->input->post('citizenID'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'phonenumber' => $this->input->post('phoneNumber'),
			'mobilenumber' => $this->input->post('mobileNumber'),
			'citizencopy'=> $this->input->post('citizencopy'),
			'picture'=>$this->input->post('picture')
		);
	$insert_id=$this->model->insertCourseRegister($data);
	$this->session->set_userdata(array('registerID'=>$insert_id));

	$txt = $insert_id;
    $encodeID = $this->str2hex($txt);
	$html="
        <p>คุณ ".$this->input->post('firstname')." ".$this->input->post('lastname')."<p>
        <p>ได้ทำการสมัครเรียนหลักสูตร  ".$this->model->getCourseCost($this->input->post('course'))->course_name."<p>
		<p>เมื่อวันที่ ".date("d/m/Y")." เวลา  ".date("H:i:s")." น.</p>
		<a href='".site_url('main/bill')."/".$encodeID."'>ดาวน์โหลดใบนำฝาก</a>
    ";
    $mail = $this->mail_model->send_email('[สมัครเรียน]  คุณ'.$this->input->post('firstname'),$html,$this->input->post('email'));
	$this->session->set_userdata(array('register_status'=>1));
	$this->session->set_userdata(array('register_id'=>$encodeID));
    

	redirect('main/register_success');
	}
  public function view_register(){
  	if($this->captcha->check_captcha()==0){
		 redirect('main/register/wrong_captcha');
	 }
	 else{
	    $imageupload = $_FILES['files']['tmp_name'];
	    $imageupload_name = $_FILES['files']['name'];

	    for($i=0;$i<count($imageupload);$i++){
			if(!empty($imageupload_name[$i])){
				$filetype[$i] = substr($imageupload_name[$i], -3);
				if($filetype[$i]=="png"||$filetype[$i]=="jpg"||$filetype[$i]=="bmp"||$filetype[$i]=="gif"){
					copy($imageupload[$i],"img/uploads/".$imageupload_name[$i]);
				}else{
					redirect('main/register/invalid');
	     		}
	  		}
		}
	    $data['page'] = "view_register";
	    $data['image']=$imageupload_name;
	    $data['detail'] =$this->input->post();
 
	    $data['course'] =$this->model->getCourseByID($this->input->post('course'));
	    // print_r( $data['course']);
	    // exit();
	    $this->load->view('index',$data);
	}
  }
  public function bill(){
	  	$hex = $this->uri->segment(3);
	  	$id = $this->hex2str($hex);

  	//if($this->session->userdata('registerID')==$id){
	  	$data['register']=$this->model->get_register_row($id);
	  	// print_r($data['register']);
	  	// exit();
	    $this->load->view('bill',$data);
	//}
	// else{
	// 	redirect('main/register');
	// }
   }
   	public function barcode()
	{
		$barcode="|".str_replace("-",chr(13),$this->uri->segment(3));
		require('./application/libraries/barcode/class/BCGColor.php');
		require('./application/libraries/barcode/class/BCGDrawing.php');
		require('./application/libraries/barcode/class/BCGcode128.barcode.php');
		 
		$color_black = new BCGColor(0, 0, 0);
		$color_white = new BCGColor(255, 255, 255);
		 
		// Barcode Part
		$code = new BCGcode128();
		$code->setScale(2);
		$code->setThickness(30);
		$code->setForegroundColor($color_black);
		$code->setBackgroundColor($color_white);
		$code->setFont($font);
		$code->setStart(NULL);
		$code->setTilde(true);
		$code->parse($barcode);
		 
		// Drawing Part
		$drawing = new BCGDrawing('', $color_white);
		$drawing->setBarcode($code);
		$drawing->draw();
		 
		header('Content-Type: image/png');
		$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
	}
	public function employee_register()
	{ 
       if($this->captcha->check_captcha()==0){
			 redirect('main/register/wrong_captcha');
		 }
		else{
	       $data = array(
				'position'=> $this->input->post('position'),
			   'salary' => $this->input->post('salary'),
			   'firstname' => $this->input->post('firstname'),
				'lastname'=> $this->input->post('lastname'),
			   'birthdate' => $this->input->post('birthdate'),
			   'education' => $this->input->post('education'),
			   'address' => $this->input->post('address'),
			   'mobilephone' => $this->input->post('mobilephone')
			);
			
			$id=$this->model->test_get($data);
			$from = $this->input->post('from');
			$workto = $this->input->post('toDate');
			$company = $this->input->post('company');
			$position = $this->input->post('oldPosition');
			for($i=0; $i<count($from); $i++){
				$data = array(
	               'workfrom' => $from[$i],
	               'workto' => $workto[$i],
	               'company' => $company[$i],
	               'position' => $position[$i],
	               'jobID' => $id
	            );
				$this->model->insertOldWork($data);
			}
			$title = '[สมัครงาน]คุณ'.$this->input->post('firstname').' '.$this->input->post('lastname');
			$html = '<p>คุณ'.$this->input->post('firstname').' '.$this->input->post('lastname').'</p>'
					.'<p>ได้ทำการสมัครงานตำแหน่ง '.$this->input->post('position').'</p>'
					.'<p><a href="'.site_url('admin/view_job_register/'.$id).'">ดูเพิ่มเติม</a> </p>';
			$this->mail_model->send_email($title,$html,$this->input->post('email'));
			redirect('main/job/success');
		}
	}
	public function hex2str($hex) 
	{
	  return pack('H*', $hex);
	}

	public 	function str2hex($str) 
	{
	  return array_shift( unpack('H*', $str) );
	}


	
}