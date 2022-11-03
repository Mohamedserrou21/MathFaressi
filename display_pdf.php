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
          <img src="assets/images/prof.svg" style="width:120px; height: 70px;" alt="MathFaress">
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

      <section id="cours" class="event">

        <div class="event-left">
          <?php
          include 'db.php';
          if (isset($_GET['id'])) {
            $user_id = $_GET['id'];
            $sql = "SELECT * FROM `pdf_file` WHERE `id`='$user_id'";
            $query = mysqli_query($conn, $sql);
            while ($info = mysqli_fetch_array($query)) {
          ?>
              <div class="event-banner">

                <embed type="application/pdf" src="admin/pdf/<?php echo $info['pdf']; ?>" width="600" height="600">
              </div>


        </div>

        <div class="event-right">

          <p class="section-subtitle">Math Faressi</p>

          <h2 class="section-title"><?php echo $info['Titre_cours']; ?></h2>

          <div class="event-card-group">

            <div class="event-card">

              <div class="content-left">

                <p class="month"><?php echo $info['Date']; ?></p>
              </div>

              <div class="content-right">
                <div class="schedule">

                  <p class="place">Cycle Preparatoire</p>
                </div>

                <a href="#" class="event-name"><?php echo $info['Titre_cours']; ?></a>
              </div>

            </div>





          </div>

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
            <img src="./assets/images/prof_footer.png" style="width:120px; height: 70px;" alt="MathFaress">
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
            <a href="#">FAQ</a>
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