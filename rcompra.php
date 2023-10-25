<?php
    session_start(); 
    
    if (isset($_SESSION['id'])) {
        $id_user = $_SESSION['id']; 
    }

    require_once('evento/conexao.php');
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

   
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/rcompra.css">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="imagens/logovalor.png" alt="Icon">
            <h1 class="  brand-text">Valor Real</h1>

        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link wh">Sobre</a>
                
                <div class="nav-item dropdown">
                    
                </div>
                <a href="contact.php" class="nav-item nav-link">Contato</a>
            </div>
            <?php 
            if (!isset($_SESSION['id'])) {
            echo '
            <a href="login.php" class="btn btn-primary">Logar<i class="fa fa-arrow-right ms-3"></i></a>
        </div>'; 
            }
        ?>
            <?php 
            if (isset($_SESSION['id'])) {
            echo '
            <a href="userarea.php" class="btn btn-primary">Perfil<i class="fa fa-arrow-right ms-3"></i></a>
        </div> 
        |
        <a href="logout.php" class="btn btn-primary">Sair<i class="fa fa-arrow-right ms-3"></i></a>
        </div>';  
        
            }
        ?>
    </nav>
  
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Indicações de Estudo</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Sobre</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">

               
            </div>  
        </div>
    </div>
   
   
    <div class="container-xxl py-5">
    <div class="container">

<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/taesa.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>Taesa, TAEE4, TAEE3, TAEE11</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                A Taesa, ou Transmissora Aliança de Energia Elétrica S.A., é uma empresa brasileira que atua no setor de transmissão de energia elétrica. Fundada em 2000, a empresa desempenha um papel crucial na infraestrutura energética do Brasil. Suas atividades estão estritamente ligadas à construção, operação e manutenção de linhas de transmissão de energia elétrica de alta tensão.
                                                                        <br> <br>
                                                                        Além de ter uma recorrência em sua distribuição 
                                                                        de dividendos e também um contrato de prestação de 
                                                                        serviços com o governo com reajuste 
                                                                        inflacionário e incentivo para a tomada de crédito para expansão.  
                                                            
                                                            </p>
                                                </div>
           
                </div>





</div>


<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/bbse3.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>BB Seguridade, BBSE3</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                A BB Seguridade é uma empresa brasileira que atua no setor de seguros e previdência, desempenhando um papel fundamental no mercado financeiro do país. Fundada como uma subsidiária do Banco do Brasil, a BB Seguridade tem como principal objetivo oferecer uma ampla gama de produtos e serviços relacionados a seguros e previdência, atendendo a diversos segmentos de mercado.
 <br><br>
Suas atividades incluem a comercialização de seguros de vida, saúde, automóveis, residências, além de planos de previdência privada. A empresa desempenha um papel importante na proteção financeira dos brasileiros, oferecendo soluções que garantem a segurança financeira em momentos de adversidade.
<br><br>
A BB Seguridade também se destaca por sua atuação sólida e pela distribuição de dividendos consistentes, o que a torna uma opção atraente para investidores interessados em empresas de seguro e previdência. Além disso, a empresa mantém parcerias estratégicas e utiliza tecnologia avançada para aprimorar a experiência do cliente e expandir sua presença no mercado.
<br><br>
Com seu compromisso com a inovação, segurança financeira e crescimento sustentável, a BB Seguridade desempenha um papel relevante na promoção da estabilidade financeira e na construção de um futuro mais seguro para os brasileiros. Sua atuação no mercado de seguros e previdência contribui para o fortalecimento do setor financeiro do Brasil e para a proteção do patrimônio e do bem-estar das pessoas.
                                                            
                                                            </p>
                                                </div>
           
                </div>

</div>





<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/taurus.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>Taurus Armas, TASA4, TASA3</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                A Taurus Armas é uma empresa brasileira que atua na fabricação e venda de armas de fogo, acessórios relacionados e munições. Fundada em 1939, a Taurus ganhou destaque como uma das principais fabricantes de armas de fogo no Brasil e em nível internacional.
<br><br>
A empresa produz uma variedade de armas, incluindo revólveres, pistolas e espingardas, que são utilizadas tanto para fins militares e de segurança quanto para defesa pessoal e esportes de tiro. A Taurus tem uma presença global e suas armas são exportadas para vários países.
<br><br>

No entanto, é importante destacar que a Taurus também enfrentou críticas e polêmicas relacionadas à qualidade e segurança de seus produtos em alguns momentos de sua história. Questões sobre a segurança e qualidade de armas fabricadas pela Taurus levaram a investigações e discussões sobre regulamentações mais rigorosas no setor de armas de fogo.
<br><br>

A Taurus Armas tem sido parte de debates e controvérsias em relação ao controle de armas de fogo, segurança pública e políticas de armamento em diversos países. Sua presença e atuação no mercado estão relacionadas a questões sensíveis e complexas, envolvendo tanto defensores dos direitos individuais de armamento quanto defensores de restrições mais rígidas.
<br><br>

