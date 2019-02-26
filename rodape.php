    <!-- INICIO CONTEUDO RODAPE -->
    <?php
      require_once('apoio.php');
    ?> 
  
    <br><br>

    <div class="rodape">
      <!-- Escola Regional de Redes de Computadores - ERRC 2019<br> 16 a 19 de Setembro, Alegrete/RS -->
      <img style="width: 150px;" alt="ERRC 2019" src="img/logo_errc2019c.png">
    </div><!-- FIM CONTEUDO RODAPE -->
    
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    
    <!-- seleciona item na navbar -->
    $(function() {
      var url = window.location;
      // Will only work if string in href matches with location
      $('ul.nav a[href="'+ url +'"]').parent().addClass('active');

      // Will also work for relative and absolute hrefs
      $('ul.nav a').filter(function() {
          return this.href == url;
      }).parent().addClass('active');

    });
    </script>

    
  </body>
</html>