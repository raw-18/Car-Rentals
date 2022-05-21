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
        $this->Cell(276,10,'PickUp Data',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page' .$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(30,10,'Booking ID',1,0,'C');
        $this->Cell(20,10,'Driver ID',1,0,'C');
        $this->Cell(40,10,'Booking Date',1,0,'C');
        $this->Cell(40,10,'Rent Start Date',1,0,'C');
        $this->Cell(30,10,'Rent End Date',1,0,'C');
        $this->Cell(30,10,'PickUp location',1,0,'C');
        $this->Cell(30,10,'PickUp Time',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt =$db->query('select * from rentedcars');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(30,10,$data->id,1,0,'C');
        $this->Cell(20,10,$data->driver_id,1,0,'C');
        $this->Cell(40,10,$data->booking_date,1,0,'C');
        $this->Cell(40,10,$data->rent_start_date,1,0,'C');
        $this->Cell(30,10,$data->rent_end_date,1,0,'C');
        $this->Cell(30,10,$data->location,1,0,'C');
        $this->Cell(30,10,$data->time,1,0,'C');
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