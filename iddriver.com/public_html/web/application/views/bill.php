<?php
$taxID = '040553600053100';
$suFfix = '00';
$reF1 = $register['citizenid'];
$reF2 = $register['mobilenumber'];
$aMount = $register['cost']."00";
//$reF1 = str_pad((string)$register['citizenid'], 18, "0", STR_PAD_LEFT);
//$reF2 = str_pad((string)$register['phonenumber'], 18, "0", STR_PAD_LEFT);
//$aMount = str_pad((string)$register['course_cost'], 10, "0", STR_PAD_LEFT); //100.00
$barcode_show = '|'.$taxID.' '.$reF1.' '.$reF2.' '.$aMount;
$barcode = $taxID.'-'.$reF1.'-'.$reF2.'-'.$aMount;
function ThaiBahtConversion($amount_number)
{
    $amount_number = number_format($amount_number, 2, ".","");
    $pt = strpos($amount_number , ".");
    $number = $fraction = "";
    if ($pt === false) 
        $number = $amount_number;
    else
    {
        $number = substr($amount_number, 0, $pt);
        $fraction = substr($amount_number, $pt + 1);
    }
    $ret = "";
    $baht = ReadNumber ($number);
    if ($baht != "")
        $ret .= $baht . "บาท";
    
    $satang = ReadNumber($fraction);
    if ($satang != "")
        $ret .=  $satang . "สตางค์";
    else 
        $ret .= "ถ้วน";
    return $ret;
}

function ReadNumber($number)
{
    $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
    $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
    $number = $number + 0;
    $ret = "";
    if ($number == 0) return $ret;
    if ($number > 1000000)
    {
        $ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";
        $number = intval(fmod($number, 1000000));
    }
    
    $divider = 100000;
    $pos = 0;
    while($number > 0)
    {
        $d = intval($number / $divider);
        $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" : 
            ((($divider == 10) && ($d == 1)) ? "" :
            ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
        $ret .= ($d ? $position_call[$pos] : "");
        $number = $number % $divider;
        $divider = $divider / 10;
        $pos++;
    }
    return $ret;
}

 $this->load->library("mpdf/mpdf");

 ob_start();
 ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="http://bootstraptaste.com" />
</head>


<body>

<div style="position:fixed;left:1.2cm;top:25.0cm"><img style="max-width:9cm; height:1cm !important; " 
src="<?php echo site_url('main/barcode/'.$barcode) ?>" alt=""></div>
<div style="position:fixed;left:1.2cm;top:25.8cm;font-size:10px"><?php echo $barcode_show ?></div>
<div style="position:fixed;left:18.3cm;top:1.5cm;width:1000px">สำหรับลูกค้า</div>
<div style="position:fixed;left:15.3cm;top:3.4cm;width:1000px"><?php echo date("d/m/Y") ?></div>
<div style="position:fixed;left:13.5cm;top:4.5cm;width:1000px"><?php echo $register['firstname']." ".$register['lastname'] ?></div>
<div style="position:fixed;left:16.3cm;top:5.1cm;width:1000px"><?php echo $register['citizenid'] ?></div>
<div style="position:fixed;left:17.3cm;top:5.75cm;width:1000px"><?php echo $register['mobilenumber']?></div>
<div style="position:fixed;left:14.7cm;top:7.3cm;width:1000px"><?php echo number_format ($register['cost']) ?></div>
<div style="position:fixed;left:10.7cm;top:8.2cm;width:1000px;"><?php echo ThaiBahtConversion($register['cost']) ?></div>


<div style="position:fixed;left:17.6cm;top:13.3cm;width:1000px">สำหรับธนาคาร</div>
<div style="position:fixed;left:15.3cm;top:15.3cm;width:1000px"><?php echo date("d/m/Y") ?></div>
<div style="position:fixed;left:13.5cm;top:16.4cm;width:1000px"><?php echo $register['firstname']." ".$register['lastname'] ?></div>
<div style="position:fixed;left:16.3cm;top:17cm;width:1000px"><?php echo $register['citizenid'] ?></div>
<div style="position:fixed;left:17.3cm;top:17.695cm;width:1000px"><?php echo $register['mobilenumber'] ?></div>
<div style="position:fixed;left:14.7cm;top:19.2cm;width:1000px"><?php echo number_format ($register['cost']) ?></div>
<div style="position:fixed;left:10.7cm;top:20.1cm;width:1000px;"><?php echo ThaiBahtConversion($register['cost']) ?></div>

  <div style="padding:0.5cm">
  <div><img src="<?php echo base_url('img/bill-payment.jpg')?> " alt="">
  <div style="color:#7c7c7c">--------------------------------------------------------------------------------------------------------------------------------------------------------</div>
    <img src="<?php echo base_url('img/bill-payment.jpg')?> " alt="">
</div>
</div>

</body>
<?php 
	  error_reporting(~E_NOTICE & ~E_WARNING);
      $html = ob_get_contents();
      ob_end_clean();
      $mpdf = new mPDF('th','A4','','' , 0 , 0 , 0 , 0 , 0 , 0); 
      $mpdf->SetDisplayMode('fullpage');
      ob_get_contents();
    //$mpdf->debug = true;
      $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
      $mpdf->WriteHTML($html);
      //render the pdf on the browser
      $mpdf->Output();

?>