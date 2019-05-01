    <!-- INICIO CONTEUDO RODAPE -->
    <?php
      require_once('apoio.php');
    ?> 
  
    <div class="rodape">
      <div class="container">
        <div class="row">
        
          <div class="col-lg-4 text-left">          
              <br>17&ordf Escola Regional de Redes de Computadores
              <br>16 a 19 de setembro de 2019, Alegrete/RS   
              
              <br> 
              <a class="rodape" href="https://www.facebook.com/errc2019"><i class="fab fa-facebook-square">  </i></a> 
              &nbsp;
              <a class="rodape" href="mailto:errc2019@unipampa.edu.br"><i class="fas fa-envelope"></i></a>
              &nbsp;
              <a class="rodape" href="https://goo.gl/maps/a53udsYx2E32"><i class="fas fa-directions"></i></a>
              &nbsp;
              <a class="rodape" href="https://calendar.google.com/calendar/embed?src=2019errc%40gmail.com&ctz=America%2FSao_Paulo"><i class="far fa-calendar-alt"></i></a>
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
    
    <!-- scripts locais -->
    <script type="text/javascript">

  
        // preloader
        $(window).load(function() {
          $('.loader').removeClass('is-active');
        });

        // altera tamanho da navbar 
        $(document).ready(alteraTamanhoNavbar); 
        $(window).scroll(alteraTamanhoNavbar);

        function alteraTamanhoNavbar() {
         // $(window).on('scroll', function () {
              //var tempScrollTop = $(window).scrollTop();
              //console.log("Scroll from Top: " + tempScrollTop.toString());

              if ($(window).scrollTop() < 60) {
                $('.navbar-fixed-top').addClass('grande'); 
                document.getElementById("logo").style.height = "80px";
                document.getElementById("logo").style.marginTop = "-30px";

              } else {
                $('.navbar-fixed-top').removeClass('grande'); 
                document.getElementById("logo").style.height = "40px"; 
                document.getElementById("logo").style.marginTop = "-10px";  
              }
         // });
        }

        // via http://stackoverflow.com/questions/10732690/offsetting-an-html-anchor-to-adjust-for-fixed-header
        $(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top - 5000 //offsets for fixed header
                }, 1000);
                return false;
              }
            }
          });
          //Executed on page load with URL containing an anchor tag.
          if($(location.href.split("#")[1])) {
              var target = $('#'+location.href.split("#")[1]);
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top - 5000 //offset height of header here too.
                }, 1000);
                return false;
              }
            }
        });

        // seleciona item na navbar 
        // fonte: https://stackoverflow.com/questions/12051961/addclass-to-a-href-link-acccoring-to-the-location-href-using-jquery
        $(function() {
          var url = window.location;
          // Will only work if string in href matches with location      
          $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
        
          // Will also work for relative and absolute hrefs
          $('ul.nav a').filter(function() {
              return this.href == url;
          }).parent().addClass('active');
        });
            
         
        // divide listas em duas colunas 
        // adaptado de https://codepen.io/jawittdesigns/pen/zhCrv
        $(function($) {
            var 
                container = $('.lista-em-colunas'),
                num_cols = 3,
                colClass = 'col-sm-4',
                listClass = 'lista',
                rowClass = 'row',
                listItem = 'li';
            
           
            container.each(function() {
                var 
                    items_per_col = new Array(),
                    items = $(this).find(listItem),
                    min_items_per_col = Math.floor(items.length / num_cols),
                    difference = items.length - (min_items_per_col * num_cols);
                 
                //coloca em ordem alfabetica
                items.sort();
                
                // define tamanho para cada coluna 
                for (var i = 0; i < num_cols; i++) {
                    if (i < difference) {
                        items_per_col[i] = min_items_per_col + 1;
                    } else {
                        items_per_col[i] = min_items_per_col;
                    }
                }
                
                // cria linha na div
                $(this).append($('<div ></div>').addClass(rowClass));
                var pointer = 0;
                
                // organiza html para cada coluna 
                for (var i = 0; i < num_cols; i++) {
                    
                    // adiciona coluna na ultima linha
                    
                    $(this).find('.' + rowClass).last().append($('<br><div ></div>').addClass(colClass));
                    // adiciona lista na ultima coluna
                    $(this).find('.' + colClass).last().append($('<ul ></ul>').addClass(listClass));
                    
                    // para item da cada coluna
                    for (var j = 0; j < items_per_col[i]; j++) {
                        // adiciona item na ultima lista
                        $(this).find('.' + listClass).last().append(items[j + pointer]);
                    }
                    pointer += items_per_col[i];
                }
                
            }); // fim container.each 
        }); // fim function
    </script>

    
  </body>
</html>
<!-- FIM CONTEUDO RODAPE -->
    