<?php
require "FPDF/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=carrentalp','root','');

class myPDF extends FPDF{
    function header(){
        $this->SetFont('Times','B',18);
        $this->Cell(276,10,'Car Rentals',0,0,'L');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,5,'ITPL Road',0,0,'L');
        $this->Ln();
        $this->Cell(276,5,'Andheri(E), Mumbai',0,0,'L');
        $this->Ln();
        $this->Cell(276,5,'Maharashtra, PIN 400069,India',0,0,'L');
        $this->Ln();
        $this->Cell(276,5,'carrentals@gmail.com',0,0,'L');
        $this->Ln();
        $this->SetFont('Times','B',14);
        $this->Cell(276,10,'Driver Details',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page' .$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'No.',1,0,'C');
        $this->Cell(40,10,'Name',1,0,'C');
        $this->Cell(40,10,'Gender',1,0,'C');
        $this->Cell(40,10,'License No.',1,0,'C');
        $this->Cell(40,10,'Contact',1,0,'C');
        $this->Cell(50,10,'Address',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt =$db->query('SELECT * FROM driver');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(20,10,$data->driver_id,1,0,'C');
        $this->Cell(40,10,$data->driver_name,1,0,'C');
        $this->Cell(40,10,$data->driver_gender,1,0,'C');
        $this->Cell(40,10,$data->dl_number,1,0,'C');
        $this->Cell(40,10,$data->driver_phone,1,0,'C');
        $this->Cell(50,10,$data->driver_address,1,0,'C');
        $this->Ln();
        }
    }

}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();