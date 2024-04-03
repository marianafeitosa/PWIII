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

  <!--CONTEUDO-->
  
  <style>
    /* Estilo CSS personalizado */
    label {
      font-size: 1.3rem; /* Aumenta o tamanho da fonte das labels */
      font-weight: bold; /* Deixa o texto em negrito */
    }
    /* Centraliza as caixas de entrada */
    .form-control {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="mt-5">Formulário de Contato</h2>
  <form>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
    </div>
    <div class="form-group">
      <label for="mensagem">Mensagem:</label>
      <textarea class="form-control" id="mensagem" rows="5" placeholder="Digite sua mensagem" required></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

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