<!DOCTYPE html>
<html lang="en">
<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <?php
     include 'db_conn.php';
     $sql = "SELECT * from pdf_file";
     $query = mysqli_query($conn, $sql);
     ?>

     <head>
          <meta charset="UTF-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
          <title>Courses</title>
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
                    <h3 class="p-relative txt-c mt-0"> <?php echo $_SESSION['name']; ?></h3>
                    <ul>
                         <li>
                              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="home.php">
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
                              <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="courses.html">
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
                              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="insert_article.php">
                                   <i class="fa-regular fa-file fa-fw"></i>
                                   <span> Article</span>
                              </a>
                         </li>


                         <li>
                              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="logout.php">
                                   <i class="fa-regular fa-credit-card fa-fw"></i>
                                   <span>Logout</span>
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
                    <h1 class="p-relative">Courses</h1>
                    <div class="courses-page d-grid m-20 gap-20">
                         <?php


                         $sql = "SELECT * FROM pdf_file ";
                         $query = mysqli_query($conn, $sql);
                         while ($info = mysqli_fetch_array($query)) {
                         ?>
                              <div class="course bg-white rad-6 p-relative">
                                   <img class="cover" src="screen/<?= $info['image_url'] ?>" alt="MATHFARESSI" />
                                   <img class="instructor" src="imgs/course-01.jpg" alt="MATHFARESSI" />
                                   <div class="p-20">
                                        <h4 class="m-0"><?php echo $info['Titre_cours']; ?></h4>
                                        <p class="description c-grey mt-15 fs-14">
                                             <?php echo $info['Date']; ?>
                                        </p>
                                        <a href="coursdelete.php?id=<?php echo $info['id']; ?>">
                                             <span class="title bg-blue c-white btn-shape">supprimer</span>
                                        </a>
                                   </div>

                              </div>

                         <?php
                         }

                         ?>








                    </div>
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