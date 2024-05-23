<?php 
/**
 * The main template file
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package myportfolio
 * 
 * @since 1.0.0
 */

  get_header(); 
?>

  <!-- Content Wrapper -->
  <div id="content-wrapper">
    <!-- Home -->
    <section id="home" class="full-height px-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1 class="display-4 fw-bold" data-aos="fade-up">
              I'M A <span class="text-brand">WEB DEVELOPER</span><br />FROM
              COLUMBIA, SC
            </h1>
            <p class="lead mt-2 mb-4" data-aos="fade-up" data-aos-delay="300">
              Hi, I'm John, a freelance web developer based in Columbia, SC.
              I specialize in creating beautifully handcrafted WordPress
              websites.
            </p>
            <div data-aos="fade-up" data-aos-delay="600">
              <a href="portfolio" class="btn btn-brand me-3">Explore My Work</a>
              <!-- <a href="#" class="link-custom">Call: (123) 456 7890</a> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Home -->

    <!-- Services -->
    <section id="services" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">SERVICES</h6>
            <h1>Services I Provide</h1>
          </div>
        </div>

        <div class="row gy-4">
          <div class="col-md-4" data-aos="fade-up">
            <div class="card service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-pencil-ruler" style="font-size: 2rem"></i>
              </div>
              <div class="card-body">
                <h4 class=" card-title mt-4 mb-2">Web Design</h4>
                <p class="card-text">
                  I specialize in creating visually appealing, user-friendly websites that effectively communicate your brand's message.
                </p>
                <div class="text-end">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-laptop-code" style="font-size: 2rem"></i>
              </div>
              <div class="card-body">
                <h4 class=" card-title mt-4 mb-2">Web Development</h4>
                <p class="card-text">
                  I offer comprehensive web development services that turn your web designs into fully functional websites. Using the latest technologies and best practices, I develop robust, scalable, and secure websites tailored to your specific needs.
                </p>
                <div class="text-end">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="card service p-4 bg-base rounded-4 shadow-effect">
              <div class="iconbox rounded-4">
                <i class="las la-server" style="font-size: 2rem"></i>
              </div>
              <div class="card-body">
                <h4 class=" card-title mt-4 mb-2">Web Hosting</h4>
                <p class="card-text">
                  To complement my design and development services, I also provide reliable web hosting solutions. My hosting services ensure your website is fast, secure, and always available. I offer various hosting plans tailored to suit your specific business requirements. 
                </p>
                <div class="text-end">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services -->

    <!-- Portfolio -->
    <section id="portfolio" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">PORTFOLIO</h6>
            <h1>Some of My Recent Work</h1>
          </div>
        </div>
        <?php
        if ( have_posts() ) {
          while( have_posts() ) {
            the_post();
            get_template_part( 'template-parts/content', 'portfolio' );
          }

        } else {
          get_template_part( 'template-parts/content', 'none' );
        }
      ?>
      <div class="container mt-5">
        <div class="text-center">
          <h2><a href="portfolio" class="link-custom">Visit Portfolio</a></h2>
        </div>
      </div>
      </div>
    </section>
    <!-- Portfolio -->

    <!-- About -->
    <section id="about" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">ABOUT</h6>
            <h1>Education & Experience</h1>
          </div>
        </div>
        <div class="row gy-5">
          <div class="col-lg-6">
            <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">
              Education
            </h3>
            <div class="row gy-4">
              <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>Fullstack Web Development Bootcamp</h4>
                  <p class="text-brand mb-2">
                    Fullstack Academy (2023 - 2024)
                  </p>
                  <p class="mb-0">
                    Frontend and Backend Development 
                    <ul>
                      <li>HTML, CSS, JavaScript</li>
                      <li>Node.js, Express, PostgreSQL</li>
                      <li>React, Redux</li>
                      <li>Git, GitHub</li>
                    </ul>
                  </p>
                </div>
              </div>

              <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>Self Learning</h4>
                  <p class="text-brand mb-2">
                    Codecademy, YouTube, Udemy (2022 - Present)
                  </p>
                  <p class="mb-0">
                    Skills Developed: 
                    <ul>
                      <li>HTML, CSS, JavaScript, Bootstrap</li>
                      <li>PHP, WordPress, Elementor/Elementor Pro</li>
                      <li>cPanel, WHM, WHMCS</li>
                    </ul>
                  </p>
                </div>
              </div>

            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="mb-4" data-aos="fade-up" data-aos-delay="300">
              Experience
            </h3>
            <div class="row gy-4">
              <div class="col-12" data-aos="fade-up" data-aos-delay="600">
                <div class="bg-base p-4 rounded-4 shadow-effect">
                  <h4>Freelance Web Developer</h4>
                  <p class="text-brand mb-2">
                    Freelance (2022 - Present)
                  </p>
                  <p class="mb-0">
                    Web design and development services for small businesses and
                    individuals. Specializing in creating custom WordPress websites.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About -->

    <!-- Testimonials -->
    <!-- <section id="testimonials" class="full-height px-lg-5">
      <div class="container">
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-lg-8">
            <h6 class="text-brand">TESTIMONIALS</h6>
            <h1>What My Clients Have To Say</h1>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-md-4" data-aos="fade-up">
            <div class="testimonial shadow-effect bg-base p-4 rounded-4">
              <div class="text-brand h5">
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
              </div>
              <p class="my-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
                facilis doloribus consectetur! Amet, exercitationem autem.
              </p>
              <div class="client">
                <h5 class="mb-0">John Doe</h5>
                <p class="mb-0">CEO, Company</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial shadow-effect bg-base p-4 rounded-4">
              <div class="text-brand h5">
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
              </div>
              <p class="my-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
                facilis doloribus consectetur! Amet, exercitationem autem.
              </p>
              <div class="client">
                <h5 class="mb-0">Baby Shark</h5>
                <p class="mb-0">CEO, Company</p>
              </div>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="testimonial shadow-effect bg-base p-4 rounded-4">
              <div class="text-brand h5">
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
                <i class="las la-star"></i>
              </div>
              <p class="my-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil
                facilis doloribus consectetur! Amet, exercitationem autem.
              </p>
              <div class="client">
                <h5 class="mb-0">Jon Snow</h5>
                <p class="mb-0">CEO, Company</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Testimonials -->

    <!-- Contact -->
    <section id="contact" class="full-height px-lg-5">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8 pb-4" data-aos="fade-up">
            <h6 class="text-brand">CONTACT</h6>
            <h1>Interested in working together? Let's talk!</h1>
          </div>
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="300">
            <?php echo do_shortcode('[contact-form-7 id="6f533ef" title="Contact form 1"]'); ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact -->

<?php 
  get_footer();
