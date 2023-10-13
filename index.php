<?php
session_start();
include('db_connect.php');

$alltimeresponse = mysqli_query($connect, "SELECT * FROM research_data");
$counter = mysqli_num_rows($alltimeresponse);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="assets/css/unpkg.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="icon" type="image/x-icon" href="./images/Logo2.png" />
  <link rel="stylesheet" type="text/css" href="assets/css/all.css">
  <link rel="stylesheet" href="assets/css/table.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <title>Sentiment Analysis Dashboard</title>
  <style>
    .th_comments {
      width: 40%;
      text-align: start;
      font-size: 18px;
      font-weight: 500;
      border-top-left-radius: 5px !important;
    }

    .th_recom {
      width: 40%;
      text-align: start;
      font-size: 18px;
      font-weight: 500;
    }

    .th_sent {
      width: 20%;
      font-size: 18px;
      font-weight: 500;
      text-align: center;
      border-top-right-radius: 5px !important;
    }

    .tb_wrap {
      height: 60px;
      font-size: 13px;

    }

    .tb_sent {
      text-align: center;
      /* padding-top: 10px; */
      padding-top: 20px !important;
    }

    .tb_com {
      text-align: start;
      border-radius: 5px !important;
      padding-top: 15px !important;
    }

    .tb_rec {
      text-align: start;
      border-radius: 5px !important;
      padding-top: 15px !important;
    }

    .complimentcomment {
      color: green !important;
      border: solid 1px green !important;
      border-radius: 5px !important;
      padding: 5px;
    }

    .suggestioncomment {
      color: #FF8D29 !important;
      border: solid 1px #FF8D29 !important;
      border-radius: 5px !important;
      padding: 5px;
    }

    .complaintcomment {
      color: red !important;
      border: solid 1px red !important;
      border-radius: 5px !important;
      padding: 5px;
    }
  </style>
</head>

<body>

  <?php include('includes/container.php') ?>
  <script src="assets/scripts/unpkg.js"></script>
  <script src="assets/scripts/chart.js"></script>
  <script src="assets/scripts/jquery.js"></script>
  <script src="assets/scripts/plugginsChart.js"></script>
  <script src="assets/scripts/carousel.js"></script>
  <script src="assets/scripts/sweetalert.js"></script>
  <script src="assets/scripts/project.js"></script>
  <script src="assets/scripts/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <!-- <script src="assets/scripts/tippy.js"></script>
  <script src="assets/scripts/popper.js"></script> -->
  <script src="assets/scripts/main.js"></script>

  <?php include('assets/scripts/sessiondone.php') ?>
  <script>
    <?php
    if (isset($_SESSION['errordata'])) { ?>
      let errors = <?= $_SESSION['errordata'] ?>;

      // console.log(errors);
    <?php }
    ?>
  </script>
</body>

</html>