<?php
require('fpdf181/fpdf.php');
$connection = mysqli_connect("localhost", "root","", "db_cv");
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    //$this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(50,10,'Curiculum vitae',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class

$id=$connection->query ("select * from datapegawai order by id_data desc limit 1");
$tampung=mysqli_fetch_array($id);

$hasil=$connection->query ("select * from datapegawai,datapendidikan where datapegawai.id_data = $tampung[id_data] and datapendidikan.id_data=$tampung[id_data]");
$tampung1=mysqli_fetch_array($hasil);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Courier','B',12);

$pdf->Cell(0,10,'Data Pribadi',0,1);
    // Line break
    $pdf->Ln(10);

$pdf->Cell(0,10,'Nama              : '.$tampung1['nama'].'',0,1);
$pdf->Cell(0,10,'Tempat Lahir      : '.$tampung1['tempat'].'',0,1);
$pdf->Cell(0,10,'Tanggal Lahir     : '.$tampung1['ttl'].'',0,1);
$pdf->Cell(0,10,'Umur              : '.$tampung1['umur'].'',0,1);
$pdf->Cell(0,10,'Agama             : '.$tampung1['agama'].'',0,1);
$pdf->Cell(0,10,'Jenis Kelamin     : '.$tampung1['jenis_kelamin'].'',0,1);
$pdf->Cell(0,10,'Email             : '.$tampung1['email'].'',0,1);
$pdf->Cell(0,10,'No Telp.          : '.$tampung1['no_hp'].'',0,1);
$pdf->Cell(0,10,'Alamat            : '.$tampung1['alamat'].'',0,1);

$pdf->Cell(0,10,'Riwayat Pendidikan',0,1);
    // Line break
    $pdf->Ln(10);
$pdf->Cell(0,10,'Tempat Pendidikan : '.$tampung1['tahun_tk'].'',0,1);
$pdf->Cell(0,10,'Tahun Pendidikan  : '.$tampung1['tk'].'',0,1);
$pdf->Output();


?>