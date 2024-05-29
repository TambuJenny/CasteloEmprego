<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>criar Anucios</title>
  <meta content="" name="description">
  <meta content="" name="keywords">  
  <?php require_once 'src/views/components/scripts.php'; ?>  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

       <p><a href=""><?php if (isset( $_SESSION["usuario"]['email'])){$email = $_SESSION["usuario"]['email'];
      echo $email ;}?> </a></p>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="menu">Inicio</a></li>
          <li><a class="nav-link scrollto" href="menu">Sobre</a></li>
          <li><a class="nav-link scrollto" href="menu">Serviços</a></li>
          <li><a class="nav-link scrollto" href="menu">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="menu">Equipa</a></li>
          <li class="dropdown"><a href="#"><span>Anucios</span> <i class="bi bi-chevron-down"></i></a>
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
          <?php } ?>
          <?php 
          if(!($_SESSION['usuario']['id'])) {          ?>
          <li><a class="nav-link scrollto" href="login">Login</a></li>
          <?php }else if(($_SESSION['usuario']['id'] != null) && (($_SESSION['usuario']['categoria']) =="Empregador")){?> 
            
            <li><a class="nav-link scrollto" href="criarAnucio">Criar Anucios</a></li>
            <?php }else{ ?>
            <li><a class="nav-link scrollto" href="login">Logout</a></li>
            <?php }?>
          <li><a class="getstarted scrollto" href="#about">WEBIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 

  <main id="main">
<br>
<div class="col-md-6 offset-md-3" style="margin-top: 150px;">
                <center><b><h1 style="color:black; margin-bottom: 4px ;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Criar Anucios de Vagas</h1></b></center>
               <br>

   <form action="registarAnucio" method="POST" >

  <div class="form-group row">
      
      <input required style="margin-bottom: 20px" name="titulo" type="text" class="form-control" id="validationCustom01" placeholder="Titulo da Vaga? ex: Programador Senior" >
      <div class="valid-feedback">
        Looks good!
        
      </div>
   
      <textarea required style="margin-bottom: 20px" name="descricao" class="form-control" id="validationCustom02" placeholder="Descrição da Vaga? Ex: 1-Programador JAVA,C# ; 2-Basico de Excel" ></textarea>
      <div class="valid-feedback">
        Looks good!
      </div>

  </div>

  <div class="form-group row">

      <select required name="areaActuacao" id="disabledSelect" class="form-control" style="margin-bottom: 20px">
        <option disabled selected="selected">Area de Actuação</option>
        <option >MECÂNICA</option>
        <option >T.I</option>
        <option >ELECTRONICA</option>
        <option >SAÚDE</option>
        <option >EDUCAÇÃO</option>
        <option >CONTABILIDADE</option>
        <option >C.CIVIL</option>
        <option >OUTROS</option>
        
      </select>
<style> label{
    color:black; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size:20px;
    }
</style>
  </div>

    <div class="form-group row">
      <input required name="vagas" style="margin-bottom: 20px" type="number" class="form-control" id="validationCustom04" placeholder="Nº de Vagas? Ex:2" >
      <div class="invalid-feedback">
        Please provide a valid Informações.
      </div>

      <label for="validationCustom05">Data de Final</label>
      <input required name="dataFinal" style="margin-bottom: 20px" type="date" class="form-control" id="validationCustom05" placeholder="Data de Final" >
      <div class="invalid-feedback">
        Please provide a valid Img.
      </div>

      <select required name="contrato" style="margin-bottom: 20px" id="disabledSelect" class="form-control">
      <option disabled selected="selected">Tipo de Contrato</option>
        <option >definir</option>
        <option >1ano</option>
        <option >2anos</option>
        <option >3anos</option>
        <option >4anos</option>
        <option >5anos</option>
        <option >+5anos</option>
        
      </select>

    </div>
    <label for="validationCustom05">Imagem</label>
      <input disabled style="margin-bottom: 20px" type="file" class="form-control" name="imagem" id="validationCustom05" >
      <div class="invalid-feedback">
        Please provide a valid Img.
      </div>

  <div class="form-group">
    <div class="col-md-6 mb-3">
      <input required class="form-check-input" type="checkbox" value="" id="invalidCheck" >
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <center>
  <button class="btn btn-primary" type="submit">Registar Anucio</button>
</center>
</form>
</div>
<br>


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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Portfólio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Equipe</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Anucios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contacto</a></li>
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