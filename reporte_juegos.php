<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(50,10,'Reporte de juegos',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(50, 10,'Categoria Juego',1,0,'C',0);
    $this->Cell(50, 10,'Plataforma Juego',1,0,'C',0);
    $this->Cell(50, 10,'Nombre juego',1,0,'C',0);
    $this->Cell(40, 10,'Precio',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'conexion.php';
$con=conectar();
$consulta = "SELECT * FROM proyecto.juegos";
$query=pg_query($con,$consulta);




// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
while($row = pg_fetch_array($query)){
$pdf->Cell(50, 10, $row['cat_juego'],1,0,'C',0);
$pdf->Cell(50, 10, $row['plat_juego'],1,0,'C',0);
$pdf->Cell(50, 10, $row['nomb_juego'],1,0,'C',0);
$pdf->Cell(40, 10, $row['precio'],1,1,'C',0);
}
$pdf->Output();
?>