A empresa é um importante player na indústria de armas de fogo e desempenha um papel significativo no debate em torno do acesso a armas de fogo e suas implicações. Como resultado, a Taurus Armas gera discussões e opiniões divergentes em relação à sua atuação no mercado de armamento.
                                                            </p>
                                                </div>
           
                </div>

</div>







<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/klabin.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>Klabin, KLBN4, KLBN3, KLBN11</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                A Klabin S.A. é uma empresa brasileira que atua no setor de papel e celulose, desempenhando um papel fundamental na indústria de embalagens, papel e produtos de papelão ondulado. Fundada em 1899, a Klabin é uma das maiores produtoras de celulose do Brasil e também possui operações globais, exportando seus produtos para diversos mercados internacionais.
<br><br>
As atividades da Klabin englobam a produção de celulose, papel, embalagens de papelão e produtos florestais. A empresa atende a uma ampla gama de setores, incluindo alimentos, bebidas, higiene pessoal, agronegócio e muitos outros, fornecendo soluções de embalagem que desempenham um papel crucial na proteção e distribuição de produtos.
<br><br>
Além de sua atuação no mercado de papel e celulose, a Klabin também é conhecida por seu compromisso com a sustentabilidade e responsabilidade ambiental. A empresa investe em práticas de gestão florestal responsável, utiliza tecnologia de ponta para otimizar a produção e promove a reciclagem de materiais, contribuindo para a redução do impacto ambiental.
<br><br>
A Klabin também é uma das empresas que se destacam na distribuição consistente de dividendos, atraindo investidores interessados em empresas com um histórico sólido de retorno aos acionistas.
<br><br>
Com uma abordagem centrada na inovação, qualidade e responsabilidade ambiental, a Klabin desempenha um papel importante na cadeia de suprimentos, garantindo embalagens confiáveis e sustentáveis para empresas e consumidores. Sua atuação no setor de papel e celulose contribui para o crescimento da indústria e para a promoção de práticas sustentáveis na produção de papel e embalagens.   

</p>
                                                </div>
           
                </div>

</div>


<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/sanepar.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>Sanepar, SAPR4, SAPR3, SAPR11</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                A Sanepar, ou Companhia de Saneamento do Paraná, é uma empresa brasileira que atua no setor de saneamento básico, desempenhando um papel fundamental no fornecimento de água tratada e serviços de esgoto no estado do Paraná. Fundada em 1963, a Sanepar é uma das maiores companhias de saneamento do Brasil e tem uma sólida reputação no setor.
<br><br>
Suas atividades incluem a captação, tratamento e distribuição de água potável para a população, bem como a coleta, tratamento e destinação adequada de esgoto. A empresa está empenhada em garantir o acesso da população a serviços de saneamento de qualidade, promovendo a saúde pública e a qualidade de vida.
<br><br>
A Sanepar também desempenha um papel importante na preservação do meio ambiente, uma vez que atua ativamente no tratamento de efluentes e na promoção de práticas sustentáveis no setor de saneamento. Além disso, a empresa investe em tecnologias avançadas para melhorar a eficiência de suas operações e reduzir o impacto ambiental.
<br><br>
A companhia tem mantido um histórico de distribuição de dividendos consistentes, o que a torna uma opção atraente para investidores interessados em empresas de saneamento. Além disso, a Sanepar está comprometida com a inovação e com o desenvolvimento de soluções que melhorem a qualidade dos serviços prestados à população.
<br><br>
Com seu compromisso com a oferta de água potável segura, coleta e tratamento de esgoto eficazes e práticas sustentáveis, a Sanepar desempenha um papel relevante na promoção da saúde pública e na preservação do meio ambiente no estado do Paraná. Sua atuação no setor de saneamento é crucial para o bem-estar da população e para o desenvolvimento sustentável da região.






</p>
                                                </div>
           
                </div>

</div>


<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/kepler.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>Kepler Weber, KPL3</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                    Agora vamos com uma Small Cap. <br><br>
                                                                A Kepler Weber é uma empresa brasileira que atua no setor de armazenagem e soluções para a agroindústria, desempenhando um papel crucial na cadeia de suprimentos de alimentos e agronegócio. Fundada em 1925, a empresa é reconhecida como uma das principais fornecedoras de tecnologia e infraestrutura de armazenamento de grãos, sementes e produtos agrícolas no Brasil e em nível internacional.
