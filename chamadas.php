<?php
    require_once('topo.php');
?>


<a class="anchor" id="trabalhos"></a>
<div class="container-fluid" >
    <div class="container">
        <br>
        <br>
        <br>
        <h3>Chamada para Trabalhos</h3>

        <p>
        Autores s&atilde;o convidados a submeter <b>artigos completos</b> e <b>resumos estendidos</b> contendo
        resultados de suas pesquisas. Neste ano, além dos trabalhos tradicionalmente publicados, também encorajamos a submissão de trabalhos com teor predominante prático. Assim, a edição de 2019 contemplará duas <b>trilhas</b> de trabalhos:</p>
        <ul class="lista">
            <li><b>Regular</b>: trabalhos científicos tradicionais, como aqueles que são predominamente realizados em ambientes acadêmicos. Podemos citar como exemplo trabalhos que apresentam um apanhado sobre determinada área, propostas para avançar o estado-da-arte e avaliações de desempenho baseadas em modelagem analítica ou simulação.
            </li>
  
            <li><b>Experi&ecirc;ncias</b>: trabalhos que reportam experiências práticas com técnicas ou tecnologias emergentes, que tendem a ser realizados em ambientes extra-acadêmicos. Podemos citar como exemplo na área de redes um trabalho que descreve a implantação de uma rede definida por software (SDN) em uma rede corporativa, e, na área de segurança, um trabalho que avalia os impactos da implantação da tecnologia Intel SGX para autenticação de usuários em um ambiente específico.
            </li>
        </ul>
        
        <?php
            require_once('datas_importantes.php');
        ?>

        <h4>Trabalhos Destaque</h4>
        <p>
        Os <b>melhores trabalhos</b> da ERRC 2019 receber&atilde;o <b>certificado de trabalhos destaque</b>. Al&eacute;m disso, os trabalhos ser&atilde;o recomendados para publica&ccedil;&atilde;o na  <a href="http://seer.upf.br/index.php/rbca">RBCA (Revista Brasileira de Computa&ccedil;&atilde;o Aplicada)</a>.
        </p>

        <h4>Comit&ecirc; de Programa</h4>
        <p>
        Cada trabalho ser&aacute; avaliado por tr&ecirc;s ou mais especialistas.
        A lista dos membros do comit&ecirc; de programa est&aacute; dispon&iacute;vel <a href="organizacao.php#comite-de-programa">aqui</a>.
        </p>
 
        <h4>T&oacute;picos de Interesse (lista n&atilde;o exaustiva)</h4>
        <p></p>        
        <div class="lista-em-colunas">
            <li>Arquitetura de redes</li>
            <li>Computação na nuvem</li>
            <li>Computação orientada a serviços</li>
            <li>Computação sensível ao contexto</li>
            <li>Computação ubíqua/pervasiva</li>
            <li>Desempenho, escalabilidade e confiabilidade</li>
            <li>Engenharia e controle de tráfego</li>
            <li>Especificação, validação e verificação</li>
            <li>Futura Internet</li>
            <li>Gerenciamento e operação de redes</li>
            <li>Medição e monitoração de redes</li>
            <li>Projeto e análise de redes</li>
            <li>Protocolos de redes</li>
            <li>Qualidade de experiência e de serviços</li>
            <li>Redes autonômicas e auto-organizáveis</li>
            <li>Redes centradas em informação (ICN)</li>
            <li>Redes definidas por software (SDN)</li>
            <li>Redes de sensores</li>
            <li>Redes P2P</li>
            <li>Redes móveis</li>
            <li>Redes ópticas</li>
            <li>Redes sem fio</li>
            <li>Redes sociais</li>
            <li>Redes sustentáveis (Green Networking)</li>
            <li>Redes tolerantes a atrasos/interrupções</li>
            <li>Redes veiculares</li>
            <li>Roteamento, comutação e endereçamento</li>
            <li>Segurança em redes</li>
            <li>Serviços Web</li>
            <li>Tecnologia e acesso de banda larga</li>
            <li>Tolerância a falhas e resiliência</li>
            <li>TV Digital</li>
            <li>Virtualização de funções de rede (NFV)</li>
            <li>Virtualização de redes</li>
        </div>
        <br><br>
    </div> <!-- fim container --> 
</div><!-- fim container fluid --> 


<div class="container-fluid bg-success">
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


<div class="container-fluid ">
    <div class="container">
        <?php include 'sugestoes_autores.php';?>
    </div> <!-- fim container --> 
    
