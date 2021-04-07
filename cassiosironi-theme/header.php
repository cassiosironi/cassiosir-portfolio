<!DOCTYPE html>
<html lang="pt-br">

<head>  
  <meta charset="UTF-8" />
  <meta name="author" content="Cássio Sironi" />
  <meta name="description" content="Desenvolvedor Front-End e Especialista em Marketing Digital." />
  <meta name="keywords" content="sites, web, desenvolvimento, programador, cassio, front-end, designer, marketing, sironi, digital, social media, freelancer, freela, website" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="content-language" content="pt-br" />
  <meta name="copyright" content="sironi 2021" />
  <meta property="og:image" content="<?php echo get_template_directory_uri (); ?>/preview.png" />
  <meta property="og:title" content="Portfólio | Cassio Sironi - Desenvolvimento Web e Marketing Digital" />
  <meta property="og:description" content="Desenvolvedor Front-End e Especialista em Marketing Digital." />
  <title><?php bloginfo('name');?></title>
  <!--Fonte-->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600&display=swap" rel="stylesheet" /> 
  <!--Meu Style CSS-->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/style.css" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri (); ?>/favicon.png" type="image/x-icon" />

  <?php wp_head();?>
</head>

<body>
  <!--Menu-->
  <header>
    <div class="larguraMaxContainer">
      <nav>
          <h1 class="logo"><img src="<?php echo get_template_directory_uri (); ?>/logo.png"></h1>
          <div class="mobile-menu">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>
          <ul class="nav-list">
              <li><a href="#sobre">Sobre mim</a></li>
              <li><a href="#projetos">Projetos</a></li>
              <li><a href="#servicos">Serviços</a></li>
              <li><a href="#conhecimentos">Conhecimentos</a></li>
          </ul>
      </nav>
    </div>
  </header>
