<!DOCTYPE html>
<html lang="en">
<?php
include 'db.php';
$sql = "SELECT * from pdf_file";
$query = mysqli_query($conn, $sql);
?>

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
                        <a href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#course">Courses Latest</a>
                    </li>
                    <li class="nav-item">
                        <a href="TP.php">TP</a>
                    </li>
                    <li class="nav-item">
                        <a href="cours.php">cours</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog">Blog</a>
                    </li>


                </ul>
                <a href="admin/index.php">
                    <button class="btn btn-primary">
                        <p class="btn-text">Espace Administration</p>
                        <span class="square"></span>
                    </button>
                </a>

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

            <section class="home" id="home">

                <div class="deco-shape shape-1">
                    <img src="./assets/images/shape-1.png" alt="art shape" width="70">
                </div>
                <div class="deco-shape shape-2">
                    <img src="./assets/images/shape-2.png" alt="art shape" width="55">
                </div>
                <div class="deco-shape shape-3">
                    <img src="./assets/images/shape-3.png" alt="art shape" width="120">
                </div>
                <div class="deco-shape shape-4">
                    <img src="./assets/images/shape-4.png" alt="art shape" width="30">
                </div>

                <div class="home-left">

                    <p class="section-subtitle">Bienvenue sur MathFaress</p>

                    <h1 class="main-heading">
                        Meilleure Coin
                        <span class="underline-img">D'education <img src="./assets/images/banner-line.png" alt="line"></span>
                    </h1>

                    <p class="section-text">
                        Vous trouvez ci_joint un cours complet avec des exercices et des problèmes corrigés sur le calcul des probabilités et l'étude des varaibles aléatoires discrètes ou à densité destiné aux élèves des classes préparatoires aux grandes écoles
                    </p>

                    <div class="home-btn-group">
                        <a href="#course">
                            <button class="btn btn-primary">
                                <p class="btn-text">Commencer Les Cours</p>
                                <span class="square"></span>
                            </button>
                        </a>

                    </div>

                </div>

                <div class="home-right">

                    <div class="img-box">

                        <img src="./assets/images/banner-img-bg.png" alt="colorful background shape" class="background-shape">
                        <img src="./assets/images/banner-img.png" alt="banner image" class="banner-img">

                        <img src="./assets/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
                        <img src="./assets/images/banner-aliment-icon-2.png" alt="" class="icon-2 smooth-zigzag-anim-2" width="240">
                        <img src="./assets/images/banner-aliment-icon-3.png" alt="" class="icon-3 smooth-zigzag-anim-3" width="195">
                        <img src="./assets/images/banner-aliment-icon-4.png" alt="" class="icon-4 drop-anim">

                    </div>

                </div>

            </section>





            <!--
        - #COURSE CATEGORY SECTION
      -->

            <section class="category">

                <p class="section-subtitle">Cours Categorie</p>

                <h2 class="section-title">Explore Popular Courses</h2>

                <ul class="course-item-group">

                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-1.png" alt="category icon" class="category-icon default">

                            <img src="./assets/images/course-category-icon-1-w.png" alt="category icon white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">MPSI</a>
                            </h3>

                            <p class="category-subtitle">COURS & TD</p>
                        </div>

                    </li>


                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-2.png" alt="category icon" class="category-icon default">

                            <img src="./assets/images/course-category-icon-2-w.png" alt="category icon white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">MP</a>
                            </h3>

                            <p class="category-subtitle">COURS & TD</p>
                        </div>

                    </li>


                    <li class="course-category-item">

                        <div class="wrapper">
                            <img src="./assets/images/course-category-icon-3.png" alt="category icon" class="category-icon default">

                            <img src="./assets/images/course-category-icon-3-w.png" alt="category icon white" class="category-icon hover">
                        </div>

                        <div class="course-category-content">
                            <h3 class="category-title">
                                <a href="#">ANALYSE HARMONIQUE</a>
                            </h3>

                            <p class="category-subtitle">COURS & TD </p>
                        </div>

                    </li>








                </ul>

            </section>





            <!--
        - #ABOUT SECTION
      -->

            <section class="about" id="about">

                <div class="about-left">

                    <div class="img-box">
                        <img src="./assets/images/about-img-bg.png" alt="about bg" class="about-bg">

                        <img src="./assets/images/about-img.png" alt="about person" class="about-img">

                        <img src="./assets/images/banner-aliment-icon-1.png" alt="" class="icon-1 smooth-zigzag-anim-1" width="250">
                        <img src="./assets/images/banner-aliment-icon-3.png" alt="" class="icon-2 smooth-zigzag-anim-3" width="195">
                    </div>

                </div>

                <div class="about-right">

                    <p class="section-subtitle">Math Faress</p>

                    <h2 class="section-title">Bienvenue sur notre site</h2>

                    <p class="section-text">
                        Ce site est destiné en priorité aux élèves des classes préparatoires aux grandes écoles d'ingénieurs. Il contient de la documentation pour l'enseignement des mathématiques . Vous y trouverez des fiches de cours , d'exercices , des devoirs surveillés et en temps libre.
                        Je remercie chaleureusement tous ceux d'entre vous qui prennent la peine de me signaler les erreurs qu'ils rencontrent dans mes documents.
                    </p>

                    <ul class="about-ul">

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>Vous trouvez ci_joint des cours complets </p>
                        </li>

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>des exercices et des problèmes corrigés</p>
                        </li>

                        <li>
                            <ion-icon name="checkmark-circle"></ion-icon>
                            <p>des probabilités et l'étude des varaibles aléatoires discrètes ou à densité</p>
                        </li>

                    </ul>
                    <a class="btn-text" href="cours-all.php">
                        <button class="btn btn-primary">

                            <p class="btn-text">Voir Les cours</p>

                            <span class="square"></span>
                        </button>
                    </a>

                </div>

            </section>





            <!--
        - #COURSE SECTION
      -->

            <section class="course" id="course">

                <p class="section-subtitle">Cours & TD en ligne</p>

                <h2 class="section-title">Les derniers element des cours & TD publier</h2>

                <div class="course-grid">

                    <?php
                    include 'db.php';

                    $sql = "SELECT * FROM pdf_file
