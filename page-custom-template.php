<?php
/*
Template Name: Index Page
*/
?>

<?php
get_header();
?>

<div class="hero-area1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="main-heading">
          <h1 class="text-anime-style-3">Tenha já a sua residência permanente no Uruguai!</h1>
          <div class="space16"></div>
          <p data-aos="fade-right" data-aos-duration="1000">Nossa assessoria ajuda você a ter seu plano B em um dos melhores países da America Latina.</p>

          <div class="space30"></div>
          <div class="hero1-buttons">
            <a class="theme-btn1" href="#contact">Entre em contato <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a class="theme-btn2" href="#service">Conheça mais <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero1-images">
          <div class="image1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/hero1-main-bg.png" alt="">
          </div>
          <div class="image2 overlay-anim" data-aos="zoom-in-up" data-aos-duration="700">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-novo-img-rafael.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="service10 sp" id="service" style="background-color: #cbcacd;">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto text-center">
        <div class="heading10">
          <h2 class="text-anime-style-3">Benefícios</h2>
        </div>
      </div>
    </div>
    <div class="space30"></div>
    <div class="row">
      <div class="col-lg-4 col-mg-6" data-aos="zoom-in-up" data-aos-duration="700">
        <div class="service-box">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-1-territorial.png" alt="">
          </div>
          <div class="heading">
            <h4>Tributação territorial</h4>
            <p>A renda obtida no exterior pode ser isenta de impostos no Uruguai por até 11 anos, conforme o regime de residência fiscal.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-mg-6" data-aos="zoom-in-up" data-aos-duration="900">
        <div class="service-box">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-2-estabilidade.png" alt="">
          </div>
          <div class="heading">
            <h4>Estabilidade política e econômica</h4>
            <p>O Uruguai é um dos países mais estáveis da América Latina, garantindo segurança para a sua família.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-mg-6" data-aos="zoom-in-up" data-aos-duration="1100">
        <div class="service-box">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-3-isencao.png" alt="">
          </div>
          <div class="heading">
            <h4>Isenção de imposto sobre ganhos de capital</h4>
            <p>Ganhos de capital no exterior não são tributados.<br /></p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-mg-6" data-aos="zoom-in-up" data-aos-duration="900">
        <div class="service-box">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-4-fortunas.png" alt="">
          </div>
          <div class="heading">
            <h4>Ausência de imposto sobre grandes fortunas</h4>
            <p>Não há tributação sobre patrimônio elevado.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-mg-6" data-aos="zoom-in-up" data-aos-duration="700">
        <div class="service-box">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-5-saude.png" alt="">
          </div>
          <div class="heading">
            <h4>Sistema de saúde de qualidade</h4>
            <p>Acesso a um sistema de saúde público e privado de alta qualidade.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-mg-6" data-aos="zoom-in-up" data-aos-duration="1100">
        <div class="service-box">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ico-6-cidadania.png" alt="">
          </div>
          <div class="heading">
            <h4>Facilidade de cidadania e integração</h4>
            <p>Após 3 a 5 anos de residência, é possível solicitar a cidadania uruguaia, com facilidade de integração ao país.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="blog4 sp">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto text-center">
        <div class="heading4">
          <span class="span" data-aos="zoom-in-left" data-aos-duration="700">Blog</span>
          <h2 class="text-anime-style-3">Fique por dentro das novidades</h2>
          <div class="space16"></div>
          <p ata-aos="fade-left" data-aos-duration="800">Temos diversos conteúdos para ajudar você a planejar a sua internacionalização.</p>
        </div>
      </div>
    </div>

    <div class="space30"></div>
    <div class="row">

      <?php
      $recent_posts = new WP_Query(array(
        'posts_per_page' => 3,
      ));

      if ($recent_posts->have_posts()) {
        while ($recent_posts->have_posts()) {
          $recent_posts->the_post();
      ?>
          <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="blog4-box">
              <div class="heading4">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <div class="space16"></div>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                <div class="blog1-border"></div>
                <a href="<?php the_permalink(); ?>" class="learn">Leia mais <span><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo '<p>Nenhum post encontrado.</p>';
      }

      wp_reset_postdata();
      ?>

      <div class="space50"></div>

      <div class="col-lg-12">
        <div class="text-center aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="700">
          <a class="theme-btn1" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Ver todos os posts<span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="contact" class="contact1 sp">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="heading1-w">
          <h2 class="text-anime-style-3">Entre em contato conosco</h2>
          <div class="space16"></div>
          <p data-aos="fade-right" data-aos-duration="900">Nós estamos aqui para ajudar você a proteger o patrimônio da sua família, pagar menos impostos e viver com mais qualidade de vida.</p>

          <div class="" data-aos="fade-right" data-aos-duration="800">
            <div class="contact1-box">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/contact-icon1.png" alt="">
              </div>
              <div class="heading">
                <p>Ligue para nós</p>
                <a href="tel:5511994271484">+55 11 99427-1484</a>
              </div>
            </div>
          </div>

          <div class="" data-aos="fade-right" data-aos-duration="1100">
            <div class="contact1-box">
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/contact-icon2.png" alt="">
              </div>
              <div class="heading">
                <p>Envie um e-mail</p>
                <a href="mailto:contato@uruguaiplanob.com.br">contato@<br />uruguaiplanob.com.br</a>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-6">
        <div class="contact1-form" data-aos="zoom-out" data-aos-duration="900">
          <div class="heading1">
            <h3>Envie uma mensagem</h3>
            <div class="space16"></div>
            <p>Sinta-se à vontade para entrar em contato conosco com qualquer dúvida. Estamos aqui para te ajudar!</p>
          </div>
          <div class="space10"></div>

          <?php echo do_shortcode('[contact-form-7 id="041ced8" title="Contact form 1"]'); ?>

        </div>
      </div>

    </div>
  </div>
</div>
<?php
get_footer();
?>