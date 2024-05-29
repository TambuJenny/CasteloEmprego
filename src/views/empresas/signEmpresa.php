<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign Empresa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">  
  <?php

use Webin\Anucios\controllers\RAdesao;
use Webin\Anucios\controllers\RAnucios;
use Webin\Anucios\controllers\RPerfil;

 require_once 'src/views/components/scripts.php'; ?></head>


<body>
<br><br>

<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <center><b><h1 style="color:black; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">JOB LINK</h1></b></center>
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Pesquisar</h2>
                        <form action="">
                            <input type="text" placeholder="Pesquisar Profissional...">
                            <input type="submit" value="Pesquisar">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Profissionais</h2>
                        <?php 
                          $res = new RPerfil;
                          $perfil = $res->MostrarPerfilLimitado();

                          while($p =  $perfil->fetch(PDO::FETCH_ASSOC)){
                            $imagem = $p['imagem'];
                            $area = $p['area'];
                          ?>
                        <div class="thubmnail-recent">
                            <img style="width: 100; height:60px; border-radius: 40px; " src="./public/<?php echo $imagem; ?> " class="recent-thumb" alt="">
                            <h2><a href="signProfissional?idP=<?php echo $p['idP'] ?>"><?php echo $p['nome']; ?></a></h2>
                            <div class="product-sidebar-price">
                                <ins><?php echo $area;?></ins>
                            </div>                             
                      </div>   
                      <?php }?>                   
                    </div>
                   
                </div>
                <!--
                    coloque aqui
                -->
    
                <div class="col-md-8">
                    <div class="product-content-right">
                                               
                        <div class="row">
                            <div class="col-sm-6">
                            <div class="col-sm-6">
                                <div class="product-inner">
                                <?php
                                $id = $_GET['idA'];
                                $res = new RAnucios;
                                $anucio = $res->MostraranucioUnico($id);
                                while($p =  $anucio->fetch(PDO::FETCH_ASSOC)) {
                                ?> 

                                <div class="product-images">
                                    <div class="product-main-img">
                                    <img style="width: 120px; height:80px; border-radius: 40px;" src="./public/assets/Job2.png" alt="">                                    </div>
                                </div>
                            </div>
                            
                                    <h2 class="product-name"><?php echo $p['nome'];?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo $p['titulo'];?></ins>
                                    </div>    
                                    
                                    <?php 
                                      $email = $_SESSION["usuario"]['email'];

                                      if (isset($email)) { ?>
                                        
                                        <?php 
                                        $solicitacao = new RAdesao();
                                        $verificar = $solicitacao->VerificarExists($_SESSION['usuario']['id'],$p['idA']);
                                        if ($verificar) {
                                        ?>
                                        <form method="POST" action="deletarVaga" class="cart">
                                        <button name="idA" value="<?php echo $p['idA'];?>" class="add_to_cart_button" type="submit">Cancelar</button>

                                        <?Php }else{?>
                                          <form method="POST" action="solicitarVaga" class="cart">
                                        <button name="idA" value="<?php echo $p['idA'];?>" class="add_to_cart_button" type="submit">Aderir</button>

                                          <?php }?>
                                    
                                      </form> 
                                      <?php }else{?>

                                        <form method="POST" action="solicitarVaga" class="cart">
                                        <button disabled name="idA" value="<?php echo $p['idA'];?>" class="add_to_cart_button" type="submit">Aderir</button>
                                        <p style="color: crimson;">Não tem permissão para essa operação.</p>
                                      </form> 

                                      <?php } ?>
                                    
                                      
                                       
                                </div>
                                
                            </div>
                        </div>
                        <h2>Descrição da Vaga</h2>  
                         <p style="text-align:justify"><?php echo $p['descricao'];?></p>
                       
                        <h4>Data Publicada</h4>  
                         <p style="text-align:justify"><?php echo $p['data'];?></p>
                         <h4>Data Final</h4>  
                         <p style="text-align:justify"><?php echo $p['dataFinal'];?></p>
                         <h4>Nº de Vagas</h4>  
                         <p style="text-align:justify"><?php echo $p['vagas'];?></p>
                         <h4>Tipo de Contrato</h4>  
                         <p style="text-align:justify"><?php echo $p['contrato'];?></p>
                         <h4>Localização</h4>  
                         <p style="text-align:justify"><?php echo $p['localizacao'];?></p>
                         <h4>Email</h4>  
                        <?php 
                            $email = $_SESSION["usuario"]['email'];
                            if (isset($email)) { ?>
                         <p style="text-align:justify"><?php echo $p['email'];?></p>
                         <?php }else{?>
                          <p style="text-align:justify">xxxxxxxx@email.com</p>
                          <?php }?>
                         <h4>Telefone</h4>  
                         <?php 
                            $email = $_SESSION["usuario"]['email'];
                            if (isset($email)) { ?>
                         <p style="text-align:justify">+244 <?php echo $p['telefone'];?></p>
                         <?php }else{?>
                          <p style="text-align:justify">+244 9xx xxx xxx</p>
                          <?php }?>
                    <?php }?>
                    </div>                    
                </div>
                

</div>
</div>
</div>
</div>
<br>
<!--
COLOCA A QUI O CONTEUDO

-->


     
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <p><a href=""><?php if (isset( $_SESSION["usuario"]['email'])){$email = $_SESSION["usuario"]['email'];
      echo $email ;}?> </a></p>

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
    Direito do autor:
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