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
                        <a href="index.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="TP.php">TP</a>
                    </li>
                    <li class="nav-item">
                        <a href="cours-all.php">cours</a>
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







            <!--
        



           
        - #COURSE SECTION
      -->

            <section class="course" id="course">

                <p class="section-subtitle">Cours & TD en ligne</p>

                <h2 class="section-title">Decouvrir Nos cours & TP publier</h2>

                <div class="course-grid">

                    <?php
                    include 'db.php';

                    $sql = "SELECT * FROM pdf_file ";
                    $query = mysqli_query($conn, $sql);
                    while ($info = mysqli_fetch_array($query)) {
                    ?>


                        <div class="course-card">

                            <div class="course-banner">
                                <img src="admin/screen/<?= $info['image_url'] ?>" alt="Math Faressi">

                                <div class="course-tag-box">

                                    <a href="display_pdf.php?id=<?php echo $info['id']; ?>" class="badge-tag blue">Voir le cours</a>
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
                        Duis a tempor magna. Maecenas ligula felis, imperdiet quis arcu eget, blandit ultricies risus. Vivamus
                        fringilla urna
                        vel risus congue accumsan.
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
                Copyright © 2022 <a href="#">Plain Of Digital</a>. All rights reserved.
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