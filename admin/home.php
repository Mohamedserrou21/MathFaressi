<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <?php
     include 'db_conn.php';


     ?>
     <!DOCTYPE html>
     <html lang="en">

     <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title> Admin || <?php echo $_SESSION['name']; ?></title>
          <link rel="stylesheet" href="css/all.min.css" />
          <link rel="stylesheet" href="css/framework.css" />
          <link rel="stylesheet" href="css/master.css" />
          <link rel="preconnect" href="https://fonts.googleapis.com" />
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
          <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
     </head>

     <body>
          <div class="page d-flex">
               <div class="sidebar bg-white p-20 p-relative">
                    <h3 class="p-relative txt-c mt-0"> Welcome <?php echo $_SESSION['name']; ?></h3>
                    <ul>
                         <li>
                              <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="home.php">
                                   <i class="fa-regular fa-chart-bar fa-fw"></i>
                                   <span>Dashboard</span>
                              </a>
                         </li>
                         <li>
                              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="insert_cours.php">
                                   <i class="fa-regular fa-file fa-fw"></i>
                                   <span>Ajouter Un cours</span>
                              </a>
                         </li>

                         <li>
                              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="courses.php">
                                   <i class="fa-solid fa-graduation-cap fa-fw"></i>
                                   <span>Courses</span>
                              </a>
                         </li>
                         <li>
                              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="insert_article.php">
                                   <i class="fa-regular fa-file fa-fw"></i>
                                   <span>Ajouter Un Article</span>
                              </a>
                         </li>
                         <li>
                              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="articles.php">
                                   <i class="fa-regular fa-file fa-fw"></i>
                                   <span> Article</span>
                              </a>
                         </li>


                         <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="logout.php">
                              <i class="fa-regular fa-credit-card fa-fw"></i>
                              <span> Logout</span>
                         </a>
                         </li>
                    </ul>
               </div>
               <div class="content w-full">
                    <!-- Start Head -->
                    <div class="head bg-white p-15 between-flex">
                         <div class="search p-relative">
                              <input class="p-10" type="search" placeholder="Type A Keyword" />
                         </div>
                         <div class="icons d-flex align-center">
                              <span class="notification p-relative">
                                   <i class="fa-regular fa-bell fa-lg"></i>
                              </span>
                              <img src="imgs/avatar.png" alt="" />
                         </div>
                    </div>
                    <!-- End Head -->
                    <h1 class="p-relative">Dashboard</h1>
                    <div class="wrapper d-grid gap-20">
                         <!-- Start Welcome Widget -->
                         <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
                              <div class="intro p-20 d-flex space-between bg-eee">
                                   <div>
                                        <h2 class="m-0">Welcome</h2>
                                        <p class="c-grey mt-5"> <?php echo $_SESSION['name']; ?></p>
                                   </div>
                                   <img class="hide-mobile" src="imgs/welcome.png" alt="" />
                              </div>
                              <img src="imgs/avatar.png" alt="" class="avatar" />
                              <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                                   <div> <?php echo $_SESSION['name']; ?><span class="d-block c-grey fs-14 mt-10">Professeur</span></div>

                              </div>

                         </div>
                         <!-- End Welcome Widget -->


                         <!-- Start Ticket Widget -->
                         <div class="tickets p-20 bg-white rad-10">
                              <h2 class="mt-0 mb-10">Site Statistics</h2>
                              <p class="mt-0 mb-20 c-grey fs-15">Math Faressi</p>
                              <div class="d-flex txt-c gap-20 f-wrap">
                                   <div class="box p-20 rad-10 fs-13 c-grey">
                                        <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                                        <?php
                                        $sql = "SELECT COUNT(pdf) AS total_pdf FROM pdf_file";

                                        $result = mysqli_query($conn, $sql);

                                        $data = mysqli_fetch_assoc($result);
                                        ?>
                                        <span class="d-block c-black fw-bold fs-25 mb-5"><?php echo $data['total_pdf'] ?></span>
                                        Total des Fichiers pdf
                                   </div>
                                   <?php
                                   $sql = "SELECT COUNT(pdf) AS total_TP FROM pdf_file WHERE coursType = 'TP' ";

                                   $result = mysqli_query($conn, $sql);

                                   $data = mysqli_fetch_assoc($result);
                                   ?>
                                   <div class="box p-20 rad-10 fs-13 c-grey">
                                        <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                                        <span class="d-block c-black fw-bold fs-25 mb-5"><?php echo $data['total_TP'] ?></span>
                                        total des TP
                                   </div>
                                   <?php
                                   $sql = "SELECT COUNT(pdf) AS total_cours FROM pdf_file WHERE coursType = 'cours' ";

                                   $result = mysqli_query($conn, $sql);

                                   $data = mysqli_fetch_assoc($result);
                                   ?>
                                   <div class="box p-20 rad-10 fs-13 c-grey">
                                        <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
                                        <span class="d-block c-black fw-bold fs-25 mb-5"><?php echo $data['total_cours'] ?></span>
                                        Total des Cours
                                   </div>

                              </div>
                         </div>
                         <!-- End Ticket Widget -->


                    </div>
               </div>
     </body>

     </html>
<?php
} else {
     header("Location: index.php");
     exit();
}
?>