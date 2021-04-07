<footer>
      <div class="larguraMaxContainer" >
      <h2 class="titulo-delay" style="color: #f2f2f2;"id="contato">Contato</h2>
       <p><?php the_field ('formulario'); ?></p>
      </div>
    <p class="titulo-delay">Orgulhosamente desenvolvido por <?php bloginfo('name');?></p>
    <article id="redesSociais" class="descricao-delay">
      <a href="https://www.linkedin.com/in/cassio-sironi-186065142/" target="_blank">
        <span class="iconify" data-inline="false" data-icon="brandico:linkedin"></span>
      </a>
      <a href="https://github.com/cassiosironi" target="_blank">
        <span class="iconify" data-inline="false" data-icon="akar-icons:github-fill"></span>
      </a>
      <a href="https://www.facebook.com/cassio.sironi/" target="_blank">
        <span class="iconify" data-icon="foundation:social-facebook" data-inline="false"></span>
      </a>
    </article>
</footer>

  <script src="https://unpkg.com/scrollreveal"></script>
  <!--Script dos ícones-->
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <!--JQuery para o scroll-->
  <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
  <!--Scritps-->
  <script src="<?php echo get_template_directory_uri (); ?>/script.js"></script>

  <?php wp_footer();?>
</body>

</html>

