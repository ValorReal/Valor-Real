<?php
    session_start(); 
    
    if (isset($_SESSION['id'])) {
        $id_user = $_SESSION['id']; 
    }

    require_once('../evento/conexao.php');
    date_default_timezone_set('America/Sao_Paulo');

    $database = new Database();
    $db = $database->conectar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Valor Real</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="favicon.ico" rel="icon">

 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet"> 

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/lightbox.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">


    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/blogs1530.css">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
   
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="../index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="../imagens/logovalor.png" alt="Icon">
            <h1 class="  brand-text">Valor Real</h1>

        </a>
        <button type="button" class="navbar-toggler fd1" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="../index.php" class="nav-item nav-link active">Home</a>
                <a href="../about.php" class="nav-item nav-link wh">Sobre</a>
                
                <div class="nav-item dropdown">
                    
                </div>
                <a href="../contact.php" class="nav-item nav-link">Contato</a>
            </div>
            <?php 
            if (!isset($_SESSION['id'])) {
            echo '
            <a href="../login.php" class="btn btn-primary">Logar<i class="fa fa-arrow-right ms-3"></i></a>
        </div>'; 
            }
        ?>
            <?php 
            if (isset($_SESSION['id'])) {
            echo '
            <a href="../userarea.php" class="btn btn-primary">Perfil<i class="fa fa-arrow-right ms-3"></i></a>
        </div> 
        |
        <a href="../logout.php" class="btn btn-primary">Sair<i class="fa fa-arrow-right ms-3"></i></a>
        </div>';  
        
            }
        ?>
    </nav>
  
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Falebrenda</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Blog's</a></li>

                    <li class="breadcrumb-item text-primary active" aria-current="page">Falebrenda</li>
                </ol>
            </nav>
        </div> 
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                 <h1>Desbravando o Mundo da Educação Financeira no Brasil</h1>

                 <p>Há quase três décadas, o Brasil mergulhava na era do real, deixando para trás tempos de inflação e taxas de juros estratosféricas. Contudo, essa relação recente com a moeda real ainda carrega desafios financeiros. Enquanto o país avança economicamente, desafios como desigualdades e endividamento persistem. <br><br>

A Educação Financeira surge como uma aliada poderosa nesse cenário. Apesar de sua importância, ela permanece subexplorada no Brasil. A OCDE destaca a educação financeira como um processo para capacitar indivíduos a fazerem escolhas informadas, contribuindo para um futuro mais consciente.<br><br>

A ENEF reforça a necessidade de promover a educação financeira, não apenas como um instrumento individual, mas como um pilar para fortalecer a cidadania e o sistema financeiro nacional. Este blog, inspirado na pesquisa de Brenda Letícia de Campos Antunes, explora os desafios, avanços e a necessidade de colaboração entre setores para construir um futuro financeiro sólido e próspero no Brasil.</p>
<h1>Para iniciarmos: O que é educação financeira? </h1>
                            <p>
                            Entendendo a educação financeira de forma simples: ela é um processo que visa transmitir conhecimentos sobre dinheiro, capacidade de tomar decisões e responsabilidade financeira ao longo da vida. Diferente da educação convencional, a financeira é um aprendizado autêntico que se desenvolve na prática, moldando nossa capacidade integral.<br>

Iniciar esse processo desde cedo é crucial. Por volta dos dois ou três anos, as crianças já começam a perceber que o dinheiro tem um papel importante. É nesse momento que a educação financeira dá seus primeiros passos, ensinando valores das moedas e as regras de equilíbrio financeiro.<br><br>

D'aquino destaca o desafio de educar não apenas para o presente, mas para um futuro que mal podemos imaginar. Desenvolver o espírito empreendedor e estimular o raciocínio inovador são ferramentas essenciais para preparar nossas crianças e jovens para o desconhecido.<br><br>

A mesada surge como uma lição prática. Além de ser um ganho financeiro, ela traz a necessidade de administração. Definir valores, datas e periodicidade estimula a responsabilidade desde cedo. Junto com a mesada, a ideia de poupar para realizar sonhos futuros é introduzida, inicialmente com o clássico "cofrinho".<br><br>

Conversas e orientações ajudam a criança a entender a importância de controlar desejos, estipular limites de gastos e priorizar sonhos futuros. À medida que crescem, conceitos econômicos mais profundos são introduzidos de maneira didática, preparando-os para administrar seus ganhos quando ingressarem na vida adulta.<br><br>

Assim, quando alcançarem a idade adulta, estarão aptos a gerir seus ganhos com eficiência, com uma parte já direcionada para projetos futuros. A educação financeira descomplicada desde a infância é a chave para um futuro financeiro sólido e próspero.

                            </p>

                            <h1>O que a falta dela pode causar?</h1>
                                    <p>
                                    Ao analisar o recente endividamento das famílias brasileiras, fica evidente a preocupante ausência de educação financeira. Do cartão de crédito descontrolado, liderando com 79,5%, às dívidas por carnês (15,5%) e financiamento de carro (9,7%), é nítido que o despreparo financeiro é um fator significativo (FERNANDES, 2019).<br><br>

