<script src="./public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstra./public/p -->
<script src="./public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE./public/ -->
<script src="./public/dist/js/adminlte.js"></script>

<!-- OPTIONAL./public/ SCRIPTS -->
<script src="./public/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE./public/ for demo purposes -->

<script src="./public/dist/js/demo.js"></script>
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
                if (value >= 100) {
                    value /= 100
                    value += 'k'
                }

                return 'kz' + value
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