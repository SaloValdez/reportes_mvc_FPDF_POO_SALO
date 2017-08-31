<?php
# VISTA  REPORTE
require_once '../a_modelo/model.php';
class MvcController{
      public function vistaUsuarioController(){
          include 'pdf_plantilla.php';
         $respueta = Datos::vistaUsuarioModel("usuario");
         //  var_dump($respueta);
         $pdf = new PDF();
         $pdf->AliasNbPages();
         $pdf->AddPage();


         $pdf->SetFillColor(232,232,232);
         $pdf->SetFont('Arial','B',9);
         $pdf->Cell(25,6,'ID',1,0,'L',1);
         $pdf->Cell(50,6,'USUARIO',1,0,'L',1);
         $pdf->Cell(35,6,'CONTRASEÑA',1,0,'L',1);
         $pdf->Cell(40,6,'EMAIL',1,1,'C',1);

         $pdf->SetFont('Arial','',8);

         foreach ($respueta as $row => $item) {
           $pdf->Cell(25,6,utf8_decode($item['id']),1,0,'C');
           $pdf->Cell(50,6,$item['usuario'],1,0,'C');
           $pdf->Cell(35,6,$item['password'],1,0,'C');
           $pdf->Cell(40,6,utf8_decode($item['email']),1,1,'C');
         }
         $pdf->Output();
      }
}



 ?>