Essa lacuna é ainda mais acentuada pela falta de planejamento financeiro pessoal e familiar, essencial para acumular bens e valores. Essas estratégias, como destaca PICCINI (2014, p. 36), são fundamentais para a construção de projetos de vida, desde a educação dos filhos até a aposentadoria e empreendedorismo.<br><br>

O alarmante nível de endividamento é impulsionado pela facilidade de acesso ao crédito, criando um ciclo de gastos compulsórios. A pressão para adquirir bens de consumo torna-se um desafio social na "sociedade do consumo". Estratégias de planejamento financeiro, alinhadas às reais necessidades familiares, são cruciais para definir objetivos de consumo e evitar escolhas influenciadas por impulsos imediatos (FERNANDES, 2019).<br><br>

Na economia atual, a conexão entre economia e investimento é crucial para o desenvolvimento sustentável. A produção econômica de longo prazo está intrinsecamente ligada à quantidade de economia gerada para investir em elementos que fortalecem a eficiência e a estabilidade econômica. Essa relação destaca a importância de abordagens conscientes na gestão financeira para promover o desenvolvimento sustentável.
                                    </p>  

                                    <h1>Iniciativas de educação financeira no Brasil</h1> 

                                    <p>
                                        
Abordar a Educação Financeira na sociedade é vital para ampliar a oferta de serviços e produtos financeiros aos consumidores, desempenhando um papel crucial nas atividades econômicas do mercado de capitais.<br><br>
                                Pensando nisso nós do Valor Real criamos uma planilha de controle financeira domestico venha fazer seu login para conferir clicando <a class="cnrtb" href="../plfin.php">aqui!</a> <br><br>
A expansão da oferta de produtos e serviços financeiros foi acompanhada por uma falta de conhecimento dos investidores, contribuindo para a crise financeira global no século XXI, impactando principalmente os países desenvolvidos (FANTIN, 2020). Destaca-se que a falta de educação financeira foi um catalisador significativo para a crise financeira global.<br><br>

No Brasil, o acesso aos produtos e serviços financeiros cresce desde o século XXI, impulsionado pelo equilíbrio econômico após o Plano Real (1994). O país apresenta um índice otimista de conexão da população adulta com o sistema bancário (BANCO CENTRAL, 2018).<br><br>

Diante desse cenário, o governo brasileiro implementou medidas de educação financeira, inspiradas em programas internacionais, através da Estratégia Nacional de Educação Financeira (ENEF). O programa visa tornar os serviços financeiros acessíveis a pessoas excluídas do mercado de capitais (BANCO CENTRAL, 2014).
                                    </p>
                                    <h1>Importância das finanças pessoais nos diferentes estágios da vida.</h1>
                                    <p>
                                        
Como já discutido na pesquisa da <a class="cnrtb" href="https://www.instagram.com/falebrenda/">@falebrenda</a>, o acesso ao crédito tornou-se mais acessível, impulsionando o consumo e destacando a necessidade de um orçamento para gerir eficazmente as finanças. Compreender o mecanismo das finanças pessoais é essencial em todos os estágios da vida, e a introdução precoce da educação financeira pode ser crucial para o desenvolvimento social e pessoal do indivíduo. <br><br>

                                    </p>
                                    <h1>Infanto Juvenil</h1>
                                    <p>
                                        
Durante séculos, a responsabilidade da educação infantil esteve nas mãos das famílias. Como mencionado na pesquisa da <a class="cnrtb" href="https://www.instagram.com/falebrenda/">@falebrenda</a>, as crianças adquiriam habilidades e conhecimentos essenciais interagindo com adultos e outras crianças (Craidy, 2007, p. 13). Com o avanço do urbanismo, a classe burguesa no Século XIII mostrou interesse crescente na educação infantil, destacando a necessidade de uma educação que capacitasse o controle sobre a natureza (Pereira et al, 2009).<br><br>

No contexto brasileiro, as creches foram as primeiras iniciativas de educação infantil, surgindo da necessidade de mães trabalhadoras encontrar cuidados para seus filhos (Craidy, 2007). Historicamente, a legislação reconheceu o direito à educação apenas em 1988, consolidando esse direito para crianças de zero a seis anos (Craidy, 2007).<br><br>

A importância de educar financeiramente desde cedo é crucial. A criança deve entender o valor do dinheiro, aprender a poupar e fazer escolhas conscientes. A educação financeira nessa fase estimula um relacionamento saudável com o dinheiro, preparando para a fase adulta (DE SOUZA, 2012).<br><br>

