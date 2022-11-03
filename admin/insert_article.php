<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ajouter un cours</title>
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
                        <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="insert_cours.php">
                            <i class="fa-regular fa-file fa-fw"></i>
                            <span>Ajouter un cours</span>
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
                            <i class="fa-solid fa-graduation-cap fa-fw"></i>
                            <span>ajouter article</span>
                        </a>
                    </li>
                    <li>
                        <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="articles.php">
                            <i class="fa-solid fa-graduation-cap fa-fw"></i>
                            <span>articles</span>
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
                <div class="p-20 bg-white rad-10">
                    <form class="" action="insert_article.php" method="post" enctype="multipart/form-data">
                        <h2 class="mt-0 mb-10">General Info</h2>
                        <p class="mt-0 mb-20 c-grey fs-15">Information General d'article</p>
                        <div class="mb-15">
                            <label class="fs-14 c-grey d-block mb-10" for="first">Titre d'article</label><br>
                            <input class="b-none border-ccc p-10 rad-6 d-block w-full" id="titre" type="txt" name="titre" value="" required><br><br>
                        </div>
                        <div class="mb-15">
                            <label class="fs-14 c-grey d-block mb-10" for="first">Objectif</label><br>
                            <input class="b-none border-ccc p-10 rad-6 d-block w-full" id="objectif" type="txt" name="objectif" value="" required>
                        </div>

                        <div class="mb-15">
                            <label class="fs-14 c-grey d-block mb-10" for="first">choisi une image pour le cours</label><br>
                            <input class="b-none border-ccc p-10 rad-6 d-block w-full" type="file" name="my_image" accept="image/png, image/jpeg" required>
                        </div>
                        <div class="mb-15">
                            <label class="fs-14 c-grey d-block mb-10" for="first">texte</label><br>
                            <textarea class="b-none border-ccc p-10 rad-6 d-block w-full" id="objectif" type="txt" name="texte" value="" required></textarea>
                        </div>
                        <input id="upload" class="button bg-blue c-white btn-shape" type="submit" name="submit" value="Upload">


                        <?php
                        include 'db_conn.php';

                        if (isset($_POST['submit'])  && isset($_FILES['my_image'])) {

                            $titre = $_POST['titre'];
                            $objectif = $_POST['objectif'];
                            $texte = $_POST['texte'];



                            $img_name = $_FILES['my_image']['name'];
                            $img_size = $_FILES['my_image']['size'];
                            $tmp_name = $_FILES['my_image']['tmp_name'];
                            $error = $_FILES['my_image']['error'];

                            if ($img_size > 2000000) {
                                $em = "inserer une image correct";
                            } else {
                                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                $img_ex_lc = strtolower($img_ex);

                                $allowed_exs = array("jpg", "jpeg", "png");


                                if (in_array($img_ex_lc, $allowed_exs)) {
                                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;

                                    $img_upload_path = 'article/' . $new_img_name;
                                    move_uploaded_file($tmp_name, $img_upload_path);

                                    // Insert into Database







                                    $sql = "INSERT INTO article(titre,objectif,image_url,texte) values('$titre','$objectif','$new_img_name','$texte')";
                                    $query = mysqli_query($conn, $sql);
                                    echo "<script>alert('article Ajouter');</script>";
                                } else {
                                    $em = "You can't upload files of this type";
                                }
                            }
                        }



                        ?>

                    </form>

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