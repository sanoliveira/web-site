<?php
    require_once('topo.php');
?>

<div class="container-fluid">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <h3>Chamada para Trabalhos</h3>

        <p>
        Autores s&atilde;o convidados a submeter <b>artigos completos</b> e <b>resumos extendidos</b> contendo
        resultados de suas pesquisas. Neste ano, para além dos trabalhos tracionalmente publicados, também encorajamos a submissão de trabalhos com teor predominante prático. Assim, a edição de 2019 contemplará duas <b>trilhas</b> de trabalhos:</p>
        <ul class="lista">
            <li><b>Regular</b>: trabalhos científicos tradicionais, como aqueles que são predominamente realizados em ambiente acadêmico. Podemos citar como exemplo trabalhos que apresentam um apanhado sobre determinada área, propostas para avançar o estado-da-arte e avaliações de desempenho baseadas em modelagem analítica ou simulação.
            </li>
  
            <li><b>Experi&ecirc;ncias</b>: trabalhos que reportam experiências práticas com técnicas ou tecnologias emergentes, que tendem a ser realizados em ambientes extra-academicos. Podemos citar como exemplo na área de redes um trabalho que descreve a implantação de uma rede definida por software (SDN) em uma rede corporativa, e, na área de segurança, um trabalho que avalia os impactos da implantação da tecnologia Intel SGX para autenticação de usuários em um ambiente específico.
            </li>
        </ul>
        </p>
        
        <h4>Comit&ecirc; de Programa</h4>
        <p>
        Cada trabalho ser&aacute; avaliado por tr&ecirc;s ou mais especialistas.
        A lista dos membros do comit&ecirc; de programa est&aacute; dispon&iacute;vel <a href="organizacao.php#comite-de-programa">aqui</a>.
        </p>

        <?php
            require_once('datas_importantes.php');
        ?>

        <br><br>
    </div> <!-- fim container -->
</div> <!-- fim container fluid-->


<div class="container-fluid bg-success">
    <div class="container">
        <h3>T&oacute;picos de Interesse (lista n&atilde;o exaustiva)</h3>
   
        <div class="row">
            <div class="col-md-6" >
                <br>
                <ul class="lista">
                    <li>Arquitetura de redes</li>
                    <li>Computação na nuvem</li>
                    <li>Computação orientada a serviços</li>
                    <li>Computação sensível ao contexto</li>
                    <li>Computação ubíqua/pervasiva</li>
                    <li>Desempenho, escalabilidade e confiabilidade</li>
                    <li>Engenharia e controle de tráfego</li>
                    <li>Especificação, validação e verificação de redes</li>
                    <li>Gerenciamento e operação de redes</li>
                    <li>Futura Internet</li>
                    <li>Medição e monitoração de redes</li>
                    <li>Projeto e análise de redes</li>
                    <li>Protocolos de redes</li>
                    <li>Qualidade de experiência e de serviços</li>
                    <li>Redes autonômicas e auto-organizáveis</li>
                    <li>Redes definidas por software (SDN)</li>
                    <li>Redes de sensores</li>
                </ul><!-- fim lista -->
            </div><!-- fim col 1--> 
            <div class="col-md-6">
                <br>
                <ul class="lista">
                    <li>Redes P2P</li>
                    <li>Redes móveis</li>
                    <li>Redes ópticas</li>
                    <li>Redes sem fio</li>
                    <li>Redes sociais</li>
                    <li>Redes tolerantes a atrasos/interrupções</li>
                    <li>Redes veiculares</li>
                    <li>Redes centradas em informação</li>
                    <li>Redes sustentáveis (Green Networking)</li>
                    <li>Roteamento, comutação e endereçamento</li>
                    <li>Segurança em redes</li>
                    <li>Serviços Web</li>
                    <li>Tecnologia e acesso de banda larga</li>
                    <li>Tolerância a falhas e resiliência</li>
                    <li>TV Digital</li>
                    <li>Virtualização de redes</li>
                    <li>Virtualização de funções de rede (NFV)</li>
                </ul>
            </div> <!-- fim col 2--> 
        </div> <!-- row --> 
        <br><br>
    </div> <!-- fim container --> 
</div><!-- fim container fluid --> 


<div class="container-fluid ">
    <div class="container">
        <h3>Instruções aos Autores</h3>
        <p>
        Os trabalhos devem obrigatoriamente respeitar as seguintes regras. O texto pode ser escrito nos idiomas portugu&ecirc;s,
        espanhol ou inglês. O documento deve estar no formato PDF, seguir o <a href="http://www.sbc.org.br/documentos-da-sbc/category/169-templates-para-artigos-e-capitulos-de-livros">modelo de artigos definido pela SBC</a> e respeitar um tamanho máximo (incluindo resumo, <em>abstract</em>, figuras, referências e anexos):
        </p>
        <ul class="lista">
            <li> 8 (oito) páginas, em caso de artigo completo, ou
            <li> 2 (duas) páginas, em caso de resumo estendido. 
        </ul>
        
        <br>
        <p>
        As submissões serão exclusivamente eletrônicas através do <a href="https://submissoes.sbc.org.br/errc2019">sistema JEMS</a>.
        </p>
    </div> <!-- fim container --> 
</div> <!-- fim container fluid --> 


<div class="container-fluid bg-success">
    <div class="container">
        <?php include 'sugestoes_autores.php';?>
    </div>
</div>
 


<?php
    require_once('rodape.php');
?>
