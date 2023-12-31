<link href="assetes/img/favicon.ico" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-1000">
                    {{ __("PAINEL ADMINISTRATIVO!") }}
                    
            <span class="red" style="font-weight: bold; margin-left: 70%">{{ date('d/m/Y')  }}</span>
                </div>
                
    <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
  
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Consultas <span>| Hoje</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <a href="/pacientes"><i class="bi bi-people-fill"></i></a>
                      </div>
                      <div class="ps-3">
                        <h6>{!!$consultas!!}</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Crescente</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- fim dados -->
  
              <!-- Card pacientes -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Receita <span>| MES</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <a href="{{route('profile.valorMes')}}"><i class="bi bi-currency-dollar"></i></a>
                      </div>
                      <div class="ps-3">
                        <h6>{{$receita}}</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">Crescente</span>
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
  
              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
  
                <div class="card info-card customers-card">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Clientes <span>| ANO</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <a href="/pacientesAno"><i class="bi bi-people-fill"></i></a>
                      </div>
                      <div class="ps-3">
                        <h6>{!!$clientes!!}</h6>   
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Decrescente</span>
  
                      </div>
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->
  
         
  
              <!-- LISTAGEM DOS PACIENTES HOJE -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Clientes Atendidos <span>| Hoje</span></h5>
  
                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <th scope="col">Cliente</th>
                          <th scope="col">Procedimento</th>
                          <th scope="col">Dia</th>
                          <th scope="col">Hora</th>
                          <th scope="col">Valor</th>
                          <th scope="col">Status</th>
                          <th scope="col"> </th>
                          <th scope="col"> </th>
                          <th scope="col"> </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                  

                          @foreach ( $listarpaciente as $listarpacientes)
                          <td>{!!$listarpacientes->name!!}</td>                      
                           <td><a href="#" class="text-primary">{!!$listarpacientes->servico!!}</a></td>
                           <td>{!!date('d/m/Y', strtotime($listarpacientes->data))!!}</td>
                           <td>{!!$listarpacientes->hora!!}</td>
                           <td><?php echo number_format($listarpacientes->valor, 2, ',', '.'); ?></td>
                           <td><span class="badge bg-success">Aprovado</span></td>
                           <!--<td><span class="badge bg-warning">Pendente</span></td>
                           <td><span class="badge bg-danger">Rejeitado</span></td> -->
                           <th><span class=""></span></td>
                            <th><span class=""></span></td>
                           <th><span class="badge bg-primary">Editar</span></td>
                            <td><span class="badge bg-danger">Excluir</span></td>
                         </tr>
                         @endforeach


                      </tbody>
                    </table>
  
                  </div>
  
                </div>
              </div><!-- FIM DA LISTAGEM DOS PACIENTES HOJE -->
  
<!-- Reports -->
<div class="col-12">
  <div class="card">

    <div class="filter">
      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <li class="dropdown-header text-start">
          <h6>Filter</h6>
        </li>

        <li><a class="dropdown-item" href="#">Today</a></li>
        <li><a class="dropdown-item" href="#">This Month</a></li>
        <li><a class="dropdown-item" href="#">This Year</a></li>
      </ul>
    </div>

    <div class="card-body">
      <h5 class="card-title">Movimentações <span>/Mês</span></h5>

      <!-- Line Chart -->
      <div id="chart_div" style="width: 900px; height: 500px"></div>

          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);
      
            function drawVisualization() {
              // Some raw data (not necessarily accurate)
              var data = google.visualization.arrayToDataTable([
                ['Month', 'Lançamentos', 'Cancelamentos', 'Despesas', 'Caixa', 'Material', 'Faturamento'],
                ['04/2023',  165,      938,         522,             998,           450,      614.6],
                ['05/2023',  135,      1120,        599,             1268,          288,      682],
                ['06/2023',  157,      1167,        587,             807,           397,      623],
                ['07/2023',  139,      1110,        615,             968,           215,      609.4],
                ['08/2023',  136,      691,         629,             1026,          366,      569.6]
              ]);
      
              var options = {
                title : 'Estatísticas e Movimentações / Mês',
                vAxis: {title: 'Percentual'},
                hAxis: {title: 'Mês/Ano'},
                seriesType: 'bars',
                series: {5: {type: 'line'}}
              };
      
              var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
              chart.draw(data, options);
            }
          </script>
   
      
      <!-- End Line Chart -->

    </div>

  </div>
