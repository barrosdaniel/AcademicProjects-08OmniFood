<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta
      name="description"
      content="Omnifood is a premium food delivery service with the mission to bring affordable and healthy meals to as many people as possible."
    />

    <link rel="stylesheet" href="vendors/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="vendors/css/grid.css" type="text/css" />
    <link rel="stylesheet" href="vendors/css/ionicons.min.css" />
    <link rel="stylesheet" href="vendors/css/animate.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="resources/css/styles.css" type="text/css" />
    <link rel="stylesheet" href="resources/css/queries.css" type="text/css" />

    <title>OmniFood | Welcome</title>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="resources/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="resources/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="resources/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="resources/favicons/site.webmanifest" />
    <link
      rel="mask-icon"
      href="resources/favicons/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <link rel="shortcut icon" href="resources/favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
      name="msapplication-config"
      content="resources/favicons/browserconfig.xml"
    />
    <meta name="theme-color" content="#ffffff" />
  </head>

  <body>
    <!--
      Header section
      ======================================================================
    -->
    <header>
      <div id="header"></div>

      <div class="nav-bar-container">
        <div class="top-bar container">
          <img
            class="logo"
            src="resources/img/logo-white.png"
            alt="OmniFood logo image"
          />
          <a href="#header"
            ><img
              class="logo-black"
              src="resources/img/logo.png"
              alt="OmniFood logo image"
          /></a>

          <nav class="main-nav js--main-nav">
            <ul>
              <li><a href="#features">Food delivery</a></li>
              <li><a href="#works">How it works</a></li>
              <li><a href="#cities">Our cities</a></li>
              <li><a href="#plans">Sign up</a></li>
            </ul>
          </nav>
          <a class="mobile-nav-icon js--nav-icon"
            ><i class="ion-navicon round"></i
          ></a>
        </div>
      </div>

      <div class="hero-text-box container">
        <h1>
          Goodbye junk food. <br />
          Hello super healthy meals.
        </h1>
        <a class="button button-full js--scroll-to-plans" href="#"
          >I’m hungry</a
        >
        <a class="button button-ghost js--scroll-to-start" href="#"
          >Show me more
        </a>
      </div>
    </header>

    <!--
      Features section
      ======================================================================
    -->
    <section id="features" class="section-features js--section-features">
      <div class="container">
        <h2>Get food fast &mdash; not fast food</h2>
        <p class="long-copy">
          Hello, we’re Omnifood, your new premium food delivery service. We know
          you’re always busy. No time for cooking. So let us take care of that,
          we’re really good at it, we promise!
        </p>
      </div>

      <div class="container js--waypoint-features-animation">
        <div class="col span-1-of-4 box">
          <i class="ion-ios-infinite-outline icon-big"></i>
          <h3>Up to 365 days/year</h3>
          <p>
            Never cook again! We really mean that. Our subscription plans
            include up to 365 days/year coverage. You can also choose to order
            more flexibly if that's your style.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-stopwatch-outline icon-big"></i>
          <h3>Ready in 20 minutes</h3>
          <p>
            You're only twenty minutes away from your delicious and super
            healthy meals delivered right to your home. We work with the best
            chefs in each town to ensure that you're 100% happy.
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-nutrition-outline icon-big"></i>
          <h3>100% organic</h3>
          <p>
            All our vegetables are fresh, organic and local. Animals are raised
            without added hormones or antibiotics. Good for your health, the
            environment, and it also tastes better!
          </p>
        </div>
        <div class="col span-1-of-4 box">
          <i class="ion-ios-cart-outline icon-big"></i>
          <h3>Order anything</h3>
          <p>
            We don't limit your creativity, which means you can order whatever
            you feel like. You can also choose from our menu containing over 100
            delicious meals. It's up to you!
          </p>
        </div>
      </div>
    </section>

    <!--
      Meals section
      ======================================================================
    -->
    <section class="section-meals">
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/1.jpg"
              alt="Korean bibimbap with egg and vegetables"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/2.jpg"
              alt="Simple italian pizza with cherry tomatoes"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/3.jpg"
              alt="Chicken breast steak with vegetables"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img src="resources/img/4.jpg" alt="Autumn pumpkin soup" />
          </figure>
        </li>
      </ul>
      <ul class="meals-showcase clearfix">
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/5.jpg"
              alt="Paleo beef steak with vegetables"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/6.jpg"
              alt="Healthy baguette with egg and vegetables"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/7.jpg"
              alt="Burger with cheddar and bacon"
            />
          </figure>
        </li>
        <li>
          <figure class="meal-photo">
            <img
              src="resources/img/8.jpg"
              alt="Granola with cherries and strawberries"
            />
          </figure>
        </li>
      </ul>
    </section>

    <!--
      How It Works section
      ======================================================================
    -->
    <section id="works" class="section-steps">
      <div class="container">
        <h2>How it works &ndash; Simple as 1, 2, 3</h2>
      </div>
      <div class="container steps-box">
        <div
          class="col span-1-of-2 steps-box-image js--waypoint-works-animation"
        >
          <img
            class="app-screen"
            src="resources/img/app-iPhone.png"
            alt="Image of iPhone opening Omnifood"
          />
        </div>
        <div class="col span-1-of-2 steps-box-steps">
          <div class="works-step">
            <div>1</div>
            <p>
              Choose the subscription plan that best fits your needs and sign up
              today.
            </p>
          </div>
          <div class="works-step">
            <div>2</div>
            <p>
              Order your delicious meal using our mobile app or website. Or you
              can even call us!
            </p>
          </div>
          <div class="works-step">
            <div>3</div>
            <p>
              Enjoy your meal after less than 20 minutes. See you the next time!
            </p>
          </div>
          <a class="button-app" href="#"
            ><img
              src="resources/img/download-app-ios.png"
              alt="App Store button"
          /></a>

          <a class="button-app" href="#"
            ><img
              src="resources/img/download-app-android.png"
              alt="Play Store button"
          /></a>
        </div>
      </div>
    </section>

    <!--
      Cities section
      ======================================================================
    -->
    <section id="cities" class="section-cities">
      <div class="container"><h2>We're currently in these cities</h2></div>

      <div class="container js--waypoint-cities-animation">
        <div class="col span-1-of-4 box">
          <img
            class="section-cities-img"
            src="resources/img/sydney.jpg"
            alt="Image of Sydney"
          />
          <h3>Sydney</h3>
          <div class="city-feature">
            <p><i class="ion-ios-person icon-small"></i>5200+ happy eaters</p>
            <p><i class="ion-ios-star icon-small"></i>160+ top chefs</p>
            <p>
              <i class="ion-social-twitter icon-small"></i
              ><a href="#">@omnifood_syd</a>
            </p>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img
            class="section-cities-img"
            src="resources/img/melbourne.jpg"
            alt="Image of Melbourne"
          />
          <h3>Melbourne</h3>
          <div class="city-feature">
            <p><i class="ion-ios-person icon-small"></i>4800+ happy eaters</p>
            <p><i class="ion-ios-star icon-small"></i>140+ top chefs</p>
            <p>
              <i class="ion-social-twitter icon-small"></i
              ><a href="#">@omnifood_mel</a>
            </p>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img
            class="section-cities-img"
            src="resources/img/perth.jpg"
            alt="Image of Perth"
          />
          <h3>Perth</h3>
          <div class="city-feature">
            <p><i class="ion-ios-person icon-small"></i>2200+ happy eaters</p>
            <p><i class="ion-ios-star icon-small"></i>60+ top chefs</p>
            <p>
              <i class="ion-social-twitter icon-small"></i
              ><a href="#">@omnifood_per</a>
            </p>
          </div>
        </div>
        <div class="col span-1-of-4 box">
          <img
            class="section-cities-img"
            src="resources/img/canberra.jpg"
            alt="Image of Canberra"
          />
          <h3>Canberra</h3>
          <div class="city-feature">
            <p><i class="ion-ios-person icon-small"></i>1300+ happy eaters</p>
            <p><i class="ion-ios-star icon-small"></i>40+ top chefs</p>
            <p>
              <i class="ion-social-twitter icon-small"></i
              ><a href="#">@omnifood_can</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--
      Testimonials section
      ======================================================================
    -->
    <section class="section-testimonials">
      <div class="container"><h2>Our customers can't live without us</h2></div>

      <div class="container">
        <div class="col span-1-of-3">
          <blockquote>
            <p>
              Omnifood is just awesome! I just launched a startup which leaves
              me with no time for cooking, so Omnifood is a life-saver. Now that
              I got used to it, I couldn't live without my daily meals!
            </p>
            <cite
              ><img
                src="resources/img/customer-1.jpg"
                alt="Alberto Duncan photo"
              />Alberto Duncan</cite
            >
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            <p>
              Inexpensive, healthy and great-tasting meals, delivered right to
              my home. We have lots of food delivery here in Lisbon, but no one
              comes even close to Omifood. Me and my family are so in love!
            </p>
            <cite
              ><img
                src="resources/img/customer-2.jpg"
                alt="Joana Silva photo"
              />Joana Silva</cite
            >
          </blockquote>
        </div>
        <div class="col span-1-of-3">
          <blockquote>
            <p>
              I was looking for a quick and easy food delivery service in San
              Franciso. I tried a lot of them and ended up with Omnifood. Best
              food delivery service in the Bay Area. Keep up the great work!
            </p>
            <cite
              ><img
                src="resources/img/customer-3.jpg"
                alt="Milton Chapman photo"
              />Milton Chapman</cite
            >
          </blockquote>
        </div>
      </div>
    </section>

    <!--
      Plans section
      ======================================================================
    -->
    <section id="plans" class="section-plans js--section-plans">
      <div class="container"><h2>Start eating healthy today</h2></div>

      <div class="container">
        <div class="col span-1-of-3">
          <div class="plan-box js--waypoint-plans-animation">
            <div>
              <h3>Premium</h3>
              <p class="plan-price">399$ <span>per month</span></p>
              <p class="plan-price-meal">That’s only 13.30$ per meal</p>
            </div>
            <div>
              <ul>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>1 meal every
                  day
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Access to
                  newest creations
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Free
                  delivery
                </li>
              </ul>
            </div>
            <div><a href="#" class="button button-full">Sign up now</a></div>
          </div>
        </div>

        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Pro</h3>
              <p class="plan-price">149$ <span>per month</span></p>
              <p class="plan-price-meal">That’s only 14.90$ per meal</p>
            </div>
            <div>
              <ul>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>1 meal 10
                  days/month
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Order 24/7
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Access to
                  newest creations
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Free
                  delivery
                </li>
              </ul>
            </div>
            <div><a href="#" class="button button-ghost">Sign up now</a></div>
          </div>
        </div>

        <div class="col span-1-of-3">
          <div class="plan-box">
            <div>
              <h3>Starter</h3>
              <p class="plan-price">19$ <span>per meal</span></p>
              <p class="plan-price-meal">&nbsp;</p>
            </div>
            <div>
              <ul>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>1 meal
                </li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Order from 8
                  am to 12 pm
                </li>
                <li><i class="ion-ios-close-empty icon-small"></i></li>
                <li>
                  <i class="ion-ios-checkmark-empty icon-small"></i>Free
                  delivery
                </li>
              </ul>
            </div>
            <div><a href="#" class="button button-ghost">Sign up now</a></div>
          </div>
        </div>
      </div>
    </section>

    <!--
      Form section
      ======================================================================
    -->
    <section class="section-form" id="form">
      <div class="container"><h2>We're happy to hear from you</h2></div>

      <div class="container">
        <form
          action="resources/php/mailer-new.php"
          method="post"
          class="contact-form"
        >
          <div class="container">
            <?php

            if($_GET['success'] == 1) {
              echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
            }

            if($_GET['success'] == -1) {
              echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again.</div>";
            }

            ?>
            
          </div>

          <div class="container">
            <div class="col span-1-of-3"><label for="name">Name</label></div>
            <div class="col span-2-of-3">
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Your name"
                required
              />
            </div>
          </div>

          <div class="container">
            <div class="col span-1-of-3"><label for="email">Email</label></div>
            <div class="col span-2-of-3">
              <input
                type="email"
                name="email"
                id="email"
                placeholder="Your email"
                required
              />
            </div>
          </div>

          <div class="container">
            <div class="col span-1-of-3">
              <label for="find-us">How did you find us?</label>
            </div>
            <div class="col span-2-of-3">
              <select name="find-us" id="find-us">
                <option value="friends">Friends</option>
                <option value="search engine" selected>Search Engine</option>
                <option value="ad">Advertisement</option>
                <option value="other">Other</option>
              </select>
            </div>
          </div>

          <div class="container">
            <div class="col span-1-of-3">
              <label for="newsletter">Newsletter?</label>
            </div>
            <div class="col span-2-of-3">
              <input
                type="checkbox"
                name="newsletter"
                id="newsletter"
                checked
              />Yes, please
            </div>
          </div>

          <div class="container">
            <div class="col span-1-of-3">
              <label for="message">Drop us a line</label>
            </div>
            <div class="col span-2-of-3">
              <textarea
                name="message"
                id="message"
                cols="30"
                rows="10"
                placeholder="Your message"
              ></textarea>
            </div>
          </div>

          <div class="container">
            <div class="col span-1-of-3">
              <label for="message">&nbsp;</label>
            </div>
            <div class="col span-2-of-3">
              <input type="submit" value="Send it!" />
            </div>
          </div>
        </form>
      </div>
    </section>

    <!--
      Footer
      ======================================================================
    -->
    <footer>
      <div class="container">
        <div class="span-1-of-2 col">
          <ul class="footer-nav">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">iOS App</a></li>
            <li><a href="#">Android App</a></li>
          </ul>
        </div>

        <div class="span-1-of-2 col">
          <ul class="social-links">
            <li>
              <a href="#"><i class="ion-social-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-googleplus"></i></a>
            </li>
            <li>
              <a href="#"><i class="ion-social-instagram"></i></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <p>&copy; Omnifood and contributors 2018. ABN 88 888 888 888</p>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-130601559-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-130601559-1');
    </script>
  </body>
</html>