Modernell (2011) destaca a importância de ensinar às crianças o princípio de economizar para desfrutar de pequenos prazeres. A educação financeira, conforme Kassardjian (2013), pode ser incorporada por meio de atividades práticas e recursos, baseados nos "dez princípios básicos do dinheiro" (GODFREY, 2003).<br><br>

É essencial inserir esses conceitos na rotina infantil, pois no futuro, entender a diferença entre necessidade e desejo, assim como o valor real do dinheiro, será crucial para um completo entendimento econômico. <br><br>
                                    </p>
                                    <h1>Universitário</h1>
                                    <p>
                                    Refletir sobre as finanças pessoais é essencial em todas as etapas da vida, especialmente durante a universidade, onde a transição para o mercado de trabalho começa a se desenhar.<br><br>

É fundamental abordar o tema do dinheiro em casa, mesmo sendo considerado um tabu. Muitos jovens chegam à vida adulta sem conhecimentos básicos sobre gerenciamento financeiro, principalmente quando precisam estudar fora.<br><br>

O período universitário traz despesas adicionais como alimentação, mensalidades e moradia, justificando a importância de oferecer educação financeira aos estudantes. Ao concluir o curso, inicia-se uma nova fase, marcada pela consideração da carreira e por investimentos que garantam estabilidade e equilíbrio, incluindo a preparação para a aposentadoria.<br><br>

Nesse estágio da vida, compreender as finanças pessoais é crucial. O universitário deve analisar sua gestão financeira, considerando gastos fixos mensais e planejando para despesas eventuais, como materiais e projetos. Aproveitar oportunidades de estágio ou trabalhos durante o curso é vital para adquirir experiência na administração financeira, preparando-se para futuros desafios (SHOTS, 2022).<br><br>

É imperativo que o jovem pense no futuro, mantendo um pensamento linear sobre suas finanças, o dinheiro que ganha e como utilizar isso para construir independência financeira. Focar em investimentos ao longo da vida profissional, como previdência privada, proporciona estabilidade após encerrar a carreira (SHOTS, 2022).<br><br>
                                    </p>
                                    <h1>Adultos</h1>

                                    <p>
                                    Muitos adultos enfrentam desafios educacionais, muitas vezes por falta de oportunidades que impedem a conclusão do ensino médio, apesar do progresso na educação de adultos. O EJA (Educação de Jovens e Adultos), uma ferramenta criada pelo Governo Federal, busca superar esses obstáculos, mas desafios persistem.<br><br>

Para fortalecer a educação de jovens e adultos, é crucial incluir a Educação Financeira no currículo escolar, valorizando suas experiências pessoais e profissionais na gestão das finanças diárias (HURTADO, 2020; Ribeiro et al, 2021).<br><br>

Na vida adulta, as responsabilidades financeiras aumentam, e o mercado oferece uma variedade crescente de produtos financeiros. Para aproveitar essas ofertas de maneira positiva, os adultos precisam de conhecimento financeiro apropriado. Campos Silva (2014) destaca a necessidade de constante atualização diante do desenvolvimento sem precedentes na indústria, comércio e tecnologia.<br><br>

A educação financeira se torna ainda mais crucial para adultos e alunos do sistema EJA, contribuindo para novas oportunidades na sociedade. Isso promove o desenvolvimento social, capacitando-os a enfrentar os desafios financeiros típicos dessa faixa etária (Campos Silva, 2014; Ribeiro et al, 2021).<br><br>
                                    </p>
                                    <h1>Aposentados</h1>
                                    <p>
                                        
O endividamento na terceira idade atinge um nível expressivo no Brasil, com aproximadamente 27% dos idosos enfrentando inadimplência, levando muitos a retornarem ao mercado de trabalho (Pfizer, 2021).<br><br>

A preparação financeira para a aposentadoria deve começar na juventude, incluindo a definição de metas a curto, médio e longo prazo, adaptadas à idade atual, à desejada para a aposentadoria e à renda almejada (DE BARROS, 2012).<br><br>

Apesar da popularidade da poupança no Brasil, sua rentabilidade é relativamente baixa. Para garantir estabilidade financeira na aposentadoria, recomenda-se uma carteira de investimentos diversificada, abrangendo previdência complementar, títulos do governo, certificados de Depósito Bancário e ações (DE BARROS, 2012).<br><br>

O sistema de previdência social, composto pelo regime geral, regimes próprios e previdência complementar, é uma preocupação social e governamental (MACEDO, 2017). Além da previdência pública, a privada surge como uma opção para complementar benefícios, especialmente diante da redução da capacidade de trabalho na terceira idade (DEBIASI, 2004).<br><br>

