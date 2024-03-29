<?php
require('Classes/fpdf.php');



$fullName = strtoupper('Precious Luke'); // I know this will be dynamic and will come from a db
$link = 'start.ng/verify/16N5F3Z';  // I know this will be dynamic and will come from a db
$score = 62;  // I know this will be dynamic and will come from a db
$back;


class NPDF extends FPDF
{
    
function Header()
{
    //Put the watermark
  
    //Background
    $this->Image('images/bg.jpg',3,3,30,27);
    $this->Image('images/bg.jpg',40,3,30, 27);
    $this->Image('images/bg.jpg',77,3,30, 27);
    $this->Image('images/bg.jpg',114,3,30, 27);
    $this->Image('images/bg.jpg',151,3,30, 27);
    $this->Image('images/bg.jpg',188,3,30, 27);

    $this->Image('images/bg.jpg',3,33,30,27);
    $this->Image('images/bg.jpg',40,33,30, 27);
    $this->Image('images/bg.jpg',77,33,30, 27);
    $this->Image('images/bg.jpg',114,33,30, 27);
    $this->Image('images/bg.jpg',151,33,30, 27);
    $this->Image('images/bg.jpg',188,33,30, 27);

    $this->Image('images/bg.jpg',3,63,30,27);
    $this->Image('images/bg.jpg',40,63,30, 27);
    $this->Image('images/bg.jpg',77,63,30, 27);
    $this->Image('images/bg.jpg',114,63,30, 27);
    $this->Image('images/bg.jpg',151,63,30, 27);
    $this->Image('images/bg.jpg',188,63,30, 27);

    $this->Image('images/bg.jpg',3,93,30,27);
    $this->Image('images/bg.jpg',40,93,30, 27);
    $this->Image('images/bg.jpg',77,93,30, 27);
    $this->Image('images/bg.jpg',114,93,30, 27);
    $this->Image('images/bg.jpg',151,93,30, 27);
    $this->Image('images/bg.jpg',188,93,30, 27);

    $this->Image('images/bg.jpg',3,123,30,27);
    $this->Image('images/bg.jpg',40,123,30, 27);
    $this->Image('images/bg.jpg',77,123,30, 27);
    $this->Image('images/bg.jpg',114,123,30, 27);
    $this->Image('images/bg.jpg',151,123,30, 27);
    $this->Image('images/bg.jpg',188,123,30, 27);
    
    $this->Image('images/bg.jpg',3,153,30,27);
    $this->Image('images/bg.jpg',40,153,30, 27);
    $this->Image('images/bg.jpg',77,153,30, 27);
    $this->Image('images/bg.jpg',114,153,30, 27);
    $this->Image('images/bg.jpg',151,153,30, 27);
    $this->Image('images/bg.jpg',188,153,30, 27);

    $this->Image('images/bg.jpg',3,183,30,27);
    $this->Image('images/bg.jpg',40,183,30, 27);
    $this->Image('images/bg.jpg',77,183,30, 27);
    $this->Image('images/bg.jpg',114,183,30, 27);
    $this->Image('images/bg.jpg',151,183,30, 27);
    $this->Image('images/bg.jpg',188,183,30, 27);

    $this->Image('images/bg.jpg',3,213,30,27);
    $this->Image('images/bg.jpg',40,213,30, 27);
    $this->Image('images/bg.jpg',77,213,30, 27);
    $this->Image('images/bg.jpg',114,213,30, 27);
    $this->Image('images/bg.jpg',151,213,30, 27);
    $this->Image('images/bg.jpg',188,213,30, 27);

    $this->Image('images/bg.jpg',3,243,30,27);
    $this->Image('images/bg.jpg',40,243,30, 27);
    $this->Image('images/bg.jpg',77,243,30, 27);
    $this->Image('images/bg.jpg',114,243,30, 27);
    $this->Image('images/bg.jpg',151,243,30, 27);
    $this->Image('images/bg.jpg',188,243,30, 27);

    $this->Image('images/bg.jpg',3,273,30,27);
    $this->Image('images/bg.jpg',40,273,30, 27);
    $this->Image('images/bg.jpg',77,273,30, 27);
    $this->Image('images/bg.jpg',114,273,30, 27);
    $this->Image('images/bg.jpg',151,273,30, 27);
    $this->Image('images/bg.jpg',188,273,30, 27);
  //Background ends
  
}

}
$pdf=new NPDF();