WHERE Date > NOW() - INTERVAL 30 DAY; ";
                    $query = mysqli_query($conn, $sql);
                    while ($info = mysqli_fetch_array($query)) {
                    ?>


                        <div class="course-card">

                            <div class="course-banner">
                                <img src="admin/screen/<?= $info['image_url'] ?>" alt="course banner">

                                <div class="course-tag-box">
                                    <a href="display_pdf.php?id=<?php echo $info['id']; ?>" class="badge-tag orange">Voir Le Cours</a>

                                </div>
                            </div>

                            <div class="course-content">

                                <h3 class="card-title">
                                    <a href="#"><?php echo $info['Titre_cours']; ?></a>
                                </h3>

                                <div class="wrapper border-bottom">

                                    <div class="author">
                                        <img src="./assets/images/course-instructor-img.jpg" alt="course instructor image" class="author-img">

                                        <a href="#" class="author-name">Prof Faressi</a>
                                    </div>

                                    <div class="rating">
                                        <ion-icon name="star"></ion-icon>
                                        <p><?php echo $info['Date']; ?></p>
                                    </div>

                                </div>

                                <div class="wrapper">
                                    <div class="course-price">Cours Type : <?php echo $info['coursType']; ?></div>

                                    <div class="enrolled">
                                        <div class="icon-user">
                                            <img src="./assets/images/student-icon.png" alt="user icon">
                                        </div>

                                        <p></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    <?php
                    }

                    ?>

                </div>
                <a href="cours-all.php">
                    <button class="btn btn-primary">
                        <p class="btn-text">Voir Tous Les Cours & TD</p>
                        <span class="square"></span>
                    </button>
                </a>
            </section>











            <!--
        - #FEATURES SECTION
      -->

            <section class="features">

                <div class="features-left">

                    <p class="section-subtitle">Core Features</p>

                    <h2 class="section-title">See What Our Mission Are</h2>

                    <ul>

                        <li class="features-item">
                            <div class="item-icon-box blue">
                                <img src="./assets/images/feature-icon-1.png" alt="feature icon">
                            </div>

                            <div class="wrapper">

                                <h3 class="item-title">Student Life</h3>

                                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                                    dictum.</p>

                            </div>
                        </li>

                        <li class="features-item">
                            <div class="item-icon-box pink">
                                <img src="./assets/images/feature-icon-2.png" alt="feature icon">
                            </div>

                            <div class="wrapper">

                                <h3 class="item-title">Best Online Class</h3>

                                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                                    dictum.</p>

                            </div>
                        </li>

                        <li class="features-item">
                            <div class="item-icon-box purple">
                                <img src="./assets/images/feature-icon-3.png" alt="feature icon">
                            </div>

                            <div class="wrapper">

                                <h3 class="item-title">24x7 Program</h3>

                                <p class="item-text">Nulla vestibulum pretium nibh at dignissim. Aliquam vehicula consectetur dignissim
                                    dictum.</p>

                            </div>
                        </li>

                    </ul>

                </div>

                <div class="features-right">
                    <img src="./assets/images/coure-features-img.jpg" alt="core features image">
                </div>

            </section>





            <!--
       




            
        - #TESTIMONIALS
      -->


            <section class="blog" id="blog">

                <p class="section-subtitle">Nos Blog</p>

                <h2 class="section-title">Latest Blog & News</h2>

                <div class="blog-grid">
                    <?php
                    include 'db.php';

                    $sql = "SELECT * FROM article ; ";
                    $query = mysqli_query($conn, $sql);
                    while ($info = mysqli_fetch_array($query)) {
                    ?>

                        <div class="blog-card">

                            <div class="blog-banner-box">
                                <img src="admin/article/<?= $info['image_url'] ?>" alt="Math Faressi">
                            </div>

                            <div class="blog-content">

                                <h3 class="blog-title">
                                    <a href="#"><?php echo $info['titre']; ?></a>
                                </h3>
                                <h3 class="blog-title">
                                    <a href="#"><?php echo $info['texte']; ?></a>
                                </h3>
                                <div class="wrapper">

                                    <div class="blog-publish-date">
                                        <img src="./assets/images/calendar.png" alt="calendar icon">

                                        <a href="#"><?php echo $info['Date']; ?></a>
                                    </div>


                                </div>

                            </div>

                        </div>
                    <?php
                    }

                    ?>





                </div>

    </div>

    </section>











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
                    <a href="#home">Home</a>
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
            Copyright © 2022 <a href="#">plain of digital </a>. All rights reserved.
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