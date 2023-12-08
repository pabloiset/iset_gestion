<?php
require '../../backend/fpdf/fpdf.php';

date_default_timezone_set('America/Lima');
class PDF extends FPDF
{
    // Cabecera de página
   

    function Header()
{
$this->Image('../../backend/img/pdf.png',-1,-1,85);
$this->Image('../../backend/img/favicon.png',250,15,25);

$this->SetY(40);
$this->SetX(245);
$this->SetFont('Arial','B',12);
$this->SetTextColor(246, 130, 14);
$this->Cell(150, 8, 'Colegio peruano',0,1);

$this->SetY(45);
$this->SetX(247);
$this->SetFont('Arial','',8);





$this->Cell(40, 8, utf8_decode('Horarios de clases'));




$this->SetTextColor(30,10,32);

$this->Ln(30);

}

function Footer()
{
     $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
        $this->Cell(180,5,date('d/m/Y | g:i:a') ,00,1,'R');
        $this->Line(10,287,200,287);
        $this->Cell(0,5,utf8_decode("Colegio peruano © Todos los derechos reservados."),0,0,"C");
        
}
}

$pdf = new PDF("L", "mm", "A4");
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(500);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->SetX(15);
$pdf->SetFillColor(41, 165, 20);
$pdf->SetDrawColor(255, 255, 255);
// Cell(ancho , alto,texto,borde(0/1),salto(0/1),alineacion(L,C,R),rellenar(0/1)

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25, 12, utf8_decode('Hora'),1,0,'C',1);
$pdf->Cell(50, 12, utf8_decode('Lunes'),1,0,'C',1);
$pdf->Cell(50, 12, utf8_decode('Martes'),1,0,'C',1);
$pdf->Cell(50, 12, utf8_decode('Miércoles'),1,0,'C',1);
$pdf->Cell(50, 12, utf8_decode('Jueves'),1,0,'C',1);
$pdf->Cell(50, 12, utf8_decode('Viernes'),1,1,'C',1);


//$conexion=mysqli_connect("localhost","root","","sistema_escolar")or die("error conexion");
 require '../../backend/bd/ctconex.php'; 
$id = $_GET['id'];
//$consulta = "SELECT * FROM period";
//$resultado = mysqli_query($conexion,$consulta);
$stmt = $connect->prepare("SELECT events.id, subgrade.idsub, subgrade.nomsub, events.our, events.day1, events.day2, events.day3, events.day4, events.day5, events.state FROM events INNER JOIN subgrade ON events.idsub = subgrade.idsub   WHERE subgrade.idsub= '$id'");
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

while($row = $stmt->fetch()){
   
$pdf->SetFont('Arial','',10);
$pdf->SetX(15);
$pdf->SetFillColor(255,255,255);
$pdf->SetDrawColor(65, 61, 61); 

$pdf->Cell(25, 8, utf8_decode($row['our']),'B',0,'C',1);
$pdf->Cell(50, 8, utf8_decode($row['day1']),'B',0,'C',1);
$pdf->Cell(50, 8, utf8_decode($row['day2']),'B',0,'C',1);
$pdf->Cell(50, 8, utf8_decode($row['day3']),'B',0,'C',1);
$pdf->Cell(50, 8, utf8_decode($row['day4']),'B',0,'C',1);
$pdf->Cell(50, 8, utf8_decode($row['day5']),'B',1,'C',1);
  
    /*$pdf->Cell(25,9, $row['status'], 0 ,1, 'C',1);*/
  
}

$pdf->Ln(0.5);


$pdf->Output('horario.pdf', 'D');
?>