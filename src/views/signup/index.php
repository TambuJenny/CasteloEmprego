<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signout</title>
    <?php require_once 'src/views/components/scripts.php'; ?></head>
<body>

<body> 
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php"><img src="./public/assets/img/logo.jpg" ></a></h1>
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
          <li><a class="getstarted scrollto" href="menu">WEBIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

<div class="col-md-6 offset-md-3" style="background-color:whitesmoke; margin-top: 150px;">
                <center><b><h1 style="color:black; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">WEBIN</h1></b></center>
               <br>
                <center><b><h2 style="color:cornflowerblue">Preencher o Formulário de Cadastro</h2></b></center> <br><br>   

   <form method="POST" action="register" class="needs-validation"  enctype="multipart/form-data" >

  <div class="form-group row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Primeiro Nome</label>
      <input required type="text" class="form-control" name="nome" id="validationCustom01" placeholder="First name">
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Ultimo nome</label>
      <input required  type="text" class="form-control" name="subnome" id="validationCustom02" placeholder="Last name" >
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustomUsername">Telefone</label>
      <div class="input-group">
        
        <input required type="number" class="form-control" name="telefone" id="validationCustomUsername" placeholder="+244 9XX XXX XXX" aria-describedby="inputGroupPrepend" >
        <div class="invalid-feedback">
          Please choose a Telefone.
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">

        <input required type="email" class="form-control" name="email" id="validationCustomEmail" placeholder="Email" aria-describedby="inputGroupPrepend" >
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-md-6 mb-3">
    
      <label for="validationCustom03">Localização</label>
      <input required type="text" class="form-control" name="localizacao" id="validationCustom03"  placeholder="Localização" >
      <div class="invalid-feedback">
        Please provide a valid Localização.
 
    </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="disabledSelect">Categoria</label>
     <select required id="disabledSelect" name="categoria" class="form-control">
         <option selected="selected">Profissional</option>
        <option >Empregador</option>
        
      </select>
    </div>

  </div>
  <div class="form-group row">
  <div class="col-md-6 mb-3">
    <label for="exampleInputPassword1">Password</label>
    <input required type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="col-md-6 mb-3">
  <label for="exampleInputPassword1">Repita a Password</label>
    <input required type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
</div>

    <div class="form-group row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Descrição</label>
      <textarea required class="form-control" name="descricao" id="validationCustom04" placeholder="Descrição" ></textarea>
    </div>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>

  <div class="form-group">
    <div class="col-md-6 mb-6">
      <input required class="form-check-input" type="checkbox" value="" id="invalidCheck" >
      <label class="form-check-label" for="invalidCheck">
        Aceito os termos de condições
      </label>
      <div class="invalid-feedback">
        Não aceito os termos de condições
      </div>
    </div>
  </div>
  <center>
  <button class="btn btn-primary" type="submit">Cadastrar</button>
</center>
</form>
</div>
<br>

<footer id="footer">
    <div class="footer-top">
      <div class="container">
        

    <div class="container">
      <div class="copyright">
        &copy; Direito do autor: <strong><span>WEBIN</span></strong> 
      </div>
      <div class="credits">
                Feito por <a href="">WEBIN</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
</body>
</body>
</html>