//$pdf=new FPDF();
$pdf->AddPage();



$pdf->SetFont('Helvetica', '');
$pdf->SetX(47.244);
$pdf->SetY(30.654);
$pdf->SetFontSize(8);
//$pdf-> SetFillColor(255,0,0);
$pdf ->MultiCell(0 , 4, " HNG Internship has confirmed the participation of this individual in
this program. Confirm at start.ng/verify/16N5F3Z", 0,  "R"); //true)


$pdf->SetFont('Helvetica', 'B');
$pdf->SetX(47.244);
$pdf->SetY(30.654);
$pdf->SetFontSize(30);
$pdf-> SetTextColor(8,68,130);
$pdf ->Cell(0 , 6.604, "CERTIFICATE", 0, 1, "L"); //true)


$pdf->SetFont('Helvetica', 'B');
$pdf->SetX(47.244);
$pdf->SetY(45.654);
$pdf->SetFontSize(20);
$pdf-> SetTextColor(255,168,0);
$pdf ->Cell(0 , 6.604, "OF COMPLETION", 0, 1, "L"); //true)


$pdf->SetFont('Helvetica', '');
$pdf->SetX(47.244);
$pdf->SetY(65.654);
$pdf->SetFontSize(10);
$pdf-> SetTextColor(0,0,0);
$pdf ->Cell(0 , 6.604, "This is to certify that", 0, 1, "L"); //true)


$pdf->SetFont('Helvetica', 'B');
$pdf->SetX(47.244);
$pdf->SetY(85.654);
$pdf->SetFontSize(18);
//$pdf-> SetFillColor(255,0,0);
$pdf ->Cell(0 , 6.604, "$fullName", 0, 1, "L"); //true)

$pdf->SetFont('Helvetica', '');
$pdf->SetX(47.244);
$pdf->SetY(100.654);
$pdf->SetFontSize(10);
//$pdf-> SetFillColor(255,0,0);
$pdf ->Cell(0 , 6.604, "has successfully completed", 0, 1, "L"); //true)

$pdf->SetFont('Helvetica', 'B');
$pdf->SetX(47.244);
$pdf->SetY(121.654);
$pdf->SetFontSize(24);
$pdf-> SetTextColor(8,68,130);
$pdf ->MultiCell(0 , 8.604, "Startdotng (Beginner Software 
Development Training)", 0,  "L"); //true)

$pdf->SetFont('Helvetica', '');
$pdf->SetX(47.244);
$pdf->SetY(150.654);
$pdf->SetFontSize(10);
$pdf-> SetTextColor(0,0,0);
$pdf ->Cell(0 , 6.604, "with $score out of 100 obtainable points on 9th September, 2019", 0, 1, "L"); //true)

//Seal Image goes here

$pdf->Image('images/seal.png',145, 49.926, 49.434, 72.926);
$pdf->Image('images/hng.png',12, 210, 11, 9);
$pdf->Image('images/hotels.png',29, 210, 16, 11);
$pdf->Image('images/ondo.png',50, 213, 16, 9);
$pdf->Image('images/flutterwave.png',70, 213, 21, 9);
$pdf->Image('images/chatdesk.png',95, 212, 24, 8);
$pdf->Image('images/ekiti.jpg',122, 212, 10, 8);
$pdf->Image('images/imo.jpg',135, 212, 10, 8);




$pdf->SetFont('Times', '');
$pdf->SetX(47.244);
$pdf->SetY(173.654);
$pdf->SetFontSize(20);
$pdf-> SetTextColor(0,0,0);
$pdf ->Cell(0 , 6.604, "Seyi Onifade", 0, 1, "L"); //true)


$pdf->SetFont('Times', '');
$pdf->SetX(47.244);
$pdf->SetY(181.654);
$pdf->SetFontSize(12);
$pdf-> SetTextColor(0,0,0);
$pdf ->Cell(0 , 6.604, "CEO, HNG Internship", 0, 1, "L"); //true)


$pdf->SetFont('Times', '');
$pdf->SetX(47.244);
$pdf->SetY(190.654);
$pdf->SetFontSize(12);
$pdf-> SetTextColor(0,0,0);
$pdf ->Cell(0 , 7.604, "Supported By", 0, 1, "L"); //true)



$pdf->output();


























?>