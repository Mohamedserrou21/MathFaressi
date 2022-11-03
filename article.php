<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MathFaress - Online Courses & Education</title>

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/media_queries.css">
  <link rel="stylesheet" href="./assets/css/animation.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700;800;900&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>

  <!--
    - main container
  -->

  <div class="container">

    <!--
      - #HEADER
    -->

    <header>

      <nav class="navbar">

        <div class="navbar-brand">
          <img src="./assets/images/logo.png" alt="MathFaress">
        </div>

        <ul class="navbar-nav">

          <li class="nav-item">
            <a href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a href="#cours">Voir le cours</a>
          </li>
          <li class="nav-item">
            <a href="TP.php">TP</a>
          </li>
          <li class="nav-item">
            <a href="cours.php">Cours</a>
          </li>
          <li class="nav-item">
            <a href="#contact">Contact Us</a>
          </li>

        </ul>

        <button class="btn btn-primary">
          <p class="btn-text">Espace Administration</p>
          <span class="square"></span>
        </button>

        <button class="nav-toggle-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

      </nav>

    </header>





    <main>

      <!--
        - #HOME SECTION
      -->








      <!--
        - #EVENT SECTION
      -->


      <!--
        - #TESTIMONIALS
      -->




      <section class="features">
        <?php
        include 'db.php';
        if (isset($_GET['id'])) {
          $user_id = $_GET['id'];
          $sql = "SELECT * FROM `article` WHERE `id`='$user_id'";
          $query = mysqli_query($conn, $sql);
          while ($info = mysqli_fetch_array($query)) {
        ?>
            <div class="features-left">

              <p class="section-subtitle"><?php echo $info['titre']; ?></p>

              <h2 class="section-title"><?php echo $info['objectif']; ?></h2>

              <ul>

                <li class="features-item">
                  <div class="item-icon-box blue">
                    <img src="./assets/images/feature-icon-1.png" alt="feature icon">
                  </div>

                  <div class="wrapper">

                    <h3 class="item-title">Student Life</h3>

                    <p class="item-text"><?php echo $info['texte']; ?></p>

                  </div>
                </li>





              </ul>

            </div>

            <div class="features-right">
              <img src="admin/article/<?= $info['image_url'] ?>" alt="mathfaress">
            </div>
        <?php
          }
        }



        ?>
      </section>


      <!--
        - #FEATURES SECTION
      -->



      <!--
        - #CONTACT
      -->

      <section class="contact">

        <div class="contact-card" id="contact">
          <img src="./assets/images/cta-bg-img.png" alt="shape" class="contact-card-bg">

          <h2>Start Your Best Online Classes With Us</h2>

          <button class="btn btn-primary">
            <p class="btn-text">Contact Us</p>
            <span class="square"></span>
          </button>
        </div>

      </section>

    </main>





    <!--
      - #FOOTER
    -->

    <footer>

      <div class="footer-grid">

        <div class="grid-item">

          <div class="footer-logo">
            <img src="./assets/images/logo-footer.png" alt="educator logo white">
          </div>

          <p class="footer-text">
            Vous trouvez ci_joint un cours complet avec des exercices et des problèmes corrigés sur le calcul des probabilités et l'étude des varaibles aléatoires discrètes ou à densité destiné aux élèves des classes préparatoires aux grandes écoles
          </p>

          <div class="social-link">
            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </div>

        </div>

        <ul class="grid-item">

          <h4 class="item-heading">Our Link</h4>

          <li class="list-item">
            <a href="index.php">Home</a>
          </li>

          <li class="list-item">
            <a href="#about">About Us</a>
          </li>

          <li class="list-item">
            <a href="#course">Courses</a>
          </li>

          <li class="list-item">
            <a href="#blog">Blog</a>
          </li>

          <li class="list-item">
            <a href="#contact">Contact Us</a>
          </li>

        </ul>

        <ul class="grid-item">

          <h4 class="item-heading">Other Link</h4>

          <li class="list-item">
            <a href="#">Instructor</a>
          </li>

          <li class="list-item">
            <a href="#">FAQ</a>
          </li>

          <li class="list-item">
            <a href="#">Event</a>
          </li>

          <li class="list-item">
            <a href="#">Privacy Policy</a>
          </li>

          <li class="list-item">
            <a href="#">Term & Condition</a>
          </li>

        </ul>

        <div class="grid-item">

          <h4 class="item-heading">Subscribe Now</h4>

          <div class="wrapper">
            <input type="text" name="subscribe" placeholder="Email Address">

            <button class="send-btn">
              <ion-icon name="paper-plane"></ion-icon>
            </button>
          </div>

        </div>

      </div>

      <p class="copyright">
        Copyright © 2022 <a href="#">Plain Of Digital </a>. All rights reserved.
      </p>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>