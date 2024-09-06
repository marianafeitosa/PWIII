<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
  <title>ETEC Zona Leste</title>
 

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

  
</head>

<body id="top">

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
            <a href="home.blade.php" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="noticias.blade.php" class="navbar-link" data-nav-link>Notícias</a>
          </li>

          <li class="navbar-item">
            <a href="quemsomos.blade.php" class="navbar-link" data-nav-link>Quem Somos</a>
          </li>

          <li class="navbar-item">
            <a href="contato.blade.php" class="navbar-link" data-nav-link>Contato</a>
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





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('{{asset('images/fotohome.png')}}')">

        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              Descubra a <span class="span">excelência</span> educacional da Etec Zona Leste 
            </h1>

            <p class="hero-text">
              Líder em formação técnica na região leste de São Paulo.
            </p>

            <a href="#" class="btn has-before">
              <span class="span">Encontre seu curso</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>


        </div>
      </section>





      <!-- 
        - CURSOS
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <h1 class="section-subtitle" style="font-size: 2em;">Conheça Nossos Cursos</h1>


        

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <img src="{{asset('images/iconcomputador.png')}}" width="40" height="40" loading="lazy"
                    alt="Online Degree Programs" class="img">
                </div>

                <h3 class="h3" style="color: black;">
                  <a href="#" class="card-title">Novotec Desenvolvimento de Sistemas AMS</a>
              </h3>
              

                <p class="card-text">
                  Durante um período de cinco anos, a modalidade totalmente presencial possibilita que os estudantes concluam os ensinos nos níveis Médio, Técnico (ETEC) e Superior (FATEC).
                </p>

                

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">

                <div class="card-icon">
                  <img src="{{asset('images/iconplanilha.png')}}" width="40" height="40" loading="lazy"
                    alt="Non-Degree Programs" class="img">
                </div>

                <h3 class="h3" style="color: black;">
                  <a href="#" class="card-title">Administração</a>
              </h3>

                <p class="card-text">
                  A dinâmica das organizações, abrangendo desde empresas privadas até organizações não governamentais (ONGs), órgãos públicos, comércio e indústria, é pautada na sua estrutura e funcionamento.
                </p>

                

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <img src="{{asset('images/iconcalculadora.png')}}" width="40" height="40" loading="lazy"
                    alt="Off-Campus Programs" class="img">
                </div>

              
                <h3 class="h3" style="color: black;">
                  <a href="#" class="card-title">Contabilidade</a>
              </h3>
              

                <p class="card-text">
                  Descubra os segredos profundos da Contabilidade: a essencial chave para a estruturação, análise precisa e prosperidade nos empreendimentos comerciais!
                </p>

                

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <img src="{{asset('images/iconcaminhao.png')}}" width="40" height="40" loading="lazy"
                    alt="Hybrid Distance Programs" class="img">
                </div>

               
                <h3 class="h3" style="color: black;">
                  <a href="#" class="card-title">Logística</a>
              </h3>
              
                <p class="card-text">
                  Logística engloba o planejamento do percurso de um produto ou serviço até sua entrega ao cliente de maneira organizada, eficiente e econômica.
                </p>


              </div>
            </li>

          </ul>


          
          <ul class="grid-list">



          </ul>

        </div>
      </section>





      <!-- 
        - SOBRE
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="{{asset('images/salamaker.jpg')}}" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>

            

          </figure>

          <div class="about-content">

            <p class="section-subtitle">QUEM SOMOS</p>

            <h2 class="h2 section-title" style="color: red;">
              Descubra a Etec Zona Leste: Seu Caminho para o Sucesso Profissional
          </h2>
          

            <p class="section-text">
              Uma instituição educacional líder, localizada na Zona Leste de São Paulo. Desde 2008, a Etec Zona Leste oferece excelência acadêmica e preparação para o mercado de trabalho. Aqui está uma visão resumida:
            </p>

            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Localização Estratégica</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Compromisso com a Excelência Educacional</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Preparação para o Mercado de Trabalho                </span>
              </li>

            </ul>

           

          </div>

        </div>
      </section>





      


      <!-- 
        - #VIDEO
      -->

      <section class="video has-bg-image" aria-label="video"
        style="background-image: url('{{asset('images/video-bg.png')}}')">
        <div class="container">

          <div class="video-card">

            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
              <img src="{{asset('images/bannervideo.jpg')}}" width="970" height="550" loading="lazy" alt="video banner"
                class="img-cover">
                <a href="https://youtu.be/HDUT3DwQb0Y?si=L7tr9k54UrM92Epo">
                  <button class="play-btn" aria-label="play video">
                      <ion-icon name="play" aria-hidden="true"></ion-icon>
                  </button>
              </a>
              
            </div>

          

          </div>

        </div>
      </section>



      <!-- 
        - NOTICIAS
      -->

      <section class="section blog has-bg-image" id="blog" aria-label="blog"
        style="background-image: url('{{asset('images/blog-bg.svg')}}')">
        <div class="container">

          <h1 class="section-subtitle">NOTÍCIAS</h1>
          <h2 class="h2 section-title" style="color: black;">Fique por dentro das últimas novidades</h2>


          <ul class="grid-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="{{asset('images/CONCURSO.webp')}}" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">NOTÍCIAS</a>

                  <h3 class="h3" style="color: rgb(184, 10, 10);">
                    <a href="#" class="card-title">Concurso Público</a>
                  </h3>
                  
                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <span class="span">29 de Março de 2024</span>
                    </li>


                  </ul>

                  <p class="card-text">
                    Concursos em Andamento: Mais de 2,7 Mil Vagas para Docentes e Servidores Administrativos em Escolas Técnicas e Faculdades de Tecnologia no Estado de São Paulo
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="{{asset('images/SP.jpg')}}" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">NOTÍCIAS</a>

                  <h3 class="h3" style="color: rgb(184, 10, 10);">
                    <a href="#" class="card-title">Processo Seletivo Simplificado para Auxiliar de Docente</a>
                  </h3>
                  

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <span class="span">29 de Março de 2024</span>
                    </li>

                  

                  </ul>

                  <p class="card-text">
                    Inscreva-se Agora e Faça Parte da Revolução Educacional em São Paulo: Processo Seletivo para Auxiliar de Docente nas ETECs e FATECs!            </p>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner img-holder has-after" style="--width: 370; --height: 370;">
                  <img src="{{asset('images/JOVEMAPRENDIZ.png')}}" width="370" height="370" loading="lazy"
                    alt="Become A Better Blogger: Content Planning" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="noticias.html" class="card-btn" aria-label="read more">
                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                  <a href="#" class="card-subtitle">NOTÍCIAS</a>

                
                  <h3 class="h3" style="color: rgb(184, 10, 10);">
                    <a href="#" class="card-title">Programa Aprendiz Paulista
                    </a>
                  </h3>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="calendar-outline" aria-hidden="true"></ion-icon>

                      <span class="span">29 de Março de 2024</span>
                    </li>

                   

                  </ul>

                  <p class="card-text">
                    Oportunidade única para jovens de São Paulo: ingresso no mercado de trabalho como aprendiz, com benefícios e aprendizado prático garantidos!              </p>

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/blog-shape.png" width="186" height="186" loading="lazy" alt=""
            class="shape blog-shape">

        </div>
      </section>

    </article>
  </main>





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