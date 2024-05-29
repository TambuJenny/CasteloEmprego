<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WEBIN Index</title>
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
          <li><a class="nav-link scrollto active" href="menu/#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="menu/#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="menu/#services">Serviços</a></li>
          <li><a class="nav-link scrollto" href="menu/#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="menu/#team">Equipa</a></li>
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
          <?php } else if(($_SESSION['usuario']['id'] != null) && (($_SESSION['usuario']['categoria']) =="Empregador")){?> 
            
                        <li><a class="nav-link scrollto" href="criarAnucio">Criar Anucios</a></li>
            <li><a class="nav-link scrollto" href="profissionaisAderidos">Adesões</a></li>
            <?php }?>
          <?php 
          if(!($_SESSION['usuario']['id'])) {          ?>
          <li><a class="nav-link scrollto" href="login">Login</a></li>
          <?php }else{ ?>
            <li><a class="nav-link scrollto" href="sair">Logout</a></li>
            <?php }?>
          <li><a class="getstarted scrollto" href="#about">WEBIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

   <main id="main">
<br>
  <div class="col-md-6 offset-md-3" >
                <center><b><h1 style=" margin-top: 80px ;color:black; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Alterar Perfil</h1></b></center>
               <br>

   <form method="POST" action="addPerfil"  enctype="multipart/form-data" class="needs-validation" novalidate="" >

  <div class="form-group row">
      <label for="validationCustom01">Nivel Academico</label>
      <select required id="disabledSelect" name="nivelAcademico" class="form-control">
        <option selected="selected">Superior</option>
        <option >Medio</option>
        <option >Basico</option>
        <option >Mestrado</option>
        <option >Doutorado</option>
       
      </select>
   
      <label for="validationCustom02">Habilidades</label>
      <textarea required class="form-control" name="habilidades" id="validationCustom02" placeholder="Ex: 1-Curso de CCNA ; 2-Curso de CCTV" ></textarea>
      <div class="valid-feedback">
        Looks good!
      </div>

  </div>

  <div class="form-group row">

      <label for="disabledSelect">Area de Actuação</label>
      <select required id="disabledSelect" name="area" class="form-control">
        <option selected="selected">T.I</option>
        <option >MECÂNICA</option>
        <option >ELECTRONICA</option>
        <option >SAÚDE</option>
        <option >EDUCAÇÃO</option>
        <option >CONTABILIDADE</option>
        <option >C.CIVIL</option>
        <option >OUTROS</option>
        
      </select>

      <label for="disabledSelect">Categoria de Perfil</label>
      <select required id="disabledSelect" name="categoria" class="form-control">
        <option selected="selected">FreeLancer</option>
        <option >Desempregado</option>
        <option >Ambos</option>
       
      </select>

<style> label{
    color:black; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size:20px;
    }
</style>
  </div>

    <div class="form-group row">
      <label for="validationCustom04">Outras Informações</label>
      <textarea required class="form-control" name="informacoes" id="validationCustom04" placeholder="Ex:Linguas; Objectivo: xxxx xxxx" ></textarea>
      <div class="invalid-feedback">
        Please provide a valid Informações.
      </div>

      <label for="validationCustom05">Imagem</label>
      <input required type="file" class="form-control" name="imagem" id="validationCustom05" placeholder="Img" >
      <div class="invalid-feedback">
        Please provide a valid Img.
      </div>

      <label for="validationCustom05">Curriculum</label>
      <input required type="file" class="form-control" name="curriculum" id="validationCustom05" placeholder="curriculum" >
      <div class="invalid-feedback">
        Please provide a valid Img.
      </div>

      
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
  <button class="btn btn-primary" type="submit">Cadastrar</button>
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