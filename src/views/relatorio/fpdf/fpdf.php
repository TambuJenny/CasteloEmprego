
<?php
include './fpdf/fpdf.php';

		$pdf = new FPDF();
                $pdf->AddPage();
					$pdf->Image('logoGT.jpg',1,0,23);
					$pdf->SetXY(90,4);
					$pdf->SetFont('Arial', 'B', 12);
                                        $pdf->Cell(14,6,utf8_decode('Factura/Recibo Nº 001254586585'),0,0,'L');
                                        $pdf->Ln(3);
					$pdf->Ln(80);
					$pdf->SetFont('Arial', 'B', 10);
					$pdf->SetXY(1,10);
					$pdf->Ln(1);
					$pdf->SetXY(6,13);
					$pdf->Cell(14,6,'gtwork ',0,0,'L');
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
                                        $pdf->Cell(14,6,'Email: gtwork@gmail.com',0,0,'L');
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
                                        $pdf->Cell(14,6,utf8_decode('ABRAÃO CASTELO'),0,0,'L');
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
                                        $pdf->SetFont('Arial', 'B', 8);
                                	$pdf->Cell(14,6,utf8_decode('DATA EMISSÃO / HORA'),5,8,'L');
                                        $pdf->Ln(2);

               				$pdf->SetFont('Arial', 'B', 8);
					$pdf->SetXY(6,43);   
                                        $pdf->Cell(14,6,utf8_decode('Material'),5,8,'L');
                                        $pdf->SetXY(30,43);
                                        $pdf->Cell(14,6,utf8_decode('Descrição'),5,8,'L');
 					$pdf->SetXY(60,43);
                                        $pdf->Cell(14,6,utf8_decode('Qtd'),5,8,'L');
                                        $pdf->SetXY(90,43);
                                        $pdf->Cell(14,6,utf8_decode('Preço Unitário'),5,8,'L');
                                        $pdf->SetXY(120,43);
                                        $pdf->Cell(14,6,utf8_decode('Desc(%)'),5,8,'L');
                                        $pdf->SetXY(150,43);
                                        $pdf->Cell(14,6,utf8_decode('Total'),5,8,'L');

					$pdf->SetXY(6,43.5);
			              	$pdf->Cell(10,6,utf8_decode('____________________________________________________________________________________________________________________________'),5,8,'L');
                                       
                                        
                                        $pdf->SetFont('Arial', '', 6);
                                        $pdf->SetXY(7,47);   
                                        $pdf->Cell(14,6,utf8_decode('Faca'),5,8,'L');
                                        $pdf->SetXY(30,47);   
                                        $pdf->Cell(14,6,utf8_decode('Faca de mesa'),5,8,'L');
                                        $pdf->SetXY(60,47);   
                                        $pdf->Cell(14,6,utf8_decode('1,00'),5,8,'L');
				        $pdf->SetXY(92,47);   
                                        $pdf->Cell(14,6,utf8_decode('1.000,00'),5,8,'L');
					$pdf->SetXY(121,47);   
                                        $pdf->Cell(14,6,utf8_decode('0,00'),5,8,'L');
				        $pdf->SetXY(150,47);   
                                        $pdf->Cell(14,6,utf8_decode('1.000,00'),5,8,'L');

                                       $pdf->SetXY(6,250);
                                       $pdf->Cell(10,6,utf8_decode('_____________________________________________________________________________________________________________________________________________________________________'),5,8,'L');
 
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
		Header('Pragma: public');


?>

