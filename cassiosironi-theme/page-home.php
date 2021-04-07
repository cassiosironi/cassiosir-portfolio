<?php //Template Name: Page-Home ?>

<?php get_header() ?>

<main>
    <!--Home-->
    <section id="apresentacaoPortfolio">
      <div class="larguraMaxContainer">
        <article id="apresentacaoTexto">
          <h2 class="imagem-delay">
            Olá, eu sou o<br>
            <span id="nome"><?php bloginfo('name');?></span><br>
            <span class="maquina-escrever"><?php the_field ('descricao_breve'); ?></span>
          </h2>
            <a href="https://www.linkedin.com/in/cassio-sironi-186065142/" target="_blank" class="button">
            <span class="iconify" data-inline="false" data-icon="brandico:linkedin"></span>&nbsp;&nbsp;Meu Linkedin
            </a>
        </article>
        <article id="apresentacaoFoto">
          <img src="<?php echo get_template_directory_uri (); ?>/espaco.png" id="fundo" class="imagem-espaco-delay">
          <a href="#contato"><img src="<?php echo get_template_directory_uri (); ?>/icon-flutuando.png" class="object imagem-iuri-delay">
          </a>
        </article>
      </div>
    </section>

    <!--Sobre mim-->
    <section id="sobre">
      <div class="larguraMaxContainer">
        <section id="sobreMim">
          <article id="sobreFoto">
            <img src="<?php echo get_template_directory_uri (); ?>/profile.png" class="imagem-delay">
          </article>
          <article id="sobreTexto">
            <h2 class="titulo-delay">Sobre mim</h2>
            <p class="descricao-delay">
            <?php the_field ('texto_sobre'); ?>
            </p>          
            <a href="https://www.facebook.com/cassio.sironi/" target="_blank" class="button">
            <span class="iconify" data-icon="foundation:social-facebook" data-inline="false"></span>&nbsp;Meu Facebook
            </a>          
          </article>
          </section>
    
    <!-- Timeline -->

            <section class="2">
            <p class="descricao-delay" style="color: #f2f2f2; padding-right: 80px; padding-left: 80px; text-align: center;">
            Segue abaixo a timeline onde destaco as principais etapas em minha evolução profissional na área de Marketing Digital e Desenvolvimento Web:
            </p>
            <ul class="timeline">

                <!-- Item 1 -->
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag"><?php the_field ('etapa1'); ?></span>
                            <span class="time-wrapper"><span class="time"><?php the_field ('data_etapa1'); ?> </span></span>
                        </div>
                        <div class="desc" style="color: #f2f2f2;"><?php the_field ('descricao_etapa1'); ?></div>
                        
                        <!--<a href="" target="_blank"> 
                        <img src="<?php the_field ('icone_etapa1'); ?>" alt="Etapa 1">
                        </a>
                        -->
                    </div>
                </li>

                <!-- Item 2 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag"><?php the_field ('etapa2'); ?></span>
                            <span class="time-wrapper"><span class="time"><?php the_field ('data_etapa2'); ?> </span></span>
                        </div>
                        <div class="desc" style="color: #f2f2f2;"><?php the_field ('descricao_etapa2'); ?></div>
                        <!--<a href="" target="_blank">
                            <img src="<?php the_field ('icone_etapa2'); ?>" alt="Etapa 2">
                        </a> -->

                    </div>
                </li>


                <!-- Item 3 -->
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag"><?php the_field ('etapa3'); ?></span>
                            <span class="time-wrapper"><span class="time"><?php the_field ('data_etapa3'); ?> </span></span>
                        </div>
                        <div class="desc" style="color: #f2f2f2;"><?php the_field ('descricao_etapa3'); ?></div>
                        <!-- <a href="" target="_blank">
                            <img src="<?php the_field ('icone_etapa3'); ?>" alt="Etapa 3">
                        </a> -->

                    </div>
                </li>



                <!-- Item 4 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag"><?php the_field ('etapa4'); ?></span>
                            <span class="time-wrapper"><span class="time"><?php the_field ('data_etapa4'); ?> </span></span>
                        </div>
                        <div class="desc" style="color: #f2f2f2;"><?php the_field ('descricao_etapa4'); ?></div>
                        <!-- <a href="" target="_blank">
                            <img src="<?php the_field ('icone_etapa4'); ?>" alt="Etapa 4">
                        </a> -->

                    </div>
                </li>

                <!-- Item 5 -->
                <li>
                    <div class="direction-l">
                        <div class="flag-wrapper">
                            <span class="flag"><?php the_field ('etapa5'); ?></span>
                            <span class="time-wrapper"><span class="time"><?php the_field ('data_etapa5'); ?> </span></span>
                        </div>
                        <div class="desc" style="color: #f2f2f2;"><?php the_field ('descricao_etapa5'); ?></div>
                        <!-- <a href="" target="_blank">
                            <img src="<?php the_field ('icone_etapa5'); ?>" alt="Etapa 5">
                        </a> -->

                    </div>
                </li>


                <!-- Item 6 -->
                <li>
                    <div class="direction-r">
                        <div class="flag-wrapper">
                            <span class="flag"><?php the_field ('etapa6'); ?></span>
                            <span class="time-wrapper"><span class="time"><?php the_field ('data_etapa6'); ?> </span></span>
                        </div>
                        <div class="desc" style="color: #f2f2f2;"><?php the_field ('descricao_etapa6'); ?></div>
                        <!-- <a href="" target="_blank">
                            <img src="<?php the_field ('icone_etapa6'); ?>" alt="Etapa 6">
                        </a> -->

                    </div>
                </li>
            </ul>
        </section>

          </div>
    </section>
 
    <!--Projetos-->
    <section id="projetos">
      <div class="larguraMaxContainer">
        <h2 class="titulo-delay">Projetos</h2>
                <a href="https://github.com/cassiosironi" target="_blank" class="button">
                <span class="iconify" data-inline="false" data-icon="akar-icons:github-fill"></span>&nbsp;Meu GitHub
                </a> 
           <article>
          <div class="cards-interval">
            <h3> <?php the_field ('nome_projeto1'); ?></h3>
            <p> <?php the_field ('descricao_projeto1'); ?></p>
            <span>
              <a href="" target="_blank" class="button">
                <button><span class="iconify" data-inline="false" data-icon="bx:bx-link"></span></i>&nbsp;Website</button>
              </a>
              <a href="" target="_blank" class="button">
                <button><span class="iconify" data-inline="false" data-icon="akar-icons:github-fill"></span>&nbsp;GitHub</button>
              </a>
            </span>
          </div>

          <div class="cards-interval">
            <h3> <?php the_field ('nome_projeto2'); ?></h3>
            <p> <?php the_field ('descricao_projeto2'); ?></p>
            <span>
              <a href="" target="_blank" class="button">
                <button><span class="iconify" data-inline="false" data-icon="bx:bx-link"></span>&nbsp;Website</button>
              </a>
              <a href="" target="_blank" class="button">
                <button><span class="iconify" data-inline="false" data-icon="akar-icons:github-fill"></span>&nbsp;GitHub</button>
              </a>
            </span>
          </div>

          <div class="cards-interval">
            <h3> <?php the_field ('nome_projeto3'); ?></h3>
            <p> <?php the_field ('descricao_projeto3'); ?></p>
            <span>
              <a href="" target="_blank" class="button">
                <button><span class="iconify" data-inline="false" data-icon="bx:bx-link"></span>&nbsp;Website</button>
              </a>
              <a href="" target="_blank" class="button">
                <button><span class="iconify" data-inline="false" data-icon="akar-icons:github-fill"></span>&nbsp;GitHub</button>
              </a>
            </span>
          </div>

        </article>
        <a href="https://github.com/cassiosironi?tab=repositories" target="_blank" class="descricao-delay">Repositórios no GitHub</a>
      </div>
    </section>

    <!--Serviços-->
    <section id="servicos">
      <div class="larguraMaxContainer">
        <h2 class="titulo-delay">Serviços</h2>
        <article>
          <div class="cards-interval">
            <span class="iconify" data-inline="false" data-icon="clarity:computer-line"></span>
            <h3>Criação de Sites</h3>
            <p> <?php the_field ('servico1'); ?></p>
          </div>
          <div class="cards-interval">
            <span class="iconify" data-inline="false" data-icon="akar-icons:mobile-device"></span>
            <h3>Sites Responsivos</h3>
            <p><?php the_field ('servico2'); ?></p>
          </div>
          <div class="cards-interval">
            <span class="iconify" data-inline="false" data-icon="clarity:design-line"></span>
            <h3>UI/UX Design</h3>
            <p><?php the_field ('servico3'); ?></p>
          </div>
          <div class="cards-interval">
            <span class="iconify" data-inline="false" data-icon="bi:code-square"></span>
            <h3>Código Semântico</h3>
            <p><?php the_field ('servico4'); ?></p>
          </div>
        </article>
        <article>
          <div class="cards-interval">
            <span class="iconify" data-icon="foundation:social-facebook" data-inline="false"></span>
            <h3>Social Media</h3>
            <p><?php the_field ('servico5'); ?></p>
          </div>
          <div class="cards-interval">
          <span class="iconify" data-icon="fluent:document-page-number-20-filled" data-inline="false"></span>
            <h3>Campanhas Digitais</h3>
            <p><?php the_field ('servico6'); ?></p>
          </div>
          <div class="cards-interval">
            <span class="iconify" data-icon="el:group" data-inline="false"></span>            
            <h3>Geração de Tráfego</h3>
            <p><?php the_field ('servico7'); ?></p>
          </div>
          <div class="cards-interval">
             <span class="iconify" data-icon="fa-solid:funnel-dollar" data-inline="false"></span>
            <h3>Landing Pages</h3>
            <p><?php the_field ('servico8'); ?></p>
          </div>
        </article>
      </div>
    </section>

    <!--Conhecimentos-->
    <section id="conhecimentos">
      <div class="larguraMaxContainer">
        <h2 class="titulo-delay">Conhecimentos</h2>
        <div>

        <div class="larguraMaxContainer">
        <h3 class="titulo-delay">&emsp;Desenvolvimento Web</h3>
        <div>

          <article class="htmlecss cards-interval">
            <div id="dualIcones">
              <span class="iconify" data-inline="false" data-icon="icomoon-free:html-five"></span>
              <span class="iconify" data-inline="false" data-icon="simple-icons:css3"></span>
            </div>
            <h3>HTML e CSS</h3>
            <p><?php the_field ('tempoconhecimento1'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:80%" class="nivelConhecimento"></span></div>
          </article>

          <article class="js cards-interval">
            <span class="iconify" data-inline="false" data-icon="cib:js"></span>
            <h3>JavaScript</h3>
            <p><?php the_field ('tempoconhecimento2'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:60%" class="nivelConhecimento"></span></div>
          </article>

          <article class="bootstrap cards-interval">
          <span class="iconify" data-icon="file-icons:php" data-inline="false"></span>
            <h3>PHP</h3>
            <p><?php the_field ('tempoconhecimento3'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:30%" class="nivelConhecimento"></span></div>
          </article>

          <article class="sass cards-interval">
            <span class="iconify" data-icon="brandico:wordpress" data-inline="false"></span>
            <h3>Wordpress</h3>
            <p><?php the_field ('tempoconhecimento4'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:30%" class="nivelConhecimento"></span></div>
          </article>

          <article class="figma cards-interval">
            <span class="iconify" data-icon="bi:bootstrap-fill" data-inline="false"></span>
            <h3>Bootstrap</h3>
            <p><?php the_field ('tempoconhecimento5'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:30%" class="nivelConhecimento"></span></div>
          </article>

          <article class="reactjs cards-interval">
            <span class="iconify" data-icon="cib:java" data-inline="false"></span>
            <h3>Java</h3>
            <p><?php the_field ('tempoconhecimento6'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:30%" class="nivelConhecimento"></span></div>
          </article>

          <div class="larguraMaxContainer">
        <h3 class="titulo-delay">&emsp;Marketing Digital & Design</h3>
        <div>

          <article class="js cards-interval">
            <span class="iconify" data-icon="file-icons:rdata" data-inline="false"></span>
            <h3>RD Station</h3>
            <p><?php the_field ('tempoconhecimento7'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:70%" class="nivelConhecimento"></span></div>
          </article>

          <article class="js cards-interval">
            <span class="iconify" data-icon="cib:google-analytics" data-inline="false"></span>
            <h3>Google Ads e Analytics</h3>
            <p><?php the_field ('tempoconhecimento8'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:80%" class="nivelConhecimento"></span></div>
          </article>

          <article class="js cards-interval">
            <span class="iconify" data-icon="ps:yahoo-messenger" data-inline="false"></span>
            <h3>Taboola</h3>
            <p><?php the_field ('tempoconhecimento9'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:50%" class="nivelConhecimento"></span></div>
          </article>

          <article class="js cards-interval">
            <span class="iconify" data-icon="file-icons:adobe-xd" data-inline="false"></span>
            <h3>Adobe XD</h3>
            <p><?php the_field ('tempoconhecimento10'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:20%" class="nivelConhecimento"></span></div>
          </article>

          <article class="js cards-interval">
            <span class="iconify" data-icon="cib:adobe-photoshop" data-inline="false"></span>
            <h3>Adobe Photoshop</h3>
            <p><?php the_field ('tempoconhecimento11'); ?> de experiênciaa</p>
            <div class="estrelaConhecimento"><span style="width:70%" class="nivelConhecimento"></span></div>
          </article>

          <article class="js cards-interval">
            <span class="iconify" data-icon="mdi:movie-star" data-inline="false"></span>
            <h3>Videopad</h3>
            <p><?php the_field ('tempoconhecimento12'); ?> de experiência</p>
            <div class="estrelaConhecimento"><span style="width:70%" class="nivelConhecimento"></span></div>
          </article>

        </div>
      </div>
    </section>

    <!---
    <form id="contato" method="post" enctype="text/plain">
      <article id="agradecimento">
        <div>
          <h2>Obrigado pela visita!</h2>
          <h4>Não hesite em mandar-me uma mensagem.</h4>
        </div>
      </article>
      <fieldset id="camposContato">
        <div id="campoFlex">
          <div class="campoPadrao">
            <label>E-mail</label>
            <input name="email" type="email" class="campos" placeholder="Digite e-mail aqui..." required>
          </div>

          <div class="campoPadrao" id="espacoResponsivo">
            <label>Nome</label>
            <input name="nome" type="text" class="campos" placeholder="Digite seu nome aqui..." required>
          </div>
        </div>

        <div id="campoDois">
          <label>Mensagem</label>
          <textarea name="mensagem" id="campoMensagem" cols="30" rows="10"
            placeholder="Digite o motivo do contato aqui..." required></textarea>
        </div>

        <input type="submit" value="Enviar" id="botao">

        <div id="captcha">
          Goo<input type="text" id="campo" maxlength="1" required>le
        </div>
      </fieldset>
    </form>-->

    <!--Scroll top-->
    <div id="stop" class="scrollTop">
      <span>
        <a href=""><span class="iconify" data-inline="false" data-icon="dashicons:arrow-up-alt2"></span></a>
      </span>
    </div>
  </main>

<?php get_footer() ?>