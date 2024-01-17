<?php
$connection = mysqli_connect("localhost", "root", "", "checklist");


if (isset($_POST['yearbtn'])) {
    $year = $_POST["year"];



  $query = "INSERT INTO checklist (year) VALUES ('$year')";
  $query_run = mysqli_query($connection, $query);

  if ($query_run) {
    //echo "Saved";
    header('Location: form_page.php');
  } else {
    echo 'Please select a year';
    header('Location: index.php');
    exit();

  }

}