</div><!-- fim container fluid --> 
 
<a class="anchor" id="minicursos"></a>
<div class="container-fluid bg-success" >
    <div class="container">
        <h3>Chamada para Oficinas e Minicursos</h3>
        <p>
        Está aberta a chamada para propostas de <b>Minicursos</b> e <b>Oficinas</b>, as quais devem apresentar temas atuais e relevantes na área de <b>Redes</b> de Computadores e <b>Segurança</b> da Informação para <b>profissionais, alunos de Pós-Graduação e alunos de Iniciação Científica</b>. Enquanto os <b>minicursos</b> podem ter caráter <b>majoritariamente conceitual</b>, as <b>oficinas</b> devem ser <b>100% práticas</b>, realizadas em laboratório (utilizando a infraestrutura da Unipampa). A duração poderá ser ajustada conforme a programação final do evento respeitando os interesses dos realizadores, mas sugere-se uma duração de <b>aproximadamente 3 horas</b>.
        </p>
        <br>
        
        <!-- INICIO DATAS IMPORTANTES -->
        <h4>Datas Importantes (<font color="red"> <b>** NOVAS DATAS **</b> </font>)</h4>
        <br>
        <ul class="lista">
            <li><font color="red"><b>20/julho/2019</b></font>: data limite para submiss&atilde;o de propostas</li>
            <li>03/agosto/2019: notificação aos autores</li>
            <li>16-19/setembro/2019: realização do evento</li>
        </ul><!-- fim lista datas -->
        <!-- FIM DATAS IMPORTANTES -->
        <br>


        <h4> Proposta</h4>
        <p>
        Cada proposta deve ter até quatro páginas, seguindo o modelo de artigo da Sociedade Brasileira de Computação (SBC), contemplando:
        </p>
        <ol>
            <li>Identificação
            <ol>
                <li>Título</li>
                <li>Resumo</li>
                <li>Nível (básico, intermediário, avançado)</li>
                <li>Tipo (minicurso, oficina)</li>
            </ol><!-- fim lista identificação -->
            </li>
            <li>Conceitualização:
            <ol>
                <li>Justificativa - relevância para a Escola Regional de Redes de Computadores e/ou Workshop de Segurança da Informação e Sistemas Computacionais</li>
                <li>Detalhamento dos tópicos abordados </li>
                <li>Referências</li>
            </ol><!-- fim lista Conceitualização -->
            </li>
            <li>Organização:
            <ol>
                <li>Biografia breve dos proponentes e apresentadores</li>
                <li>Público-alvo (profissionais, pós-graduação e/ou IC) e conhecimentos prévios necessários para participar</li>
                <li>Recursos necessários (por parte da organização do evento e dos participantes) </li>
                <li>Tempo de duração estimado (aproximadamente 3 horas)</li>
            </ol><!-- fim lista Organização -->
            
            </li>
        </ol><!-- fim lista datas -->
        
        <br>
        <h4>Submissão</h4>
        <p>
        Cada proposta deve ser submetida em formato PDF através de e-mail, com assunto ``Proposta para Minicursos e Oficinas ERRC 2019'', enviado para <a href="mailto:errc2019@unipampa.edu.br">errc2019@unipampa.edu.br</a> até a data limite de submissão.
        </p>

        <h4>Minicursos e Oficinas Selecionados</h4>
        <p>
        Os minicursos e oficinas selecionados deverão ser apresentados durante a ERRC 2019 de acordo com a programação (a ser definida). Os apresentadores receberão isenção de inscrição na Escola.
        </p>

        <p>
        Os minicursos deverão ser acompanhados de um texto entre 15 e 20 páginas. Esse texto deve seguir o <a href="http://www.sbc.org.br/documentos-da-sbc/category/169-templates-para-artigos-e-capitulos-de-livros">modelo de capítulo de livro da SBC</a>, e fará parte dos anais do evento. As oficinas devem ser acompanhadas de material didático apropriado, como um link para algum site contendo instruções. Esse material será referenciado no site do evento.
        </p>

        <h4>Dúvidas</h4>
        <p>
        Em caso de dúvidas, entre em contato com o <a href="https://errc.sbc.org.br/2019/organizacao.php?minicursos">comitê organizador</a>.
        </p>
        
        <br>
    </div> <!-- fim container --> 
</div> <!-- fim container fluid --> 

<?php
    require_once('rodape.php');
?>
