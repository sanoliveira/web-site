<?php
    require_once('topo.php');
?>

<!-- BANNER -->
<br><br><br><br>
<div class="img-responsive">
    <img src="img/banner_v5.png" width="100%" alt="ERRC">
</div>
<br><br>

<!-- INICIO CONTEUDO HOME      -->

<div class="container-fluid bg-success">
    <div class="container">
        <h3>Bem-vindo à ERRC 2019!</h3>
        <p>
        A 17&ordf; edição da Escola Regional de Redes de Computadores (ERRC 2019) ocorrerá em Alegrete, RS, no período de 16 a 19 de setembro de 2019 e será organizada pela Universidade Federal do Pampa (Unipampa) com apoio do recém-criado Programa de Pós-graduação em Engenharia de Software (PPGES) e de diversas outras instituições de ensino, pesquisa e extensão. A ERRC é realizada anualmente pela Sociedade Brasileira de Computação (SBC) e acompanha a filosofia de outras escolas realizadas no Estado, como a Escola Regional de Alto Desempenho (ERAD) e a Escola Regional de Banco de Dados (ERBD). A ERRC tem se tornado um dos eventos mais importantes sobre redes de computadores e sistemas distribuídos, servindo como ponto de encontro para alunos e profissionais, apresentando a área para novos talentos e catalisando potenciais colaborações entre a indústria e instituições de ensino, pesquisa e extensão. A área é estratégica para a inserção do Estado nos mercados de tecnologia de ponta, como a conexão por redes de todos os tipos de dispositivos (a chamada Internet das Coisas - IoT) e as tecnologias de comunicação viabilizadoras para a chamada Agricultura da Informação.
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