<br><br>
As atividades da Kepler Weber envolvem o projeto, construção e manutenção de estruturas de armazenamento, como silos, secadores, esteiras transportadoras e sistemas de controle de qualidade. A empresa desempenha um papel vital na preservação da qualidade dos produtos agrícolas e na redução de perdas pós-colheita, o que é essencial para a segurança alimentar e a rentabilidade dos agricultores.
<br><br>
A Kepler Weber também está na vanguarda da inovação, desenvolvendo tecnologias avançadas para monitoramento e gestão de armazenamento, o que contribui para a eficiência e a sustentabilidade da cadeia de suprimentos de alimentos. Além disso, a empresa oferece serviços de consultoria e assistência técnica para otimizar o uso de suas soluções.
<br><br>
A companhia mantém um histórico de compromisso com a qualidade de seus produtos e serviços, atendendo às necessidades de agricultores, cooperativas e empresas do agronegócio. Sua atuação desempenha um papel vital na segurança alimentar, na redução de desperdícios e no suporte à produção agrícola, que é uma parte fundamental da economia brasileira.
<br><br>
Com seu compromisso com a inovação, eficiência e sustentabilidade na agroindústria, a Kepler Weber desempenha um papel relevante na promoção do desenvolvimento agrícola e na garantia de alimentos seguros para o Brasil e o mundo. Sua atuação contribui para a melhoria da produtividade e para a redução do impacto ambiental na agricultura.





</p>
                                                </div>
           
                </div>

</div>


<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/bbdc.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>Bradesco, BBDC4, BBDC3</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                O Bradesco, ou Banco Bradesco S.A., é uma das maiores instituições financeiras do Brasil e desempenha um papel central no sistema bancário do país. Fundado em 1943, o Bradesco é uma das mais renomadas instituições financeiras do Brasil e tem uma presença significativa no cenário internacional.
<br><br>
Suas atividades incluem uma ampla gama de serviços financeiros, como contas bancárias, empréstimos, cartões de crédito, seguros, investimentos, gestão de patrimônio e serviços de pagamento. A instituição atende tanto a clientes individuais quanto a empresas, oferecendo soluções financeiras adaptadas a diversas necessidades.
<br><br>
O Bradesco tem sido um pioneiro na adoção de tecnologia avançada, o que se reflete em seus serviços bancários digitais, aplicativos móveis e recursos inovadores, que proporcionam comodidade e facilidade aos seus clientes.
<br><br>
A instituição bancária também tem uma presença ativa no apoio a causas sociais e de sustentabilidade, demonstrando seu compromisso com a responsabilidade corporativa e a contribuição para o desenvolvimento sustentável.
<br><br>
Com sua extensa rede de agências e ATMs, sua ênfase na inovação tecnológica e sua atuação em diversas áreas financeiras, o Bradesco desempenha um papel fundamental na promoção da inclusão financeira, no desenvolvimento econômico do Brasil e no fortalecimento do setor bancário. A instituição financeira é uma referência no mercado financeiro brasileiro e contribui para o crescimento econômico e a estabilidade financeira do país.










</p>
                                                </div>
           
                </div>

</div>





<div class="rcompra">


            <div class="imgg10">
                                <img src="imagens/telefonica.png" alt="">
            </div>



                <div class="textt10">
                                                <div class="tituloo10">
                                                        <h1>Telefonica, VIVT3, VIVT4</h1>
                                                </div>
                                                <div class="ppp">
                                                                <p>
                                                                A Telefónica, ou Telefónica S.A., é uma das maiores empresas de telecomunicações do mundo, com uma forte presença em diversos países, incluindo Espanha e América Latina. Fundada em 1924, a Telefónica é uma das principais provedoras de serviços de comunicação, conectividade e entretenimento no mercado global.
<br><br>
As atividades da Telefónica englobam uma ampla gama de serviços, incluindo telefonia fixa e móvel, acesso à internet, televisão por assinatura e soluções corporativas, atendendo a milhões de clientes residenciais e empresariais.
<br><br>
A empresa tem se destacado na promoção da conectividade de alta velocidade, desenvolvendo infraestruturas de banda larga e redes de fibra óptica para atender às crescentes demandas de conectividade em um mundo cada vez mais digital. Além disso, a Telefónica tem sido um player relevante no mercado de telefonia móvel, oferecendo serviços inovadores e soluções de mobilidade avançadas.
<br><br>
A Telefónica também se compromete com a sustentabilidade e a responsabilidade corporativa, buscando reduzir seu impacto ambiental e promovendo a inclusão digital em comunidades carentes.
<br><br>
Com sua presença global, ênfase na inovação tecnológica e dedicação à conectividade de alta qualidade, a Telefónica desempenha um papel fundamental na transformação digital, na comunicação eficaz e no fornecimento de serviços de entretenimento em mercados em todo o mundo. A empresa é uma referência no setor de telecomunicações e desempenha um papel crucial na promoção da conectividade global.
<br><br>
Também é muito conhecida por ser a controladora da Vivo.








</p>
                                                </div>
           
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
    <script src="js/wow.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/lightbox.min.js"></script>

 
    <script src="js/main.js"></script>
</body>

</html>