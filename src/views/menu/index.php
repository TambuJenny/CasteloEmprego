<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Menu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">  
  <!-- Favicons -->
  <?php require_once 'src/views/components/scripts.php'; ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <p><a href=""><?php if (isset( $_SESSION["usuario"]['email'])){$email = $_SESSION["usuario"]['email'];
      echo $email ;}?> </a></p>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="menu/">Inicio</a></li>
          <li><a class="nav-link scrollto" href="menu">Sobre</a></li>
          <li><a class="nav-link scrollto" href="menu">Serviços</a></li>
          <li><a class="nav-link scrollto "href="menu">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="menu">Equipa</a></li>
          <li class="dropdown"><a href="profissionais"><span>Anucios</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="empresas">Anucios de Emprego</a></li>
              <li class="dropdown"><a href="profissionais"><span>Anuacios de profissionais</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="profissionais">T.I</a></li>
                  <li><a href="profissionais">Contabilidade</a></li>
                  <li><a href="profissionais">Saúde</a></li>
                  <li><a href="profissionais">Mecânica</a></li>
                  <li><a href="profissionais">Outras</a></li>
                  
                </ul>
              </li>
              <li><a href="#">Biolo</a></li>
              <li><a href="#">Vendas</a></li>
            </ul>
          </li>
          
          <?php 
          if(($_SESSION['usuario']['id'] != null) && (($_SESSION['usuario']['categoria']) == "Profissional")) {
          ?>
          <li><a class="nav-link scrollto" href="perfil">Perfil</a></li>
          <li><a class="nav-link scrollto" href="empresasSolicitadas">Solicitações</a></li>
          <?php } else if(($_SESSION['usuario']['id'] != null) && (($_SESSION['usuario']['categoria']) =="Empregador")){?> 
            
            <li><a class="nav-link scrollto" href="criarAnucio">Criar Anucios</a></li>
            <li><a class="nav-link scrollto" href="profissionaisAderidos">Adesões</a></li>
            <?php }?>
                    <?php 
          if(!($_SESSION['usuario']['id'])) {
          ?>
          <li><a class="nav-link scrollto" href="login">Login</a></li>
          <?php }else{ ?>
            <li><a class="nav-link scrollto" href="sair">Logout</a></li>
            <?php }?>
            
          <li><a class="getstarted scrollto" href="#about">JOB LINK</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(./public/assets/img/slide/sr.jpg);">
            <div class="carousel-container ">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler mais</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(./public/assets/img/slide/server.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler mais</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(./public/assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Ler mais</a>
                </div>
              </div>
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
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start">

      <img src="./public/assets/Job2.png" class="img-fluid" alt="">
          </div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>JOB LINK (Empregos e Prestações de Serviço) </h3>
              <style>
                p{
                  text-align: justify;
                }
              </style>

              <p>
                O nosso objetivo é compreender as necessidades das pessoas, que buscam para si
                encontrar o emprego de seus sonhos, assim como mostrando as suas copetências prestando
                serviços nas empresas que necessitam de seus trabalhos. Fornecemos as empresas as melhores
                pessoas com habilidades necessarias de trabalharem nos melhores postos, para levarem avante 
                o crescimento da organização.
                 
              </p>
              <div class="row">
                <div class="col-md-6 icon-box">
                  <i class="bx bx-receipt"></i>
                  <h4>Empregos</h4>
                  <p>Anucios de oportunidades para adesão nas melhores empresas do País, em seus melhores postos de serviço</p>
                </div>
                <div class="col-md-6 icon-box">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Serviços</h4>
                  <p>Anucios de profissionais copetentes que buscam oportunidades de ingressarem em um posto de trabalho.</p>
                </div>
                
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Empresas Satisfeitas</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projectos feitos</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="36" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Carga horária</strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Profissionais Satisfeitos</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div style="margin-bottom: 15px;" class="section-title">
          <h2>Soluções</h2>
        </div>
        <div class="select2-selection--multiple">
          <p> A JOB LINK tem um conjunto de soluções que visam ajudar as empresas emcontrarem os melhores
            prossionais, e ajudar os profissionais a encontrar soluções de trabalho.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Anucios de<br> Empresas</a></h4>
            <p class="description" style="text-align: justify">
              Nos concentramos na criação de programas de computador personalizados para atender 
            às necessidades específicas do cliente. Desde o desenvolvimento 
            de aplicativos de desktop e web até sistemas complexos 
            de gerenciamento de dados
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Anucios de Prestadores <br>de Serviços</a></h4>
            <p class="description" style="text-align: justify"> Fazemos a instalação, configuração 
              e gerenciamento de um ou mais servidores, configurado com os softwares e serviços necessários,     
               a administração de servidores Linux é necessario para garantir que os serviços e aplicativos estejam sempre disponíveis, seguros e funcionando corretamente.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Anucios de <br>Profissionais</a></h4>
            <p class="description" style="text-align: justify">Serviços de redes de computadores e telefonia são essenciais para 
              garantir a conectividade e comunicação entre dispositivos em uma organização.
              O Elastix e Asterisk sistemas de telefonia baseados em VoIP, utilizados para gerenciar as comunicações de voz em empresas e organizações.</p>
          </div>
         
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="section-title" style="margin-bottom: 12px; ">
          <h2>Quem Somos</h2>
        </div>
        <div class="select2-selection--multiple">  
          <p style="text-align:justify">Somos uma empresa de direito Angolano, fundada em Março de 2023, 
          sediada em Luanda, município de Viana.<br><br>
            
          Este projecto Centra a sua atividade na elaboração e implementação de soluções para as empresas que desejam 
          ter os melhores profissionais em suas empresas. E os profissionais aderirem nos postos de trabalho de seus
          sonhos.  
            
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box">
              <span>JOB LINK</span>
              <h4>Missão</h4>
              <p>Oferecer soluções e serviços técnicos integrados, inovadores.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>JOB LINK</span>
              <h4>Visão</h4>
              <p>Ser uma das Melhores e Maiores Empresas Angolanas no
                fornecimento de soluções e serviços.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box">
              <span>JOB LINK</span>
              <h4> Valores</h4>
              <p>Qualidade ;
                 Compromisso ;
                 Integridade ;<br>
                 Inovação ;
                 Liderança ;
                 Responsabilidade Social.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-fa-question">
          <h2 style="text-align: center" >PORTFÓLIO</h2>
          </div>
        <div class="select2-selection--multiple">  
          <p>A nosssa excelente equipe de profissionais estão qualificados para proporcionar mais visibilidade, controlo, reputação e vendas. </p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Empresa</li>
              <li data-filter=".filter-card">Profissional</li>
              <li data-filter=".filter-web">Serviços</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/samba.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Empresas</h4>
                <p>empresa</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/samba.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/paginas.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Profissional</h4>
                <p>proficional</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/paginas.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/linux.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Empresa</h4>
                <p>empresa</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/linux.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/voip.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Serviços</h4>
                <p>serviço</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/voip.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/paginas2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Profissional</h4>
                <p>profissional</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/paginas2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/distros.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Empresa</h4>
                <p>Empresa</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/distros.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/aaaaaa.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Serviços</h4>
                <p>serviço</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/aaaaaa.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/cabeamento.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Serviços</h4>
                <p>serviço</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/cabeamento.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="./public/assets/img/portfolio/paginas3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Profissional</h4>
                <p>profissional</p>
                <div class="portfolio-links">
                  <a href="./public/assets/img/portfolio/paginas3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.php" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

      <div class="section-fa-question">
          <h2 style="text-align: center" >EQUIPE</h2>
          </div>
        <div class="select2-selection--multiple">  
          <p>Nossa equipe de desenvolvedores altamente qualificados e experientes possui ampla experiência em uma ampla gama de tecnologias e linguagens de programação, permitindo-nos oferecer soluções de desenvolvimento web sob medida para atender às necessidades exclusivas de nossos clientes.</p>
        </div>

        <center>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member">
              <img style="height: 300px" src="./public/assets/img/team/abraao.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Abraão Castelo</h4>
                  <span>Tecnico Chefe e desenvolvedor</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img style="height: 300px" src="./public/assets/img/team/abraao.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Abílio Básilio</h4>
                  <span>Desenvolvedor e Analista</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
            <div class="member">
              <img style="height: 300px" src="./public/assets/img/team/abraao.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Manuel Catuabi</h4>
                  <span>Comtabilista e Analista</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img style="height: 300px" src="./public/assets/img/team/abraao.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Pedro Sozinho</h4>
                  <span>Colaborador e Financeador</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
   
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title"> 
          <h2>Perguntas & Respostas</h2>
          <p></p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">O que é a Webin-Anucios? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  A Webin é uma empresa de direito Angolano que actua no sector da tecnologia de informação, com os respectivos serviços:  Elaboração e implementação de projetos de infra-estrutura de Servidores Linux, Reparação e manutenção de computadores, desenvolvimento de web sites, software, hospedagens, Dominio, emails- corporativos e Redes de Computadores.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Como contratar os serviços? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Contratar os serviços é fácil. Com a Webin, você encontra um serviço de qualidade. Basta selecionar o plano que pretende, concluir a compra, seguir as instruções na fatura e pagar.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Como fazer o pagamento dos vossos serviços? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Você pode pagar os nossos serviços fazendo transferencia bancaria. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">É possível registar um domínio Angoalno na Webin? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sim. Oferecemos serviços de registro de domínios angolanos. Se você contratar os serviços de hospedagem fica mais fácil gerenciar tudo em apenas uma única conta. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Porquê escolher vocês e não outras empresas, qual é o nível de segurança dos vossos serviços? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Somos a solução das suas necessidades. O serviço de manutenção de segurança é um serviço prestado com a finalidade de proporcionar segurança ao seu site.

Ou seja, implementamos técnicas para manter a tecnologia do seu site sempre atualizada  e o seu site livre de vírus, e seguro em relação a ataques de piratas informáticos e intrusos.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

      <div class="section-fa-question">
          <h2 style="text-align: center" >CONTACTOS</h2>
          </div>
        <div class="select2-selection--multiple">  
          <p>Por favor, encontre abaixo meus contatos para que possamos manter uma comunicação fluida e eficaz. Fico à disposição para qualquer dúvida ou informação adicional que precisar.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Localização</h3>
              <address>Estamos localizados em Viana-Ponte Partida, rua da suave, proximo a escola de condução Clara.</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Telefone</h3>
              <p><a href="tel:+155895548855">+244 927 062 822<br>+244 944 029 977<br>+244 936 720 002</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">webinarede@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Please enter a valid email">
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Titulo" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>WEBIN</h3>
              <p>
                Contactos Electrónicos: <br>
                
                <strong>Phone:</strong> +244 927062822 / +244 944029977 / +244 936720002 <br>
                
                <strong>Email:</strong> webinarede@gmail.com<br>
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
            <h4>Links Úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="menu">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menu">Sobre</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menu">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menu">Portfólio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menu">Equipe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menu">Anucios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="menu">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desenvolvimento de
                Software</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Implementação e Administração de Servidores Linux</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Redes de Computadores e Telefonia
                “VoIP - Elastix / Asterix” “LAN"</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Base da Dados, Hospedagem de Web Sites,
                Dominio e emails-corporativos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Base da Dados, Hospedagem de Web Sites,
                Dominio e emails-corporativos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reparação & Manutenção de
                Computadores</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Venda de Equipamentos &
                Acessórios Informáticos</a></li>
              
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Nosso boletim informativo</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Contacte-nos">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Direito do autor: <strong><span>WEBIN</span></strong> 
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
        Feito por <a href="">WEBIN</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
</body>

</html>