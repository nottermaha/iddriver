<?php
class mail_model extends CI_Model {
	function send_email($title,$body,$customer_email){
		//$customer_email = $customer_email.",contact@iddriver.com,service.iddriver@gmail.com";
	//	echo $customer_email;exit;
		$this->load->library('phpmailer');
		$this->load->library('smtp');
		$this->phpmailer->IsSMTP();
	    $this->phpmailer->SMTPAuth   = true;
	    $this->phpmailer->CharSet = "utf-8";
	    $this->phpmailer->SMTPSecure = "ssl";
	    $this->phpmailer->Host       = "smtp.gmail.com";
	    $this->phpmailer->Port       = 465;
	    $this->phpmailer->Username   = "service.iddriver@gmail.com";
	    $this->phpmailer->Password   = "iddriver1234";
	    $this->phpmailer->SetFrom('service.iddriver@gmail.com', 'ID DRIVER');
	   // $this->phpmailer->AddReplyTo("response@yourdomain.com","ชื่อ-นามสกุล");
	    $this->phpmailer->Subject    = $title;
	    $this->phpmailer->MsgHTML($body);
	    //$this->phpmailer->AltBody    = "Plain text message";
	    //$this->phpmailer->AddAddress('l2uncs@gmail.com');
	    //$this->phpmailer->AddAddress('Contact@iddriver.com');
	    //$this->phpmailer->AddAddress('kantapon.hanpachern@gmail.com');
	    if($customer_email!=null){
	   	 $this->phpmailer->AddAddress($customer_email);
	   	 $this->phpmailer->AddAddress("service.iddriver@gmail.com");
	   	 $this->phpmailer->AddAddress("contact@iddriver.com");
	    }
	    //$this->phpmailer->AddAddress('receive2@hotmail.com', "Fucyber");

	    //$this->phpmailer->AddAttachment("images/phpmailer.gif");
	    //$this->phpmailer->AddAttachment("images/phpmailer_mini.gif");
	  //  echo $this->phpmailer->Send();
	  //  exit;
	    if(!$this->phpmailer->Send()) {
	  	  return 0;
	    } 
	    else {
	  	  return 1;
	    }

	}
   }
?>