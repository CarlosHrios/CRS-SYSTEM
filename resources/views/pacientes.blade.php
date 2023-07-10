
<link href="assetes/img/favicon.ico" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>



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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <b>{{ __("Pacientes Atendidos ") }}</b>
                </div>

<!-- LISTAGEM DOS PACIENTES HOJE -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

    <!--  <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Filter</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>    -->

      <div class="card-body">
        <h5 class="card-title">Atendidos <span>| Hoje</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">Cliente</th>
              <th scope="col">Procedimento</th>
              <th scope="col">Dia</th>
              <th scope="col">Hora</th>
              <th scope="col">Valor</th>
              <th scope="col">Status</th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
      

             @foreach ( $listarpaciente as $listarpacientes)
             <td>{!!$listarpacientes->name!!}</td>                      
              <td><a href="#" class="text-primary">{!!$listarpacientes->servico!!}</a></td>
              <td>{!!$listarpacientes->data!!}</td>
              <td>{!!$listarpacientes->hora!!}</td>
              <td>{!!$listarpacientes->valor!!}</td>
              <td><span class="badge bg-success">Aprovado</span></td>
              <!--<td><span class="badge bg-warning">Pendente</span></td>
              <td><span class="badge bg-danger">Rejeitado</span></td> -->
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
            @endforeach


          </tbody>
        </table>

      </div>

    </div>
  </div><!-- FIM DA LISTAGEM DOS PACIENTES HOJE -->

            </div>


</x-app-layout>