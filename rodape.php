    <!-- INICIO CONTEUDO RODAPE -->
    <?php
      require_once('apoio.php');
    ?> 
  
    <div class="rodape">
      <!-- Escola Regional de Redes de Computadores - ERRC 2019<br> 16 a 19 de Setembro, Alegrete/RS -->
      <div class="container">
        <div class="row">
        
          <div class="col-lg-4 text-left">          
              <br>17&ordf Escola Regional de Redes de Computadores
              <br>16 a 19 de setembro de 2019, Alegrete/RS   
              
              <br> 
              <a class="rodape" href="https://www.facebook.com/events/402757403816054/?ti=cl"><i class="fab fa-facebook-square">  </i></a> 
              &nbsp;
              <a class="rodape" href="mailto:errc2019@unipampa.edu.br"><i class="far fa-envelope"></i></a>
              &nbsp;
              <a class="rodape" href="https://goo.gl/maps/a53udsYx2E32"><i class="fas fa-directions"></i></a>
            
          </div>

          <div class="col-lg-6 text-center">  
            <br>
            <img style="width: 150px;" alt="ERRC 2019" src="img/logo_errc2019c.png">
          </div>

          <div class="col-lg-4 text-center">  
          </div>  
        </div><!-- fim row -->
      </div><!-- fim container -->
    </div><!-- fim rodape -->

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    <!-- preloader -->
    $(window).load(function() {
      $('.loader').removeClass('is-active');
    });

    <!-- altera tamanho da navbar -->
    $(document).ready(function () {
     
      $(window).on('scroll', function () {
          if ($(window).scrollTop() < 100) {
            $('.navbar-fixed-top').addClass('grande'); 
            document.getElementById("logo").style.height = "80px";
            document.getElementById("logo").style.marginTop = "-30px";

          } else {
            $('.navbar-fixed-top').removeClass('grande'); 
            document.getElementById("logo").style.height = "40px"; 
            document.getElementById("logo").style.marginTop = "-10px";  
          }
      });

    }); 

    <!-- seleciona item na navbar -->
    $(function() {
      var url = window.location;
      // Will only work if string in href matches with location      
      $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

      $('ul.nav a').filter(function() {
          return this.href == url;
      }).parent().addClass('active');

    });
    </script>

    
  </body>
</html>
<!-- FIM CONTEUDO RODAPE -->
    