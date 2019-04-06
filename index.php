<?php
    require_once('topo.php');
?>

<!-- BANNER -->
<br><br><br><br>
<div class="img-responsive">
   <!-- <img src="img/banner_v5.png" width="100%" alt="ERRC"> -->
    <picture>
        <source srcset="img/errc-2019_banner_margem_fundo_360.png"  media="(max-width: 360px)">
        <source srcset="img/errc-2019_banner_margem_fundo_720.png"  media="(max-width: 720px)">
        <source srcset="img/errc-2019_banner_margem_fundo_1440.png" media="(max-width: 1440px)">
        <source srcset="img/errc-2019_banner_margem_fundo_2880.png" media="(max-width: 2880px)">
        <source srcset="img/errc-2019_banner_margem_fundo_6300.png" media="(min-width: 6300px)">
        <img src="img/2019_banner_margem_fundo_720.png" width="100%" alt="ERRC">
    </picture>
</div>
<br>

<!-- INICIO CONTEUDO HOME      -->

<div class="container-fluid bg-success">
    <div class="container">
        <h3>Bem-vindo à ERRC 2019!</h3>
        <p>
            A XVII Escola Regional de Redes de Computadores (<b>ERRC 2019</b>) ocorrerá em Alegrete, RS, no período de 16 a 19 de setembro de 2019, durante a <b>Semana Farroupilha</b>. A ERRC 2019 está sendo organizado pelo Programa de Pós-graduação em Engenharia de Software (<a href="http://cursos.unipampa.edu.br/cursos/ppges/" target="_blank" title="Programa de Pós-graduação em Engenharia de Software"><b>PPGES</b></a>) da Universidade Federal do Pampa (<b>Unipampa</b>), pelo Instituto Federal Farroupilha (<b>IFFar</b>) e pelo Parque Científico e Tecnológico do Pampa (<a href="https://sites.unipampa.edu.br/pampatec/" target="_blank" title="Parque Científico e Tecnológico do Pampa"><b>PampaTec</b></a>), com a colaboração de diversas outras instituições de ensino, pesquisa e extensão. A ERRC é realizada anualmente pela Sociedade Brasileira de Computação (<b>SBC</b>) e acompanha a filosofia de outras escolas realizadas no Estado, como a Escola Regional de Alto Desempenho (<a href="https://www.setrem.com.br/erad2019/" target="_blank" title="Escola Regional de Alto Desempenho"><b>ERAD</b></a>) e a Escola Regional de Banco de Dados (<a href="http://www.sbc.org.br/erbd2019/" target="_blank" title="Escola Regional de Banco de Dados"><b>ERBD</b></a>).
        </p>
        
        
        
        
        <p>
            A ERRC é o principal evento regional sobre redes de computadores e sistemas distribuídos. O evento serve como ponto de encontro para alunos e profissionais, apresentando a área para novos talentos e catalisando potenciais colaborações entre a indústria e instituições de ensino, pesquisa e extensão. A área é estratégica para a inserção do Estado nos mercados de tecnologia de ponta, como a Internet das Coisas (<b>IoT</b>) e as tecnologias de comunicação viabilizadoras para a chamada <b>Agricultura da Informação</b>.
        </p>       
    </div>
</div>   

<div class="container-fluid bg-success">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">    
                <?php
                    require_once('datas_importantes.php');
                ?>
            </div>
                  
            <div class="col-md-6 text-left">   
                <h4>Calendário</h4> 
                <!-- 1:1 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;height=600&amp;wkst=1&amp;hl=pt_BR&amp;bgcolor=%23FFFFFF&amp;src=2019errc%40gmail.com&amp;color=%23125A12&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </div>
        </div> <!-- fim row -->
    </div> <!-- fim container -->
    <br> 
    <br>
</div>  
   

</div><!-- FIM CONTEUDO HOME      -->

<?php
    require_once('rodape.php');
?>