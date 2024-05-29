<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">  
  <?php require_once 'src/views/components/scripts.php'; ?>
</head>

<body>
        <div class="form-group">
            
              <div class="col-md-2 row-cols-sm-2 offset-md-5">
                <center>
                <figure class="figure">
                  <img src="./public/assets/img/team/emprego.png" class="figure-img img-fluid rounded-circle" alt="...">
                </figure>
                </center>
              </div>
               
        </div>

        <div class="form-group row">
            <form method="POST" action="auth" class="page-wrappe row">
              <div class="form-group">
                <div class="col-md-4 mb-3 offset-md-4">
                  <input required type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4 mb-3 offset-md-4">
                  <input required type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>
              <fieldset class="form-group">
                <div class="row">
                  <div class="col-md-4 offset-md-4">               
                   
                  </div>
                </div>
              </fieldset>
                          
              <div class="form-group">
                <div class="col-md-2 offset-md-5">
                    <center>
                  <button type="submit" class="btn btn-primary">Login</button>
                    </center>
                </div><br>
              </div>
              <div class="form-group">
                <div class="col-md-2 offset-md-5">
                    <center>
                  <a href="signup" ><button type="button" class="btn btn-secondary">Registar</button></a>
                    </center>
                </div>
              </div>
      
            </form>
            </div>



  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        

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