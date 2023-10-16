
<!--Scripts que estão sendo usados -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head> --}}
  {{--  <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                       {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif --}}
              {{--      @endauth
                </div>
            @endif --}}

            <!DOCTYPE html>
            <html lang="pt-br">
            
            <head>
              <meta charset="utf-8">
              <meta content="width=device-width, initial-scale=1.0" name="viewport">
            
              <title>CRS</title>
              <meta content="" name="description">
              <meta content="" name="keywords">
            
              <!-- Favicons -->
              <link href="assetes/img/favicon.ico" rel="icon">
              <link href="img/logodia.jpg.png" rel="apple-touch-icon">
            
              <!-- Google Fonts -->
              <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
            
              <!-- CSS FILES -->
              <link href="assetes/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
              <link href="assetes/vendor/animate.css/animate.min.css" rel="stylesheet">
              <link href="assetes/vendor/aos/aos.css" rel="stylesheet">
              <link href="assetes/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
              <link href="assetes/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
              <link href="assetes/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
              <link href="assetes/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
              <link href="assetes/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
            
              <!-- Templetes do CSS -->
              <link href="assetes/css/style.css" rel="stylesheet">
          
            </head>            
            <body>
            
              <!-- ======= Topo na navbar ======= -->
              <div id="topbar" class="d-flex align-items-center fixed-top">
                <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
                  <div class="align-items-center d-none d-md-flex">
                    <i class="bi bi-clock"></i> 
                    <script>
                      function exibirDataHora() {
                        var elementoDataHora = document.getElementById("data-hora");
                        var dataHoraAtual = new Date();
                        elementoDataHora.innerHTML = dataHoraAtual.toLocaleString();
                      }
                  
                      // Atualizar a cada segundo
                      setInterval(exibirDataHora, 1000);
                    </script>              
                    <p id="data-hora" style="margin-top: 15px"></p>              
                  </div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-phone"></i> Ligue (69) 998756423
                  </div>
                  <div class="d-flex align-items-center">
                      @if (Route::has('login'))
                      <a href="{{ route('login') }}" class="btn btn-light">Login</a>
                        @auth
                          @else
                            {{-- <button class="btn btn-light"> </button>
                              @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                              @endif --}}
                        @endauth               
                      @endif
                  </div>                         
                </div>
              </div> <!-- Fim do Topo na navbar -->
            
              <!-- ======= navbar do projeto ======= -->
              <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center">
            
                  <a href="#" class="logo me-auto"><img src="img/logodia.jpg" alt="">CRS</a>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
            
                  <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                      <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                      <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
                      <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
                      <li><a class="nav-link scrollto" href="#departments">Departamentos</a></li>
                      <li><a class="nav-link scrollto" href="#doctors">Medicos</a></li>
                     {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="#">Drop Down 1</a></li>
                          <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                              <li><a href="#">Deep Drop Down 1</a></li>
                              <li><a href="#">Deep Drop Down 2</a></li>
                              <li><a href="#">Deep Drop Down 3</a></li>
                              <li><a href="#">Deep Drop Down 4</a></li>
                              <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                          </li>
                          <li><a href="#">Drop Down 2</a></li>
                          <li><a href="#">Drop Down 3</a></li>
                          <li><a href="#">Drop Down 4</a></li>
                        </ul>
                      </li> --}}
                      <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                  </nav><!-- .navbar -->
            
                  <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Marcar</span> Horario</a>
            
                </div>
              </header><!-- Fim da navbar do projeto -->
            
              <!-- ======= Slide inicial passagem ======= -->
              <section id="hero">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            
                  <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            
                  <div class="carousel-inner" role="listbox">
            
                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assetes/img/slide/slide-1.jpg)">
                      <div class="container">
                        <h2><span>Clinical Reception System</span></h2>
                        <p>Bem-vindo ao Clinical Reception System! A solução ideal para otimizar a recepção clínica. Simplifique o agendamento de consultas, organize registros de pacientes e melhore a eficiência do seu dia a dia..</p>
                        <a href="#about" class="btn-get-started scrollto">Conhecer</a>
                      </div>
                    </div>
            
                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assetes/img/slide/slide-2.jpg)">
                      <div class="container">
                        <h2><span>Clinical Reception System</span></h2>
                        <p>Bem-vindo ao Clinical Reception System! A solução ideal para otimizar a recepção clínica. Simplifique o agendamento de consultas, organize registros de pacientes e melhore a eficiência do seu dia a dia..</p>
                        <a href="#about" class="btn-get-started scrollto">Conhecer</a>
                      </div>
                    </div>
            
                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(assetes/img/slide/slide-3.jpg)">
                      <div class="container">
                        <h2><span>Clinical Reception System</span></h2>
                        <p>Bem-vindo ao Clinical Reception System! A solução ideal para otimizar a recepção clínica. Simplifique o agendamento de consultas, organize registros de pacientes e melhore a eficiência do seu dia a dia..</p>
                        <a href="#about" class="btn-get-started scrollto">Conhecer</a>
                      </div>
                    </div>
            
                  </div>
            
                  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                  </a>
            
                  <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                  </a>
            
                </div>
              </section><!--Fim do Slide inicial passagem -->
            
              <main id="main">
            
                <!-- ======= Serviços ofertados  ======= -->
                <section id="featured-services" class="featured-services">
                  <div class="container" data-aos="fade-up">
            
                    <div class="row">
                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                          <div class="icon"><i class="fas fa-heartbeat"></i></div>
                          <h4 class="title"><a href="">Consultas</a></h4>
                          <p class="description">Consulte com os profissionais mais qualificados para você.</p>
                        </div>
                      </div>
            
                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                          <div class="icon"><i class="fas fa-pills"></i></div>
                          <h4 class="title"><a href="">Receitas</a></h4>
                          <p class="description">Receituario com qualidade em seu atendimento, atestados condizentes com sua situação.</p>
                        </div>
                      </div>
            
                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                          <div class="icon"><i class="fas fa-thermometer"></i></div>
                          <h4 class="title"><a href="">Procedimentos</a></h4>
                          <p class="description">Diversos procedimentos com os melhores equipamentos do mercado.</p>
                        </div>
                      </div>
            
                      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                          <div class="icon"><i class="fas fa-dna"></i></div>
                          <h4 class="title"><a href="">Exames</a></h4>
                          <p class="description">Exames diversos, com confiança e disponibilidade para você.</p>
                        </div>
                      </div>
            
                    </div>
            
                  </div>
                </section><!-- Fim dos serviços ofertados -->
            
                <!-- ======= Emergencia ======= -->
                <section id="cta" class="cta">
                  <div class="container" data-aos="zoom-in">
            
                    <div class="text-center">
                      <h3>Em uma emergência, Precisa de ajuda agora?</h3>
                      <p>Em caso de emergencia, entre rapidamente em contato conosco para que sua consulta seja agendada imediatamente.</p>
                      <a class="cta-btn scrollto" href="#appointment">Marcar</a>
                    </div>
            
                  </div>
                </section><!-- Fim da emergencia -->
            
                <!-- ======= Sobre a clinica ======= -->
                <section id="about" class="about">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Sobre</h2>
                      <p>Nossa clínica médica está comprometida em fornecer um atendimento excepcional com a melhor estrutura e cuidados de saúde de qualidade aos nossos pacientes. Reconhecemos a importância de uma gestão eficiente para garantir um fluxo de trabalho harmonioso e uma experiência satisfatória para todos.</p>
                    </div>
            
                    <div class="row">
                      <div class="col-lg-6" data-aos="fade-right">
                        <img src="assetes/img/unimed.jpg" class="img-fluid" alt="">
                      </div>
                      <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Otima estrutura e localização.</h3>
                        <p class="fst-italic">
                          A clinica foi fundada no ano 2000 no intuito de ajudar a população com atendimento de qualidade, e se mantem ate os dias atuais com excelentíssimos clientes. 
                        </p>
                        <ul>
                          <li><i class="bi bi-check-circle"></i> Estrutura nova, com otimos acabamentos.</li>
                          <li><i class="bi bi-check-circle"></i> Estrutura e equipamentos modernos.</li>
                          <li><i class="bi bi-check-circle"></i> Melhor localização e amplos estacionamento.</li>
                        </ul>
                        <p>
                          Aqui, oferecemos um ambiente moderno e acolhedor, equipado com tecnologia de ponta para proporcionar o melhor cuidado médico aos nossos pacientes. Nossa equipe altamente qualificada está pronta para atendê-lo com dedicação e profissionalismo.
                        </p>
                      </div>
                    </div>
            
                  </div>
                </section><!-- Fim sobre a clinica -->
            
                <!-- ======= Contagem ======= -->
                <section id="counts" class="counts">
                  <div class="container" data-aos="fade-up">
            
                    <div class="row no-gutters">
            
                      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                          <i class="fas fa-user-md"></i>
                          <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            
                          <p><strong>Medicos</strong> Que atendem aqui.</p>
                          <a href="#">Home &raquo;</a>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                          <i class="far fa-hospital"></i>
                          <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
                          <p><strong>Departamentos e Especialidades</strong></p>
                          <a href="#">Home &raquo;</a>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                          <i class="fas fa-flask"></i>
                          <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                          <p><strong>Exames e Diagnosticos</strong></p>
                          <a href="#">Home &raquo;</a>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                          <i class="fas fa-award"></i>
                          <span data-purecounter-start="0" data-purecounter-end="94" data-purecounter-duration="1" class="purecounter"></span>
                          <p><strong>Certificados e Licenças</strong></p>
                          <a href="#">Home &raquo;</a>
                        </div>
                      </div>
            
                    </div>
            
                  </div>
                </section><!--Fim da contagem -->
            
                <!-- ======= Extras Sobre ======= -->
                <section id="features" class="features">
                  <div class="container" data-aos="fade-up">
            
                    <div class="row">
                      <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                        <div class="icon-box mt-5 mt-lg-0">
                          <i class="bx bx-receipt"></i>
                          <h4>Laboratório</h4>
                          <p>Rapida resposta laboratorial para o paciente.</p>
                        </div>
                        <div class="icon-box mt-5">
                          <i class="bx bx-cube-alt"></i>
                          <h4>Tecnologia</h4>
                          <p>Respostas em menos tempo e com possibilidades tecnologicas.</p>
                        </div>
                        <div class="icon-box mt-5">
                          <i class="bx bx-images"></i>
                          <h4>Imagem do Exame</h4>
                          <p>Possibilidade para receber a imagem do exame ou consulta por onde achar melhor.</p>
                        </div>
                        <div class="icon-box mt-5">
                          <i class="bx bx-shield"></i>
                          <h4>Segurança</h4>
                          <p>Segurança para receber seus dados e exames feitos.</p>
                        </div>
                      </div>
                      <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assetes/img/features.jpg");' data-aos="zoom-in"></div>
                    </div>
            
                  </div>
                </section><!-- Fim dos Extras Sobre -->
            
                <!-- ======= Serviços Ofertados ======= -->
                <section id="services" class="services services">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Serviços</h2>
                      <p>A Clinica Reception System conta com uma grande variedades de serviços para melhor lhe atender, serviços esses prestados da melhor forma, com os melhores profissionais e equipamentos do mercado.</p>
                    </div>
            
                    <div class="row">
                      <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4 class="title"><a href="">Atendimento Especializado</a></h4>
                        <p class="description">Consulta especializada com equipamento de ponta para atender o paciente. </p>
                      </div>
                      <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4 class="title"><a href="">Receituário</a></h4>
                        <p class="description">Receituário com eficiencia e expertise</p>
                      </div>
                      <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4 class="title"><a href="">Consultas</a></h4>
                        <p class="description">Consultas em geral com o melhor atendimento e carinho para o paciente. </p>
                      </div>
                      <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-dna"></i></div>
                        <h4 class="title"><a href="">Exames</a></h4>
                        <p class="description">Exames com uma ampla variedade. </p>
                      </div>
                      <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-wheelchair"></i></div>
                        <h4 class="title"><a href="">Acessibilidade</a></h4>
                        <p class="description">Ambiente com acessibilidade para pacientes especiais.</p>
                      </div>
                      <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-notes-medical"></i></div>
                        <h4 class="title"><a href="">Disponibilidade</a></h4>
                        <p class="description">Serviços com a melhor disponibilidade, horarios para melhor atender o paciente, serviços prestados de forma online.</p>
                      </div>
                    </div>
            
                  </div>
                </section><!-- Fim dos Serviços -->
            
                <!-- ======= Agendamento de Consultas ======= -->
                <section id="appointment" class="appointment section-bg">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Marque seu Horário</h2>
                      <p>Agende já sua consulta!  Preencha as informações abaixo, com o dia e hora que melhor irá lhe atender, assim qu nossa recepção receber seu agendamento, você receberá um email com a conformação da sua consulta.</p>
                    </div>
            
                    <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                      <div class="row">
                        <div class="col-md-4 form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                          <input type="tel" class="form-control" name="telefone" id="telefone" class="form-control"  pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="Telefone" required>
                        <script type="text/javascript">$("#telefone").mask("(00) 0000-00009");</script>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 form-group mt-3">
                          <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                          <input type="time" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                          <select name="department" id="department" class="form-select">
                            <option value="">Departamento Especialista</option>
                            <option value="Department 1">Clinico Geral</option>
                            <option value="Department 2">Cardiologista</option>
                            <option value="Department 3">Ortopedia e Traumatologia</option>
                            <option value="Department 3">Medicina do trabalho</option>
                            <option value="Department 3">Oftalmologia</option>
                          </select>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                          <select name="doctor" id="doctor" class="form-select">
                            <option value="">Medico</option>
                            <option value="Doctor 1">Carlos Henrique Rios</option>
                            <option value="Doctor 2">Robson Xavier da Silva</option>
                            <option value="Doctor 3">Vicente de Asis Cury</option>
                            <option value="Doctor 3">Gabriel Rios </option>
                            <option value="Doctor 3">João Pedro Alves</option>
                          </select>
                        </div>
                      </div>
            
                      <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensagem (Opcional)"></textarea>
                      </div>
                      <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                      </div>
                      <div class="text-center"><button type="submit">Agendar Consulta</button></div>
                    </form>
            
                  </div>
                </section><!-- Fim do Agendamento de Consultas -->
            
                <!-- ======= Departamentos e Especialidades Medicas ======= -->
                <section id="departments" class="departments">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Departamentos</h2>
                      <p>Contamos com uma ampla variedade de especialidades, sendo elas exercidas por renomados profissioanis do mercado,
                         cada especialidade conta com os equipamentos mais atuais do mercado e uam equipe qualificada para melhor lhe atender.</p>
                    </div>
            
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                      <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                          <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                              <h4>Cardiologia</h4>
                              <p>Especialistas em cardiologia e procedimentos.</p>
                            </a>
                          </li>
                          <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                              <h4>Neurologia</h4>
                              <p>Especialistas em neurologia e procedimentos.</p>
                            </a>
                          </li>
                          <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                              <h4>Oftalmologia</h4>
                              <p>Especialistas em Oftalmologia e procedimentos.</p>
                            </a>
                          </li>
                          <li class="nav-item mt-2">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                              <h4>Pediatria</h4>
                            <p>Especialistas em pediatria e procedimentos.</p>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-lg-8">
                        <div class="tab-content">
                          <div class="tab-pane active show" id="tab-1">
                            <h3>Cardiologia</h3>
                            <p class="fst-italic">Medicos cardiologistas renomado no mercado, contamos com diversos exames e procedimentos.</p>
                            <img src="assetes/img/departments-1.jpg" alt="" class="img-fluid">
                            <p>Contamos com os melhores equipamentos para realizar os seguintes procedimentos:</p>
                            <p>- Ecocardiograma.<br>- Ressonância Magnética.<br>- Eletrocardiograma de repouso.
                            <br>- Radiografia de tórax.<br>- Tomografia do coração e vasos.
                            <br>- Ecografia transesofágica.<br>- Cintilografia.<br>- Holter.<br><br> Entre outros procedimentos!</p>                          
                          </div>
                          <div class="tab-pane" id="tab-2">
                            <h3>Neurologia</h3>
                            <p class="fst-italic">Medicos neurologistas renomados e contando com diversos exames e procedimentos.</p>
                            <img src="assetes/img/departments-2.jpg" alt="" class="img-fluid">
                            <p>Contamos com os melhores equipamentos para realizar os seguintes procedimentos:</p>
                            <p>- Hemograma.<br>- Glicemia e insulina.<br>- Raio-X de idade óssea.
                            <br>- Ultrassom.<br>- Exame de urina.
                            <br>- Exame parasitológico de fezes.<br>-Anticorpos para Hepatites A, B e C.<br><br> Entre outros procedimentos!</p> 
                          </div>
                          <div class="tab-pane" id="tab-3">
                            <h3>Oftalmologia</h3>
                            <p class="fst-italic">Medicos oftalmologistas renomados e contando com diversos exames e procedimentos.</p>
                            <img src="assetes/img/departments-3.jpg" alt="" class="img-fluid">
                            <p>Contamos com os melhores equipamentos para realizar os seguintes procedimentos:</p>
                            <p>- Exame de refração.<br>- Mapeamento de retina.<br>- Tonometria.
                            <br>- Fundoscopia.<br>- Topografia de córnea.<br>Gonioscopia<br><br> Entre outros procedimentos!</p> 
                          </div>
                          <div class="tab-pane" id="tab-4">
                            <h3>Pediatria</h3>
                            <p class="fst-italic">Medicos pediatricos renomados e contando com diversos exames e procedimentos.</p>
                            <img src="assetes/img/departments-4.jpg" alt="" class="img-fluid">
                            <p>Contamos com os melhores equipamentos para realizar os seguintes procedimentos:</p>
                            <p>- Hemograma.<br>- Glicemia e insulina.<br>- Raio-X de idade óssea.
                            <br>- Ultrassom.<br>- Exame de urina.
                            <br>- Exame parasitológico de fezes.<br>-Anticorpos para Hepatites A, B e C.
                            <br>- Acompanhamento de gestante. <br>- Realização de parto.<br><br> Entre outros procedimentos!</p> 
                          </div>
                        </div>
                      </div>
                    </div>
            
                  </div>
                </section><!-- Fim do Departamentos e Especialidades Medicas -->
            
                <!-- ======= Testemunhas ======= -->
                <section id="testimonials" class="testimonials">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Comentarios Sobre a CRS</h2>
                      <p>Espaço para exibir o feedback dos clientes que foram atendidos por nossa clinica.</p>
                    </div>
            
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                      <div class="swiper-wrapper">
            
                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              A CRS é uma clínica médica excepcional. Sua equipe altamente capacitada e atenciosa garante um atendimento personalizado e de qualidade. Além disso, suas instalações modernas e equipamentos de última geração proporcionam um ambiente confortável e confiável para os pacientes. Recomendo a CRS a todos que buscam cuidados médicos excelentes.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assetes/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Andre Gomes</h3>
                            <h4>Paciente</h4>
                          </div>
                        </div>
            
                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              A CRS é uma clínica médica que se destaca pela excelência em todos os aspectos. Desde o momento em que você entra, é recebido por uma equipe calorosa e profissional. Os médicos são extremamente competentes e dedicados, oferecendo diagnósticos precisos e tratamentos eficazes. Com um ambiente acolhedor e instalações de ponta, a CRS proporciona uma experiência médica de alto nível que inspira confiança e tranquilidade aos pacientes..
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assetes/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Silva</h3>
                            <h4>Paciente</h4>
                          </div>
                        </div>
            
                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              A clínica médica CRS é excepcional! Os profissionais são altamente competentes e dedicados, proporcionando um atendimento de qualidade aos pacientes. Além disso, as instalações são modernas e acolhedoras, criando um ambiente confortável para cuidar da saúde. Recomendo a CRS a todos que buscam cuidados médicos confiáveis e eficientes.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assetes/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Paciente</h4>
                          </div>
                        </div>
            
                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>                            
                                A clínica médica CRS é top! Profissionais competentes e instalações de primeira. Recomendo!
                            </p>
                            <img src="assetes/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matheus Brandon</h3>
                            <h4>Paciente</h4>
                          </div>
                        </div>
            
                        <div class="swiper-slide">
                          <div class="testimonial-item">
                            <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              A clínica médica CRS é incrível! Atendimento de qualidade e profissionais experientes. Recomendo sem hesitar!.
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <img src="assetes/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>Jonatas Larson</h3>
                            <h4>Paciente</h4>
                          </div>
                        </div>
            
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
            
                  </div>
                </section><!-- Fim testemunhas -->
            
                <!-- ======= Medicos ======= -->
                <section id="doctors" class="doctors section-bg">
                  <div class="container" data-aos="fade-up" >
            
                    <div class="section-title">
                      <h2>Medicos</h2>
                      <p>Nossos medicos são estremamente qualificados nas suas respectivas especialidades, doutores renomados e com total intuito de lhe ajudar da melhor forma, contamos com uma equipe com os seguintes profissionais.</p>
                    </div>
            
                    <div class="row">
            
                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                          <div class="member-img">
                            <img src="assetes/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Carlos Eduardo</h4>
                            <span> Chef. Clinico Geral</span>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                          <div class="member-img">
                            <img src="assetes/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Andreia Whilkmen</h4>
                            <span>Pediatra</span>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                          <div class="member-img">
                            <img src="assetes/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Robson Pereira</h4>
                            <span>Cardiologista</span>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                          <div class="member-img">
                            <img src="assetes/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                            <div class="social">
                              <a href=""><i class="bi bi-twitter"></i></a>
                              <a href=""><i class="bi bi-facebook"></i></a>
                              <a href=""><i class="bi bi-instagram"></i></a>
                              <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                          </div>
                          <div class="member-info">
                            <h4>Amanda Torres</h4>
                            <span>Neurologista </span>
                          </div>
                        </div>
                      </div>
            
                    </div>
            
                  </div>
                </section><!-- Fim medicos -->
            
                <!-- ======= Galeria e fotos ======= -->
                <section id="gallery" class="gallery">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Imagens da Clinica</h2>
                      <p>Mostramos aos nossos pacientes como e a estrutura interna da clinica, visando uma maior explicação de nossos aperelhos e procedimentos, como visto nas imagens, contamos com equipamentos de ponta e uma otima estrutura para melhor lhe atender.</p>
                    </div>
            
                    <div class="gallery-slider swiper">
                      <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-1.jpg"><img src="assetes/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-2.jpg"><img src="assetes/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-3.jpg"><img src="assetes/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-4.jpg"><img src="assetes/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-5.jpg"><img src="assetes/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-6.jpg"><img src="assetes/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-7.jpg"><img src="assetes/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="assetes/img/gallery/gallery-8.jpg"><img src="assetes/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
            
                  </div>
                </section><!-- Fim galeria -->
            
                <!-- ======= Valores e preços ======= -->
                <section id="pricing" class="pricing">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Preços</h2>
                      <p>Oferecemos preços de otimos, condições de parcelamento e varios pacotes, oferecemos condições imperdiveis para o seu melhhor tratamento e bem estar, confira alguns dos nossos valores a seguir, apara mais informações entre em contato.</p>
                    </div>
            
                    <div class="row">
            
                      <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                          <h3>Free</h3>
                          <h4><sup>$</sup>0<span> / month</span></h4>
                          <ul>
                            <li>Procedimentos sem descontos</li>
                            <li class="na">Nec feugiat nisl</li>
                            <li class="na">Nulla at volutpat dola</li>
                            <li class="na">Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                          </ul>
                          <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                          <h3>Saúde</h3>
                          <h4><sup>R$</sup>100<span> / mês</span></h4>
                          <ul>
                            <li>Acompanhamento clinico</li>
                            <li>Consultas com 60% off</li>
                            <li>Receituario</li>                      
                          </ul>
                          <div class="btn-wrap">
                            <a href="#" class="btn-buy">Contrate</a>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="300">
                          <h3>Saúde +</h3>
                          <h4><sup>R$</sup>150<span> / mês</span></h4>
                          <ul>
                            <li>Acompanhamento clinico</li>
                            <li>Consultas com 60% off</li>
                            <li>Receituario</li>      
                            <li>Especialistas 50% off</li>                 
                          </ul>
                          <div class="btn-wrap">
                            <a href="#" class="btn-buy">Contrate</a>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                          <span class="advanced">Advanced</span>
                          <h3>Saúde Especial</h3>
                          <h4><sup>R$</sup>200<span> / mês</span></h4>
                          <ul>
                            <li>Acompanhamento clinico</li>
                            <li>Consultas com 85% off</li>
                            <li>Receituario</li>      
                            <li>Especialistas 60% off</li>
                            <li>Exames geral com 80% off</li>                 
                          </ul>
                          <div class="btn-wrap">
                            <a href="#" class="btn-buy">Contrate</a>
                          </div>
                        </div>
                      </div>
            
                    </div>
            
                  </div>
                </section><!-- Fim de valores -->
            
                <!-- ======= Perguntas frequentes ======= -->
                <section id="faq" class="faq section-bg">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Perguntas Frequentes</h2>
                      <p>Para faciliatr suas duvidas, aqui está as perguntas mais frequentes que recebemos por clientes!.</p>
                    </div>
            
                    <ul class="faq-list">
            
                      <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Quais especialidades médicas são oferecidas na sua clínica? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                          <p>
                            Resposta: Nossa clínica médica oferece uma ampla gama de especialidades, incluindo, mas não se limitando a: Clínica Geral, Cardiologia, Pediatria, Ginecologia, Ortopedia e Dermatologia. Estamos comprometidos em fornecer um atendimento abrangente e personalizado para todas as necessidades de saúde dos nossos pacientes.
                          </p>
                        </div>
                      </li>
            
                      <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Como posso marcar uma consulta na sua clínica? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                          <p>
                            Resposta: Marcar uma consulta é fácil e conveniente. Você pode entrar em contato conosco por telefone, através do nosso site Nossa equipe de atendimento ao paciente estará pronta para agendar sua consulta de acordo com a disponibilidade do médico e sua preferência de horário.
                          </p>
                        </div>
                      </li>
            
                      <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Quais tipos de exames e procedimentos são realizados na sua clínica? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                          <p>
                            Resposta: Nossa clínica está bem equipada para realizar diversos exames diagnósticos, como exames de sangue, ultrassonografias, eletrocardiogramas e raio-x. Além disso, realizamos procedimentos ambulatoriais simples, como curativos, suturas, remoção de verrugas e outros procedimentos menores.
                          </p>
                        </div>
                      </li>
            
                      <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Aceitam planos de saúde? Quais são as formas de pagamento disponíveis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                          <p>
                            Resposta: Sim, aceitamos diversos planos de saúde. É importante verificar se o seu plano é aceito em nossa clínica antes de marcar a consulta. Além disso, oferecemos a opção de pagamento particular para pacientes sem plano de saúde. Os pagamentos podem ser efetuados em dinheiro, cartões de débito e crédito.
                          </p>
                        </div>
                      </li>
            
                      <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Vocês têm horários flexíveis de atendimento? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                          <p>
                            Resposta: Sim, temos horários flexíveis para atender às necessidades dos nossos pacientes. Além dos horários regulares de expediente, também oferecemos atendimentos agendados em horários estendidos, inclusive aos sábados. Nossa prioridade é garantir a conveniência e acessibilidade ao cuidado médico para todos.
                          </p>
                        </div>
                      </li>
            
                  
                    </ul>
            
                  </div>
                </section><!-- Fim de perguntas -->
            
                <!-- ======= Contatos  ======= -->
                <section id="contact" class="contact">
                  <div class="container">
            
                    <div class="section-title">
                      <h2>Formas de Contato</h2>
                      <p>Possibilitamos diversas formas de contato, seja presencialmente, por telefone, whatsapp ou ate mesmo por esse site.</p>
                    </div>
            
                  </div>
            
                  <div>
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.4378805508587!2d-63.88158888536165!3d-8.750854680682745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9282e2a29ad455d1%3A0x446c1d7921066f30!2sHospital%20Unimed%20Porto%20Velho!5e0!3m2!1sen!2sbr!4v1630089121606!5m2!1sen!2sbr" frameborder="0" allowfullscreen></iframe>
                  </div>
            
                  <div class="container">
            
                    <div class="row mt-5">
            
                      <div class="col-lg-6">
            
                        <div class="row">
                          <div class="col-md-12">
                            <div class="info-box">
                              <i class="bx bx-map"></i>
                              <h3>Nosso Endereço</h3>
                              <p> Av. Rio Madeira, 1618 - Agenor M. de Carvalho, Porto Velho - RO, 78906-520</p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="info-box mt-4">
                              <i class="bx bx-envelope"></i>
                              <h3>Email</h3>
                              <p>info@gmail.com<br>contact@gmail.com</p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="info-box mt-4">
                              <i class="bx bx-phone-call"></i>
                              <h3>Telefone</h3>
                              <p>(69) 3216-6800<br>(69) 3217-2000</p>
                            </div>
                          </div>
                        </div>
            
                      </div>
            
                      <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                          <div class="row">
                            <div class="col-md-6 form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Nome" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                            </div>
                          </div>
                          <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required="">
                          </div>
                          <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="7" placeholder="Mensagem" required=""></textarea>
                          </div>
                          <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                      </div>
            
                    </div>
            
                  </div>
                </section><!-- Fim de contatos -->
            
              </main><!-- Fim main-->
            
              <!-- ======= Fim da pagina ======= -->
              <footer id="footer">
                <div class="footer-top">
                  <div class="container">
                    <div class="row">
            
                      <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                          <h3>Reception System</h3>
                          <p>
                            Porto Velho - RO <br>
                            PVH, 78906-520, BR<br><br>
                            <strong>Telefone:</strong> (69) 3216-6800<br>
                            <strong>Email:</strong> info@gmail.com<br>
                          </p>
                          <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
            
                      <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Links Usados</h4>
                        <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Termos e Serviços</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Politica de Privacidade</a></li>
                        </ul>
                      </div>
            
                      <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Formatos</h4>
                        <ul>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Design</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Web</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Gerenciamento</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                          <li><i class="bx bx-chevron-right"></i> <a href="#">Design grafico</a></li>
                        </ul>
                      </div>
            
                      <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Nosso boletim informativo</h4>
                        <p>Inscreva-se para receber informações e ficar atualizado de tudo que acontece!</p>
                        <form action="" method="post">
                          <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
            
                      </div>
            
                    </div>
                  </div>
                </div>
            
                <div class="container">
                  <div class="copyright">
                    &copy; Rios<strong><span>Developer</span></strong>. Todos os direitos reservados
                  </div>
                  <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
                    Desenvolvimento <a href="">RiosDeveloper</a>
                  </div>
                </div>
              </footer><!--fim da pagina -->
            
              <div id="preloader"></div>
              <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
            
              <script src="assetes/vendor/purecounter/purecounter_vanilla.js"></script>
              <script src="assetes/vendor/aos/aos.js"></script>
              <script src="assetes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
              <script src="assetes/vendor/glightbox/js/glightbox.min.js"></script>
              <script src="assetes/vendor/swiper/swiper-bundle.min.js"></script>
              <script src="assetes/vendor/php-email-form/validate.js"></script>
              <script src="assetes/js/main.js"></script>

            </body>
            
            </html>
           
            </div>
        </div>
    </body>
</html>