A previdência privada não apenas complementa, mas pode ser a principal fonte de renda, possibilitando a aposentadoria em períodos mais curtos, contribuindo para a independência financeira e melhor qualidade de vida (SOUZA, 2019). Variáveis como aplicação, rentabilidade, taxa de administração, taxa de carregamento e imposto de renda devem ser consideradas ao escolher um plano (DEBIASI, 2004).<br><br>
                                    </p>
                                    <h1>Como a educação financeira pode potencializar o empreendedorismo?</h1> 
                                    <p>
                                    A Educação Financeira desempenha um papel crucial no fortalecimento do empreendedorismo, influenciando positivamente tanto os resultados pessoais quanto os empresariais. No contexto brasileiro, com 42 milhões de empreendedores entre 18 e 64 anos, a administração financeira é essencial para o sucesso de pequenos e grandes negócios (Agência Sebrae, 2023).<br><br>

A falta de investimento em educação financeira resulta em indivíduos carentes de conhecimentos básicos na gestão de recursos, impactando não apenas a esfera pessoal, mas também a empresarial. Dados da pesquisa "Sobrevivência de Empresas" revelam uma taxa de mortalidade de 29%, diretamente relacionada à competência na administração e conhecimento no campo empresarial (SEBRAE, 2021).<br><br>

O nível educacional dos empreendedores desempenha um papel significativo na aquisição de conhecimento, podendo resultar em maior produtividade e retorno financeiro substancial. Programas de treinamento sobre análise de mercado, desenvolvimento de produtos, práticas de administração financeira e contabilidade podem prolongar a vida útil das empresas, contribuindo para o crescimento econômico (CORCINO, 2022).<br><br>

A educação financeira, conforme destacado por BoaVentura (2018), é essencial para disciplinar o uso consciente de instrumentos financeiros na vida pessoal e empresarial. Maximiza a economia, promove a poupança e minimiza riscos associados ao uso inadequado do crédito, evitando o superendividamento.<br><br>

A busca por empréstimos, sem uma educação financeira adequada, pode resultar em aumento de dívidas, comprometendo a renda e afetando a gestão financeira do empreendimento. A falta de planejamento dificulta a prevenção do endividamento e a aplicação eficiente dos recursos, evidenciando a interconexão entre a educação financeira pessoal do empreendedor e o sucesso do negócio.<br><br>
                                    </p>
                                    <h1>Conclusão</h1>
                                    <p>
                                        
Ao explorar a Educação Financeira no Brasil, nota-se sua importância como aliada diante de desafios persistentes como desigualdades e endividamento. Embora subexplorada, a Educação Financeira é crucial para escolhas informadas e fortalecimento cidadão. A ausência desse conhecimento reflete-se no alarmante endividamento das famílias brasileiras.<br><br>

Iniciativas como a ENEF e programas de treinamento destacam-se, promovendo a conscientização sobre a relação entre economia e investimento. Em diferentes estágios da vida, desde a infância até a terceira idade, a Educação Financeira desempenha papel vital, incentivando um relacionamento saudável com o dinheiro.<br><br>

No contexto empresarial, a Educação Financeira é essencial para o sucesso de pequenos e grandes negócios. A falta de investimento nessa área contribui para taxas significativas de mortalidade empresarial. Concluindo, a Educação Financeira não só molda futuros individuais, mas também é fundamental para um país economicamente sólido e próspero.<br><br>
        </p>
        
<h1>E para quem se interessou...</h1>
<p>Para escrever este blog, nos baseamos no TCC da <a class="cnrtb" href="https://www.instagram.com/falebrenda/" target="_blank">@falebrenda</a>, 
   que está disponível para download <a class="cnrtb" href="../imagens/tcc10.pdf" target="_blank">aqui!</a> Siga-a no Instagram clicando no @ destacado.
</p>
<div class="cardt">
                    <a href="https://www.instagram.com/falebrenda/" class="cardb">
    <div class="img-perfil">
        <img class="img-perfil-cen" src="../imagens/falebrenda.png" alt="">
    </div>
    <div class="tt-blog">
        <h1> Brenda Letícia de Campos Antunes</h1>
        <br>
        <p>Economista, embaixadora na @xpinvestimentos e Back Office na @grana.capital</p>
    </div>
</a>

                            
                            
                    </div>
            </div>
        </div>
    </div>
  
   

   
    <div class="container-fluid footer footer text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Bauru</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+55 14 99187-7240</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>darruizhomeoffice@gmail.com</p>
                  
                </div>
              
            
        <div class="custom-footer">
    <div class="container py-5">
    
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="cnrt" href="https://github.com/organizations/ValorReal/">Valor Real</a>, desenvolvido por João Darruiz.
                </div>
               
            </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/easing.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/lightbox.min.js"></script>

 
    <script src="../js/main.js"></script>
</body>

</html>