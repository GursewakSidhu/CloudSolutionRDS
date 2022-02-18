<!DOCTYPE html>
<html>
  <head>
    <title>Amazon Web Services</title>
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

	<div class="row">
		<div class="col-md-12">
      <?php include('menu.php'); ?>

			<div class="jumbotron">

      <?php
        include 'rds.conf.php';

        if ($RDS_URL == "") {
          include 'rds-config.php';
        }
        else {
          include 'rds-read-data.php';
        }

      ?>
    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->
<script src="js/scripts.js"></script>

</body>
</html>
