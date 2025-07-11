<?php get_header(); ?>

<main class="site-main">
  <!-- Ваш контент можно вставить сюда -->
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text">
          <h2 class="subheading">Wishbone+Partners</h2>
          <h1 class="heading">Дом<br />красивой архитектуры.</h1>
          <p class="description">
            Мы — архитектурное бюро, специализирующееся на красивом, но
            функциональном дизайне. В основе нашего подхода к дизайну лежат
            удобство использования и доступность — это руководящие принципы
            нашей работы. Подробнее о наших предыдущих проектах, нашем процессе
            и нашей команде читайте ниже.
          </p>
          <a href="#" class="read-more">Подробнее</a>
        </div>
        <div class="hero-image">
          <img src="<?php echo get_template_directory_uri(); ?>./img/hero_image.png" alt="hero image" />
        </div>
      </div>
    </div>
  </section>

  <section class="our_firm" id="about">
    <div class="container">
      <div class="our">
        <div class="firm-title">
          <h2>Наша фирма</h2>
        </div>
        <div class="firm-content">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse varius enim in eros elementum tristique. Duis
            cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
            commodo diam libero vitae erat. Aenean faucibus nibh et justo
            cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
            tristique posuere.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse varius enim in eros elementum tristique. Duis
            cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
            commodo diam libero vitae erat. Aenean faucibus nibh et justo
            cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
            tristique posuere.
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse varius enim in eros elementum tristique. Duis
            cursus, mi quis viverra ornare, eros dolor interdum nulla, ut
            commodo diam libero vitae erat. Aenean faucibus nibh et justo
            cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus
            tristique posuere.
          </p>
          <div class="firm-image">
            <img src="<?php echo get_template_directory_uri(); ?>./img/firm_image.png" alt="firm image" />
            <span>Stephen Collier</span>
            <span>Senior Partner</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="frame">
    <div class="frame-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>./img/frame_image1.png" alt="frame image" />
    </div>
  </section>

  <section class="process">
    <div class="container">
      <div class="our-process">
        <div class="process-title">
          <h2>Как мы делаем то, что делаем.</h2>
          <p>Наш процесс</p>
        </div>
        <div class="process-content">
          <div class="процесс-шаг">
            <div class="step-image">
              <img src="<?php echo get_template_directory_uri(); ?>./img/sketching.png" alt="step image" />
            </div>
            <h2>Эскиз</h2>
            <р>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Нулла
              ut tristique libero. Nulla luctus sapien ac arcu tempor, vitae
              tempor leo iaculis.
              </p>
          </div>
          <div class="процесс-шаг">
            <div class="step-image">
              <img src="<?php echo get_template_directory_uri(); ?>./img/finalizing.png" alt="step image" />
            </div>
            <h2>Завершение</h2>
            <р>
              Адиписинг элит. Nulla ut tristique libero. Nulla vitae tempor
              leo iaculis luctus sapien ac arcu tempor, vitae.
              </p>
          </div>
          <div class="процесс-шаг">
            <div class="step-image">
              <img src="<?php echo get_template_directory_uri(); ?>./img/building.png" alt="step image" />
            </div>
            <h2>Здание</h2>
            <р>
              Nulla ut tristique libero. Lorem ipsum ut tristique libero.
              Nulla luctus sapien ac arcu tempor, vitae lorem ipsum dolor
              Лев Якулис.
              </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="frame">
    <div class="frame-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>./img/frame_image2.png" alt="frame image" />
    </div>
  </section>

  <section class="customers">
    <div class="container">
      <div class="customers-block">
        <div class="customers-textarea">
          <div class="customers-title">
            <h2>Счастливые клиенты.</h2>
            <p>Предыдущие клиенты</p>
          </div>
          <div class="клиенты-текст">
            <р>
              Morbi neque ex, condimentum dapibus congue et, vulputate ut
              язычок. Вестибулум сидеть амет урна турпис. Маурис Эуисмод Элит
              et nisi ultrices, ut faucibus orcitincidunt.
              </p>
          </div>
        </div>
        <div class="customers-image">
          <img src="<?php echo get_template_directory_uri(); ?>./img/customer_1.png" alt="frame image" />
          <img src="<?php echo get_template_directory_uri(); ?>./img/customer_2.png" alt="frame image" />
          <img src="<?php echo get_template_directory_uri(); ?>./img/customer_3.png" alt="frame image" />
          <img src="<?php echo get_template_directory_uri(); ?>./img/customer_4.png" alt="frame image" />
        </div>
      </div>
    </div>
  </section>

  <section class="frame">
    <div class="frame-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>./img/frame_image3.png" alt="frame image" />
    </div>
  </section>

  <section class="projects" id="projects">
    <div class="container">
      <div class="projects-block">
        <div class="projects-title">
          <h2>Рекомендуемые проекты.</h2>
          <p>
            Некоторые из наших последних и самых выдающихся проектов<br />
            от Wishbone+Partners.
          </p>
        </div>
        <div class="projects-image">
          <div class="project-item">
            <img src="<?php echo get_template_directory_uri(); ?>./img/project_1.png" alt="project image" />
          </div>
          <div class="project-item">
            <img src="<?php echo get_template_directory_uri(); ?>./img/project_2.png" alt="project image" />
          </div>
          <div class="project-item">
            <img src="<?php echo get_template_directory_uri(); ?>./img/project_3.png" alt="project image" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team-section" id="team">
    <div class="container">
      <div class="team-area">
        <div class="team-content">
          <h2>Познакомьтесь с нашей командой</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Suspendisse varius enim in eros elementum tristique. Duis
            cursus, mi quis.
          </p>
          <a href="#" class="see-team">See team</a>
        </div>

        <div class="team-grid">
          <div class="team-member">
            <img src="<?php echo get_template_directory_uri(); ?>./img/Stephen Collier.png" alt="Stephen Collier" />
            <div>
              <h4>Stephen Collier</h4>
              <p>Senior Partner</p>
            </div>
          </div>

          <div class="team-member">
            <img src="<?php echo get_template_directory_uri(); ?>./img/Nolan Peters.png" alt="Nolan Peters" />
            <div>
              <h4>Nolan Peters</h4>
              <p>Associate</p>
            </div>
          </div>

          <div class="team-member">
            <img src="<?php echo get_template_directory_uri(); ?>./img/Ferris Wonder.png" alt="Ferris Wonder" />
            <div>
              <h4>Ferris Wonder</h4>
              <p>Associate Partner</p>
            </div>
          </div>

          <div class="team-member">
            <img src="<?php echo get_template_directory_uri(); ?>./img/Aria Stone.png" alt="Aria Stone" />
            <div>
              <h4>Aria Stone</h4>
              <p>Senior Partner</p>
            </div>
          </div>

          <div class="team-member">
            <img src="<?php echo get_template_directory_uri(); ?>./img/Niko Ferry.png" alt="Niko Ferry" />
            <div>
              <h4>Niko Ferry</h4>
              <p>Partner</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="frame">
    <div class="frame-wrapper">
      <img src="<?php echo get_template_directory_uri(); ?>./img/frame_image4.png" alt="frame image" />
    </div>
  </section>

</main>

<?php get_footer(); ?>