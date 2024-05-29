

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!--  <link href="img/logo/attnlg.jpg" rel="icon">-->
  <title>Dashboard</title>
  <?php

use Webin\Anucios\controllers\RRelatorio;

 require_once 'src/views/components/scripts.php'; 
   if($_SESSION['usuario']['categoria'] != "admin") {
    header("Location: ../VAGAS/menu");
   }
  
  ?>
  <!--<link href="css/ruang-admin.min.css" rel="stylesheet">-->
</head>
<?php
$relatorio = new RRelatorio();
$QTDuser = $relatorio->Usuario();
$QTDadesao = $relatorio->Adesao();
$QTDsolicitacao = $relatorio->solicitacao();
$QTDperfil = $relatorio->perfil();
$QTDclassificacao = $relatorio->classificacao();
$QTDanucio = $relatorio->anucio();

?>
<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
   <?php //include "Includes/sidebar.php";?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				
            <hr class="sidebar-divider">
             </nav>
            <button style="border-color: black;"  class="btn btn-outline-info" type="button">Usuario</button>
            <button style="border-color: black;"  class="btn btn-outline-info" type="button">Perfis</button>
            <button style="border-color: black;"  class="btn btn-outline-info" type="button">Solicitacoes</button>
            <button style="border-color: black;"  class="btn btn-outline-info" type="button">descricao</button>

        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard Administrador</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Início</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          
          <div class="row mb-3">
          <!-- Students Card -->
         
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Usuarios</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $QTDuser; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Class Card -->
            
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Profissionais</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $QTDperfil; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span>Since last month</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-circle fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Empregadores</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $QTDanucio; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                        <span>Since last years</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-asterisk fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
     
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Anucios</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $QTDclassificacao; ?></div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <!-- <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                        <span>Since yesterday</span> -->
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-secondary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

       
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-uppercase mb-1">Adesões</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $QTDadesao; ?></div>
                                  <div class="mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span>Since last years</span> -->
                                  </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-chalkboard-teacher fa-2x text-danger"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        

                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-uppercase mb-1">Solicitações</div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $QTDsolicitacao; ?></div>
                                  <div class="mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span>Since last years</span> -->
                                  </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-calendar-alt fa-2x text-warning"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                       
                        <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card h-100">
                            <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                  <div class="text-xs font-weight-bold text-uppercase mb-1">
                                   <a href="relatorio" ><button style="border-color: black;"  class="btn btn-outline-info" type="button">Gerar Relatorio</button></a>
                                  </div>
                                  <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                  <div class="mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span>Since last years</span> -->
                                  </div>
                                </div>
                                <div class="col-auto">
                                  <i class="fas fa-book-open fa-2x text-warning"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

           
                    <div class="col-lg-12">
                     <div class="card">
                       <div class="card-header border-0">
                         <div class="d-flex justify-content-between">
                           <h3 class="card-title"></h3>
                           <a href="javascript:void(0);">View Report</a>
                         </div>
                       </div>
                       <div class="card-body">
                         <div class="d-flex">
                           <p class="d-flex flex-column">
                             <span class="text-bold text-lg"><?php //echo number_format(($receita-$despesa),'2',',','.'); ?> </span>
                             <span>Anucios</span>
                           </p>
                           <p class="ml-auto d-flex flex-column text-right">
                             <span class="text-success">
                               <i class="fas fa-arrow-up"></i> 100%
                             </span>
                             <span class="text-muted">Mês com mais Adesões</span>
                           </p>
                         </div>
                         <!-- /.d-flex -->

                         <div class="position-relative mb-4">
                           <canvas id="sales-chart" height="200"></canvas>
                         </div>

                         <div class="d-flex flex-row justify-content-end">
                           <span class="mr-2">
                             <i class="fas fa-square text-primary"></i> Adesões
                           </span>

                           <span>
                             <i class="fas fa-square text-gray"></i> solicitacoes
                           </span>
                         </div>
                       </div>
                     </div>

        </div>
        <!---Container Fluid-->
      </div>
    
      
    </div>
  </div>

    <?php

    use Webin\Anucios\controllers\Rsolicitacao;
    use Webin\Anucios\controllers\RAdesao;

        $graficosolicitacao = new Rsolicitacao();
        $graficoadesao = new RAdesao();
        $dadossolicitacao = $graficosolicitacao->MostrarGrafico();
        $dadosadesao = $graficoadesao->MostrarGrafico();
        

    ?>

    <script>

        var dadosGraficosolicitacao = <?php echo json_encode($dadossolicitacao) ?>;
        var dadosGraficoadesao = <?php echo json_encode($dadosadesao) ?>;
        
        $(function () {
    'use strict'

    var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
    }

    var mode = 'index'
    var intersect = true

    var $salesChart = $('#sales-chart')
    // eslint-disable-next-line no-unused-vars
    var salesChart = new Chart($salesChart, {
        type: 'bar',
        data: {
        labels: ['JAN','FEB','MAR','ABR','MAI','JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
        datasets: [
            {
            backgroundColor: '#007bff',
            borderColor: '#007bff',
            data: dadosGraficoadesao
            },
            {
            backgroundColor: '#ced4da',
            borderColor: '#ced4da',
            data: dadosGraficosolicitacao
            },
        ]
        },
        options: {
        maintainAspectRatio: false,
        tooltips: {
            mode: mode,
            intersect: intersect
        },
        hover: {
            mode: mode,
            intersect: intersect
        },
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
            // display: false,
            gridLines: {
                display: true,
                lineWidth: '4px',
                color: 'rgba(0, 0, 0, .2)',
                zeroLineColor: 'transparent'
            },
            ticks: $.extend({
                beginAtZero: true,

                // Include a dollar sign in the ticks
                callback: function (value) {
                if (value >= 1000) {
                    value /= 1000
                    value += '%'
                }

                return '%' + value
                }
            }, ticksStyle)
            }],
            xAxes: [{
            display: true,
            gridLines: {
                display: false
            },
            ticks: ticksStyle
            }]
        }
        }
    })
    })
        </script>

<?php require_once 'src/views/components/scriptJs.php'; ?>
  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

</body>

</html>