</div><!-- End Reports -->





              
  
            </div>
          </div><!-- End Left side columns -->
  
          <!-- Right side columns -->
          <div class="col-lg-4">
  
            <!-- Recent Activity -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
  
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
  
              <div class="card-body">
                <h5 class="card-title">Atividades Recentes <span>| Hoje</span></h5>
  
                <div class="activity">
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">32 min</div>
                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                    <div class="activity-content">
                      Lançamento de <a href="#" class="fw-bold text-dark">consulta</a> 
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">56 min</div>
                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                    <div class="activity-content">
                     Edição de clientes lançados
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 hrs</div>
                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                    <div class="activity-content">
                      Exclusão de agendamento de consulta
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">1 day</div>
                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                    <div class="activity-content">
                      Lancamento de consulta <a href="#" class="fw-bold text-dark">Geral</a> valores
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">2 days</div>
                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                    <div class="activity-content">
                      Lançamento de contas empresa
                    </div>
                  </div><!-- End activity item-->
  
                  <div class="activity-item d-flex">
                    <div class="activite-label">4 weeks</div>
                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                    <div class="activity-content">
                      Gerou relatório semanal clientes e pagamentos
                    </div>
                  </div><!-- End activity item-->
  
                </div>
  
              </div>
            </div><!-- End Recent Activity -->
  
            <!-- Budget Report -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
  
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
  
              <div class="card-body pb-0">
                <h5 class="card-title">Clientes <span>| Esse mês</span></h5>
  
                <div id="budgetChart" style="min-height: 400px;" class="echart"></div>
  
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                      legend: {
                        data: ['Allocated Budget', 'Actual Spending']
                      },
                      radar: {
                        // shape: 'circle',
                        indicator: [{
                            name: 'Sales',
                            max: 6500
                          },
                          {
                            name: 'Administration',
                            max: 16000
                          },
                          {
                            name: 'Information Technology',
                            max: 30000
                          },
                          {
                            name: 'Customer Support',
                            max: 38000
                          },
                          {
                            name: 'Development',
                            max: 52000
                          },
                          {
                            name: 'Marketing',
                            max: 25000
                          }
                        ]
                      },
                      series: [{
                        name: 'Budget vs spending',
                        type: 'radar',
                        data: [{
                            value: [4200, 3000, 20000, 35000, 50000, 18000],
                            name: 'Allocated Budget'
                          },
                          {
                            value: [5000, 14000, 28000, 26000, 42000, 21000],
                            name: 'Actual Spending'
                          }
                        ]
                      }]
                    });
                  });
                </script>
  
              </div>
            </div><!-- End Budget Report -->
  
            <!-- Website Traffic -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
  
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
  
              <div class="card-body pb-0">
                <h5 class="card-title">Tráfego <span>| Hoje</span></h5>
  
                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
  
                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Access From',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                          show: false,
                          position: 'center'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: false
                        },
                        data: [{
                            value: 1048,
                            name: 'Search Engine'
                          },
                          {
                            value: 735,
                            name: 'Direct'
                          },
                          {
                            value: 580,
                            name: 'Email'
                          },
                          {
                            value: 484,
                            name: 'Union Ads'
                          },
                          {
                            value: 300,
                            name: 'Video Ads'
                          }
                        ]
                      }]
                    });
                  });
                </script>
  
              </div>
            </div><!-- End Website Traffic -->
  
        
  
          </div><!-- End Right side columns -->
  
        </div>
      </section>


</x-app-layout>

            </div>
        </div>
    </div>



    
