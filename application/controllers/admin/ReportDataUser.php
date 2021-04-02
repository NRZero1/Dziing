<?php
Class ReportDataUser extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('L','mm','legal');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->setTopMargin(22);
        $pdf->setLeftMargin(5);
        
        // Logo
        $pdf->Image(base_url('img/Dziing_logo_Temp.png'),10,15,55);
        $pdf->Cell(80);
        $pdf->SetTextColor(0,0,128);
        $pdf->SetFont('Times','B',20);
        $pdf->Cell(420,7,'DZIING - GAME LIBRARIES',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','',12);
        $pdf->SetTextColor(0,0,0);
        $pdf->Cell(345,7,'Jl. Lodan Raya No.12 Ancol, Kec. Pademangan, Kota Jkt Utara',0,1,'R');
        $pdf->Cell(345,7,'Daerah Khusus Ibukota Jakarta 14430',0,1,'R');
        $pdf->Cell(345,7,'+62 822-6039-4746 | www.dziing.com',0,1,'R');
        $pdf->Ln(15);

        // mencetak string 
        $pdf->SetTextColor(0,0,0);
        $pdf->SetFont('Times','B',18);
        $pdf->Cell(350,7,'DAFTAR USERS',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','B',11);
        $pdf->Cell(55,6,'USERNAME',1,0,'C');
        $pdf->Cell(55,6,'FIRST NAME',1,0,'C');
        $pdf->Cell(55,6,'LAST NAME',1,0,'C');
        $pdf->Cell(70,6,'EMAIL',1,0,'C');
        $pdf->Cell(55,6,'COUNTRY',1,0,'C');
        $pdf->Cell(55,6,'PHONE',1,1,'C');
        
        $pdf->SetFont('Times','',11);
        $this->db->like('level', 'user');
        $data_user = $this->db->get('user')->result();
        foreach ($data_user as $row){
            $pdf->Cell(55,6,$row->username,1,0);
            $pdf->Cell(55,6,$row->first_name,1,0);
            $pdf->Cell(55,6,$row->last_name,1,0);
            $pdf->Cell(70,6,$row->email,1,0);
            $pdf->Cell(55,6,$row->country,1,0);
            $pdf->Cell(55,6,$row->phone,1,1,'C');
        }
        $pdf->Output('daftar_user','I');
    }
}