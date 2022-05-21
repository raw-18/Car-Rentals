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
        $this->Cell(276,10,'Customer Details',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page' .$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'Username',1,0,'C');
        $this->Cell(40,10,'Name',1,0,'C');
        $this->Cell(40,10,'Phone',1,0,'C');
        $this->Cell(60,10,'Email',1,0,'C');
        $this->Cell(40,10,'Address',1,0,'C');
        $this->Cell(30,10,'Password',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt =$db->query('SELECT * FROM customers');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
        $this->Cell(20,10,$data->customer_username,1,0,'C');
        $this->Cell(40,10,$data->customer_name,1,0,'C');
        $this->Cell(40,10,$data->customer_phone,1,0,'C');
        $this->Cell(60,10,$data->customer_email,1,0,'C');
        $this->Cell(40,10,$data->customer_address,1,0,'C');
        $this->Cell(30,10,$data->customer_password,1,0,'C');
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