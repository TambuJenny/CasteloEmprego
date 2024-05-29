<?php
// Incluir bibliotecas necessárias

use Webin\Anucios\controllers\RRelatorio;

require_once '../relatorio/fpdf/fpdf/fpdf.php'; // Biblioteca para geração de PDF
//require_once '../relatorio/phplot/phplot.php'; // Biblioteca para geração de gráficos
$relatorio = new RRelatorio();
$QTDuser = $relatorio->Usuario();

$QTDadesao = $relatorio->Adesao();
$QTDsolicitacao = $relatorio->solicitacao();
$QTDperfil = $relatorio->perfil();
$QTDclassificacao = $relatorio->classificacao();
$QTDanucio = $relatorio->anucio();



// Dados de exemplo para o relatório ./public/assets/Job2.png
$anuncios = array(
    'Janeiro' => 120,
    'Fevereiro' => 90,
    'Março' => 150,
    'Abril' => 200,
    'Maio' => 180,
    'Junho' => 210
);

    // Criar uma instância do FPDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Configurações do cabeçalho
    $pdf->SetFont('Times','','14');
    $pdf->Image('./public/assets/Job2.png',160,0,24);
    $pdf->SetXY(90,4);
    $pdf->SetFont('Arial', 'B', 12);
                        $pdf->Cell(14,6,utf8_decode('Relatorio da Plataforma'),0,0,'L');
                        $pdf->Ln(3);
    $pdf->Ln(80);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetXY(1,10);
    $pdf->Ln(1);
    $pdf->SetXY(6,13);
    $pdf->Cell(14,6,'JobLink ',0,0,'L');
                    $pdf->Ln(3);
    $pdf->SetFont('Arial', '', 6);
                        $pdf->SetXY(6,18);
                        $pdf->Cell(14,6,'Estrada Direita de Catete, Nº 22',0,0,'L');
                        $pdf->Ln(3);
    $pdf->SetXY(6,21);
    $pdf->Cell(14,6,'Viana, Luanda, Angola',0,0,'L');
                        $pdf->Ln(3);
                        $pdf->SetXY(6,24);
      $pdf->Cell(14,6,'Tel: 944029977',0,0,'L');
                        $pdf->Ln(3);
                        $pdf->SetXY(6,27);
                        $pdf->Cell(14,6,'Email:admin@gmail.com',0,0,'L');
                        $pdf->Ln(3);
                        $pdf->SetXY(6,30);
                        $pdf->Cell(14,6,'Nif:0055445410',0,0,'L');
    $pdf->Ln(3);


    $pdf->SetFont('Arial', '', 6);
                        $pdf->SetXY(90,18);
                        $pdf->Cell(14,6,utf8_decode('Exmo(s) Senhor(es)'),0,0,'L');
                        $pdf->Ln(3);
                        $pdf->SetXY(90,21);
    $pdf->SetFont('Arial', 'B', 6);
                        $pdf->Cell(14,6,utf8_decode('ADMINISTRADOR'),0,0,'L');
                        $pdf->Ln(3);
    $pdf->SetFont('Arial', '', 6);
                        $pdf->SetXY(90,24);
                        $pdf->Cell(14,6,'NIF: 944029977',0,0,'L');
                        $pdf->Ln(3);
                        $pdf->SetXY(90,27);
                        $pdf->Cell(14,6,utf8_decode('ENDEREÇO:'),0,0,'L');
                        $pdf->Ln(3);
                        $pdf->SetXY(90,30);
                        $pdf->Cell(14,6,'TEL: 944029977',0,0,'L');
                        $pdf->Ln(2);
    $pdf->SetXY(6,33);
    $pdf->Cell(10,6,utf8_decode('------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------'),5,8,'L');
    $pdf->SetXY(160,35);
    $data = date('d/m/Y :H:i:s');
                        $pdf->SetFont('Arial', 'B', 8);
                        $pdf->Cell(14,6,utf8_decode('DATA EMISSÃO / HORA'),5,8,'L');
                        $pdf->Cell(14,8,utf8_decode($data),5,8,'L');
                        $pdf->Ln(2);
                        

                        $pdf->SetFont('Arial', 'B', 8);
                        $pdf->SetXY(6,43);   
                        $pdf->Cell(14,6,utf8_decode('QTD user'),5,8,'L');
                        $pdf->SetXY(30,43);
                        $pdf->Cell(14,6,utf8_decode('QTD solicitacao'),5,8,'L');
                        $pdf->SetXY(60,43);
                        $pdf->Cell(14,6,utf8_decode('QTD perfil'),5,8,'L');
                        $pdf->SetXY(90,43);
                        $pdf->Cell(14,6,utf8_decode('QTD classificacao'),5,8,'L');
                        $pdf->SetXY(120,43);
                        $pdf->Cell(14,6,utf8_decode('QTD anucio'),5,8,'L');

                        $pdf->Ln();

                    
                            $pdf->SetXY(4,49); 
                            $pdf->Cell(20,6,$QTDuser,3,0,'C');
                            $pdf->Ln();
          
                            $pdf->SetXY(28,49); 
                            $pdf->Cell(20,6,$QTDsolicitacao,3,0,'C');
                            $pdf->Ln();

                            $pdf->SetXY(60,49); 
                            $pdf->Cell(20,6,$QTDperfil,3,0,'C');
                            $pdf->Ln();

                            $pdf->SetXY(98,49); 
                            $pdf->Cell(20,6,$QTDclassificacao,3,0,'C');
                            $pdf->Ln();

                            $pdf->SetXY(112,49); 
                            $pdf->Cell(20,6,$QTDanucio,3,0,'C');
                            $pdf->Ln();

                          
                       $pdf->SetFont('Arial', 'B', 12);
                       $pdf->SetXY(6,240);
                       $pdf->Cell(5,246,utf8_decode('AKZ 1.000,00'),5,8,'L');
                       
                       $pdf->Cell(15,246,utf8_decode('AKZ 1.000,00'),5,8,'L');


                       $pdf->SetFont('Arial', '', 8);
                       $pdf->SetXY(6,247);
                       $pdf->Cell(14,6,utf8_decode('Operador: Manuel'),5,8,'L');
                       $pdf->SetFont('Arial', 'B', 10);
                       $pdf->SetXY(150,247);
                       $pdf->Cell(14,6,utf8_decode('Total:'),5,8,'L');
       $pdf->SetXY(170,247);
                       $pdf->Cell(14,6,utf8_decode('AKZ 1.000,00'),5,8,'L');
 
       $pdf->SetFont('Arial', '', 8);
                       $pdf->SetXY(100,260);
                       $pdf->Cell(14,6,utf8_decode('Agradecemos pela sua visita, volte sempre!'),0,0,'C');
            $pdf->SetXY(100,265);
       $pdf->SetFont('Arial', '', 6);
       $pdf->Cell(14,6,utf8_decode('Obrigado!'),0,0,'C');


    $pdf->Output();



?>
