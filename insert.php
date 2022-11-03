<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Insert PDF</title>
  <style media="screen">
    div {
      border: 2px solid black;
      width: 500px;
      margin-left: 370px;
      margin-top: 50px;
      padding: 30px;
    }

    form {
      margin-left: 70px;
    }

    label {
      font-size: 25px;
      font-weight: bold;
    }

    #pdf {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
    }

    #upload {
      font-size: 20px;
      font-weight: bold;
      margin-left: 100px;
    }
  </style>
</head>

<body>
  <div class="">
    <form class="" action="insert.php" method="post" enctype="multipart/form-data">
      <label for="">Choose Your PDF File</label><br>
      <input id="pdf" type="file" name="pdf" value="" required><br><br>
      <input id="pdf" type="txt" name="titre_cours" value="" required><br><br>
      <label for="cars">Choose type cours:</label>

      <select name="coursType" id="cars">
        <option value="TP">TP</option>
        <option value="cours">COURS</option>
        <option value="corrige">corrigés</option>

      </select>
      <input id="upload" type="submit" name="submit" value="Upload">
      Image :<br>
      <input type="file" name="my_image" accept="image/png, image/jpeg" required>
      <br>

      <?php
      include 'db.php';

      if (isset($_POST['submit'])  && isset($_FILES['my_image'])) {
        $pdf = $_FILES['pdf']['name'];
        $titre = $_POST['titre_cours'];
        $typeCours = $_POST['coursType'];
        $pdf_type = $_FILES['pdf']['type'];
        $pdf_size = $_FILES['pdf']['size'];
        $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
        $pdf_store = "pdf/" . $pdf;
        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        if ($img_size > 2000000) {
          $em = "inserer une image correct";
          header("Location: display_pdf.php?error=$em");
        } else {
          $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
          $img_ex_lc = strtolower($img_ex);

          $allowed_exs = array("jpg", "jpeg", "png");


          if (in_array($img_ex_lc, $allowed_exs)) {
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;

            $img_upload_path = 'screen/' . $new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            // Insert into Database





            move_uploaded_file($pdf_tem_loc, $pdf_store);

            $sql = "INSERT INTO pdf_file(pdf,image_url,titre_cours,coursType) values('$pdf','$new_img_name','$titre','$typeCours')";
            $query = mysqli_query($conn, $sql);
            header("Location: display_pdf.php");
          } else {
            $em = "You can't upload files of this type";
            header("Location: display_pdf.php?error=$em");
          }
        }
      }



      ?>

    </form>

  </div>

</body>

</html>