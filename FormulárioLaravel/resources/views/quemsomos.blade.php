<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>Quem Somos</title>
 

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





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('{{asset('images/auditorio.png')}}')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
           Tradição, Inovação e Dedicação à Excelência Educacional
            </h1>


          </div>


        </div>
      </section>


      <!--CONTEUDO-->

      <br>
      <div class="container">
      <h1>ETEC Zona Leste</h1>
      <p>Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se firma como um polo educacional de destaque na região. Desde sua fundação em 2008, a instituição se compromete com a excelência educacional e o desenvolvimento profissional dos estudantes.

        Com uma missão voltada para proporcionar oportunidades de aprendizado que preparem os alunos para os desafios do mercado de trabalho, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros. Além disso, destaca-se por suas atividades extracurriculares, que complementam o currículo escolar e promovem o desenvolvimento integral dos estudantes.</p>
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




