
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


    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach  
        </ul>
    </div>
@endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <b>{{ __("Lancamento de Consultas") }}</b>
                </div>

    <title>Formulário de Cadastro</title>
    @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>
    @endif

    
    <form class="row g-3 needs-validation" method="get" action="/lancamento" novalidate>

        <div class="col-md-4 position-relative  campo">
          <label for="validationTooltip01" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" value="" required>
        </div>

        <div class="col-md-4 position-relative  campo">
          <label for="convenio" class="form-label">Convenio</label>
            <input type="text" class="form-control" id="convenio" name="convenio" aria-describedby="validationTooltipUsernamePrepend" required>      
        </div>

        <div class="col-md-4 position-relative  campo">
          <label for="validationTooltip03" class="form-label">Data</label>
          <input type="date" class="form-control" id="data" name="data" required>
        </div>

        <div class="col-md-4 position-relative  campo">
          <label for="validationTooltip03" class="form-label">Hora</label>
          <input type="time" class="form-control" id="hora" name="hora" required>
        </div>

        <div class="col-md-4 position-relative  campo">
          <label for="servico" class="form-label">Tipo de Serviço</label>
          <select class="form-select" id="servico" name="servico" required>
            <option selected disabled value="">selecione</option>
            <option>Consulta Geral</option>
            <option>Eletrocardiograma</option>
            <option></option>
            <option>outros</option>
          </select>
        </div>

        <div class="col-md-4 position-relative  campo">
          <label for="validationTooltip05" class="form-label">Telefone</label>
          <input type="tel" name="telefone" id="telefone" class="form-control"  pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" required>
          <script type="text/javascript">$("#telefone").mask("(00) 0000-00009");</script>
        </div>

        <div class="col-md-4 position-relative  campo">
            <label for="validationTooltip05" class="form-label">Valor R$</label>
            <input type="text" class="form-control" id="valor" name="valor" value="" required>
            <script>
              $(document).ready(function() {
                $('#valor').mask('000000,00', {reverse: true});
              });
              </script>
          </div>
          
        <div class="col-12">
          <button class="botao">Cadastrar</button>
        </div>
      </form>

            </div>
        </div>
    </div>



   

<style>
  * {
margin: 0;
padding: 0;
}

#titulo,
#subtitulo {
font-family: sans-serif;
color: #380b61;
}

fieldset {
border: 0%;
}

body {
background-color: white;
font-family: sans-serif;
font-size: 1em;
color: #59429d;

}

input,
select,
textarea,
button {
border-radius: 15px;
}

.campo {
margin-bottom: 0em;
margin-left: 10%;

}

.campo label {
margin-bottom: 0.2em;
color: #59429d;
display: block;
margin-left: 10%;
}

fieldset.grupo .campo {
margin: 16px;
margin-left: 10%;
}

.campo input:focus,
.campo select:focus,
.campo textarea:focus {
background: rgb(225, 222, 222);
border-radius: 15px;
}

.campo select optgroup {
padding-right: 1em;
}

.botao {
font-size: 1.2em;
background: #1d7580;
border: 0;
margin-bottom: 1em;
color: white;
padding: 0.2em 0.6em;
box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
transform: translate(-50% -50%);
margin-left: 90%;
}

.botao:hover {
background: #ccbbff;
box-shadow: inset 2px 2px 2px rgba(0, 0, 0, 0.2);
text-shadow: none;
}

.botao select {
cursor: pointer;
}


</style>


</x-app-layout>