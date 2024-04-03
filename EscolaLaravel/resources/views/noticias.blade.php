<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
     <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo-etec.webp" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">


    <title>Notícias</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">



     <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="{{asset('images/logo-etec.webp')}}" width="130" height="50" alt="Logo ETEC">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="162" height="50" alt="Logo ETEC">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.html" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="noticias.html" class="navbar-link" data-nav-link>Notícias</a>
          </li>

          <li class="navbar-item">
            <a href="quemsomos.html" class="navbar-link" data-nav-link>Quem Somos</a>
          </li>

          <li class="navbar-item">
            <a href="contato.html" class="navbar-link" data-nav-link>Contato</a>
          </li>

          

        </ul>

      </nav>

      <div class="header-actions">

       

        <a href="#" class="btn has-before">
          <span class="span">Login</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


    <!-- CARROSSEL -->
    
        
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{asset('images/predios.jpg')}}" class="d-block w-100" alt="Primeiro slide">
        </div>
        <div class="carousel-item active">
            <img src="{{asset('images/escola.jpg')}}" class="d-block w-100" alt="Primeiro slide">
          </div>
          <div class="carousel-item active">
            <img src="{{asset('images/concurso.jpg')}}" class="d-block w-100" alt="Primeiro slide">
          </div>
      </div>
      
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    

    <!--CONTEUDO-->
    <div class="container">
      <br>
      <div class="clearfix">
        <img src="{{asset('images/etec-e-fatec.jpeg')}}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <h1>Concursos públicos para ETEC e FATEC</h1>
      
        <p>
         
Estão em curso concursos públicos para a contratação de 2,7 mil docentes e servidores administrativos destinados a atuar nas Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). 
        </p>
      
        <p>
          Estes certames foram autorizados em junho de 2022 e as admissões estão previstas para ocorrer em 2023. O cronograma do concurso para os cargos administrativos, bem como os editais para docentes, que são disponibilizados em fases, estão acessíveis através dos links fornecidos abaixo.
        </p>
      
        <p>
          A estimativa é de contratar 993 professores de Ensino Médio e Técnico, 594 docentes de Ensino Superior, 887 agentes técnicos e administrativos, 227 bibliotecários e 6 especialistas em planejamento educacional. Além disso, foi autorizado o aproveitamento de 80 vagas de professores remanescentes de concursos anteriores.        </p>
      </div>
      
    </div>


    <div class="container">
      <br>
      <div class="clearfix">
        <img src="{{asset('images/processo-seletivo.jpg')}}" class="col-md-6 float-start mb-3 me-md-3" alt="...">
        <h1><spam>Seleção Simplificada para Auxiliar de Docente</spam></h1>
      
        <p>Embarque na Jornada da Educação: Inscrições Abertas para Processo Seletivo Simplificado de Auxiliar de Docente nas ETECs e FATECs de São Paulo!</p>
      
        <p>
          Prepare-se para fazer parte deste importante processo seletivo, onde você poderá compartilhar seu conhecimento, experiência e amor pelo ensino. As inscrições estão abertas para aqueles que desejam desempenhar um papel crucial na formação técnica do Estado de São Paulo. Junte-se a nós nesta missão de educação e crescimento!
        </p>
      </div>
    </div>
    


    <div class="container">
      <br>
      <div class="clearfix">
        <img src="{{asset('images/jovem-aprediz-capa.jpg')}}"class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
        <h1>Programa Aprendiz Paulista</h1>
      
        <p>
         
          Oportunidade Única: Ingresso no Mercado de Trabalho como Aprendiz! Se você tem entre 14 e 24 anos, está matriculado em cursos técnicos profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza e reside em São Paulo, esta é a sua chance de conquistar uma vaga de aprendizagem em empresas parceiras.
        </p>
      
        <p>
          Benefícios incluem salário mínimo por hora, vale transporte, férias remuneradas, FGTS e registro em carteira. Esteja preparado para uma jornada de aprendizado prático e teórico. Junte-se a nós e construa o seu futuro com segurança e experiência!"
        </p>
      
       
      
    </div>
      
   <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-color: white; color: black;">

    <div class="footer-top section">
      <div class="container grid-list">
  
        <div class="footer-brand">
          <a href="#" class="logo">
            <img src="{{asset('images/logo-etec.webp')}}"width="162" height="50" alt="Logo ETEC">
          </a>
        </div>
        
        <ul class="footer-list">
          <li>
            <p class="footer-list-title">ETEC Zona Leste</p>
          </li>
          <li>
            <a href="#" class="footer-link">Home</a>
          </li>
          <li>
            <a href="#" class="footer-link">Notícias</a>
          </li>
          <li>
            <a href="#" class="footer-link">Quem Somos</a>
          </li>
        </ul>
  
        <div class="footer-list">
          <p class="footer-list-title">Contate-nos</p>
          <p class="footer-list-text">
            Digite seu email:
          </p>
          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Seu email" required class="input-field">
            <button type="submit" class="btn has-before">
              <span class="span">Enviar</span>
              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>
          <ul class="social-list">
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
  
      </div>
    </div>
  
    <div class="footer-bottom">
      <div class="container">
      </div>
    </div>
  
  </footer>
  





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </body>
</html>